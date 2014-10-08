<?php $data= $this->session->userdata('logged_in'); $flashSuccess =$this->session->flashdata('flashSuccess'); $username=$data['username']; ?>
<!--   <pre>i am just here for tesing purposes</pre> -->
<form class="form-horizontal">
    <fieldset>
        <!-- Form Name -->
        <legend>Personal Details</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fname">First Name</label>
            <div class="col-md-4">
                <pre><?php if ($fname) {  echo $fname ;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mname">Middle Name</label>
            <div class="col-md-4">
                <pre><?php if ($mname) {  echo $mname ;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Last Name</label>
            <div class="col-md-4">
                <pre><?php if ($lname) {  echo $lname ;}?></pre>
            </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gender">Gender</label>
            <div class="col-md-4">
                <pre><?php if ($gender==='M'){echo 'Male' ;} ?><?php if ($gender==='F'){echo 'Female' ;} ?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="dob">Date of Birth</label>
            <div class="col-md-4">
                <pre><?php if ($dob) {  echo $dob ;}?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="addl1">Address Line 1</label>
            <div class="col-md-4">
                <pre><?php if ($addl1) {  echo $addl1 ;}?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="addl2">Address Line 2</label>
            <div class="col-md-4">
                <pre><?php if ($addl2) {  echo $addl2 ;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-4">
                <pre><?php if ($city) {  echo $city ;}?></pre>
            </div>
        </div>
        <!-- Prepended text-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="phone">Phone</label>
            <div class="col-md-4">
                <pre><?php if ($phone) { echo $phone ;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email_add">Email Address</label>
            <div class="col-md-4">
                <pre><?php if ($email_add) { echo $email_add ;}?></pre>
            </div>
        </div>

        <legend>Semester wise SGPA</legend>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cursem">Current Semester</label>
            <div class="col-md-4">
                <pre><?php if ($cursem) {echo $cursem;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="sem1">Semester I</label>
            <div class="col-md-2">
                <pre><?php if ($sem1) {echo $sem1;}?></pre>
            </div>
            <label class="col-md-2 control-label" for="sem2">Semester II</label>
            <div class="col-md-2">
                <pre><?php if ($sem2) {echo $sem2;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="sem3">Semester III</label>
            <div class="col-md-2">
                <pre><?php if ($sem3) {echo $sem3;}?></pre>
            </div>
            <label class="col-md-2 control-label" for="sem4">Semester IV</label>
            <div class="col-md-2">
                <pre><?php if ($sem4) {echo $sem4;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="sem5">Semester V</label>
            <div class="col-md-2">
                <pre><?php if ($sem5) {echo $sem5;}?></pre>
            </div>
            <label class="col-md-2 control-label" for="sem6">Semester VI</label>
            <div class="col-md-2">
                <pre><?php if ($sem6) {echo $sem6;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="sem7">Semester VII</label>
            <div class="col-md-2">
                <pre><?php if ($sem7) {echo $sem7;}?></pre>
            </div>
            <label class="col-md-2 control-label" for="sem8">Semester VIII</label>
            <div class="col-md-2">
                <pre><?php if ($sem8) {echo $sem8;}?></pre>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="supply">Supplementary</label>
            <div class="col-md-2">
                <pre><?php if ($supply) {echo $supply;}?></pre>
            </div>
            <label class="col-md-2 control-label" for="back">Backlog</label>
            <div class="col-md-2">
                <pre><?php if ($back) {echo $back;}?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="reason">Reason for Supplementary/ Backlog If Any</label>
            <div class="col-md-4">
                <pre><?php if ($reason) {echo $reason;}?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cgpa">Overall CGPA</label>
            <div class="col-md-4">
                <pre><?php if ($cgpa) {echo $cgpa;}?></pre>
            </div>
        </div>


        <!-- Form Name -->
        <legend>About Me</legend>
        <!-- ECA,Career_obj,Technical_Skills,Other_skills -->
        <!-- Textarea -->

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="branch">Branch</label>
            <div class="col-md-4">
                <pre><?php if($branch){ echo $branch ;} ?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Career_obj">Career objectives</label>
            <div class="col-md-4">
                <pre><?php if($eca){echo $Career_obj ;} ?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Technical_Skills">Technical Skills</label>
            <div class="col-md-4">
                <pre><?php if($eca){echo $Technical_Skills ;} ?></pre>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Other_skills">Other Skills</label>
            <div class="col-md-4">
                <pre><?php if($eca){echo $Other_skills ;} ?></pre>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="eca">Extra Curricular Activities</label>
            <div class="col-md-4">
                <pre><?php if($eca){echo $eca ;} ?></pre>
            </div>
        </div>



        <!-- Form Name -->
        <legend>Educational Details</legend>
        <h4 class="text-center">
            <small>12th Standard</small>
        </h4>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="school_name1">School Name</label>
            <div class="col-md-6">
                <pre><?php if ($school_name1) {echo $school_name1 ;}?></pre>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="year1">Year of passing</label>
            <div class="col-md-4">
                <pre><?php if($year1){ echo $year1;} ?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="board1">Board</label>
            <div class="col-md-4">
                <pre><?php if($board1){ echo $board1 ;} ?></pre>
            </div>
        </div>
        <!-- Appended Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="percentage1">Aggregate</label>
            <div class="col-md-4">
                <pre><?php if($percentage1){ echo $percentage1 ;} ?></pre>
            </div>
        </div>

        <h4 class="text-center">
            <small>10th Standard</small>
        </h4>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="school_name2">School Name</label>
            <div class="col-md-6">
                <pre><?php if($school_name2){ echo $school_name2 ;} ?></pre>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="year2">Year of passing</label>
            <div class="col-md-4">
                <pre><?php if($year2){ echo $year2 ;} ?></pre>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="board2">Board</label>
            <div class="col-md-4">
                <pre><?php if($board2){ echo $board2 ;} ?></pre>
            </div>
        </div>
        <!-- Appended Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="percentage2">Aggregate</label>
            <div class="col-md-4">
                <pre><?php if($percentage2){ echo $percentage2 ;} ?></pre>
            </div>
        </div>

        <h4 class="text-center">
            <small>Entrance Exam</small>
        </h4>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="air">AIR</label>
            <div class="col-md-4">
                <pre><?php if($air){ echo $air ;} ?></pre>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="year3">Year</label>
            <div class="col-md-4">
                <pre><?php if($year3){ echo $year3 ;} ?></pre>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="quota">Quota</label>
            <div class="col-md-4">
                <pre><?php if($quota){ echo $quota ;} ?></pre>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="category">Category</label>
            <div class="col-md-4">
                <pre><?php if($category){ echo $category ;} ?></pre>
            </div>
        </div>


    </fieldset>
</form>
