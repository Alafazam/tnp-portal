<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user', '', TRUE);
   if ($this->session->userdata('logged_in'))
        { 
          $session_data = $this->session->userdata('logged_in');
        if ($session_data['type']==='recruiter') {
              redirect('recruiter_home', 'refresh');                  
            }elseif ($session_data['type']=='admin') {
              redirect('admin', 'refresh');                  
            }
    }else{
                redirect('login', 'refresh');                  
            }


 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['fname'] = $session_data['fname'];

     $feeddata = $this->user->load_feeds();
     $data   = array(
              'feeds'=> $feeddata
          );
     $this->load->template('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>