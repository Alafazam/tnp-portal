
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	function __construct(){

		parent::__construct();

		if ($this->session->userdata('logged_in')){	
			// if user exists give access
			$session_data = $this->session->userdata('logged_in');
			if ($session_data['type']==='student') {
				redirect('home', 'refresh');
			}else{
				redirect('recruiter_home', 'refresh');					
			}
		}

		$this->load->model('user', '', TRUE);
	}

	function password(){

		if ($this->input->post('email') != ''){ 

			// if user already entered email
			// get email from form

			$email = $this->input->post('email');
			$username = "";

			// validate if it exists in our record

			$this->db->select('username');
			$this->db->where(array(
				'Email_add' => $email
			));

			$this->db->limit(1);
			$query = $this->db->get('users');
			$result = $query->result();

			
			if ($query->num_rows() == 1){ // if user exists 

				foreach($result as $row){
					$username = $row->username;
				}

				$this->load->library('email');
				$this->email->from('no-reply@nitsri.net', 'TNP');
				$this->email->to($email);
				$this->email->subject('Password Reset e-mail');
				$v_id = md5($username . time() . "reset"); //reset hash
				$this->db->select('email');
				$this->db->where(array(
					'email' => $email
				));

				$this->db->limit(1);
				$query = $this->db->get('pwd_reset');
				if ($query->num_rows() == 1){ // if pwd reset already requested

					$this->db->where(array(
						'email' => $email
					));
					$this->db->update('pwd_reset', array(
						'username' => $username,
						'v_id' => $v_id
					));
				}else{ // if pwd reset not requested

					$this->db->insert('pwd_reset', array(
						'username' => $username,
						'v_id' => $v_id,
						'email' => $email
					));
				}

				$this->email->message("Please Click the Link below to reset your password \n" . base_url("login/reset/" . $username . "/" . $v_id) . "");
				$this->email->send();
				$this->load->view('password_reset', array(
					'message' => 'Password Reset email has been sent to ' . $email
				)); // Display pwd reset form
			}else{

				$this->load->view('password_reset', array(
					'message' => $email . ' does not exist in our database. You may register first.'
				)); // TODO show user a way to create account
			}
		}else{ // if user entered email
			$this->load->view('password_reset', array(
				'message' => ""
			));
		}
	}

	function reset($username = 0, $v_id = 0)
		{
		$query = $this->db->select('username')->where(array(
			'username' => $username,
			'v_id' => $v_id
		))->limit(1)->get('pwd_reset');
		if (!$query->num_rows())
			{
			$this->session->set_flashdata('flashSuccess', 'Link might have expired. Please try again');
            redirect('login', 'refresh');
			return false;
			}

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|md5');
		$this->form_validation->set_rules('c_password', 'Password Confirmation', 'trim|xss_clean|matches[password]');
		if ($this->form_validation->run() == FALSE)
			{

			// Field validation failed.

			$this->load->view('pwd_reset');
			}
		  else
			{
			$this->user->resetPassword($username, $this->input->post('password'));
	        $this->session->set_flashdata('message', 'Your password has been reset. Please Login with your new password');
            redirect('login', 'refresh');
			}
		}

	function index()
		{
		$this->load->helper(array(
			'form'
		));
		$this->load->view('login_view');
		}

	function verify()
		{

		// This method will have the credentials validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		if ($this->form_validation->run() == FALSE)
			{

			// Field validation failed.  User redirected to login page

			$this->session->set_flashdata('message', 'Wrong username password');
						redirect('login', 'refresh');

			// $this->load->view("login_view",array('message' => 'Wrong username password' ));

			}
		  else
			{

			// Go to private area

			redirect('home', 'refresh');
			}
		}

	function check_database($password)
		{

		// Field validation succeeded.  Validate against database

		$username = $this->input->post('username');

		// query the database

		$result = $this->user->login($username, $password);
		if ($result)
			{
			$sess_array = array();
			foreach($result as $row)
				{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username,
					'fname' => $row->fname,
					'type'=> 'student'
				);
				$this->session->set_userdata('logged_in', $sess_array);
				}

			return TRUE;
			}
		  else
			{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
			}
		}
	}

?>
