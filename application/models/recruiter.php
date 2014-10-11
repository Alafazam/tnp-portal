
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


 


}






?>
