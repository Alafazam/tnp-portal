<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class personal extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   if ($this->session->userdata('logged_in'))
        { $session_data = $this->session->userdata('logged_in');
        if ($session_data['type']!=='student') {
            redirect('recruiter_home', 'refresh');                  
            }//if recruiter redirect to recruiter page
    }
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $result       = $this->user->load_personal();
      // $data = array('fname'=>var_dump($result));
        $data = array(
          'fname'       => $result[0]['FNAME'] ,
          'mname'       => $result[0]['MNAME'] ,
          'lname'       => $result[0]['LNAME'] ,
          'gender'      => $result[0]['gender'] ,
          'dob'         => $result[0]['dob'],
          'addl1'       => $result[0]['AddressL1'] ,
          'addl2'       => $result[0]['AddressL2'] ,
          'city'        => $result[0]['City'] ,
          'phone'       => $result[0]['Phone'] ,
          'email_add'   => $result[0]['Email_add'] 
          );
      
     $this->load->template('personal_view', $data);
     // $this->load->view('test_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
  }


  function save($hello)
    {
        //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $id           = $session_data['id'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        $this->form_validation->set_rules('fname'    , 'fname'    , 'trim|xss_clean');
        $this->form_validation->set_rules('mname'    , 'mname'    , 'trim|xss_clean');
        $this->form_validation->set_rules('lname'    , 'lname'    , 'trim|xss_clean');
        $this->form_validation->set_rules('gender'   , 'gender'   , 'trim|xss_clean');
        $this->form_validation->set_rules('dob'      , 'dob'      , 'trim|xss_clean');
        $this->form_validation->set_rules('addl1'    , 'addl1'    , 'trim|xss_clean');
        $this->form_validation->set_rules('addl2'    , 'addl2'    , 'trim|xss_clean');
        $this->form_validation->set_rules('city'     , 'city'     , 'trim|xss_clean');
        $this->form_validation->set_rules('phone'    , 'phone'    , 'trim|xss_clean');
        $this->form_validation->set_rules('email_add', 'email_add', 'trim|xss_clean');
        
        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/personal', 'refresh');
        }
        // FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add
        //query the database
        $postData['FNAME'    ]              = $this->input->post('fname');
        $postData['MNAME'    ]              = $this->input->post('mname');
        $postData['LNAME'    ]              = $this->input->post('lname');
        $postData['gender'   ]              = $this->input->post('gender');
        $postData['dob'      ]              = $this->input->post('dob');
        $postData['AddressL1'    ]              = $this->input->post('addl1');
        $postData['AddressL2'    ]              = $this->input->post('addl2');
        $postData['City'     ]              = $this->input->post('city');
        $postData['Phone'    ]              = $this->input->post('phone');
        $postData['Email_add']              = $this->input->post('email_add');
        $result = $this->user->_update($username, $postData);
        $this->session->set_flashdata('flashSuccess', 'success');
        redirect('/personal', 'refresh');
    }
    



}

?>