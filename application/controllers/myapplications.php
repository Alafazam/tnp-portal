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
                 
    
    $application = $this->user->my_applications_load();
    $jobs = $this->user->getJob();
    // $result2 = $this->user->loadCompanyList();
    
    // $jobs = array();
    // if ($result1) {
    //     foreach ($result1 as $key => $value) {
    //         $jobs[$value['job_id']] = $value;
    //     }
    // }

    
    $data = array(
        'jobs' => $jobs,
        'application' => $application,
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