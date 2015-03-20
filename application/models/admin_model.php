
<?php
Class admin_model extends CI_Model
{
    function login($username, $password) {
        $this->db->select('id,pass');
        $this->db->from('admin');
        $this->db->where('id', $username);
        $this->db->where('pass', MD5($password));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
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
    
    function getjob_all($value) {
        $this->db->select('*');
        $this->db->order_by('application_dead_line', 'desc');
        $this->db->from('job_profiles');
        $this->db->where('job_id', $value);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }


    function getApplications($value)
    {
        $this->db->select('username');
        $this->db->from('applications');
        $this->db->where('job_id', $value);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }

    }
    function getProfiles($value)
    {
        $this->db->select('FNAME,MNAME,LNAME,enroll,year_of_admin,username,branch');
        $this->db->order_by('FNAME', 'ASC');
        // var_dump($value);
        // $string = implode ( ', ' ,array_values($value) );
        // var_dump($string);
        $this->db->where_in('username', $value);
        $this->db->from('users');

        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }

    }


    function countApplications()
    {
        $this->db->select('job_id,COUNT(*) as num');
        $this->db->from('applications');
        $this->db->group_by('job_id');
        $query = $this->db->get();

        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }

    }
    
    function approveJob($job_id, $data) {
        try {
            $query = $this->db->where(array('job_id' => $job_id))->update('job_profiles', $data);
            return $query;
        }
        
        catch(Exception $e) {
            return $e;
        }
    }
    
    // looad all jobs if no parameter is give
    // loads all of a recruiter jobs if only r_id is given
    // loads a pericular job if job_id is also given
    // can not load a job with only job iD
    // further plans -> later everthing will be used by company name
    
    function getJob($value = '', $job_id = '') {
        if ($value != '' && ctype_digit($value)) {
            $r_id = $value;
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('job_profiles');
            
            // $this->db->where('Company_name',$Company_name);
            
            $this->db->where('r_id', $r_id);
            if (!$job_id === '') {
                $this->db->where('job_id', $job_id);
            }
        } else {
            $this->db->select('*');
            $this->db->order_by('application_dead_line', 'desc');
            $this->db->from('job_profiles');
        }
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function load_feeds($value = '') {
        $this->db->select('*');
        $this->db->from('feed');
        $this->db->order_by('date', 'desc');
        if (ctype_digit($value)) {
            $this->db->where('feed_id', $value);
        }
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function delete_recruiter($value)
    {
      $res = array();
    $res["recruiters"]=$this->db->delete('recruiters', array('r_id' => $value));
    $res["job_profiles"]=$this->db->delete('job_profiles', array('r_id' => $value));
    $res["intern_profiles"]=$this->db->delete('intern_profiles', array('r_id' => $value));
    $res["applications"]=$this->db->delete('applications', array('r_id' => $value));
     return $res;
    }
    
    function delete_feed($value) {
        $this->db->delete('feed', array('feed_id' => $value));
    }
    
    function insert_feed($value) {
        try {
            $query = $this->db->insert('feed', $value);
            return $query;
        }
        
        catch(Exception $e) {
            return $e;
        }
    }
    function edit_feed($value) {
        try {
            $query = $this->db->where('feed_id', $value['feed_id'])->update('feed', $value);
            return $query;
        }
        
        catch(Exception $e) {
            return $e;
        }
    }
    
    function create_login($value) {
        if ($value['type'] == 'student') {
            
            // see if user exits.
            
            $query = $this->db->select('username')->from('users')->where('username', $value['username'])->get();
            if ($query->num_rows()) {
                return 'Already Exists';
            } else {
                try {
                    $value2 = array('username' => $value['username'], 'password' => $value['password'], 'enroll' => $value['enroll'], 'year_of_admin' => $value['year_of_admin']);
                    $query = $this->db->insert('users', $value2);
                    return 'Done';
                }
                
                catch(Exception $e) {
                    return $e;
                }
            }
        } elseif ($value['type'] == 'recruiter') {
            $query = $this->db->select('username')->from('recruiters')->where('username', $value['username'])->get();
            if ($query->num_rows()) {
                return 'Already Exists';
            } else {
                try {
                    $value2 = array('username' => $value['username'], 'password' => $value['password']);
                    $query = $this->db->insert('recruiters', $value2);
                    return 'Done';
                }
                
                catch(Exception $e) {
                    return $e;
                }
            }
        } elseif ($value['type'] == 'admin') {
            $query = $this->db->select('username')->from('admin')->where('username', $value['username'])->get();
            if ($query->num_rows()) {
                return 'Already Exists';
            } else {
                try {
                    $value2 = array('username' => $value['username'], 'password' => $value['password']);
                    $query = $this->db->insert('admin', $value2);
                    return 'Done';
                }
                
                catch(Exception $e) {
                    return $e;
                }
            }
        }
    }


    function load_shit_ajax($value)
    {
        $this->db->select('FNAME,MNAME,LNAME,enroll,year_of_admin,username,');
        $this->db->order_by('FNAME', 'ASC');
        $this->db->from('users');
        $this->db->where('branch',$value["branch"]);
        $this->db->where("FNAME !=",'NULL');
        
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
?>
