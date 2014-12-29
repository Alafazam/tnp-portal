<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class myapplications extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        if ($this->session->userdata('logged_in')){ 
            // if user exists give access
            $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']!=='student') {
                redirect('recruiter_home', 'refresh');                  
            }
        }else{
                redirect('login', 'refresh');                              
        }
    }
    
    function index()
    {
                 
    
    $result = $this->user->my_applications_load();
    $result1 = $this->user->getJob();
    $result2 = $this->user->loadCompanyList();
    
    $jobs = array();
    if ($result1) {
        foreach ($result1 as $key => $value) {
            $jobs[$value['job_id']] = $value;
        }
    }

    $company_names =  array();
    if ($result2) {
        foreach ($result2 as $key => $value) {
        $company_names[$value['r_id']] = $value['Company_name'];
        }
    }

    $data = array(
        'jobs' => $jobs,
        'application' => $result,
        'company_names'=>$company_names
         );
    
    $this->load->template('myapplications_view',$data);

    }

    
    function delete($value)
    {
        if ($value!=''&& (ctype_digit($value))) 
        {
            $job_id = $value;    
            $jobs = $this->user->delete_application($job_id);
        $this->session->set_flashdata('message', 'Success');
        } 
        redirect('myapplications', 'refresh');

    }

    
    
    


}

?>