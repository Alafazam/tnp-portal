<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class profile extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in'))
            { $session_data = $this->session->userdata('logged_in');
            if ($session_data['type']!=='student') {
                redirect('recruiter_home', 'refresh');                  
                }//if recruiter is logged in ,redirect to recruiter page
        }
        if ($this->session->userdata('logged_in')) {
            $result1 = $this->user->load_personal();
            // $data = array('fname'=>var_dump($result));
            $data1   = array(
                'allowedit'=>true,
                'fname' => $result1[0]['FNAME'],
                'mname' => $result1[0]['MNAME'],
                'lname' => $result1[0]['LNAME'],
                'gender' => $result1[0]['gender'],
                'dob' => $result1[0]['dob'],
                'addl1' => $result1[0]['AddressL1'],
                'addl2' => $result1[0]['AddressL2'],
                'city' => $result1[0]['City'],
                'phone' => $result1[0]['Phone'],
                'email_add' => $result1[0]['Email_add'],
                'enroll' => $result1[0]['enroll'],
                'year_of_admin'=>$result1[0]['year_of_admin']
            );
            
            $result2 = $this->user->load_about_me();
            $data2   = array(
                'id' => $result2[0]['id'],
                'username' => $result2[0]['username'],
                'branch' => $result2[0]['branch'],
                'eca' => $result2[0]['ECA'],
                'Career_obj' => $result2[0]['Career_obj'],
                'Technical_Skills' => $result2[0]['Technical_Skills'],
                'Other_skills' => $result2[0]['Other_skills']
            );
            
            $result3 = $this->user->load_acad();
            $data3   = array(
                'id' => $result3[0]['id'],
                'cursem' => $result3[0]['cursem'],
                'sem1' => $result3[0]['sem1'],
                'sem2' => $result3[0]['sem2'],
                'sem3' => $result3[0]['sem3'],
                'sem4' => $result3[0]['sem4'],
                'sem5' => $result3[0]['sem5'],
                'sem6' => $result3[0]['sem6'],
                'sem7' => $result3[0]['sem7'],
                'sem8' => $result3[0]['sem8'],
                'cgpa' => $result3[0]['cgpa'],
                'supply' => $result3[0]['supply'],
                'back' => $result3[0]['back'],
                'reason' => $result3[0]['reason']
            );
            
            $result4 = $this->user->load_edu();
            // 'student_id','school_name','type','year','percentage','board'
            $data4   = array(
                'school_name1' => $result4[0]['school_name'],
                'year1' => $result4[0]['year'],
                'percentage1' => $result4[0]['percentage'],
                'board1' => $result4[0]['board'],
                'school_name2' => $result4[1]['school_name'],
                'year2' => $result4[1]['year'],
                'percentage2' => $result4[1]['percentage'],
                'board2' => $result4[1]['board'],
                'quota' => $result4[2]['school_name'],
                'year3' => $result4[2]['year'],
                'air' => $result4[2]['percentage'],
                'category' => $result4[2]['board']
            );
            
            $data1 = array_merge($data1,$data2);
            $data1 = array_merge($data1,$data3);
            $data1 = array_merge($data1,$data4);


            $this->load->template('profile_view', $data1);
            // $this->load->view('test_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function view($username='')
    {
        if ($username===''&& !ctype_digit($username)) {
        redirect('profile', 'refresh');
        }

        $result_id = $this->user->get_id($username);
        $id = $result_id[0]['id'];
        if ($id===false||$result_id===false) {
             redirect('profile', 'refresh');
        }
        else{
            $result1 = $this->user->load_personal($id);
                // $data = array('fname'=>var_dump($result));
                $data1   = array(
                    'allowedit'=>false,
                    'fname' => $result1[0]['FNAME'],
                    'mname' => $result1[0]['MNAME'],
                    'lname' => $result1[0]['LNAME'],
                    'gender'=> $result1[0]['gender'],
                    'dob'   => $result1[0]['dob'],
                    'addl1' => $result1[0]['AddressL1'],
                    'addl2' => $result1[0]['AddressL2'],
                    'city' => $result1[0]['City'],
                    'phone' => $result1[0]['Phone'],
                    'email_add' => $result1[0]['Email_add'],
                    'enroll' => $result1[0]['enroll'],
                    'year_of_admin' => $result1[0]['year_of_admin']
                );
                
                $result2 = $this->user->load_about_me($id);
                $data2   = array(
                    'id' => $result2[0]['id'],
                    'username' => $result2[0]['username'],
                    'branch' => $result2[0]['branch'],
                    'eca' => $result2[0]['ECA'],
                    'Career_obj' => $result2[0]['Career_obj'],
                    'Technical_Skills' => $result2[0]['Technical_Skills'],
                    'Other_skills' => $result2[0]['Other_skills']
                );
                
                $result3 = $this->user->load_acad($id);
                $data3   = array(
                    'id' => $result3[0]['id'],
                    'cursem' => $result3[0]['cursem'],
                    'sem1' => $result3[0]['sem1'],
                    'sem2' => $result3[0]['sem2'],
                    'sem3' => $result3[0]['sem3'],
                    'sem4' => $result3[0]['sem4'],
                    'sem5' => $result3[0]['sem5'],
                    'sem6' => $result3[0]['sem6'],
                    'sem7' => $result3[0]['sem7'],
                    'sem8' => $result3[0]['sem8'],
                    'cgpa' => $result3[0]['cgpa'],
                    'supply' => $result3[0]['supply'],
                    'back' => $result3[0]['back'],
                    'reason' => $result3[0]['reason']
                );
                
                $result4 = $this->user->load_edu($id);
                // 'student_id','school_name','type','year','percentage','board'
                $data4   = array(
                    'school_name1' => $result4[0]['school_name'],
                    'year1' => $result4[0]['year'],
                    'percentage1' => $result4[0]['percentage'],
                    'board1' => $result4[0]['board'],
                    'school_name2' => $result4[1]['school_name'],
                    'year2' => $result4[1]['year'],
                    'percentage2' => $result4[1]['percentage'],
                    'board2' => $result4[1]['board'],
                    'quota' => $result4[2]['school_name'],
                    'year3' => $result4[2]['year'],
                    'air' => $result4[2]['percentage'],
                    'category' => $result4[2]['board']
                );
                
                $data1 = array_merge($data1,$data2);
                $data1 = array_merge($data1,$data3);
                $data1 = array_merge($data1,$data4);


                $this->load->template('profile_view', $data1);
            }

    }
    
}

?>