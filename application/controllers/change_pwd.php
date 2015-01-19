
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class change_pwd extends CI_Controller{
	function __construct(){

		parent::__construct();

		if (!$this->session->userdata('logged_in')){	
				redirect('login', 'refresh');
			}
		
		$this->load->model('recruiter','',TRUE);	
		$this->load->model('user', '', TRUE);
	}

	function index()
		{
		
		$this->load->template('change_pwd');
		
		}
	

			// $this->user->resetPassword($username, $this->input->post('password'));
	
	

	function verify()
		{

		// This method will have the credentials validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('c_newpassword', 'C_Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('newpassword', 'NewPassword', 'trim|required|xss_clean,matches[c_newpassword]|min_length[6]');
		$this->form_validation->set_rules('oldpassword', 'Password', 'trim|required|xss_clean|callback_check_database');

		if ($this->form_validation->run() == FALSE)
			{


			$this->session->set_flashdata('message', 'Wrong password');

			// Go to private area
			redirect('change_pwd', 'refresh');

			}
		  else
			{

			$this->session->set_flashdata('message', 'Your password is changed succesfully');

			// Go to private area
			redirect('home', 'refresh');
			}
		}

	function check_database($password)
		{

		// Field validation succeeded.  Validate against database

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		if ($session_data['type']==='student') {
			 $this->user->changePassword($username, $this->input->post('newpassword'));
            }elseif ($session_data['type']==='recruiter') {
			 $this->recruiter->changePassword($username, $this->input->post('newpassword'));
            }

		// query the database

		
		}
	}

?>
