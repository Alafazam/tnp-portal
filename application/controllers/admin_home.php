<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class admin_home extends CI_Controller{
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
      session_stop();
      redirect('admin', 'refresh');     
    }
  }


  

}


?>

