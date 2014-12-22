<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_edit_details extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);

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
        
    redirect('undercons', 'refresh');
    }

    
    
}

?>