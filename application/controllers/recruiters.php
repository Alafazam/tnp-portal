<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiters extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        if (!$this->session->userdata('logged_in')){ 
                redirect('login', 'refresh');                              
        }
    }
    
    function index()
    {
                 
    $result = $this->user->loadCompanyList();
    $result2 = $this->user->load_calender();

    $cal = array();

    // var_dump($result2);
    // var_dump($result);
    foreach ($result2 as $value) {
        $cal["".$value['r_id'].""] = $value['date'];
    }
    
    foreach ($result as $value) {
    if (!isset($cal[$value["r_id"]])||!$cal[$value["r_id"]]||$cal[$value["r_id"]]==NULL) {
           $cal[$value["r_id"]] = "Not Decided yet";
       }       
    }

    $data = array('list' => $result,'cal'=>$cal);
    $this->load->template('recruiters_view',$data);

    }

    function view($value='')
    {
        if ($value!=''&& (ctype_digit($value))) 
        {
        $r_id = $value;    
        $result  = $this->user->loadCompanyList($r_id);
        $data= $result[0];
        $result2 = $this->user->load_calender();
        $cal = array();
        foreach ($result2 as $value) {
            $cal["".$value['r_id'].""] = $value['date'];
        }
        
        foreach ($result as $value) {
        if (!isset($cal[$value["r_id"]])||!$cal[$value["r_id"]]||$cal[$value["r_id"]]==NULL) {
               $cal[$value["r_id"]] = "Not Decided yet";
           }       
        }
        $visitingDate = $cal[$r_id];
        
        $jobs = $this->user->getJob($r_id);
        $data['jobs'] = $jobs;
        $data['visit'] =$visitingDate;
        $this->load->template('companyProfile_view',$data);

        } else {
            redirect('recruiters', 'refresh');
        }  

    }
    
}

?>