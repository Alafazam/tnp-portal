
<?php
Class recruiter extends CI_Model
{
  function login($username, $password)
  {
    $this->db->select('r_id, username, password,Company_name');
    $this->db->from('recruiters');
    $this->db->where('username', $username);
    $this->db->where('password', MD5($password));
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->result();
    }
    else {
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
    
    $this->email->message("Please Click the Link below to verify your accoun".base_url("register/verify/".$data['username']."/".$v_id).""); 
    
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
  

  function load_feeds()
  {
    $this->db->select('*');
    $this->db->from('feed');
     $this->db->order_by('date', 'desc');
     //desc
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  // function get_id($username='')
  // {
  //   $this->db->select('r_id');
  //   $this->db->from('recruiters');
  //   $this->db->where('')
  //   $query = $this->db->get();
  //   if ($query->num_rows()) {
  //     return $query->result_array();
  //   }
  //   else {
  //     return false;
  //   }

  

  function _update($username, $data)
  {
    try {
      $query = $this->db->where(array(
        'username' => $username
      ))->update('recruiters', $data);
      return $query;
    }

    catch(Exception $e) {
      return $e;
    }
  }

  function load_recruiter_profile($Company_name='')
  {
    $session_data = $this->session->userdata('logged_in');
    $r_id = $session_data['r_id'];
    $this->db->select('*');
    $this->db->from('recruiters');
    if ($Company_name==='') {
      $this->db->where('r_id',$r_id);      
    }else{
      $this->db->where('Company_name',$Company_name);
    }
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }
 
  function insert_job($data='')
  {
    $session_data = $this->session->userdata('logged_in');
    $r_id = $session_data['r_id'];
    $data['r_id']  = $r_id;
    $this->db->insert('job_profiles', $data);  
  }

//loads all job if value is not given ,load ony specific job if Job_id is given
  function getJob($value='')
  {
    $session_data = $this->session->userdata('logged_in');
    $r_id = $session_data['r_id'];
    $this->db->select('*');
    $this->db->order_by('application_dead_line', 'desc');  
    $this->db->from('job_profiles');
    if ($value==='') {
      // $this->db->where('Company_name',$Company_name);
      $this->db->where('r_id',$r_id);      
    }else{
      // $this->db->where('Company_name',$Company_name);
      $this->db->where('job_id',$value);   
      $this->db->where('r_id',$r_id);         
    }
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function delete_job($value='')
  {
    $session_data = $this->session->userdata('logged_in');
    if (ctype_digit($value)) {   
    $r_id = $session_data['r_id'];
    $this->db->where('r_id',$r_id);
    $this->db->delete('job_profiles', array('job_id' => $value));
    } 
  }



}






?>
