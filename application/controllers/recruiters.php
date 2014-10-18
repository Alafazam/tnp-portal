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
                 
    $result = $this->user->loadCompanyList();
    $data = array('list' => $result );
    $this->load->template('recruiters_view',$data);

    }

    
    function view($value='')
    {
        if ($value!=''&& (ctype_digit($value))) 
        {
        $r_id = $value;    
        $result  = $this->user->loadCompanyList($r_id);
        $data= $result[0];
        
        $jobs = $this->user->getJob($r_id);
        $data['jobs'] = $jobs;
        $this->session->set_flashdata('flashSuccess', 'hello there');
        $this->load->template('test_view',$data);

        } else {
            redirect('recruiters', 'refresh');
        }  

    }
    
}

?>