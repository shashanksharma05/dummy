<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylibrary extends CI_Email{

	public function __construct($config = array())
    {
            parent::__construct($config);
    }

    // Send Email Using SMTP Settings

    public function My_mail($email='',$subject="",$message="",$from='info@companyvakil.com',$name='CompanyVakil') 
    {	
    	if (!empty($email)) {

	    	$CI =& get_instance();
	    	$CI->load->library('email');

	    	$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;

			$CI->email->initialize($config);

			$config = Array(
			  'protocol' => 'smtp',
			  /* 'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'jarvis@flitwebs.com',
			  'smtp_pass' => '31october2015', */
			  'smtp_host' => 'smtp.pepipost.com',
			  'smtp_port' => 587,
			  'smtp_user' => 'companyvakil',
			  'smtp_pass' => 'Vakil@#$india5',
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

			$CI->load->library('email');
			$CI->email->initialize($config);
			$CI->email->set_newline("\r\n"); 			
			$CI->email->from($from, $name, $from);
			$CI->email->to($email);
			// $this->email->bcc($email);
			$CI->email->subject($subject);
			$CI->email->message($message);
			if($CI->email->send()){
	            return true;
			}
			else
			{
				return false;
				//echo $CI->email->print_debugger(); die;
			}
		}
    }
    public function Bcc_mail($email,$subject="",$message="") 
    {	
    	if (!empty($email)) {

	    	$CI =& get_instance();
	    	$CI->load->library('email');

	    	$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;

			$CI->email->initialize($config);

			$config = Array(
			  'protocol' => 'smtp',
			  //'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_host' => 'smtp.pepipost.com',
			  //'smtp_port' => 465,
			  'smtp_port' => 587,
			  'smtp_user' => 'flitlance', // change it to yours
			  'smtp_pass' => '10evjcs019', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

			$CI->load->library('email');
			$CI->email->initialize($config);
			$CI->email->set_newline("\r\n"); 			
			$CI->email->from('info@companyvakil.com', 'CompanyVakil','info@companyvakil.com');
			// $CI->email->to($email);
			$this->email->bcc($email);
			$CI->email->subject($subject);
			$CI->email->message($message);
			if($CI->email->send()){
	            return true;
			}
			else
			{
				return "mail not sent";
			}
		}
    }

    public function sms($mobile,$message){
    	$url = "http://www.businesssms.co.in/sms.aspx?ID=username&Pwd=password&PhNo=". $mobile."&Text=".$message;
    	@simplexml_load_file($url);
    }
	
        

}
