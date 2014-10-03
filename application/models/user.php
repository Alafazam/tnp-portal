
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
      return $query->result();
    }
    else {
      return false;
    }
  }

  
}

?>
