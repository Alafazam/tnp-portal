<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();

//we need to call PHP's session object to access it through CI
class admin_jobs extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        $this->load->model('admin_model', '', TRUE);
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            if ($session_data['type'] !== 'admin') {
                redirect('login', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }
    
    function index() {
        
        $result2       = $this->admin_model->loadCompanyList();
        $company_names = array();
        foreach ($result2 as $value) {
            $var           = $value['r_id'];
            $company_names['' . $var . '']               = $value['Company_name'];
        }
        
        $result        = $this->admin_model->getJob();
        $result2         = $this->admin_model->countApplications();

        $count  = array();
        foreach ($result2 as $value) {
          $job = $value["job_id"];
          $c = $value["num"];
          $count[$job] = $c;
        }

        $data          = array(
            'jobs' => $result,
            'company_names' => $company_names,
            'count' => $count
        );
        
        $this->load->template('admin_jobsList_view', $data);
    }
    
    function view($value        = '') {
        if ($value != '' && (ctype_digit($value))) {
            
            $job_id       = $value;
            $jobs         = $this->admin_model->getjob_all($job_id);
            $r_id         = $jobs[0]["r_id"];
            $result2      = $this->user->loadCompanyList($r_id);
            $company_name = $result2[0]["Company_name"];
            $data         = array(
                'job' => $jobs[0],
                'company_name' => $company_name
            );
            
            $this->load->template('applyJob', $data);
        } else {
            redirect('admin_jobs', 'refresh');
        }
    }
    
    function applicants($value) {
        if ($value != '' && (ctype_digit($value))) {
            $usernames = $this->admin_model->getApplications($value);
            $dat = array();
            foreach ($usernames as $key => $value) {
              array_push($dat,$value["username"]);
            }
            // var_dump($dat);
            $users = $this->admin_model->getProfiles($dat);
            $data = array('users'=>$users);
            $this->load->template('admin_job_applicants_view', $data);


        } else {
            redirect('admin_jobs', 'refresh');
        }
    }
    
    function approveJob($value  = '') {
        if ($value == '') {
            $value  = $this->input->post('job_id');
        }
        if ($value != '' && (ctype_digit($value))) {
            
            $job_id = $value;
            $jobs   = $this->admin_model->getjob_all($job_id);
            
            if ($jobs[0]['approved'] == '1') {
                $res    = $this->admin_model->approveJob($job_id, array(
                    'approved'        => '0'
                ));
            } else {
                $res    = $this->admin_model->approveJob($job_id, array(
                    'approved' => '1'
                ));
            }
            redirect('admin_jobs', 'refresh');
        }
        redirect('admin_jobs', 'refresh');
    }
}
?>