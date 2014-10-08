<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Aboutme extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    
    function index()
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $username     = $session_data['username'];
            //load about me page
            $result       = $this->user->load_about_me($username);
                $data = array(
                    'id' => $result[0]['id'],
                    'username' => $result[0]['username'],
                    'branch' => $result[0]['branch'],
                    'eca' => $result[0]['ECA'],
                    'Career_obj' => $result[0]['Career_obj'],
                    'Technical_Skills' => $result[0]['Technical_Skills'],
                    'Other_skills' => $result[0]['Other_skills']
                );
            
            $this->load->template('about_me_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        
    }
    
    
    function save($hello)
    {
        //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('EVC', 'eca', 'trim|xss_clean');
        $this->form_validation->set_rules('branch', 'branch', 'trim|xss_clean');
        $this->form_validation->set_rules('Career_obj', 'Career_obj', 'trim|xss_clean');
        $this->form_validation->set_rules('Technical_Skills', 'Technical_Skills', 'trim|xss_clean');
        $this->form_validation->set_rules('Other_skills', 'Other_skills', 'trim|xss_clean');
        
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/aboutme', 'refresh');
        }
        //query the database

        $postData['eca']              = $this->input->post('eca');
        $postData['branch']           = $this->input->post('branch');
        $postData['Career_obj']       = $this->input->post('Career_obj');
        $postData['Technical_Skills'] = $this->input->post('Technical_Skills');
        $postData['Other_skills']     = $this->input->post('Other_skills');
        
        $result = $this->user->_update($username, $postData);
        $this->session->set_flashdata('flashSuccess', 'success');
        redirect('/aboutme', 'refresh');
    }
    
    
    
}

?>