
<?php
Class admin_model extends CI_Model
{
  function login($username, $password)
  {
    $this->db->select('id,pass');
    $this->db->from('admin');
    $this->db->where('id', $username);
    $this->db->where('pass', MD5($password));
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->result();
    }
    else {
      return false;
    }
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
  function insert_feed($value)
    {
            
     try {
      $query = $this->db->insert('feed',$value);
      return $query;
      }
     catch(Exception $e) {
        return $e;
      }

    }



}

?>
