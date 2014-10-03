<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Profile extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);

 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->template('personal_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 

 function Aboutme($save)
 {

   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $username = $session_data['username'];
     if ($save=='save') 
     {

     }
     else
     {
       $result = $this->user->load_about_me($username);
       $data = array();
       foreach($result as $row)
       {
        $data = array(
          'id'                      => $row->id,
          'username'                => $row->username,
          'eca'                     => $row->ECA,
          'Career_obj'              => $row->Career_obj,
          'Technical_Skills'        => $row->Technical_Skills,
          'Other_skills'            => $row->Other_skills
          );
      }
      $this->load->template('about_me_view', $data);
    }
  }
  else
  {
     //If no session, redirect to login page
   redirect('login', 'refresh');
 }





}






}

?>