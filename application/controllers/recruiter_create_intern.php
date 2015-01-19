<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_create_intern extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        if ($this->session->userdata('logged_in'))
            { $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']!=='recruiter') {
                redirect('home', 'refresh');                  
                }
                //if student is logged in ,redirect to student page
            }else{
                redirect('recruiter_login', 'refresh');                  
            }
    }
    
    function index()
    {
        

        if ($this->session->userdata('logged_in')) 
        {    
            $session_data     = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            
            $result = $this->recruiter->load_recruiter_profile();
            $data = $result[0];
            $this->load->template('recruiter_create_new_intern_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function newIntern($value='')
    {
      //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $r_id           = $session_data['r_id'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        $this->form_validation->set_rules('intern_name', 'intern_name', 'trim|xss_clean');
        $this->form_validation->set_rules('training_descr', 'training_descr', 'trim|xss_clean');
        $this->form_validation->set_rules('application_dead_line', 'application_dead_line','trim|xss_clean');
        $this->form_validation->set_rules('loc', 'loc', 'trim|xss_clean');
        $this->form_validation->set_rules('stipend', 'stipend', 'trim|xss_clean');
        $this->form_validation->set_rules('accom', 'accom', 'trim|xss_clean');
        $this->form_validation->set_rules('travel', 'travel', 'trim|xss_clean');
        $this->form_validation->set_rules('facilities', 'facilities', 'trim|xss_clean');
        $this->form_validation->set_rules('shortlist_from_Resumes', 'shortlist_from_Resumes', 'trim|xss_clean');
        $this->form_validation->set_rules('personal_Interview', 'personal_Interview', 'trim|xss_clean');
        $this->form_validation->set_rules('seats', 'seats', 'trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/recruiter_create_intern', 'refresh');

        }
         // FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add
        //query the database
        $postData['intern_name']                    = $this->input->post('intern_name');
        $postData['training_descr']                 = $this->input->post('training_descr');
        $postData['loc']                            = $this->input->post('loc');
        $postData['skills']                         = $this->input->post('skills');
        $postData['application_dead_line']          = $this->input->post('application_dead_line');
        $postData['stipend']                        = $this->input->post('stipend');
        $postData['accom']                          = $this->input->post('accom');
        $postData['travel']                         = $this->input->post('travel');
        $postData['facilities']                     = $this->input->post('facilities');
        $postData['shortlist_from_Resumes']         = $this->input->post('shortlist_from_Resumes');
        $postData['personal_Interview']             = $this->input->post('personal_Interview');
        $postData['seats']                          = $this->input->post('seats');
        // $comma_separated = implode(",", $array);
        $postData['eligible_departments']           = implode(", ",$this->input->post('eligible_departments'));



        $result = $this->recruiter->insert_intern($postData);
        $this->session->set_flashdata('flashSuccess', 'success');
        redirect('/recruiter_myinterns', 'refresh');

    }

    
}

?>