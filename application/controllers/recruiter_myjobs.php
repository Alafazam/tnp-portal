<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_myjobs extends CI_Controller
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
            { $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']==='student') {
                redirect('home', 'refresh');                  
                }//if recruiter is logged in ,redirect to recruiter page
            }

        if ($this->session->userdata('logged_in')) 
        {    
            $session_data     = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            $feeddata = $this->recruiter->getJob();
            $data   = array(
              'jobs'=> $feeddata
          );
            $this->load->recruiter_template('recruiter_myjobs', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function save($value='')
    {
         //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $r_id           = $session_data['r_id'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        $this->form_validation->set_rules('Company_name'    , 'Company_name'    , 'trim|xss_clean');
        $this->form_validation->set_rules('url'             , 'url'             , 'trim|xss_clean');
        $this->form_validation->set_rules('website_link'    , 'website_link'    , 'trim|xss_clean');
        $this->form_validation->set_rules('Company_Type'    , 'Company_Type'    , 'trim|xss_clean');
        $this->form_validation->set_rules('Industry_Sector' , 'Industry_Sector' , 'trim|xss_clean');
        $this->form_validation->set_rules('Brief'           , 'Brief'           , 'trim|xss_clean');
        $this->form_validation->set_rules('offer'           , 'offer'           , 'trim|xss_clean');
       
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/recruiter_profile', 'refresh');

        }
         // FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add
        //query the database
        $postData['Company_name']                   = $this->input->post('Company_name');
        $postData['url'    ]                        = $this->input->post('url');
        $postData['website_link']                   = $this->input->post('website_link');
        $postData['Company_Type']                   = $this->input->post('Company_Type');
        $postData['Industry_Sector']                = $this->input->post('Industry_Sector');
        $postData['Brief']                      = $this->input->post('Brief');
        $postData['offer']                      = $this->input->post('offer');
        $result = $this->recruiter->_update($username, $postData);
        $this->session->set_flashdata('flashSuccess', 'success');
        redirect('/recruiter_profile', 'refresh');
    }

    function view($username='')
    {
        if ($username==='') {
        redirect('profile', 'refresh');
        }

        $result_id = $this->recruiter->get_id($username);
        $id = $result_id[0]['id'];
        if ($id===false||$id===NULL||$id==='') {
             redirect('profile', 'refresh');
        }
        else
        {
            
        }

    }
    
}

?>