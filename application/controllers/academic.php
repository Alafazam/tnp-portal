<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Academic  extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user', '', TRUE);
   if ($this->session->userdata('logged_in'))
        { $session_data = $this->session->userdata('logged_in');
        if ($session_data['type']!=='student') {
            redirect('recruiter_home', 'refresh');                  
            }//if recruiter redirect to recruiter page
    }

 }

 function index()
 {
   if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $username     = $session_data['username'];
            $result       = $this->user->load_acad();
              $data = array(
                'id'    => $result[0]['id'],
                'cursem'  => $result[0]['cursem'],
                'sem1'  => $result[0]['sem1'],
                'sem2'  => $result[0]['sem2'],
                'sem3'  => $result[0]['sem3'],
                'sem4'  => $result[0]['sem4'],
                'sem5'  => $result[0]['sem5'],
                'sem6'  => $result[0]['sem6'],
                'sem7'  => $result[0]['sem7'],
                'sem8'  => $result[0]['sem8'],
                'cgpa'  => $result[0]['cgpa'],
                'supply'=> $result[0]['supply'],
                'back'  => $result[0]['back'],
                'reason'=> $result[0]['reason']
                 );

            $this->load->template('academic_view',$data);
                     
            // $this->load->view('test_view', var_dump($data));
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        
 }


  function save()
  {
    //save about me page
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $id           = $session_data['id'];
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('id'    ,'id'     ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem1'  ,'sem1'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('cursem'  ,'cursem'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem2'  ,'sem2'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem3'  ,'sem3'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem4'  ,'sem4'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem5'  ,'sem5'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem6'  ,'sem6'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem7'  ,'sem7'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('sem8'  ,'sem8'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('cgpa'  ,'cgpa'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('supply','supply' ,'trim|xss_clean') ;
        $this->form_validation->set_rules('back'  ,'back'   ,'trim|xss_clean') ;
        $this->form_validation->set_rules('reason','reason' ,'trim|xss_clean') ;

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/academic', 'refresh');
        }
        //query the database
                $data = array(
                'cursem'  => $this->input->post('cursem'),
                'sem1'  => $this->input->post('sem1'),
                'sem2'  => $this->input->post('sem2'),
                'sem3'  => $this->input->post('sem3'),
                'sem4'  => $this->input->post('sem4'),
                'sem5'  => $this->input->post('sem5'),
                'sem6'  => $this->input->post('sem6'),
                'sem7'  => $this->input->post('sem7'),
                'sem8'  => $this->input->post('sem8'),
                'cgpa'  => $this->input->post('cgpa'),
                'supply'=> $this->input->post('supply'),
                'back'  => $this->input->post('back'),
                'reason'=> $this->input->post('reason')
                 );

        $result3 = $this->user->_update_acad($data);
        $this->session->set_flashdata('flashSuccess', 'hello');
        redirect('/academic', 'refresh');  
  }

}



?>