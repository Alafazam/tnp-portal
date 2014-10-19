<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class jobs extends CI_Controller
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
                 
    $result2 = $this->user->loadCompanyList();
    $company_names = array();
    foreach ($result2 as $value) {
        $var = $value['r_id'];
        $company_names[''.$var.''] = $value['Company_name']; 
    }

    $result = $this->user->getJob();
    $data = array(
        'jobs' => $result,
        'company_names'=>$company_names
         );
    
    $this->load->template('jobsList_view',$data);

    }

    
    function view($value='')
    {
        if ($value!=''&& (ctype_digit($value))) 
        {
        $j_id = $value;    
        $result  = $this->user->loadCompanyList($r_id);
        $data= $result[0];
        
        $jobs = $this->user->getjob_all($r_id);
        $data = $jobs[0];
        // $this->session->set_flashdata('flashSuccess', 'hello there');
        $this->load->template('test_view',$data);

        } else {
            redirect('jobs', 'refresh');
        }  

    }
    
}

?>