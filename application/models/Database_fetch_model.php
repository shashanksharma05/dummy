<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Database_fetch_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }


    function showDataCTD($searchData,$type){
        $db2 = $this->load->database('secondDB',TRUE);
        if($searchData != "")
        {
            switch ($type) {
                case "company":
                    $query = $db2->select('*')->from('company')->where("companyName like '$searchData%'")->order_by('Id', 'DESC')->limit('5');
                    break;
                case "trademark":
                    $query = $db2->select('*')->from('trademark')->where("Name like '$searchData%'")->order_by('Id', 'DESC')->limit('5');
                    break;
                case "director":
                    $query = $db2->select('*')->from('directors')->where("directorName like '$searchData%'")->order_by('Id', 'DESC')->limit('5');
                    break;
            }
            return $query->get();
        }
    }

    function checkSingleTrademark(){
        $db2 = $this->load->database('secondDB',TRUE);
        $query = $db2->select('*')->from('trademark')->where("ApplicationID = '1'");
        return $query->get()->result();
    }

}
