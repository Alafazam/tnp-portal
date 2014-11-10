<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class interns extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('recruiter', '', TRUE);
        if ($this->session->userdata('logged_in')){ 
            // if user exists give access
            $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']=='recruiter') {
                redirect('recruiter_home', 'refresh');                  
            }elseif ($session_data['type']=='admin') {
                # code...
            }
        }else{
                redirect('login', 'refresh');                              
        }
    }
    
    function index()
    {
                 
    $result2 = $this->user->loadCompanyList();
    $company_names = array();
    foreach ($result2 as $value) {
        $var = $value['r_id'];
        $company_names[''.$var.''] = $value['Company_name']; 
    }

    $result = $this->user->getintern();
    $data = array(
        'interns' => $result,
        'company_names'=>$company_names
         );
    
    $this->load->template('internsList_view',$data);

    }

    
    function view($value='')
    {
        if ($value!=''&& (ctype_digit($value))) 
        {
        $intern_id = $value;    
        $interns = $this->user->getintern_all($intern_id);
        $r_id = $interns[0]["r_id"];
        $result2=   $this->user->loadCompanyList($r_id);
        $application = $this->user->my_applications_load($intern_id);
        $company_name = $result2[0]["Company_name"];
        $data =  array('intern' => $interns[0],'company_name'=>$company_name,'application'=>$application[0] );
        // $this->session->set_flashdata('flashSuccess', 'hello there');
        $this->load->template('applyintern',$data);

        } else {
            redirect('interns', 'refresh');
        }  

    }
    
    function apply()
    {
        $this->load->library('form_validation');    
        $this->form_validation->set_rules('username', 'username', 'trim|xss_clean|required');
        $this->form_validation->set_rules('intern_id', 'intern_id', 'trim|xss_clean|required');
        $this->form_validation->set_rules('r_id', 'r_id', 'trim|xss_clean|required');
        $this->form_validation->set_rules('date', 'date', 'trim|xss_clean|required');
        $this->form_validation->set_rules('cover_letter', 'cover_letter', 'trim|xss_clean');

        $data = array(
        'username'       =>  $this->input->post('username'),
        'job_id'         =>  $this->input->post('intern_id'),
        'r_id'           =>  $this->input->post('r_id'),
        'date'           =>  $this->input->post('date'),
        'cover_letter'   =>  $this->input->post('cover_letter'),
        'type'           =>  1
        );
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('message', 'Registraion failed try again');
            redirect('home', 'refresh');
        }
        else
        {
            $this->user->applicationApply($data);
            $this->session->set_flashdata('message', 'You have successfully applied for the intern');
            redirect('home', 'refresh');
        }

    }


}

?>