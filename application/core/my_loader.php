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


      $content  = $this->view('templates/header', $vars, $return);
      $content .= $this->view($template_name, $vars, $return);
      $content .= $this->view('templates/footer', $vars, $return);

      if ($return)
      {
        return $content;
    }
}

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