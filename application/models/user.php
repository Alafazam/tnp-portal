
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


  function load_about_me($username)
  {
    $this->db->select('id, username,ECA,Career_obj,Technical_Skills,Other_skills');
    $this->db->from('users');
    $this->db->where('username', $username);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function load_edu()
  {
    $session_data = $this->session->userdata('logged_in');
    $id     = $session_data['id'];
    
    $this->db->select('*');
    $this->db->from('school_details');
    // $this->db->join('users', 'users.id = student_details.id', 'inner');
    $this->db->where('student_id', '1');
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



  function load_personal()
  {
    $session_data = $this->session->userdata('logged_in');
    $id       = $session_data['id'];
    $username =$session_data['username'];
    $this->db->select('FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add');
    // $this->db->select('dob');
    $this->db->from('users');
    $this->db->where('id', $id);
    $this->db->where('username', $username);
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows()) {
      return $query->result_array();
    }
    else {
      return false;
    }
  }

  function load_acad()
  {
    $session_data = $this->session->userdata('logged_in');
    $id       = $session_data['id'];
    $username =$session_data['username'];
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




}






?>
