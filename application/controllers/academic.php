<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Academic  extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user', '', TRUE);

 }

 function index()
 {
   if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $username     = $session_data['username'];
            $this->load->template('academic_view');
                     
            // $this->load->view('test_view', $data);
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
        $this->form_validation->set_rules('school_name1' ,'school_name1', 'trim|xss_clean');
        $this->form_validation->set_rules('year1'        ,'year1'       , 'trim|xss_clean');
        $this->form_validation->set_rules('percentage1'  ,'percentage1' , 'trim|xss_clean');
        $this->form_validation->set_rules('board1'       ,'board1'      , 'trim|xss_clean');
        $this->form_validation->set_rules('school_name2','school_name2', 'trim|xss_clean');
        $this->form_validation->set_rules('year2'       ,'year2'       , 'trim|xss_clean');
        $this->form_validation->set_rules('percentage2' ,'percentage2' , 'trim|xss_clean');
        $this->form_validation->set_rules('board2'      ,'board2'      , 'trim|xss_clean');
        $this->form_validation->set_rules('quota'       ,'school_name3', 'trim|xss_clean');
        $this->form_validation->set_rules('category'    ,'board3'      , 'trim|xss_clean');
        $this->form_validation->set_rules('air'         ,'percentage3' , 'trim|xss_clean');
        $this->form_validation->set_rules('year3'       ,'year3'       , 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('flashError', 'Error.');
            redirect('/educational', 'refresh');
        }
        //query the database
                  $data1['school_name']  = $this->input->post('school_name1');
                  $data1['year']         = $this->input->post('year1');
                  $data1['percentage']   = $this->input->post('percentage1');
                  $data1['board']        = $this->input->post('board1');
                  $data2['school_name']  = $this->input->post('school_name2');
                  $data2['year']         = $this->input->post('year2');
                  $data2['percentage']   = $this->input->post('percentage2');
                  $data2['board']        = $this->input->post('board2');
                  $data3['school_name']  = $this->input->post('quota');
                  $data3['board']        = $this->input->post('category');
                  $data3['percentage']   = $this->input->post('air');
                  $data3['year']         = $this->input->post('year3');
        $result1 = $this->user->_update_school($data1,1);
        $result2 = $this->user->_update_school($data2,2);
        $result3 = $this->user->_update_school($data3,3);
        $this->session->set_flashdata('flashSuccess', 'hello');
        redirect('/educational', 'refresh');  }








}
?>