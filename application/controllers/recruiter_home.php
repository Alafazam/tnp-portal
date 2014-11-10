<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class recruiter_home extends CI_Controller {

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
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['Company_name'] = $session_data['Company_name'];

     $feeddata = $this->recruiter->load_feeds();
     $data   = array(
              'feeds'=> $feeddata
          );
     $this->load->template('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('recruiter_login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('recruiter_login', 'refresh');
 }

}

?>