<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class calender extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   if ($this->session->userdata('logged_in'))
        { $session_data = $this->session->userdata('logged_in');
        if ($session_data['type']!=='student') {
            redirect('recruiter_home', 'refresh');                  
            }//if recruiter redirect to recruiter page
    }else{
                redirect('login', 'refresh');                  
            }

 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {


    
    $result = $this->user->load_calender();
    $data = array('data' => $result );
     $this->load->template('calender',$data);
     // $this->load->view('test_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
  }


 


}

?>