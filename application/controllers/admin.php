
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class admin extends CI_Controller{
	function __construct(){

		parent::__construct();
		$this->load->model('admin_model', '', TRUE);
	}

	function index(){


		$session_data = $this->session->userdata('logged_in');

		if ($this->session->userdata('logged_in') and $session_data['type']==='admin'){
			
			$feeddata = $this->admin_model->load_feeds();
 			$data   = array(
              'feeds'=> $feeddata
          );
			$this->load->template('admin_home',$data);
		}
		else{
			$this->load->helper(array(
				'form'
			));
			$this->load->view('admin_login');			
		}
	}

	function verify(){

		// This method will have the credentials validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		if ($this->form_validation->run() == FALSE){
				$this->load->view("admin_login");
		}
		else{
				redirect('admin', 'refresh');
		}
	}

	function check_database($password){

		// Field validation succeeded.  Validate against database

		$username = $this->input->post('username');

		// query the database

		$result = $this->admin_model->login($username, $password);
		if ($result){

			$sess_array = array();
			foreach($result as $row){

				$sess_array = array(
					'id' => $row->id,
					'type'   => 'admin'
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}

			return TRUE;
		}
		else{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

	function logout(){

		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/', 'refresh');

	}
}

?>
