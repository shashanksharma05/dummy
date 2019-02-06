<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function get_user_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return explode(',',$ipaddress)[0];
    }
    public function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; 
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; 
        $bits = (int) $log + 1; 
        $filter = (int) (1 << $bits) - 1; 
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; 
        } while ($rnd > $range);
        return $min + $rnd;
    }
    public function getToken($length=16)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet);
        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
        }
        return $token;
    }
    public function check_search_contact(){
        $ip = $this->get_user_ip(); 
        $token = $this->session->token;
        $this->db->where('IP', $ip);
        $this->db->where('Token',$token);
        $check = $this->db->count_all_results('guests');
        if($check){
            return true;
        }else{
            return false;
        }
    }
    public function get_search_result($type='') {
        $svalue = $this->input->get('value');
        if($type == 'company')
        {
            //$company1 = array(explode($company," "));
            $this->db->limit(5);
        	$this->db->select('ID,company_name,date_of_incorporation,state,ROC');
            $this->db->where("status = 'active' AND (company_name LIKE '%$svalue%')");
            return $this->db->get('indian_company')->result_array();
        }else if($type == 'trademark')
        {
            $class = $this->db->select('ID, packageName, packageClass, packagePrice, packageTax, packageFee, packageTotalPrice, packageType, ImagePath')->get_where('packages', "packageType = 'Trademark'")->result_array();
            $registered_class = $this->db->select('*')->group_by('Class')->get_where('trademarks', "Trademark LIKE '%$svalue%'")->result_array();
            if(!empty($class))
            {
                foreach($class as $key => $value)
                {
                    if(!empty($registered_class))
                    {
                        $package = false;
                        foreach ($registered_class as $key1 => $value1) {
                            if($value['packageClass']==$value1['Class'])
                            {
                                $package = true;
                                $value1['packageName']  = $value['packageName'];
                                break;
                            }
                        }
                        if($package==true){
                            $data['similar'][] = $value1;
                        }else{
                            $data['available'][] = $value;
                        }
                    }
                    else
                    {
                        $data['available'][] = $value;
                    }
                }
               //echo '<pre>'; print_r($data); die;
                return $data;
            }
            else
            {
                return false;
            }
        }
    }
    public function fetch_account()
    {
       $userid = $this->session->vakil_user_id;
        if($userid){
            $this->db->where('ID', $userid);
            $get = $this->db->get('customers')->row();
            unset($get->Password);
            return $get;
        }else{
            return false;
        }
    }
    public function fetch_orders() 
    {
        $page = $this->input->get('page');
        $userid = $this->session->vakil_user_id;
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 3;
        $offset = ($page - 1)  * $limit;
        $this->db->select('customers.Name,customers.Photo,guests.*,payments.AmountPay,payments.PaymentMethod,orders.*');
        $this->db->join('guests','guests.ID=orders.GuestID');
        $this->db->join('customers','customers.ID=orders.UserID');
        $this->db->join('payments','payments.OrderID=orders.ID');
        $this->db->where('orders.UserID', $userid);
        $this->db->order_by('orders.ID', 'DESC');  
        $this->db->limit($limit, $offset);
        $this->db->order_by('orders.ID','DESC');
        $res['list'] = $this->db->get('orders')->result();
        $this->db->where('orders.UserID', $userid);
        $total = $this->db->count_all_results('orders');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;
        return $res;
    }
    public function get_packages($type='') {
        $this->db->where('status', 1);
        $this->db->like('packageType', $type);
        $res = $this->db->get('packages')->result_array();

        if(!empty($res)){

            foreach ($res as $key => $value) {
                $userid = $this->session->vakil_user_id;
                if($userid){
                    $this->db->where('UserID', $userid);
                }else{
                    $ip = $this->get_user_ip(); 
                    if($this->session->token){
                        $token = $this->session->token;
                    }else{
                        $token = $this->getToken();
                        $this->session->set_userdata('token',$token);
                    }
                    $this->db->where('IP', $ip);
                    $this->db->where('Token', $token);
                }
                $this->db->where('PackageID', $value['ID']);
                if($this->db->count_all_results('carts')){
                    $res[$key]['cart'] = 'active';

                }
            }
        }
        return $res;
    }
    public function get_packages_detail($id='') {
        $this->db->where('status', 1);
        $this->db->where('ID', $id);
        $res = $this->db->get('packages')->row_array();
        return $res;
    }
    public function fetch_services(){
        $types = array('Company','Trademark Non Class','Copyright','Patent','Legal Documentation','Mandatory Compliances');
        $services = array();
        foreach ($types as $key => $type) {
            $this->db->where('packageType',$type);
            $this->db->where('Status',1);
            $get = $this->db->get('packages')->result_array();
            if($key==0){
                $serviceName = 'Start a business';
            }else if($key==1){
                $serviceName = 'Trademark';
            }else{
                $serviceName = $type;
            }
            $services[] = array('serviceName'=>$serviceName,'services'=>$get);
        }
        return $services;
    }
    public function addtocart($name='',$id='',$type='') {

        $this->db->where('ID', $id);
        if($this->db->count_all_results('packages')){
            if($this->session->token){
                $token = $this->session->token;
            }else{
                $token = $this->getToken();
                $this->session->set_userdata('token',$token);
            }
            $userid = $this->session->vakil_user_id;
            if($type=='company'){
                $type = 'Company';
            }else{
                $type = 'Trademark';
            }
            if($userid){
                $this->db->where('UserID', $userid);
            }else{
                $ip = $this->get_user_ip(); 
                $this->db->where('IP', $ip);
                $this->db->where('Token', $token);
            }
            $this->db->where('PackageID', $id);
            if($this->db->count_all_results('carts')){
                return 'This item has already added in your cart.';
            }
            $cart['UserID'] = !empty($userid)?$userid:0;
            $cart['IP'] = $this->get_user_ip();
            $cart['Token'] = $token;
            $cart['Keyword'] = $name;
            $cart['Type'] = $type;
            $cart['PackageID'] = $id;
            $cart['DateAdded'] = time();
            //echo '<pre>'; print_r($cart); die;
            if($this->db->insert('carts',$cart)){
                return $this->fetch_cart_html();
            }else{
                return 'An error occur while an item add to cart. Please Try again or refresh the current page.';
            }
        }else{
            return 'Something went wrong with the input please refresh the current page.';
        }
    }
    public function add_package_to_cart($package=''){
        if($this->session->token){
            $token = $this->session->token;
        }else{
            $token = $this->getToken();
            $this->session->set_userdata('token',$token);
        }
        $userid = $this->session->vakil_user_id;
        if($userid){
            $this->db->where('UserID', $userid);
        }else{
            $ip = $this->get_user_ip(); 
            $this->db->where('IP', $ip);
            $this->db->where('Token', $token);
        }
        $package = $package->row_array();
        //print_r($package); die;
        $id = $package['ID'];$type = $package['packageType'];
        $this->db->where('PackageID', $id);
        if($this->db->count_all_results('carts')){
            return true;
        }
        if($type!='Company' && $type!='Trademark'){
            $Keyword = $package['packageName'];
        }else{
            $Keyword = '';
        }
        $cart['UserID'] = !empty($userid)?$userid:0;
        $cart['IP'] = $this->get_user_ip();
        $cart['Token'] = $token;
        $cart['Keyword'] = $Keyword;
        $cart['Type'] = $type;
        $cart['PackageID'] = $id;
        $cart['DateAdded'] = time();
        //echo '<pre>'; print_r($cart); die;
        if($this->db->insert('carts',$cart)){
            return true;
        }else{
            return false;
        }
    }
    public function update_cart($user_ip='') {
        if($this->session->token){
            $token = $this->session->token;
        }else{
            $token = $this->getToken();$this->session->set_userdata('token',$token);
        }
        $userid = $this->session->vakil_user_id;
        $this->db->where('Token',$token);
        $this->db->update('carts',array('UserID'=>$userid));
        return true;
    }

    public function fetch_cart() {
        $userid = $this->session->vakil_user_id;
        $this->db->select('carts.*,packages.packageName,packages.packageClass,packages.packageTotalPrice,packages.packageType');
        $this->db->join('packages',"packages.ID = carts.PackageID");
        if($userid){
            $this->db->where('carts.UserID', $userid);
        }else{
            $ip = $this->get_user_ip(); 
            if($this->session->token){
                $token = $this->session->token;
            }else{
                $token = $this->getToken();$this->session->set_userdata('token',$token);
            }
            //$this->db->where('carts.IP', $ip);
            $this->db->where('carts.Token', $token);
        }
        $this->db->where('packages.Status', 1);
        $res = $this->db->get('carts')->result_array();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public function fetch_badge_cart() {
        $userid = $this->session->vakil_user_id;
        if($userid){
            $this->db->where('carts.UserID', $userid);
        }else{
            if($this->session->token){
                $token = $this->session->token;
            }else{
                $token = $this->getToken();
                $this->session->set_userdata('token',$token);
            }
            $this->db->where('carts.Token', $token);
        }
        return $this->db->count_all_results('carts');
    }

    public function fetch_cart_html() {
        $userid = $this->session->vakil_user_id;
        $this->db->select('carts.*,packages.packageName,packages.packageClass,packages.packageTotalPrice,packages.packageType');
        $this->db->join('packages',"packages.ID = carts.PackageID");
        if($userid){
            $this->db->where('carts.UserID', $userid);
        }else{
            $ip = $this->get_user_ip(); 
            if($this->session->token){
                $token = $this->session->token;
            }else{
                $token = $this->getToken();
                $this->session->set_userdata('token',$token);
            }
            $this->db->where('carts.IP', $ip);
            $this->db->where('carts.Token', $token);
        }
        $this->db->where('packages.Status', 1);
        $res = $this->db->get('carts')->result_array();
        if($res){
            $TotalPrice = 0;
            foreach ($res as $val) {
                $TotalPrice = $TotalPrice+$val['packageTotalPrice'];
            }
            $html = '<h3 style="margin: 0px;">Total</h3>
                        <div>Inclusive of all taxes</div>';
            $html.= '<h3 class="text-right" style="font-size: 1.6em">Rs.'.$TotalPrice.'</h3>';
            foreach ($res as $value) {
                if($value['Type']=='Company'){
                    $html .= '<strong>'.$value['Keyword'].'</strong> '.$value['packageName'];
                }else{
                    $html .= '<strong>'.$value['Keyword'].'</strong> Trademark Class '.$value['packageClass'];
                }
                $html .= '<br>Rs.'.$value['packageTotalPrice'].'
                        <a href="javascript:void(0)" class="text-danger remove small" data-id="'.$value['PackageID'].'">Remove item</a>         
                        <hr style="margin: 10px">';
            }
            $html .= '<div class="text-right">
                        <a href="'.base_url('checkout/detail').'" class="btn btn-orange">Checkout <span class="glyphicon glyphicon-play"></span></a>  
                      </div>';
            return $html;
        }else{
            return '<h4 class="text-center">Your cart is empty</h4>';
        }
    }

    public function removecart($id=''){
        $userid = $this->session->vakil_user_id;
        if($userid){
            $this->db->where('carts.UserID', $userid);
        }else{
            $ip = $this->get_user_ip(); 
            $token = $this->session->token;
            $this->db->where('carts.IP', $ip);
            $this->db->where('carts.Token', $token);
        }
        $this->db->where('PackageID', $id);
        if($this->db->delete('carts')){
            return $this->fetch_cart_html();
        }else{
            return 'error';
        }
    }
    public function removecartfromcheckout($id=''){
        $userid = $this->session->vakil_user_id;
        if($userid){
            $this->db->where('carts.UserID', $userid);
        }else{
            $ip = $this->get_user_ip(); 
            $token = $this->session->token;
            $this->db->where('carts.IP', $ip);
            $this->db->where('carts.Token', $token);
        }
        $this->db->where('PackageID', $id);
        if($this->db->delete('carts')){
            $carts = $this->fetch_cart();
            $TotalPrice = 0;
            if(!empty($carts)){
                foreach ($carts as $cart) {
                    $TotalPrice = $TotalPrice+$cart['packageTotalPrice'];
                }
            }
            return $TotalPrice;
        }else{
            return 'error';
        }
    }
    public function insert_contact_detail(){
        $post = $this->input->post();
        if($this->session->guestid){
            return $this->session->guestid;
        }else if($post){
            $data['Name'] = !empty($post['Name'])?$post['Name']:$this->session->vakil_user_name;
            $data['Email'] = !empty($post['Email'])?$post['Email']:$this->session->vakil_user_email;
            $data['Phone'] = !empty($post['Phone'])?$post['Phone']:'';
            $data['Address'] = !empty($post['Address'])?$post['Address']:'';
            $data['City'] = !empty($post['City'])?$post['City']:'';
            $data['State'] = !empty($post['State'])?$post['State']:'';
            $data['Pincode'] = !empty($post['Pincode'])?$post['Pincode']:'';
            $data['Country'] = !empty($post['Country'])?$post['Country']:'India';
            $this->db->insert('guests',$data);
            $guestid = $this->db->insert_id();
            if($this->session->vakil_user_id){
                unset($data['Name']);unset($data['Email']);
                $this->db->where('ID',$this->session->vakil_user_id);
                $this->db->update('customers',$data);
            }
            $this->session->set_userdata('guestid',$guestid);
            return $guestid;
        }else{
            redirect('checkout/detail');
        }
    }

    public function create_order($carts=''){
        if(!empty($carts)){
            $orderDetails = array();
            foreach ($carts as $cart) {
                $package_id = $cart['PackageID'];
                $this->db->where('ID',$package_id);
                $package = $this->db->get('packages')->row_array();
                if(!empty($package)){
                    $package['Keyword'] = $cart['Keyword'];unset($package['Description']);unset($package['ImagePath']);
                    unset($package['DateAdded']);unset($package['DateUpdate']);unset($package['Status']);
                    $orderDetails[] = $package;
                    $this->removecartfromcheckout($package_id);
                }
            }
            if(!empty($orderDetails)){
                $userid = !empty($this->session->vakil_user_id)?$this->session->vakil_user_id:0;
                $guestid = !empty($this->session->guestid)?$this->session->guestid:0;
                $order = array('OrderID' => '','UserID' => $userid, 'GuestID'=> $guestid,'OrderDetails'=>json_encode($orderDetails,true),'OrderDate'=>time(),'OrderStatus'=>'Confirmed');
                $this->db->insert('orders',$order);
                $orderid = $this->db->insert_id();
                $this->session->unset_userdata('guestid');
                $this->db->where('ID',$orderid);
                $this->db->update('orders',array('OrderID'=>'#CV'.$guestid.'000'.$orderid));
                return $orderid;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function fetch_order_data($orderid=''){
        $this->db->select('orders.*,guests.*,payments.AmountPay');
        $this->db->join('guests','guests.ID=orders.GuestID');
        $this->db->join('payments','payments.OrderID=orders.ID');
        $this->db->where('orders.ID',$orderid);
        $order = $this->db->get('orders')->row_array();
        if(!empty($order)){
            $order['OrderDetails'] = json_decode($order['OrderDetails'],true);
            return $order;
        }else{
            return false;
        }
    }

    public function updateAddress($post=''){
        $userid = $this->session->vakil_user_id;
        if(!empty($post['Phone'])){
            $phone = $post['Phone'];
            $get = $this->db->select('Phone')->get_where('customers',"ID = $userid")->row_array();
            if($get){
                $oldphone = $get['Phone'];
                if($oldphone!=$phone){
                    $data['Phone'] = $post['Phone'];
                    $data['VerifyPhone'] = 0;
                    $this->session->set_flashdata('success','Your phone has been updated successfully.');
                }
            }
        }else{
            $data['Address'] = !empty($post['Address'])?$post['Address']:'';
            $data['City'] = !empty($post['City'])?$post['City']:'';
            $data['State'] = !empty($post['State'])?$post['State']:'';
            $data['Pincode'] = !empty($post['Pincode'])?$post['Pincode']:'';
            $data['Country'] = 'India';
            $this->session->set_flashdata('success','Your address has been updated successfully.');
        }
        $data['UpdateTime'] = time();
        $this->db->where('ID',$userid);
        $this->db->update('customers',$data);
        redirect('user/account');
    }

    public function pageMeta($name='')
    {
        $this->db->select("name,title,description,keywords,package_title,short_title,package,package_content,timeline,section1,section2,section3,section4,section5,Status");
        $query = $this->db->get_where("page_meta","name = '$name'");

        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
        else
        {
            return array("name"=>$name,"title"=>"","description"=>"","keywords"=>"");
        }
    }

    public function getAllPageList($from="")
    {
        if($from=="all"){
            return $this->db->get_where("page_meta","Status=1")->result();
        }else{
            return $this->db->get_where("page_meta","page_meta_id > 20 AND Status=1")->result();
        }
    }

}
