<?php
Class User extends CI_Model
{	
	function updateUser($data){
		if($session_data = $this->session->userdata('logged_in')){
			try{
				$this->db->where('username', $session_data['username']);
				$this->db->update('users', $data); 
			}
			catch(Exception $e){
				// TODO : Display error message
			}
		}
	}
	
	function getUsername(){
		if($session_data = $this->session->userdata('logged_in')){
			return $session_data['username'];
		}
		else{
			return false;
		}
	}
	
	function getUser(){
		// TODO : Optimize
		
		if($session_data = $this->session->userdata('logged_in')){
			$query=$this->db->get_where('users',array('username'=> $session_data['username']));
			$data= array();
			$result = $query->result();
			foreach($result as $row){
				$data =array(
					'username' => $row->username,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'email' => $row->email,
					'cell' => $row->cell,
					'college' => $row->college,
					'batch' => $row->batch,
					'branch' => $row->branch,
					'gender' => $row->gender,
					'accomodation' => $row->accomodation
				);
			}
			return $data;
		}
		else
			return FALSE;
	}
	
	function isLoggedIn(){
		if($session_data = $this->session->userdata('logged_in')){
			return TRUE;
		}
		return false;
	}
	
	
	function login($username, $password)
	{
		$query=$this -> db ->get_where('users', array('username'=>$username,'password'=>$password)); // TODO : Optimize this query

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	
	function register($data){
		$this->load->library('email');
		$this->email->from('no-reply@techvaganza.org', 'Techvaganza');
		$this->email->to($data['email']);
		
		$this->email->subject('Verification e-mail');
		
		$v_id= md5($data['username'].time());
		
		$this->db->insert('verification_queue',array(
			'username'=>$data['username'],
			'v_code' => $v_id
		));
		
		$this->email->message("Please Click the Link below to verify your account
".base_url("register/verify/".$data['username']."/".$v_id)."");	
		
		$this->email->send();
		try{
			$query =  $this -> db -> insert('users',$data) ;
			$this->load->template('message_view',
			array(
				'message'=>"<p class='clearfix'>An Email verification has been sent to your email id,".
									" please verify your email before you continue</p>\n".
									"<p class='clearfix'>If you have not received our email, wait for a few minutes or check your spam folder</p>".
									"<a href='/'><input type='submit' value='Go to Homepage'/></a>"
			));
		}
		catch(Exception $e){
			redirect('register','refresh');
		}
	}
	
	function isNotVerified($username){
		$query=$this->db->get_where('verification_queue',array(
			'username'=>$username
		));
		if($query->num_rows()>=1){
			// Not verified
			foreach($query->result() as $row)
				return $row->v_code;
		}
		
		return false;
	}
	
	function resetPassword($username,$password){
		
		$this->db	->where('username', $username ) 
					->update('users', array('password'=>$password)); 
					
		$this->db	->delete('pwd_reset',array('username'=>$username));
	}
	
	
	function update($data){
		try{
			if($username=$this->getUsername()){
				$query =  $this -> db	-> where(array('username'=>$username)) 
										-> update('users',$data) ;
				redirect('home/profile','refresh');
			}
			else{
			}
		}
		catch(Exception $e){
			redirect('home','refresh');
		}
	}
	
}
?>