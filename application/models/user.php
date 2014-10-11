
<?php
Class User extends CI_Model
{
  function login($username, $password)
  {
    $this->db->select('id, username, password,fname');
    $this->db->from('users');
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

  function get_username($id='')
  {
    if ($id==='') {
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    }
    $this->db->select('id,username');
    $this->db->from('users');
    $this->db->where('id',$id);
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function get_id($username='')
  {
   if ($username==='') {
    $username = $session_data['username'];
    }
    $this->db->select('id,username');
    $this->db->from('users');
    $this->db->where('username',$username);
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function get_userurl($id='')
  {
    # TODO 
    # 1. make url column in users table
    # 2. make function for making url out of students's fname,mname,lanme or think of better option
    # 3. checl that url is not duplicate
    # 4. implement it so that we can see anyones profile by profiles/studenturl
    # 5. same for companies
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

  function _update($username, $data)
  {
    try {
      $query = $this->db->where(array(
        'username' => $username
      ))->update('users', $data);
      return $query;
    }

    catch(Exception $e) {
      return $e;
    }
  }


  function load_about_me($id='')
  {
    if ($id==='') {
    $session_data = $this->session->userdata('logged_in');  
    $id = $session_data['id'];
    }

    $this->db->select('id,username,branch,ECA,Career_obj,Technical_Skills,Other_skills');
    $this->db->from('users');
    $this->db->where('id', $id);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }


  function load_personal($id='')
  {
    if ($id==='') {
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    }

    $this->db->select('FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add');
    $this->db->from('users');
    $this->db->where('id', $id);
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function load_acad($id='')
  {
    if ($id==='') {
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    }
    $this->db->select('id,cursem,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,supply,back,reason');
    // $this->db->select('dob');
    $this->db->from('academic');
    $this->db->where('id', $id);
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }


  function load_edu($id='')
  {
    if ($id==='') {
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    }
    
    $this->db->select('*');
    $this->db->from('school_details');
    $this->db->where('student_id', $id);
    $this->db->limit(3);
    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function _update_school($data,$type)
  {
    $session_data = $this->session->userdata('logged_in');
    $id     = $session_data['id'];
    
    try {
      $query = $this->db->where(array(
        'student_id' => $id,
        'type' => $type
      ))->update('school_details', $data);
      return $query;
    }

    catch(Exception $e) {
      return $e;
    }
  }

  function _update_acad($data)
  {
    $session_data = $this->session->userdata('logged_in');
    $id     = $session_data['id'];
    
    try {
      $query = $this->db->where(array(
        'id' => $id,
      ))->update('academic', $data);
      return $query;
    }

    catch(Exception $e) {
      return $e;
    }
  }






}






?>
