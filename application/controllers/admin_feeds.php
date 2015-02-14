<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_feeds extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        $this->load->model('admin_model', '', TRUE);
        $this->load->library('form_validation');
        
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
        $this->load->template('admin_create_feed');
    }
    



    function save($value='')
    {
        
        $this->form_validation->set_rules('heading'   , 'heading', 'trim|xss_clean');
        $this->form_validation->set_rules('date'    , 'date' , 'trim|xss_clean');
        $this->form_validation->set_rules('type'     , 'type'  , 'trim|xss_clean');
        $this->form_validation->set_rules('data'    , 'data' , 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('message', 'Error.Please Try again');
            redirect('/admin_feeds', 'refresh');

        }

        $postData['heading']    = $this->input->post('heading');
        $postData['date' ]    = $this->input->post('date');
        $postData['type'  ]    = $this->input->post('type');
        $postData['data' ]    = $this->input->post('data');

        $result = $this->admin_model->insert_feed($postData);
        $this->session->set_flashdata('message', 'Success');
        redirect('/admin_feeds', 'refresh');


    }
    
}

?>