<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getAdminLogin($email, $pwd) {
        $this->db->where('username', $email);
        $this->db->where('password', $pwd);
        return $this->db->get('admin')->row();
    }

    public function updatePassword($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }

    public function getAllUserList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        if($search){
            $this->db->where("Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by('ID','DESC');
        $res['list'] = $this->db->get('customers')->result();

        if($search){
            $this->db->where("Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('customers');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    }    

    public function getAllGuestList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        
        if($search){
            $this->db->where("type != '' AND (Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%')");
        }else{
            $this->db->where("type != ''");
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by('ID','DESC');
        $res['list'] = $this->db->get('guests')->result();

        if($search){
            $this->db->where("type != '' AND (Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%')");
        }else{
            $this->db->where("type != ''");
        }
        $total = $this->db->count_all_results('guests');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    } 

    public function getAllCartList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        $this->db->select('carts.*,packages.packageName');
        $this->db->join('packages','packages.ID = carts.PackageID');
        if($search){
            $this->db->where("carts.Keyword LIKE '%$search%' OR carts.Type LIKE '%$search%' OR packages.packageName LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by('ID','DESC');
        $list = $this->db->get('carts')->result();
        if(!empty($list)){
            foreach($list as $key=>$val){
                if($val->UserID){
                    $get = $this->db->select('Name,Phone,Email')->where('ID',$val->UserID)->get('customers')->row();
                    $list[$key]->Name = $get->Name;$list[$key]->Email = $get->Email;
                }
            }
        }
        $res['list'] = $list;
        if($search){
            $this->db->where("carts.Keyword LIKE '%$search%' OR carts.Type LIKE '%$search%' OR packages.packageName LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('carts');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    } 

    public function getAllOrderList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        $this->db->select('guests.*,payments.AmountPay,payments.PaymentMethod,orders.*');
        $this->db->join('guests','guests.ID=orders.GuestID');
        //$this->db->join('customers','customers.ID=orders.UserID');
        $this->db->join('payments','payments.OrderID=orders.ID');
        $this->db->order_by('orders.ID', 'DESC');  

        if($search){
            $this->db->where("guests.Name LIKE '%$search%' OR guests.Phone LIKE '%$search%' OR guests.Email LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by('orders.ID','DESC');
        $res['list'] = $this->db->get('orders')->result();

        $this->db->join('guests','guests.ID=orders.GuestID');
        if($search){
            $this->db->where("guests.Name LIKE '%$search%' OR guests.Phone LIKE '%$search%' OR guests.Email LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('orders');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    }   

    public function getAllPackageList($type='') 
    {
        if(empty($type)){
            return $this->db->get('packages')->result();
        }
        if($type=='company'){
            $this->db->where('packageType','Company');
        }else if($type=='trademark-classes'){
            $this->db->where('packageType','Trademark');
        }else if($type=='trademark'){
            $this->db->where('packageType','Trademark Non Class');
        }
        else if($type=='Copyright'){
            $this->db->where('packageType','Copyright');
        }
        else if($type=='Patent'){
           $this->db->where('packageType','Patent');
        }
        else if($type=='Legal'){
            $this->db->where('packageType','Legal Documentation');
        }
        else{
            $this->db->where('packageType','Mandatory Compliances');
        }
        return $this->db->get('packages')->result();
    }   

    public function updatePackage($type=''){
        $post = $this->input->post();
        //echo '<pre>'; print_r($type); die;
        if(!empty($post['id'])){
            $id = $post['id'];$data['DateUpdate'] = time();
        }else if($type=='trademark'){
            $data['packageClass'] = $post['packageClass'];$data['DateAdded'] = time();
        }
        $packageName = $post['packageName'];$packagePrice = $post['packagePrice'];
        $packageFee = $post['packageFee'];$status = $post['Status'];
        $packageTotalPrice = $packagePrice+$packageFee;
        if($type=='company'){
            $typeadd='Company';$dsc = $post['dsc'];$dscprice = $post['dscprice'];
            if($dsc>1){$label = 'DSCs';}else{$label='DSC';}
            $stamp = $post['stamp'];$notary = $post['notary'];$pantan = $post['pantan'];
            $data['AdditionalPrice'] = json_encode(array(array('label'=>$label,'dsc'=>$dsc,'price'=>$dscprice),array('label'=>'Stamp Duty','price'=>$stamp),array('label'=>'Notarization Cost','price'=>$notary),array('label'=>'PAN & TAN Fee','price'=>$pantan)),true);
            $packageTotalPrice = $packageTotalPrice+$dscprice+$stamp+$notary+$pantan;
        }else if($type=='trademark-classes'){
            $typeadd='Trademark';
        }else if($type=='trademark'){
            $typeadd='Trademark Non Class';
        }
        else if($type=='Copyright'){
            $typeadd='Copyright';
        }
        else if($type=='Patent'){
            $typeadd='Patent';
            $labelprice1 = $post['label0'];$labelprice2 = $post['label1'];
            $data['AdditionalPrice'] = json_encode(array(array('label'=>'Patent Search for Provisional Patent','price'=>$labelprice1),array('label'=>'Provision Patent application and registration','price'=>$labelprice2)),true);
            $packageTotalPrice = $packageTotalPrice+$labelprice1+$labelprice2;
        }
        else if($type=='Legal'){
            $typeadd='Legal Documentation';
            $label = $post['label'];$labelprice = $post['price'];
            $data['AdditionalPrice'] = json_encode(array('label'=>$label,'price'=>$labelprice),true);
            if(is_numeric($labelprice)){
                $packageTotalPrice = $packageTotalPrice+$labelprice;
            }
        }
        else if($type=='Mandatory'){
            $typeadd='Mandatory Compliances';
            $dscprice = $post['dsc'];
            if($dscprice){
                $data['AdditionalPrice'] = json_encode(array('label'=>'DSC ( Digital Signature)','price'=>$dscprice),true);
                $packageTotalPrice = $packageTotalPrice+$dscprice;
            }

        }
        else{
            $this->session->set_flashdata('error','Some thing went wrong! Package type not found.');
            redirect('admin/packages');
        }
        $data['packageName'] = $packageName;
        $data['packageType'] = $typeadd;
        $data['packagePrice'] = $packagePrice;
        $data['packageTax'] = $packageTax;
        $data['packageFee'] = $packageFee;
        $data['packageTotalPrice'] = $packageTotalPrice;
        //echo $status; die;
        if($status!='1'){
            $status = 0;
        }
        $data['Status'] = $status;
        if(!empty($post['id'])){
            $this->db->where('ID',$id);
            $this->db->update('packages',$data);
            $message = 'updated';
        }else{
            $this->db->insert('packages',$data);$message = 'added';
        }
        $this->session->set_flashdata('success','Package <b>'.$packageName.'</b> has been '.$message.' success!');
        redirect('admin/packages/'.$type);
    }

    public function getAllCompanyList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        if($search){
            $this->db->where("company_name LIKE '%$search%' OR category LIKE '%$search%' OR sub_category LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        //$this->db->order_by('orders.ID','DESC');
        $res['list'] = $this->db->get('indian_company')->result();

        if($search){
            $this->db->where("company_name LIKE '%$search%' OR category LIKE '%$search%' OR sub_category LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('indian_company');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    }  

    public function getAllTrademarkList() 
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        if($search){
            $this->db->where("Trademark LIKE '%$search%' OR ApplicationNo LIKE '%$search%' OR State LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        //$this->db->order_by('orders.ID','DESC');
        $res['list'] = $this->db->get('trademarks')->result();

        if($search){
            $this->db->where("Trademark LIKE '%$search%' OR ApplicationNo LIKE '%$search%' OR State LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('trademarks');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    } 

    public function getAllPageList()
    {
        return $this->db->get('page_meta')->result();
    }
    public function getAllMessageList()
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        if($page=='' || $page < 1 || !is_numeric($page)){
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1)  * $limit;

        if($search){
            $this->db->where("Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%'");
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by('ID','DESC');
        $res['list'] = $this->db->get('contacts')->result();

        if($search){
            $this->db->where("Name LIKE '%$search%' OR Phone LIKE '%$search%' OR Email LIKE '%$search%'");
        }
        $total = $this->db->count_all_results('contacts');
        $pages = ceil($total / $limit);
        $res['total'] = $total;
        $res['page'] = $page;
        $res['offset'] = $offset;
        $res['pages']  = $pages;

        if ($pages <= 10) {
           $res['start'] = 1;
           $res['end'] = $pages;
        } else {
            if($page <= 5) {
               $res['start'] = 1;
               $res['end'] = 10;
            }else if ($page+1 >= $pages || $page+2 >= $pages || $page+3 >= $pages) {
               $res['start'] = $page - 6;
               $res['end'] = $pages;
            } else {
               $res['start'] = $page - 5;
               $res['end'] = $page + 4;
            }
        }
        return $res;
    }
    public function updatePage(){
        $post = $this->input->post();
        if(!empty($post['id'])){
            $id = $post['id'];
        }

        $name = $post['name'];
        $title = $post['title'];
        $description = $post['description'];
        $keywords = $post['keywords'];
        $status = $post['Status'];

        $data['name'] = $name;
        $data['title'] = $title;
        $data['description'] = $description;
        $data['keywords'] = $keywords;
        $data['Status'] = $status;
        $data['package'] = $post['package'];
        $data['short_title'] = $post['short_title'];
        $data['package_title'] = $post['package_title'];
        $data['package_content'] = $post['package_content'];
        $data['timeline'] = $post['timeline'];
        $data['section1'] = $post['section1'];
        $data['section2'] = $post['section2'];
        $data['section3'] = $post['section3'];
        $data['section4'] = $post['section4'];
        $data['section5'] = $post['section5'];
        
        //echo $status; die;
        if($status!='1'){
            $status = 0;
        }
        $data['Status'] = $status;
        if(!empty($post['id'])){
            $this->db->where('page_meta_id',$id);
            $this->db->update('page_meta',$data);
            $message = 'updated';
        }else{
            $this->db->insert('page_meta',$data);$message = 'added';
        }
        $this->session->set_flashdata('success','Page <b>'.$name.'</b> has been '.$message.' success!');
        redirect('admin/pages/');
    } 
}
