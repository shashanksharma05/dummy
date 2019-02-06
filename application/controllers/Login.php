<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();                
    }
    
    function index() {
        if (isset($_FILES['file'])) {
	    $file = $_FILES['file'];
	    print_r($file); die;
	    $handle = fopen($file, "r");
	    if ($file == NULL) {
	    	echo 'error occur';
	    }
	    else {
	      	while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
	        {
	          	$ApplicationNo = $filesop[0];
	          	$ApplicationDate = $filesop[1];
	          	$Trademark = $filesop[2];
	          	$Status = $filesop[3];
	          	$Class = $filesop[4];

	          	$trademark = array("ApplicationNo"=>$ApplicationNo,
		            "ApplicationDate"=>$ApplicationDate,
		            "Trademark"=>$Trademark,
		            "Status"=>$Status,
		            "Class"=>$Class,
		            "State"=> 'Ahemdabad'
	        	);
	        	print_r($trademark); die;
	          	//$this->db->insert('trademarks',$trademark);
      		}
	      		echo 'Data inserted';
   			}
   		}
   		$this->load->view('upload');
	}

	public function upload(){
		
		//$data = file_get_contents('uploads/Ahemdabad-Registered.csv');
		//Split the file and get an array representing the lines/rows in the .csv
		$file = 'uploads/Mumbai - Registered1_4.csv';
		$handle = fopen($file, "r");
	    if ($file == NULL) {
	    	echo 'error occur';
	    }
	    else {
	      	while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
	        {
	        	if(!empty($filesop[0])){
		          	$ApplicationNo = $filesop[1];
		          	$ApplicationDate = $filesop[2];
		          	$Trademark = $filesop[3];
		          	$Status = $filesop[4];
		          	$Class = $filesop[5];

		          	$trademark = array("ApplicationNo"=>$ApplicationNo,
			            "ApplicationDate"=>$ApplicationDate,
			            "Trademark"=>$Trademark,
			            "Status"=>$Status,
			            "Class"=>$Class,
			            "State"=> 'Mumbai'
		        	);
		        	//print_r($trademark); die;
		          	$this->db->insert('trademarks',$trademark);
	          }
      		}
	      		echo 'Data inserted';
   		}
	}

}
