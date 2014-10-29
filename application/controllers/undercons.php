<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class undercons extends CI_Controller
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
        {    
            $this->load->template('underconstruction');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
        
}

?>