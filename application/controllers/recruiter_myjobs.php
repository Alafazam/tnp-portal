<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_myjobs extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);

        if ($this->session->userdata('logged_in'))
            { $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']==='student') {
                redirect('home', 'refresh');                  
                }//if student is logged in ,redirect to student page
            }
    }
    
    function index()
    {
        

        if ($this->session->userdata('logged_in')) 
        {    
            $session_data     = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            $feeddata = $this->recruiter->getJob();
            $data   = array(
              'jobs'=> $feeddata
          );
            $this->load->recruiter_template('recruiter_myjobs', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function view($value='')
    {
        if ($value!='') 
        {    
            $session_data  = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            $j_id = $value;
            $result = $this->recruiter->getJob($j_id);
            $data = $result[0];
            $branches = $data['eligible_departments'];
            $data['eligible_departments'] = explode(',', $branches);
            $this->load->recruiter_template('recruiter_create_new_job_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('recruiter_myjobs', 'refresh');
        }  
    }


    
}

?>