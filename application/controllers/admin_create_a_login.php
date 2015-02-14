<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_create_a_login extends CI_Controller
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
        }
    }
    
    function index()
    {
        
            $this->load->template('admin_create_a_login');
    }


    function create()
    {
       $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('newpassword', 'Password', 'trim|required|xss_clean|min_length[6]|md5');
        $this->form_validation->set_rules('c_newpassword', 'Password Confirmation', 'trim|xss_clean|matches[newpassword]');
        $this->form_validation->set_rules('type', 'type', 'trim|xss_clean');
        $this->form_validation->set_rules('username', 'username', 'trim|xss_clean');
        
        if ($this->input->post('type')=='student') {
        $this->form_validation->set_rules('enroll', 'enroll', 'trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('year_of_admin', 'year_of_admin', 'trim|xss_clean|numeric|required');
        }
        if ($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('message','Invalid values');    
                redirect('admin', 'refresh');

            }
          else
            {

            
                $data = array(
                    'type' =>$this->input->post('type'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('newpassword'),
                     );
                if ($data['type']=='student') {
                    $data['enroll'] = $this->input->post('enroll');
                    $data['year_of_admin'] = $this->input->post('year_of_admin');
                    
                }
                $res = $this->admin_model->create_login($data);
                    $this->session->set_flashdata('message',$res);    
                    redirect('admin_create_a_login', 'refresh');

            }
    }

    
    
}

?>