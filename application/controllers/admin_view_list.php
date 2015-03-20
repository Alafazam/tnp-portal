<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_view_list extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        $this->load->model('admin_model', '', TRUE);
        if ($this->session->userdata('logged_in')){ 
            $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']!=='admin') {
                redirect('login', 'refresh');                              
            }
        }else{
            redirect('login', 'refresh');                              

        }
    }
   
    function index()
    {
    $result = $this->admin_model->loadCompanyList();
    $result2 = $this->user->load_calender();
    $cal = array();

    foreach ($result2 as $value) {
        $cal[$value['r_id']] = $value['date']; 
    }


    foreach ($result as $value) {
    if (!isset($cal[$value["r_id"]])||!$cal[$value["r_id"]]||$cal[$value["r_id"]]==NULL) {
           $cal[$value["r_id"]] = "Not Decided yet";
       }  
    }

    $data = array('result' => $result,'cal' => $cal );
    $this->load->template('admin_lists_view',$data);


    }


    function action_delete($value)
    {
        if (ctype_digit($value)) {
            $this->admin_model->delete_recruiter($value);
            $this->session->set_flashdata('message', 'Success.');
        } else {
            $this->session->set_flashdata('message', 'Nope. Just Nope.');
        }
        redirect('/admin_view_list', 'refresh');
    }

    
    
}

?>