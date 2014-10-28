<?php
class my_loader extends CI_Loader {

  /*public function view($view, $vars = array(), $return = FALSE)
    {
        $CI =& get_instance();

        $CI->load->library("user_agent");

        if($CI->agent->is_mobile()){
            $view = 'mobile/'.$view;
        }

        return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }*/


     


    public function template($template_name, $vars = array(), $return = FALSE)
    {
      $CI =& get_instance();

      if ($CI->session->userdata('logged_in'))
      { 
        $session_data = $CI->session->userdata('logged_in');
            if ($session_data['type']==='student') {
                  $content  = $this->view('templates/header', $vars, $return);
                  $content .= $this->view($template_name, $vars, $return);
                  $content .= $this->view('templates/footer', $vars, $return);
                }elseif ($session_data['type']==='recruiter') {
                  $content  = $this->view('templates/c_header', $vars, $return);
                  $content .= $this->view($template_name, $vars, $return);
                  $content .= $this->view('templates/c_footer', $vars, $return);
                }elseif ($session_data['type']==='admin') {
                  $content  = $this->view('admin/header', $vars, $return);
                  $content .= $this->view('admin/'.$template_name, $vars, $return);
                  $content .= $this->view('admin/footer', $vars, $return);
                }
            }

      
      if ($return)
      {
        return $content;
    }
}

// public function recruiter_template($template_name, $vars = array(), $return = FALSE)
//     {
//       $CI =& get_instance();
//       if ($return)
//       {
//         return $content;
//     }
// }

	// public function opera($template_name, $vars = array(), $return = FALSE)
 //    {
 //        $content  = $this->view('opera/templates/header', $vars, $return);
 //        $content .= $this->view('opera/'.$template_name, $vars, $return);
 //        $content .= $this->view('opera/templates/footer', $vars, $return);

 //        if ($return)
 //        {
 //            return $content;
 //        }
 //    }

}

?>