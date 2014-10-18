<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_myinterns extends CI_Controller
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
            $feeddata = $this->recruiter->getIntern();
            $data   = array(
              'interns'=> $feeddata
          );
            $this->load->template('recruiter_myinterns_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    
    function view($value='')
    {
        if ($value!='') 
        {    
            $session_data  = $this->session->userdata('logged_in');
            $username = $session_data['username'];
            $Company_name = $session_data['Company_name'];
            $intern_id = $value;
            $result = $this->recruiter->getIntern($intern_id);
            $data = $result[0];
            $branches = $data['eligible_departments'];
            $data['eligible_departments'] = explode(',', $branches);
            $this->load->template('recruiter_create_new_intern_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('recruiter_myinterns', 'refresh');
        }  

    }

    function delete($value='')
    {
        if (ctype_digit($value)) {
        $result = $this->recruiter->delete_intern($value);
        $this->session->set_flashdata('flashSuccess', 'success');
        }
        redirect('recruiter_myinterns', 'refresh');

    }
    
}

?>