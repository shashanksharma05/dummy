<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('admin_model');             
    }
    
    function index(){
        redirect('admin/login');
    }
    public function login(){
    	if ($this->session->userdata('vakil_admin_id'))
            redirect('dashboard');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('', '');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $data = $this->admin_model->getAdminLogin($username, $password);            
            //echo "<pre>"; print_r($data); die;
            if ($data) {
                $this->session->set_userdata('vakil_admin_id', $data->id);
                $this->session->set_userdata('vakil_admin_data', $data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('msg', "Username or Password did not matched");
                $data['msg'] = 'Username and Password did not matched.';                
            }            
        }
		//$this->load->view('admin/include/header',$data);
        $this->load->view('admin/login',$data);
        //$this->load->view('admin/include/footer',$data);
	}

	public function logout(){
		$this->session->unset_userdata('vakil_admin_id');
		$this->session->unset_userdata('vakil_admin_data');
		redirect(base_url('admin/login'));
	}

    public function change_password() {

        $this->form_validation->set_rules('currentpassword', 'Current Password', 'trim|required|callback_oldpassword_check', array(
                    'oldpassword_check' => 'Old Password Mismatch.'
            ));
        $this->form_validation->set_rules('newpassword', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[newpassword]');

        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');
        
        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'password' => md5($this->input->post('newpassword'))
            );
            $id = $this->session->userdata('admin_id');
            $this->login_model->updatePassword($id, $data);
            $this->session->set_flashdata('success', "Password Changed Successfully.");
            redirect(base_url('setting'));
        }
        $data['settingData'] = $this->setting_model->getAllSettingList();

        $data['view']       = 'setting/setting';
        $data['page']       = 'setting'; $data['page2'] = 'password';
        $data['title']      = 'Change Password - CompanyVakil Admin Panel';
        $this->load->view('admin_master', $data);
    }

    public function oldpassword_check($old_password) {
       $old_password_hash = md5($old_password);
       $id = $this->session->userdata('admin_id');
       $old_password_db_hash = $this->db->get_where('admin_master',array('id' => $id))->row();

       if($old_password_hash != $old_password_db_hash->password) {
          return FALSE;
       } 
       return TRUE;
    }

    public function dashboard(){
        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');
        $data['tUsers']     = $this->db->count_all('customers');
        $data['torders']     = $this->db->count_all('orders');
        $data['tcarts']     = $this->db->count_all('carts');
        $this->db->select('SUM(AmountPay) as total');
        $data['INROrder']  = $this->db->get('payments')->row();
        $this->db->where('packageType', 'Company');      
        $data['cpackages']   = $this->db->count_all_results('packages');
        $this->db->where('packageType', 'Trademark');    
        $data['tpackages']   = $this->db->count_all_results('packages');
        $data['tcompany']   = 1789943;//$this->db->count_all('indian_company');
        $data['trademark']   = $this->db->count_all('trademarks');
        $data['users'] = $this->recentUsers();
        $data['orders'] = $this->recentOrders();

        $data['page']       = 'dashboard';
        $data['title']      = 'Dashboard | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function recentUsers(){
        $this->db->select('ID,Name,Email,Phone,Photo,SignupBy,CreateTime,Status');
        $this->db->order_by('ID', 'DESC');  
        $this->db->from('customers');
        $this->db->limit('5');
        $query = $this->db->get();
        return $query->result();
    }

    public function recentOrders(){
        $this->db->select('customers.Name,customers.Photo,orders.*,guests.*,payments.AmountPay');
        $this->db->join('guests','guests.ID=orders.GuestID');
        $this->db->join('customers','customers.ID=orders.UserID');
        $this->db->join('payments','payments.OrderID=orders.ID');
        $this->db->order_by('orders.ID', 'DESC');  
        $this->db->limit('5');
        $orders = $this->db->get('orders')->result();
        if(!empty($orders)){
            foreach ($orders as $key => $value) {
                $orders[$key]->OrderDetails = json_decode($value->OrderDetails,true);
            }
            return $orders;
        }else{
            return false;
        }
    }

    public function users() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');
        
        $data['userData'] = $this->admin_model->getAllUserList();
        
        $data['page']  = 'users';
        $data['title'] = 'All User Listing | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/user_list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function guests() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');
        
        $data['userData'] = $this->admin_model->getAllGuestList();
        
        $data['page']  = 'guests';
        $data['title'] = 'All Guest User Listing | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/guest_list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function carts() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');
        
        $data['userData'] = $this->admin_model->getAllCartList();
        
        $data['page']  = 'carts';
        $data['title'] = 'All User Carts Listing | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/cart_list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function orders() {

        if (!$this->session->userdata('vakil_admin_id'))
           redirect('admin/login');
        
        $data['orderData'] = $this->admin_model->getAllOrderList();
        
        $data['page']  = 'orders';
        $data['title'] = 'All User Orders | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/order-list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function orderDetails()
    {

        if (isset($_POST['id'])) {
            $orderid = $this->input->post('id');
            $this->db->select('customers.Name,orders.*,guests.*,payments.*');
            $this->db->join('guests','guests.ID=orders.GuestID');
            $this->db->join('customers','customers.ID=orders.UserID');
            $this->db->join('payments','payments.OrderID=orders.ID');
            $this->db->where('orders.ID',$orderid);
            $order = $this->db->get('orders')->row_array();
            $orderDetails = json_decode($order['OrderDetails'],true);
            $PaymentDetails = json_decode($order['PaymentDetails'],true);
            if(!empty($orderDetails)){
                echo '<table class="table table-striped table-centered m-0">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Package</th>
                                <th>Type</th>
                                <th>Class</th>
                                <th>Price</th>
                            </tr>';           
                foreach ($orderDetails as $key => $value) {
                        $Class = !empty($value['packageClass'])?$value['packageClass']:'-';
                        echo '<tr>
                                <td>'.($key+1).'.</td>
                                <td>'.$value['Keyword'].'</td>                            
                                <td>'.$value['packageName'].'</td>
                                <td>'.$value['packageType'].'</td>
                                <td>'.$Class.'</td>
                                <td>Rs.'.$value['packagePrice'].'</td>
                            </tr>';       
                } 
                echo    '</tbody>
                    </table>
                    <hr>
                    <div class="col-sm-6">
                        <p style="margin: 0;">Payment Id: <b class="h5">'.$PaymentDetails['id'].'</b></p>
                        <p style="margin: 0;">Payment Method: <b class="h5">'.$order['PaymentMethod'].'</b></p>
                        <p style="margin: 0;">Payment Date: <b class="h5">'.date('d, M Y',$PaymentDetails['created_at']).'</b></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-right" style="font-size: 18px;">Total Amount: <b class="h4">Rs.'.$order['AmountPay'].'</b></p>
                    </div>';

                }else{
                     echo '<center>Error in fetching order! Please try again later.</center>';
                }
        } else {
            echo '<center>No record found!</center>';
        }   
    }

    public function packages($type='') {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');
        $post = $this->input->post();
        //echo '<pre>'; print_r($type); die;
        if($post){
            $update = $this->admin_model->updatePackage($type);
        }
        $data['Data'] = $this->admin_model->getAllPackageList($type);
        
        $data['page']  = 'packages';$data['page2']  = $type;
        $data['title'] = 'All Packages for '.$type.' | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        if($type=='company'){
            $this->load->view('admin/package-list',$data);
        }else if($type=='trademark'){
            $this->load->view('admin/package-list-1',$data);
        }else if($type=='trademark-classes'){
            $this->load->view('admin/package-list-2',$data);
        }
        else if($type=='Copyright'){
            $this->load->view('admin/package-list-3',$data);
        }
        else if($type=='Patent'){
            $this->load->view('admin/package-list-4',$data);
        }
        else if($type=='Legal'){
            $this->load->view('admin/package-list-5',$data);
        }
        else{
            $this->load->view('admin/package-list-6',$data);
        }
        $this->load->view('admin/include/footer',$data);
    }

    public function actionPackage(){
        if ($this->session->userdata('vakil_admin_id')){
            $id = $this->input->post('id');$status = $this->input->post('status');
            if($status=='Inactive'){
                $status = 0;$text = 'Active';$label = '<span class="label label-danger">Inactive</span>';
                $class = 'text-success';
            }else{
                $status = 1;$text = 'Inactive';$label = '<span class="label label-success">Active</span>';
                $class = 'text-danger';
            }
            $this->db->where('ID',$id);
            $this->db->update('packages',array('Status'=>$status));
            $res['status'] = $label;
            $res['text'] = $text;$res['class'] = $class;
            echo json_encode($res);
        }else{
            echo false;
        }
    }
    public function replyContactMessage(){
         if ($this->session->userdata('vakil_admin_id')){
            $id = $this->input->post('id');$reply = $this->input->post('reply');
            $data['Reply'] = $reply;
            $data['UpdateOn'] = time();

            $this->db->where('ID',$id);
            $this->db->update('contacts',$data);

            $get = $this->db->where('ID',$id)->get('contacts');
            if($get->num_rows()>0){
                $user = $get->row_array();
                $subject = 'Thanks for reaching out - companyvakil.com';
                $html = 'Hi, '.$user['Name'].'<br><br><b>Thank you for contact us.</b><br><br><code style="background: #f1d0d0;padding: 3px;line-height: 20px;">'.$user['Message'].'</code><br><br>'.$user['Reply'].'<br><br>Thanks, <br>Team CompanyVakil';
                $this->load->library('mylibrary');
                $this->mylibrary->My_mail($user['Email'],$subject,$html);
                echo true;
            }
         }else{
            echo false;
        }
    }
    public function companies() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');

        $data['Data'] = $this->admin_model->getAllCompanyList();
        
        $data['page']  = 'companies';
        $data['title'] = 'All Companies | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/company-list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function trademarks() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');

        $data['Data'] = $this->admin_model->getAllTrademarkList();
        
        $data['page']  = 'trademarks';
        $data['title'] = 'All Trademarks | CompanyVakil Admin';

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/trademark-list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function pages() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');

        $post = $this->input->post();
        if($post){
            $update = $this->admin_model->updatePage();
        }

        $data['page']  = 'pages';
        $data['title'] = 'All Pages | CompanyVakil Admin';
        $data['Data'] = $this->admin_model->getAllPageList();
        $data['package'] = $this->admin_model->getAllPackageList();

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/page-list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function style() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');

        $post = $this->input->post();
        if($post){
            // $update = $this->admin_model->updatePage();
            if ( ! write_file('./assets/css/dynamic.css', $post['style'])){
                    echo 'Unable to write the file';
            }else{
                    echo 'File written!';
            }
            // print_r($post); die;
        }

        $data['page']  = 'style';
        $data['title'] = 'All Style | CompanyVakil Admin';
        // $data['Data'] = $this->admin_model->getAllPageList();
        // $data['package'] = $this->admin_model->getAllPackageList();
        $data['dynamic'] = read_file('./assets/css/dynamic.css');
        // print_r($data['dynamic']); die;

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/style',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function contact_messages() {

        if (!$this->session->userdata('vakil_admin_id'))
            redirect('admin/login');

        $post = $this->input->post();
        if($post){
            $update = $this->admin_model->reply_message();
        }

        $data['page']  = 'contacts';
        $data['title'] = 'All contact messages | CompanyVakil Admin';
        $data['Data'] = $this->admin_model->getAllMessageList();

        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/contact-list',$data);
        $this->load->view('admin/include/footer',$data);
    }

    public function actionPage(){
        if ($this->session->userdata('vakil_admin_id')){
            $id = $this->input->post('id');$status = $this->input->post('status');
            if($status=='Inactive'){
                $status = 0;$text = 'Active';$label = '<span class="label label-danger">Inactive</span>';
                $class = 'text-success';
            }else{
                $status = 1;$text = 'Inactive';$label = '<span class="label label-success">Active</span>';
                $class = 'text-danger';
            }
            $this->db->where('page_meta_id',$id);
            $this->db->update('page_meta',array('Status'=>$status));
            $res['status'] = $label;
            $res['text'] = $text;$res['class'] = $class;
            echo json_encode($res);
        }else{
            echo false;
        }
    }
}
