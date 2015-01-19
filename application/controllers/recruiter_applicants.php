<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_applicants extends CI_Controller
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
            
            $users =  $this->recruiter->get_students();
            $student_jobs = array();
            foreach ($users as $key => $value) {
                $student_jobs[''.$key.''] = $value['job_id'];
            }
            $alljobs = $this->recruiter->getJob();
            $jobs = array();
            if ($alljobs) {
                foreach ($alljobs as $value) {
                    $jobs[''.$value['job_id'].''] = $value['job_desig'] ;
                }
            }
            $data = array('jobs' =>$jobs ,'student_jobs'=>$student_jobs,'users'=>$users);
                
            $this->load->template('recruiter_applicants_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    // function view($value='')
    // {
    //     if ($value!='') 
    //     {    
    //         $session_data  = $this->session->userdata('logged_in');
    //         $username = $session_data['username'];
    //         $Company_name = $session_data['Company_name'];
    //         $j_id = $value;
    //         $result = $this->recruiter->getJob($j_id);
    //         $data = $result[0];
    //         $branches = $data['eligible_departments'];
    //         $data['eligible_departments'] = explode(',', $branches);
    //         $this->load->template('recruiter_create_new_job_view', $data);
    //     } else {
    //         //If no session, redirect to login page
    //         redirect('recruiter_myjobs', 'refresh');
    //     }  
    // }

    function delete($username,$job_id)
    {
        if (ctype_digit($username)&&ctype_digit($job_id)) {
        $result = $this->recruiter->delete_application($username,$job_id);
        $this->session->set_flashdata('flashSuccess', 'Success');
        }else{
            $this->session->set_flashdata('message', 'invalid action');
        }
        redirect('recruiter_applicants', 'refresh');

    }
   

    
}

?>