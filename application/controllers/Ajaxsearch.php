<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajaxsearch extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }


	function index(){
		$this->load->view('home');
	}

	function showCompany(){
		$this->load->view('header');
		$this->load->view('searchCompanyNew');
		$this->load->view('footer');
	}

	function fetchData(){
		$output = '';
		$searchData = '';
		$searchData = '';
		if($this->input->post('searchData') && $this->input->post('typeCTD'))
		{
			$searchData = $this->input->post('searchData');
			$type = $this->input->post('typeCTD');
		}
		$this->load->model('database_fetch_model');
		$data = $this->database_fetch_model->showDataCTD($searchData,$type);
		$output .= '
		<div class="row">
			<div class="card col-md-12" style="padding: 3%;">
		';
		if($data->num_rows() > 0){
			foreach($data->result() as $row){
				if($type == "company"){
					$output .= '<a href="'.base_url().'searchNew/company?id='.$row->cin.'"><div class="divBlockParent">'.$row->companyName.'</div></a><hr>';
				}else if($type == "trademark"){
					$output .= '<a href="'.base_url().'searchNew/trademark?id='.$row->ApplicationID.'"><div class="divBlockParent">'.$row->Name.'</div></a><hr>';
				}else{
					$output .= '<a href="'.base_url().'searchNew/director?id='.$row->din.'"><div class="divBlockParent">'.$row->directorName.'</div></a><hr>';
				}
			}
		}else{
			$output .= '<div class="divBlockParent">No Data Found</div>';
		}
		$output .= '</div></div>';
		echo $output;
	}
}
