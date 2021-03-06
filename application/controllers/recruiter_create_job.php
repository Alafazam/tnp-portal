<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_create_job extends CI_Controller
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
            $this->load->template('recruiter_create_new_job_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function newJob($value='')
    {
      //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $r_id           = $session_data['r_id'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('job_id', 'job_id', 'trim|xss_clean');        
        $this->form_validation->set_rules('job_desig', 'job_desig', 'trim|xss_clean');
        $this->form_validation->set_rules('job_descr', 'job_descr', 'trim|xss_clean');
        $this->form_validation->set_rules('application_dead_line', 'application_dead_line','trim|xss_clean');
        $this->form_validation->set_rules('place', 'place', 'trim|xss_clean');
        $this->form_validation->set_rules('ctc', 'ctc', 'trim|xss_clean');
        $this->form_validation->set_rules('gross', 'gross', 'trim|xss_clean');
        $this->form_validation->set_rules('bonus', 'bonus', 'trim|xss_clean');
        $this->form_validation->set_rules('bond', 'bond', 'trim|xss_clean');
        $this->form_validation->set_rules('bond_desc', 'bond_desc', 'trim|xss_clean');
        $this->form_validation->set_rules('shortlist_from_Resumes', 'shortlist_from_Resumes', 'trim|xss_clean');
        $this->form_validation->set_rules('written_Test', 'written_Test', 'trim|xss_clean');
        $this->form_validation->set_rules('group_Discussion', 'group_Discussion', 'trim|xss_clean');
        $this->form_validation->set_rules('personal_Interview', 'personal_Interview', 'trim|xss_clean');
        $this->form_validation->set_rules('medical_Test', 'medical_Test', 'trim|xss_clean');
        $this->form_validation->set_rules('number_of_rounds', 'number_of_rounds', 'trim|xss_clean');
        $this->form_validation->set_rules('min_offers', 'min_offers', 'trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/recruiter_create_job', 'refresh');

        }
         // FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add
        //query the database
        $postData['job_desig']              = $this->input->post('job_desig');
        $postData['job_descr']              = $this->input->post('job_descr');
        $postData['application_dead_line']  = $this->input->post('application_dead_line');
        $postData['place']                  = $this->input->post('place');
        $postData['ctc']                    = $this->input->post('ctc');
        $postData['gross']                  = $this->input->post('gross');
        $postData['bonus']                  = $this->input->post('bonus');
        $postData['bond']                   = $this->input->post('bond');
        $postData['bond_desc']              = $this->input->post('bond_desc');
        $postData['shortlist_from_Resumes'] = $this->input->post('shortlist_from_Resumes');
        $postData['written_Test']           = $this->input->post('written_Test');
        $postData['group_Discussion']       = $this->input->post('group_Discussion');
        $postData['personal_Interview']     = $this->input->post('personal_Interview');
        $postData['medical_Test'    ]       = $this->input->post('medical_Test');
        $postData['number_of_rounds']       = $this->input->post('number_of_rounds');
        $postData['min_offers']             = $this->input->post('min_offers');
        // $comma_separated = implode(",", $array);
        $postData['eligible_departments']   = implode(", ",$this->input->post('eligible_departments'));
       


        if ($value=='edit') {
            $postData['job_id'] = $this->input->post('job_id');
            $result = $this->recruiter->edit_job($postData);        
        }else{
            $result = $this->recruiter->insert_job($postData);
        }
        $this->session->set_flashdata('flashSuccess','Sucess');
        redirect('/recruiter_myjobs', 'refresh');

    }

        
}

?>