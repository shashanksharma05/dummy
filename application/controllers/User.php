<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('razorpay/razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
class User extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('mail_model');             
    }
    
    function index(){
		echo $this->mail_model->order_mail_html('Sachin'); die;
        redirect(base_url().'admin/login');
    }
    public function fbauth(){
		$post = $this->input->post();
		if($post){
			$facebook_id = $post['id'];$user_ip = $this->common->get_user_ip();
			$user_email = isset($post['email'])?$post['email']:'';
			$this->db->where('Email',$user_email);
			$get = $this->db->get('customers');
			if($get->num_rows()>0)
			{
				$res = $get->row_array();
				$this->session->set_userdata('vakil_user_id',$res['ID']);
				$this->session->set_userdata('vakil_user_name',$res['Name']);
				$this->session->set_userdata('vakil_user_email',$res['Email']);
				$this->session->set_userdata('vakil_user_status',$res['Status']);
				$this->db->where('ID',$user['ID'])->update('customers',array('login_time'=>time()));
				//Update cart
				$this->common->update_cart($user_ip);
				if($this->session->redirect_url){
					$data['url'] = $this->session->redirect_url;
				}else{
					$data['url'] = base_url();
				}
			}else{
				$user['Fbid'] = $post['id'];
				$user['Name'] = $post['name'];
				$user['Email'] = $user_email;
				$user['Photo'] = 'http://graph.facebook.com/'.$post['id'].'/picture?type=large';
				$user['IPAddress'] = $user_ip;
				//$user['Token'] = $this->common->getToken();
				$user['SignupBy'] = 'Facebook';
				$user['CreateTime'] = time();
				$user['Status'] = 1;
				if($this->db->insert('customers',$user))
				{
					$user_id = $this->db->insert_id();
					$this->session->set_userdata('vakil_user_id',$user_id);
					$this->session->set_userdata('vakil_user_name',$post['name']);
					$this->session->set_userdata('vakil_user_email',$user_email);
					$this->session->set_userdata('vakil_user_status',1);
					//Update cart
					$this->common->update_cart($user_ip);
				}
				if($this->session->redirect_url){
					$data['url'] = $this->session->redirect_url;
				}else{
					$data['url'] = base_url();
				}
			}
		}else{
			$data['url'] = base_url();
		}
		echo json_encode($data);
	}

	public function googleauth(){
		$this->load->library('googleplus');
		if (isset($_GET['code'])){
			$this->googleplus->client->authenticate();
			$user_token = $this->googleplus->client->getAccessToken();
			$data = $this->googleplus->people->get('me');
			//print 'Your details: <pre>' . print_r($data, true) . '</pre>';
			if(!empty($data))
			{
				$social_id = $data['id'];$user_ip = $this->model->get_client_ip();
				$user_email = isset($data['email'])?$data['email']:'';
				$this->db->where('Email',$user_email);
				$get = $this->db->get('users');
				if($get->num_rows()>0)
				{
					$res = $get->row_array();
					$this->session->set_userdata('user_id',$res['user_id']);
					$this->session->set_userdata('user_name',$res['user_name']);
					$this->session->set_userdata('user_email',$res['user_email']);
					$this->session->set_userdata('user_type',$res['user_type']);
					//Update cart
					$this->home_model->update_local_cart($user_ip);
					if($this->session->redirect_url){
						redirect($this->session->redirect_url);
					}else{
						redirect('home');
					}
				}else{
					$user['social_id'] = $data['id'];
					$user['user_name'] = $data['displayName'];
					$user['user_email'] = $user_email;
					$user['user_type'] = 1;
					$user['user_profile'] = $data['image']['url'];
					$user['user_ip'] = $user_ip;
					$user['account_type'] = 'Google';
					$user['create_time'] = time();
					$user['user_status'] = 'Active';
					if($this->db->insert('users',$user))
					{
						$user_id = $this->db->insert_id();
						$this->session->set_userdata('user_id',$user_id);
						$this->session->set_userdata('user_name',$data['displayName']);
						$this->session->set_userdata('user_email',$user_email);
						$this->session->set_userdata('user_type',1);
						//Update cart
						$this->home_model->update_local_cart($user_ip);
						if($this->session->redirect_url){
							redirect($this->session->redirect_url);
						}else{
							redirect('home');
						}
					}else{
						redirect('signin');
					}
				}
			}else{
				$authUrl = $this->googleplus->client->createAuthUrl();
				redirect($authUrl);
			}
		}
		else
		{
			$authUrl = $this->googleplus->client->createAuthUrl();
			redirect($authUrl);
		}
	}
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$res['code'] = 201;
		if(!$email){
			$res['msg'] = 'Please enter your email';
		}else if(!$password){
			$res['msg'] = 'Please enter your password';
		}else{
			$this->db->where('Email',$email);
			$this->db->where('Password',md5($password));
			$get = $this->db->get('customers');
			if($get->num_rows()){
				$user = $get->row_array();
				if($user['SignupBy']!='Web' || $user['VerifyEmail']==1){
					$this->session->set_userdata('vakil_user_id',$user['ID']);
					$this->session->set_userdata('vakil_user_name',$user['Name']);
					$this->session->set_userdata('vakil_user_email',$user['Email']);
					$this->session->set_userdata('vakil_user_status',$user['Status']);
					$user_ip = $this->common->get_user_ip();
					$this->db->where('ID',$user['ID'])->update('customers',array('login_time'=>time()));
					//Update cart
					$this->common->update_cart($user_ip);
					if($this->session->redirect_url){
						$res['url'] = $this->session->redirect_url;
					}else{
						$res['url'] = base_url();
					}
					$res['code'] = 200;
				}else{
					$res['msg'] = 'Your account is not verified yet. Please verify via sent a link in your email. <p class="text-info">If not received click to <a href="#" class="resend">Resend</a></p>';
				}
			}else{
				$res['msg'] = 'Your email or password is not correct';
			}
		}
		echo json_encode($res);
	}
	public function check($runtime=''){
		$ID = $this->session->vakil_user_id;
		if($ID){
			$this->db->where('ID',$ID)->update('customers',array('login_time'=>time()));
			return true;
		}else{
			return false;
		}
	}
	public function register(){
		$username = $this->input->post('register_username');
		$email = $this->input->post('register_email');
		$password = $this->input->post('register_password');
		$confirm_password = $this->input->post('register_password_confirm');
		$phone = $this->input->post('register_phone');

		$res['code'] = 201;
		if(empty($phone) || ctype_space($phone)){
			$res['msg'] = 'Please enter your number';
		}else if($this->check_number($phone)){
			$res['msg'] = 'This number already exist';
		}
		else if(empty($username) || ctype_space($username)){
			$res['msg'] = 'Please enter your name';
		}else if(empty($email) || ctype_space($email)){
			$res['msg'] = 'Please enter your email';
		}else if($this->check_email($email)){
			$res['msg'] = 'This email already exist';
		}else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$res['msg'] = 'You entered invalid email address!';
		}else if(empty($password) || ctype_space($password)){
			$res['msg'] = 'Please enter your password';
		}else if(empty($confirm_password) || ctype_space($confirm_password)){
			$res['msg'] = 'Please reenter password to confirm ';
		}else if($password!=$confirm_password){
			$res['msg'] = 'Password does not match';
		}else{
			$token = $this->common->getToken();
			$data['Name'] = $username;
			$data['Email'] = $email;
			$data['Phone'] = $phone;
			$data['Password'] = md5($password);
			$data['IPAddress'] = $this->common->get_user_ip();
			$data['SignupBy'] = 'Web';
			$data['Token'] = $token;
			$data['Token'] = time();
			$data['CreateTime'] = time();
			$data['OTP'] = $this->generate_otp();
			$this->db->insert('TempUser',$data);
			$res['code'] = 200;
			$res['msg'] = '<b>Success!</b> OTP has been sent to verify your number.';
			$res['number'] = $phone;
		}
		echo json_encode($res);
	}
	public function send_verify_email($e_mail=''){
		$flag  =0;
		if(empty($e_mail))
		{
			$e_mail = $this->input->post('email');
			$flag  =1;
		}

		$res['code'] = 201;
		if($e_mail){
			$this->db->where('Email',$e_mail);
			$get = $this->db->get('customers');
			if($get->num_rows()){
				$user = $get->row_array();
				$token = $user['Token'];
				$email = $e_mail;
				$name = $user['Name'];
			}else{
				$res['msg'] = 'Please enter registered email address';
			}
		}else{
			$res['msg'] = 'Please enter your email';
		}
		$this->load->library('mylibrary');
		$subject = 'Verify account - companyvakil.com';
		$message = 'Hi '.$name.'<br><br> <b>Thank You for registering with us.</b><br>Verify your account by clicking on below link<br><br>'.base_url('user/verify/').$token.'?email='.$email.'<br>';
		$mail = $this->mylibrary->My_mail($email,$subject,$message);
		if($this->input->post()){
			if($email && $name){
				$res['msg'] = 'A link has been send at your email address to verify your account';
			}
			if($flag)
			{
				echo json_encode($res);
			}
			else
			{ 
				return json_encode($res);
			}

		}else{
			return $mail;
		}
	}
	public function verify($token=''){
		$email = $this->input->get('email');
		$this->db->where('Token',$token);
		$this->db->where('VerifyEmail',0);
		$get = $this->db->get('customers')->row_array();
		if(!empty($get)){
			$this->db->where('Token',$token);
			$this->db->update('customers',array('VerifyEmail'=>1,'Status'=>1));
			$this->session->set_flashdata('message','Your account has been verified successfully.');
		}
		redirect(base_url());
	}
	public function verifyphone(){
		$otp = $this->input->post('verify_phone_otp');
		$phone = $this->input->post('verify_number');
		$data['code']= 201 ;
		$new_data = $this->db->get_where("TempUser",array('Phone'=>$phone, 'OTP'=>$otp))->row_array();
		if(!empty($new_data))
		{
			$data['code']=200;
			$data['msg']="Your number has been verified successfully.";
			$data1 = array('Name'=>$new_data['Name'], 'Email'=>$new_data['Email'], 'Phone'=>$new_data['Phone'], 'Email'=>$new_data['Email'], 'Password'=>$new_data['Password'], 'IPAddress'=>$new_data['IPAddress'], 'SignupBy'=>$new_data['SignupBy'], 'Token'=>$new_data['Token'], 'SignupBy'=>$new_data['SignupBy'], 'VerifyEmail'=>0 , 'OTP'=>$new_data['OTP'], 'VerifyPhone'=>1, 'SignupBy'=>$new_data['SignupBy'], 'CreateTime'=>$new_data['CreateTime'], 'UpdateTime'=>$new_data['UpdateTime'], 'TokenTime'=>$new_data['TokenTime'],);			
			$this->db->where('Phone',$phone);
			$this->db->delete('TempUser');
			$this->db->insert('customers', $data1);
			$mail1 = $this->send_verify_email($new_data['Email']);
			$data['mail'] = json_decode($mail1);
			echo json_encode($data);
		}
		else
		{
			$data['msg']="Enter Correct OTP";
			echo json_encode($data);
		}
		
	}
	public function generate_otp(){
		$six_digit_random_number = rand(100000, 999999);
		return $six_digit_random_number;
	}
	public function check_email($email=''){
		$this->db->where('Email',$email);
		return $this->db->count_all_results('customers');
	}
	public function check_number($phone=''){
		$this->db->where('Phone',$phone);
		return $this->db->count_all_results('customers');
	}
	public function forgotpassword(){
		$email = $this->input->post('lost_email');
		$this->db->where('Email',$email);
		$get = $this->db->get('customers')->row_array();
		$res['code'] = 201;
		if(!empty($get)){
			$token = $this->common->getToken();
			$update = array('ForgotToken'=>$token,'TokenTime'=>time());
			$this->db->where('Email',$email);
			$this->db->update('customers',$update);
			$name = $get['Name'];
			$this->load->library('mylibrary');
			$subject = 'Reset password - companyvakil.com';
			$message = 'Hi '.$name.'<br><br> We have received the request to reset password for your linked account with <b>CompanyVakil.com</b>. This link will been expired within 30 min. <br>Reset your password by clicking on below link<br><br>'.base_url('user/resetpassword/').$token.'?email='.$email.'<br><br>If you have not requested. Please ignore this mail.<br><br>Thanks,<br>CompanyVakil Team';
			$mail = $this->mylibrary->My_mail($email,$subject,$message);
			$res['msg'] = 'A reset password link has been sent to your email address.';
			$res['code'] = 200;
		}else{
			$res['msg'] = 'This email is not registered with us.';
		}
		echo json_encode($res);
	}
	public function resetpassword($token=''){
		$email = $this->input->get('email');
		$data['count_carts'] = $this->common->fetch_badge_cart();
		$this->db->where('ForgotToken',$token);
		$this->db->where('Email',$email);
		$get = $this->db->get('customers')->row_array();
		if(!empty($get)){
			$time = time()-1800;
			$time2 = $get['TokenTime'];
			if($time>$time2){
				$data['error'] = 'Your password reset verification link has been expired. Please send it again.';
			}else{
				$data['error'] = false;
			}
			$reset_password = $this->input->post('reset_password');
			if($reset_password){
				$newpassword = $reset_password;$newconfpassword = $this->input->post('reset_password_confirm');
				if(strlen($newpassword)<6){
					$this->session->set_flashdata('error','Please enter atleast 6 character length of password.');
					redirect('user/resetpassword/').$token.'?email='.$email;
				}else if($newpassword!=$newconfpassword){
					$this->session->set_flashdata('error','Your confirm new password did not match the new password.');
					redirect('user/resetpassword/').$token.'?email='.$email;
				}else{
					$this->db->where('ForgotToken',$token);
					$this->db->update('customers',array('Password'=>md5($newpassword),'ForgotToken'=>'','TokenTime'=>0));
					$this->session->set_flashdata('message','Your password has been changed successfully.');
					redirect(base_url());
				}
			}
			
		}else{
			$data['error'] = 'your password reset verification link is Invalid. Please send it again.';
		}
		$this->load->view('header');
		$this->load->view('reset-password',$data);
		$this->load->view('footer');
	}
	public function account(){
		$data['account'] = $this->common->fetch_account();
		$data['count_carts'] = $this->common->fetch_badge_cart();
		$data['title'] = 'My account | CompanyVakil.com';
		$post = $this->input->post();
		if($post){
			$this->common->updateAddress($post);
		}
		$this->load->view('header',$data);
		$this->load->view('account',$data);
		$this->load->view('footer',$data);
	}
	public function myorders(){
		$data['account'] = $this->common->fetch_account();
		$data['orders'] = $this->common->fetch_orders();
		$data['count_carts'] = $this->common->fetch_badge_cart();
		$data['title'] = 'My orders | CompanyVakil.com';

		$this->load->view('header',$data);
		$this->load->view('orders',$data);
		$this->load->view('footer',$data);
	}
	public function logout(){
		$this->session->unset_userdata('vakil_user_id');
		$this->session->unset_userdata('vakil_user_name');
		$this->session->unset_userdata('vakil_user_email');
		$this->session->unset_userdata('vakil_user_status');
		$this->session->unset_userdata('guestid');
		redirect(base_url());
	}

	public function paymentConfirmed(){
		$api = new Api(RAZOR_KEY, RAZOR_SECRET);

		$post = $this->input->post();
		$amount = $this->input->post('amount');
		$user_id = !empty($this->session->vakil_user_id)?$this->session->vakil_user_id:0;
		$razorpay_payment_id = $this->input->post('payment_id');
		try
	    {
            $payments = $api->payment->fetch($razorpay_payment_id)->capture(array('amount'=>($amount)));
            $payment_array = $payments->toArray();
	        $payment_mode = $payment_array['method'];
			$payment_detail = json_encode($payment_array);
			$carts = $this->fetch_cart();
	        $order_id = $this->common->create_order($carts);
	        $amount = $amount/100;
	        $payment_data = array('OrderID'=>$order_id,'UserID'=>$user_id,'paymentID' => $razorpay_payment_id,'PaymentDetails' => $payment_detail,'Amount'=>$amount,'AmountPay'=>$amount,'PaymentMethod' => $payment_mode,'PaymentStatus' => 'Confirmed','CreateDate'=> time());
			
			$this->db->insert('payments',$payment_data);
			// send order mail
			$guestid = !empty($this->session->guestid)?$this->session->guestid:0;
			$this->db->select('Name,Email');
			$get = $this->db->get_where('guests',"ID = '$guestid'");
			if($get->num_rows()>0){
				$user = $get->row_array();

				$orderhash_id = '#CV'.$guestid.'000'.$orderid;
				$html = $this->mail_model->order_mail_html($user['Name'],$carts,$orderhash_id);
				$subject = 'Order Confirmed - companyvakil.com';
				$this->load->library('mylibrary');
				$mail = $this->mylibrary->My_mail($user['Email'],$subject,$html);
			}
			$message = 'Thank you, Your payment is complete! we will get in touch with you in next 24 hours.';
			$res['code'] = 200;$res['message'] = base64_encode($message);$res['order_id'] = $order_id;
	    }
       	catch(Exception $e)
        {
        	$message = 'FAILED, YOUR PAYMENT HAS BEEN FAILED! PLEASE TRY AGAIN.';
            $res['code'] = 201;$res['message'] = base64_encode($message);
        }
        $this->session->set_userdata('orderMessage',$message);
		echo json_encode($res);
	}
}
