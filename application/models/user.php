
<?php
Class User extends CI_Model
{
    function login($username, $password) {
        $this->db->select('id, username, password,fname');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    function resetPassword($username, $password) {
        
        $this->db->where('username', $username)->update('users', array(
            'password' => $password
        ));
        
        $this->db->delete('pwd_reset', array(
            'username' => $username
        ));
    }
    function changePassword($username, $password) {
        
        $this->db->where('username', $username)->update('users', array(
            'password'              => MD5($password)
        ));
    }
    
    function get_username($id           = '') {
        if ($id === '') {
            $session_data = $this->session->userdata('logged_in');
            $id           = $session_data['id'];
        }
        $this->db->select('id,username');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function get_id($username = '') {
        if ($username === '') {
            $username = $session_data['username'];
        }
        $this->db->select('id,username');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function _genrate($id, $table) {
        $this->db->select('id');
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return false;
        } else {
            if ($table === 'school_details') {
                $this->db->insert($table, array(
                    'id' => $id,
                    'type' => '1'
                ));
                $this->db->insert($table, array(
                    'id' => $id,
                    'type' => '2'
                ));
                $this->db->insert($table, array(
                    'id' => $id,
                    'type' => '3'
                ));
            } else {
                $this->db->insert($table, array(
                    'id' => $id
                ));
            }
            return true;
        }
    }
    
    function get_userurl($id = '') {
        // TODO
        // 1. make url column in users table
        // 2. make function for making url out of students's fname,mname,lanme or think of better option
        // 3. checl that url is not duplicate
        // 4. implement it so that we can see anyones profile by profiles/studenturl
        // 5. same for companies
        
    }
    
    //for students
    //only shows approved jobs
    function getjob_all($value) {
        $this->db->select('*');
        $this->db->order_by('application_dead_line', 'desc');
        $this->db->from('job_profiles');
        $this->db->where('approved', '1');
        $this->db->where('job_id', $value);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function getintern_all($value) {
        $this->db->select('*');
        $this->db->order_by('application_dead_line', 'desc');
        $this->db->from('intern_profiles');
        $this->db->where('approved', '1');
        $this->db->where('intern_id', $value);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    //looad all jobs if no parameter is give
    //loads all of a recruiter jobs if only r_id is given ,loads a pericular job if job_id is also given
    //loads only approved job
    //can not load a job with only job iD
    //further plans -> later everthing will be used by company name
    function getJob($value  = '', $job_id = '') {
        if ($value != '' && ctype_digit($value)) {
            $r_id   = $value;
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('job_profiles');
            
            // $this->db->where('Company_name',$Company_name);
            $this->db->where('r_id', $r_id);
            $this->db->where('approved', '1');
            if (!$job_id === '') {
                $this->db->where('job_id', $job_id);
            }
        } else {
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('job_profiles');
            $this->db->where('approved', '1');
        }
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function getintern($value     = '', $intern_id = '') {
        if ($value != '' && ctype_digit($value)) {
            $r_id      = $value;
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('intern_profiles');
            
            // $this->db->where('Company_name',$Company_name);
            $this->db->where('r_id', $r_id);
            $this->db->where('approved', '1');
            if (!$intern_id === '') {
                $this->db->where('intern_id', $intern_id);
            }
        } else {
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('intern_profiles');
            $this->db->where('approved', '1');
        }
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function load_feeds() {
        $this->db->select('*');
        $this->db->from('feed');
        $this->db->where('type', '1');
        $this->db->or_where('type', '3');
        
        $this->db->order_by('date', 'desc');
        
        //desc
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function _update($username, $data) {
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
    
    function load_about_me($id           = '') {
        if ($id === '') {
            $session_data = $this->session->userdata('logged_in');
            $id           = $session_data['id'];
        }
        
        $this->db->select('id,username,branch,ECA,Career_obj,Technical_Skills,Other_skills');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function load_personal($id           = '') {
        if ($id === '') {
            $session_data = $this->session->userdata('logged_in');
            $id           = $session_data['id'];
        }
        
        $this->db->select('FNAME,MNAME,LNAME,gender,dob,AddressL1,AddressL2,City,Phone,Email_add,enroll,year_of_admin');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function load_acad($id           = '') {
        if ($id === '') {
            $session_data = $this->session->userdata('logged_in');
            $id           = $session_data['id'];
        }
        $this->db->select('id,cursem,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,supply,back,reason');
        
        // $this->db->select('dob');
        $this->db->from('academic');
        $this->db->where('id', $id);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function load_edu($id           = '') {
        if ($id === '') {
            $session_data = $this->session->userdata('logged_in');
            $id           = $session_data['id'];
        }
        
        $this->db->select('*');
        $this->db->from('school_details');
        $this->db->where('id', $id);
        $this->db->limit(3);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function _update_school($data, $type) {
        $session_data = $this->session->userdata('logged_in');
        $id           = $session_data['id'];
        
        try {
            $query        = $this->db->where(array(
                'id' => $id,
                'type' => $type
            ))->update('school_details', $data);
            return $query;
        }
        
        catch(Exception $e) {
            return $e;
        }
    }
    
    function _update_acad($data) {
        $session_data = $this->session->userdata('logged_in');
        $id           = $session_data['id'];
        
        try {
            $query        = $this->db->where(array(
                'id' => $id,
            ))->update('academic', $data);
            return $query;
        }
        
        catch(Exception $e) {
            return $e;
        }
    }
    
    function loadCompanyList($value = '') {
        $this->db->select('recruiters.r_id, Company_name, offer, website_link, Company_type,Industry_Sector,Brief,branch as branchez');
        $this->db->from('recruiters');
        if ($value != '') {
            $this->db->where('recruiters.r_id', $value);
        }
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function applicationApply($value) {
        
        $this->db->insert('applications', $value);
    }
    function my_applications_load($value  = '') {
        $this->db->from('applications');
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $this->db->where('username', $username);
        $this->db->where('type', 0);
        
        if ($value != '') {
            $this->db->where('job_id', $value);
        }
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function delete_application($value) {
        $session_data = $this->session->userdata('logged_in');
        $username     = $session_data['username'];
        $this->db->where('username', $username);
        $this->db->delete('applications', array(
            'job_id'       => $value
        ));
    }
    
    function load_calender($value = '') {
        $this->db->select('r_id,date,Company_name');
        $this->db->where("visit",1);
        $this->db->from('job_profiles');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
