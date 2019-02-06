 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    function index() {

        $data['meta'] = $this->common->pageMeta('Home');
        $data['services'] = $this->common->fetch_services();
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['pagelist'] = $this->common->getAllPageList();
    	$this->load->view('header',$data);
        $this->load->view('home',$data);
        $this->load->view('footer',$data);
    }

    function home1() {
        $data['meta'] = $this->common->pageMeta('');
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('home2',$data);
        $this->load->view('footer',$data);
    }

    function pages($slug="") {
        $data['meta'] = $this->common->pageMeta($slug);
        $data['pagelist'] = $this->common->getAllPageList();
        // print_r($data['pagelist']); die;
        if (!empty($slug) && !empty($data['meta']['section1']) && $data['meta']['Status']!="0" ) {
            $data['title'] = $data['meta']['title'].' | CompanyVakil.com';
            $data['account'] = $this->common->fetch_account();
            $data['count_carts'] = $this->common->fetch_badge_cart();
            if(empty($data['meta']['package'])){
                $data['package_detail'] = $this->common->get_packages_detail(65);
            }else{
                $data['package_detail'] = $this->common->get_packages_detail($data['meta']['package']);
            }

            $this->load->view('header',$data);
            $this->load->view('page/pages',$data);
            $this->load->view('footer',$data);
        }else{
            // Error Page
            $data['meta'] = $this->common->pageMeta('404');

            $data['title'] = 'Error | CompanyVakil.com';
            $data['account'] = $this->common->fetch_account();
            $data['count_carts'] = $this->common->fetch_badge_cart();
            $this->load->view('header',$data);
            $this->load->view('404-error',$data);
            $this->load->view('footer',$data);
        }
    }

    function search($type = '') {
		$metaKey = "search_".$type;

        $data['meta'] = $this->common->pageMeta($metaKey);

        $data['account'] = $this->common->fetch_account();
        $data['type'] = !empty($type)?$type:'company';
        $value = $this->input->get('value');
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['carts'] = $this->common->fetch_cart_html();
        $data['data'] = $this->common->get_search_result($type);
        $data['pagelist'] = $this->common->getAllPageList();

        if(!empty($data['data']['similar']))
        {
            $data['similars'] = $data['data']['similar'];
        }
        if(!empty($data['data']['available']))
        {
            $data['availables'] = $data['data']['available'];
        }
        $this->load->view('header',$data);
        $data['submit'] = $this->common->check_search_contact();
        if($type == 'company'){
            if(empty($data['data']))
            {
                $data['packages'] = $this->common->get_packages($type);
            }
            $data['company'] = $value;
            $this->load->view('search',$data);
        }else{
            $data['trademark'] = $value;
            $this->load->view('search-trademark',$data);
        }
        $this->load->view('footer',$data);
    }


	//New Created Functions
    function searchNew($type = ''){
        $metaKey = "search_".$type;

        $data['meta'] = $this->common->pageMeta($metaKey);

        $data['account'] = $this->common->fetch_account();
        $data['type'] = !empty($type)?$type:'company';
        $value = $this->input->get('value');
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['carts'] = $this->common->fetch_cart_html();
        $data['data'] = $this->common->get_search_result($type);
        $data['pagelist'] = $this->common->getAllPageList();

        if(!empty($data['data']['similar']))
        {
            $data['similars'] = $data['data']['similar'];
        }
        if(!empty($data['data']['available']))
        {
            $data['availables'] = $data['data']['available'];
        }
        $this->load->view('header',$data);
        $data['submit'] = $this->common->check_search_contact();
        if($type == 'company'){
            if(empty($data['data']))
            {
                $data['packages'] = $this->common->get_packages($type);
            }
            $data['company'] = $value;
            $this->load->view('searchCompanyNew',$data);
        }else if($type == 'trademark'){
            //////
            //////
            $data['trademark'] = $value;
            $this->load->view('searchTrademarkNew',$data);
            //////
            //////
        }else{
			$data['director'] = $value;
            $this->load->view('searchDirectorNew',$data);
		}
        $this->load->view('footer',$data);
    }


    function addtocart() {
        $name = $this->input->post('name');
        $id = $this->input->post('id');$type = $this->input->post('type');
        if(!$this->session->vakil_user_id){
            $res['msg'] = 'signin';
        }else if($name && $id){
            $html = $this->common->addtocart($name,$id,$type);
            if(strlen($html)>50){
                $res['msg'] = 'ok';
                $res['res'] = $html;
                $res['badge'] = $this->common->fetch_badge_cart();
            }else{
                $res['msg'] = $html;
            }
        }else{
            $res['msg'] = 'Something went wrong with the input please refresh the current page.';
        }
        echo json_encode($res,true);
    }

    function removecart() {
        $id = $this->input->post('id');
        if($id){
            $html = $this->common->removecart($id);
            $res['msg'] = 'ok'; $res['res'] = $html;$res['total'] = $html;$res['badge'] = $this->common->fetch_badge_cart();
        }else{
            $res['msg'] = 'Something went wrong with the input please refresh the current page.';
        }
        echo json_encode($res,true);
    }

    function removecartfromcheckout() {
        $id = $this->input->post('id');
        if($id){
            $total = $this->common->removecartfromcheckout($id);
            $res['msg'] = 'ok'; $res['res'] = $total;$res['badge'] = $this->common->fetch_badge_cart();

        }else{
            $res['msg'] = 'Something went wrong with the input please refresh the current page.';
        }
        echo json_encode($res,true);
    }

    function checkout($step='') {
        $data['pagelist'] = $this->common->getAllPageList();
        $data['account'] = $this->common->fetch_account();
        $carts = $this->common->fetch_cart();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        if($step=='detail'){
            if(empty($carts)){
                redirect('search/company');
            }
            $this->session->set_userdata('redirect_url',base_url('checkout/detail'));
            $data['carts'] = $carts;
            $data['account'] = $this->common->fetch_account();
            $this->load->view('header',$data);
            $this->load->view('checkout-detail',$data);
            $this->load->view('footer',$data);
        }elseif($step=='payment'){
            if(empty($carts)){
                redirect('search/company');
            }
            $data['carts'] = $carts;
            $data['guestId'] = $this->common->insert_contact_detail();
            $data['account'] = $this->common->fetch_account();
            $this->load->view('header',$data);
            $this->load->view('payment',$data);
            $this->load->view('footer',$data);
        }else if($step=='paymentstatus'){
            if(!$this->session->orderMessage){
                redirect('search/company');
            }
            $orderid = $this->input->get('orderid');
            if($orderid){
                $data['orderData'] = $this->common->fetch_order_data($orderid);
                $this->load->view('header',$data);
                $this->load->view('thank-you',$data);
                $this->load->view('footer',$data);
            }else{
                $this->load->view('header',$data);
                $this->load->view('order-failed',$data);
                $this->load->view('footer',$data);
            }
        }else{
            redirect(base_url());
        }
    }

    public function private_limited_company(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('private-limited-company');

        $data['title'] = 'Private limited company | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(1);
        $this->load->view('header',$data);
        $this->load->view('page/private-limited-company',$data);
        $this->load->view('footer',$data);

    }
    public function limited_liability_partnership(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('limited-liability-partnership');

        $data['title'] = 'Limited liability partnership | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(2);
        $this->load->view('header',$data);
        $this->load->view('page/limited-liability-partnership',$data);
        $this->load->view('footer',$data);

    }
    public function one_person_company(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('one-person-company');

        $data['title'] = 'One person company | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(3);
        $this->load->view('header',$data);
        $this->load->view('page/one-person-company',$data);
        $this->load->view('footer',$data);

    }

    public function trademark_registration(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('trademark-registration');

        $data['title'] = 'Trademark Registration | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(65);
        $this->load->view('header',$data);
        $this->load->view('page/trademark-registration',$data);
        $this->load->view('footer',$data);

    }
    public function contact_submit(){
        $post = $this->input->post();
        $name = !empty($post['Name'])?$post['Name']:'';
        $email = !empty($post['Email'])?$post['Email']:'';
        $message = !empty($post['Message'])?$post['Message']:'';
        $phone = !empty($post['Phone'])?$post['Phone']:'';
        if($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(strlen($phone)==10 && is_numeric($phone)){
                    $data['Name'] = $name;$data['Email'] = $email;$data['Phone'] = $phone;$data['Message'] = $message;
                    $data['Date'] = time();
                    $this->db->insert('contacts',$data);
                    $this->load->library('mylibrary');
                    // mail to team
                    $to = 'parth@alphabetlegal.com'; $from = $email;
                    $subject = 'Contact message - companyvakil.com';
                    $html = $message.'<br><br>Thanks, <br>'.$name;
                    $this->mylibrary->My_mail($to,$subject,$html,$from,$name);
                    // mail to user
                    $to = $email;
                    $subject = 'Thanks for reaching out';
                    $html = 'Dear '.$name.', <br><br>Thank you for reaching out to us. A representative will review your query and will get back to you soon.<br> Your query will be resolved within 3 working days.<br><br>Thank you,<br>Sincerely,<br>Team CompanyVakil';
                    $this->mylibrary->My_mail($to,$subject,$html);

                    $res['status'] = 200;$res['res'] = '<div class="alert alert-success">Thank you for contacting us! We will be in touch with you shortly.</div>';
                }else{
                    $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter a valid phone number.</div>';
                }
            }else{
                $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter valid email address.</div>';
            }
        }else{
            $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter an email address.</div>';
        }
        echo json_encode($res);
    }
    public function search_contact_submit(){
        $post = $this->input->post();
        $name = !empty($post['Name'])?$post['Name']:'';
        $email = !empty($post['Email'])?$post['Email']:'';
        $keyword = !empty($post['keyword'])?$post['keyword']:'';
        $type = !empty($post['type'])?$post['type']:'';
        $phone = !empty($post['Phone'])?$post['Phone']:'';
        if($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(strlen($phone)==10 && is_numeric($phone)){
                    $token = $this->session->token;
                    $ip = $this->common->get_user_ip();
                    $data['Name'] = $name;$data['Email'] = $email;$data['Phone'] = $phone;$data['keyword'] = $keyword;
                    $data['type'] = $type;$data['IP'] = $ip;$data['Token'] = $token;$data['Date'] = time();
                    $this->db->insert('guests',$data);

                    $this->load->library('mylibrary');
                    // mail to team
                    $to = 'parth@alphabetlegal.com'; $from = $email;
                    $subject = 'Search Query - companyvakil.com';
                    $html = 'Hello,<br><br>The following query was made on www.companyvakil.com at '.date('d M Y G:i:s').' : <br><br>Name - '.$name.'<br>Email - '.$email.'<br>Phone - '.$phone.'<br><br>Search "'.$keyword.'" for '.$type.'.<br><br>Thanks.';
                    $res['mail_status'] = $this->mylibrary->My_mail($to,$subject,$html);

                    $res['status'] = 200;
                }else{
                    $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter a valid phone number.</div>';
                }
            }else{
                $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter valid email address.</div>';
            }
        }else{
            $res['status'] = 201;$res['res'] = '<div class="alert alert-danger">Please enter an email address.</div>';
        }
        echo json_encode($res);
    }
    public function trademark_objection(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('trademark-objection');

        $data['title'] = 'Trademark Objection | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(66);
        $this->load->view('header',$data);
        $this->load->view('page/trademark-objection',$data);
        $this->load->view('footer',$data);

    }
    public function trademark_renewal_and_assignment(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('trademark-renewal-and-assignment');

        $data['title'] = 'Trademark Renewal and Assignment| CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(67);
        $this->load->view('header',$data);
        $this->load->view('page/trademark-renewal-and-assignment',$data);
        $this->load->view('footer',$data);

    }
    public function copyright_registration(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('copyright-registration');

        $data['title'] = 'Copyright Registration | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages("Copyright");
        //echo '<pre>'; print_r($data); die;
        $this->load->view('header',$data);
        $this->load->view('page/copyright-registration',$data);
        $this->load->view('footer',$data);

    }

    public function gst_registration(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('GST-registration');

        $data['title'] = 'GST Registration in india | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(58);
        //echo '<pre>'; print_r($data); die;
        $this->load->view('header',$data);
        $this->load->view('page/GST-registration',$data);
        $this->load->view('footer',$data);

    }
    public function msme_registration(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('MSME-registration');

        $data['title'] = 'MSME Registration | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(60);
        $this->load->view('header',$data);
        $this->load->view('page/MSME-registration',$data);
        $this->load->view('footer',$data);

    }
    public function import_export_code(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('import-export-code');

        $data['title'] = 'Import Export Code (IEC) Registration | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(59);
        $this->load->view('header',$data);
        $this->load->view('page/import-export-code',$data);
        $this->load->view('footer',$data);

    }

    public function terms_and_services(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('terms-of-service');

        $data['title'] = 'Terms and services agreement | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(55);
        $this->load->view('header',$data);
        $this->load->view('page/terms-of-service',$data);
        $this->load->view('footer',$data);

    }
    public function founder_agreement(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('founder-agreement');

        $data['title'] = 'Founder Agreement | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(56);
        $this->load->view('header',$data);
        $this->load->view('page/founder-agreement',$data);
        $this->load->view('footer',$data);

    }
    public function employment_contract(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('employment-contract');

        $data['title'] = 'Employment Contract | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(57);
        $this->load->view('header',$data);
        $this->load->view('page/employment-contract',$data);
        $this->load->view('footer',$data);

    }
    public function patent_registration(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('patent-registration');

        $data['title'] = 'Patent Registration | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $data['package_detail'] = $this->common->get_packages_detail(54);
        //echo '<pre>'; print_r($data); die;
        $this->load->view('header',$data);
        $this->load->view('page/patent-registration',$data);
        $this->load->view('footer',$data);

    }

    public function buypackage($id=''){
        $this->db->where('ID',$id);
        $package = $this->db->get('packages');
        if($package->num_rows()>0){
            if($this->common->add_package_to_cart($package)){
                redirect('checkout/detail');
            }else{
                redirect('search/company');
            }
        }else{
            redirect('search/company');
        }
    }
    public function terms_and_conditions(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('terms_and_conditions');

        $data['title'] = 'Terms and conditions | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('terms-condition',$data);
        $this->load->view('footer',$data);

    }
    public function privacy_policy(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('privacy_policy');

        $data['title'] = 'Founder Agreement | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('privacy-policy',$data);
        $this->load->view('footer',$data);

    }
    public function refund_policy(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('refund_policy');

        $data['title'] = 'Refund Policy | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('refund-policy',$data);
        $this->load->view('footer',$data);

    }
    public function error(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('404');

        $data['title'] = 'Error | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('404-error',$data);
        $this->load->view('footer',$data);

    }
    public function links(){
        $data['pagelist'] = $this->common->getAllPageList();
        $data['meta'] = $this->common->pageMeta('links');

        $data['title'] = 'Terms and services agreement | CompanyVakil.com';
        $data['account'] = $this->common->fetch_account();
        $data['count_carts'] = $this->common->fetch_badge_cart();
        $this->load->view('header',$data);
        $this->load->view('links',$data);
        $this->load->view('footer',$data);

    }

    public function sitemap(){
        $data['pagelist'] = $this->common->getAllPageList();
        $this->load->helper('xml');
        $this->load->helper('text');
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('sitemap',$data);
    }

    public function feed(){
        $this->load->helper('xml');
        $this->load->helper('text');

        $data['feed_name'] = 'companyvakil.com'; // your website
        $data['encoding'] = 'utf-8'; // the encoding
        $data['feed_url'] = 'https://www.companyvakil.com/feed'; // the url to your feed
        $data['page_description'] = 'Company Vakil: ROC Company Search India | Public Trademark Search India'; // (What my site is about comes here) some description
        $data['page_language'] = 'en-en'; // the language
        $data['creator_email'] = 'info@companyvakil.com'; // your email

        header("Content-Type: text/xml;charset=iso-8859-1");

        $data['news'] = $this->common->getAllPageList('all');

        $this->load->view('feed', $data);    }

}
