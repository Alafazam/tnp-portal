<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();

//we need to call PHP's session object to access it through CI
class recruiter_visit extends CI_Controller
{
        
        function __construct() {
                parent::__construct();
                $this->load->model('user', '', TRUE);
                $this->load->model('recruiter', '', TRUE);
                
                if ($this->session->userdata('logged_in')) {
                        $session_data = $this->session->userdata('logged_in');
                        if ($session_data['type'] === 'student') {
                                redirect('home', 'refresh');
                        }
                        
                        //if student is logged in ,redirect to student page
                        
                        
                } else {
                        redirect('recruiter_login', 'refresh');
                }
        }
        
        function index() {
                
                if ($this->session->userdata('logged_in')) {
                        $session_data = $this->session->userdata('logged_in');
                        $username     = $session_data['username'];
                        $Company_name = $session_data['Company_name'];
                        $result       = $this->recruiter->visits();
                        $data         = array(
                                'data' => $result
                        );
                        $this->load->template('recruiter_visit_list_view', $data);
                } else {
                        
                        //If no session, redirect to login page
                        redirect('login', 'refresh');
                }
        }
        
        function plan($value  = '') {
                if ($this->session->userdata('logged_in')) {
                        $result = $this->recruiter->get_unplanned_jobs();
                        $data = array('jobs',$result);
                        $this->load->template('recruiter_plan_view',$data);
                } else {
                        
                        //If no session, redirect to login page
                        redirect('login', 'refresh');
                }
        }
        
        function save() {
                $session_data = $this->session->userdata('logged_in');
                $username     = $session_data['username'];
                $Company_name = $session_data['Company_name'];
                $r_id         = $session_data['r_id'];


                $this->load->library('form_validation');
                $this->form_validation->set_rules('date', 'date', 'trim|xss_clean');
                $this->form_validation->set_rules('number_of_members', 'number_of_members', 'trim|xss_clean');
                $this->form_validation->set_rules('number_of_rooms', 'number_of_rooms', 'trim|xss_clean');
                $this->form_validation->set_rules('other_requirements', 'other_requirements', 'trim|xss_clean');
                $this->form_validation->set_rules('contact_name', 'contact_name', 'trim|xss_clean');
                $this->form_validation->set_rules('contact_designation', 'contact_designation', 'trim|xss_clean');
                $this->form_validation->set_rules('contact_email', 'contact_email', 'trim|xss_clean');
                $this->form_validation->set_rules('contact_number', 'contact_number', 'trim|xss_clean');
                $this->form_validation->set_rules('job_id', 'job_id', 'trim|xss_clean');
                
                $postData['date']        = $this->input->post('date');
                $postData['number_of_members']        = $this->input->post('number_of_members');
                $postData['number_of_rooms']        = $this->input->post('number_of_rooms');
                $postData['other_requirements']        = $this->input->post('other_requirements');
                $postData['contact_name']        = $this->input->post('contact_name');
                $postData['contact_designation']        = $this->input->post('contact_designation');
                $postData['contact_email']        = $this->input->post('contact_email');
                $postData['contact_number']        = $this->input->post('contact_number');
                $postData['job_id']        = $this->input->post('job_id');
                
                
                $result = $this->recruiter->visit_update($postData);
                
                // var_dump($postData);
                $this->session->set_flashdata('message', 'Sucess');
                redirect('/recruiter_visit', 'refresh');
        }
        
        function view($value) {
                if (ctype_digit($value)) {
                        
                        $session_data = $this->session->userdata('logged_in');
                        $result       = $this->recruiter->visits($value);
                        $data         = $result[0];
                        $this->load->template('recruiter_plan_view', $data);
                } else {
                        redirect('recruiter_visit', 'refresh');
                }
        }
        
        function cancle() {
                
                // if (ctype_digit($username)&&ctype_digit($job_id)) {
                // $result = $this->recruiter->delete_application();
                // $this->session->set_flashdata('flashSuccess', 'Success');
                // }
                // $this->session->set_flashdata('message', 'invalid action');
                // redirect('recruiter_applicants', 'refresh');
                
                
        }
}
?>