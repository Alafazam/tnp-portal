<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_profile extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in'))
            { $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']==='student') {
                redirect('home', 'refresh');                  
                }//if recruiter is logged in ,redirect to recruiter page
            }

        if ($this->session->userdata('logged_in')) 
        {    
            $session_data     = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            $result = $this->recruiter->load_recruiter_profile();
            $data = $result[0];
            $this->load->recruiter_template('recruiter_profile_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function view($username='')
    {
        if ($username==='') {
        redirect('profile', 'refresh');
        }

        $result_id = $this->recruiter->get_id($username);
        $id = $result_id[0]['id'];
        if ($id===false||$id===NULL||$id==='') {
             redirect('profile', 'refresh');
        }
        else
        {
            
        }

    }
    
}

?>