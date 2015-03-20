<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_view_students extends CI_Controller
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
        
        $this->load->template('admin_view_students_view');
    }

    function load_ajax_shit()
    {
        $this->load->library('form_validation');
        
        // $this->form_validation->set_rules('type'    , 'type'    , 'trim|xss_clean');
        $this->form_validation->set_rules('branch'    , 'branch'    , 'trim|xss_clean');
        
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid Selection');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/admin_view_students', 'refresh');
        }
        //query the database
        // $postData['type']              = $this->input->post('type');
        $postData['branch']            = $this->input->post('branch');
        
         // $postData['branch'];
        $result = $this->admin_model->load_shit_ajax($postData);
        echo  json_encode($result);
    }
    
    
}

?>