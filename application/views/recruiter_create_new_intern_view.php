<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');

if (!isset($approved)) {
$approved = 0;
}
$eligible = array();
if (isset($eligible_departments)) {   
    foreach ($eligible_departments as $key => $value) {
        $eligible[$key] = $value;
    }
}
?>
<link rel="stylesheet" type="text/css" media="screen"href="/css/datepicker.css">
<script type="text/javascript"src="/js/datepicker.js"></script>
<script type="text/javascript" src="/js/datetimepicker.pt-BR.js"></script>
<style>.form-control[readonly] {
     cursor: text;
}</style>


<form class="form-horizontal" role="form" action="recruiter_create_intern/newIntern" method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Internship Profile</legend>

        <!-- Internship Name Text input-->
         <div class="form-group">
            <label class="col-md-4 control-label" for="Internship Name">Internship Name</label>
            <div class="col-md-4">
                <input required   <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($intern_name)) { echo "value='".$intern_name."'"; } ?> id="Internship Name" name="intern_name" type="text" placeholder="Internship Name" class="form-control input-md"  >

            </div>
        </div>

        <!-- Training Project Details  Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Training Project Details">Description</label>
            <div class="col-md-4">
                <textarea  id="Training Project Details" <?php if ($approved) { echo "readonly"; } ?> name="training_descr"  type="text" required  placeholder="Training Project Details" class="form-control input-md"><?php if (isset($training_descr)) { echo "".$training_descr.""; } ?></textarea>

            </div>
        </div>

        <!-- skills Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="skills">Skills</label>
            <div class="col-md-4">
                <textarea  id="skills" <?php if ($approved) { echo "readonly"; } ?> name="skills"  type="text" required  placeholder="Skills required" class="form-control input-md"><?php if (isset($skills)) { echo "".$skills.""; } ?></textarea>

            </div>
        </div>


        <!-- Location of Training Text input-->
       <div class="form-group">
            <label class="col-md-4 control-label" for="Location of Training">Place</label>
            <div class="col-md-4">
                <input required id="Location of Training" <?php if ($approved) { echo "readonly"; } ?>  name="loc" <?php if (isset($loc)) { echo "value='".$loc."'"; } ?> type="text" placeholder="Location of Training" class="form-control input-md">

            </div>
        </div>

    
        <div class="form-group">
          <label for="last_date" class="col-md-4 control-label">Application Deadline</label>
          <div id="datetimepicker1"   class="input-append input-group date col-md-4">
            <input required <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($application_dead_line)) { echo "value='".$application_dead_line."'"; } ?> name="application_dead_line" class="form-control " data-format="yyyy-MM-dd hh:mm:ss" type="text">
            <span class="add-on input-group-addon">
              <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
            </span>
          </div>
      </div>
      <?php 
      if (!$approved) {
      echo 
      "<script type='text/javascript'>
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
</script>";
}
    ?>

        <legend>Facilities</legend>

        <!-- <h4 class="text-center"><small>Salary Details</small></h4> -->

    
        <!--Stipend(In Rs/Month) Text input-->
       <div class="form-group">
            <label class="col-md-4 control-label" for="Stipend(In Rs/Month)">Stipend</label>
            <div class="col-md-4">
                <input <?php if (isset($stipend)) { echo "value='".$stipend."'"; } ?>  required id="Stipend(In Rs/Month)" <?php if ($approved) { echo "readonly"; } ?> required name="stipend" type="text" placeholder="In Rs/Month" class="form-control input-md">

            </div>
        </div>

   
        <!-- Accomodation Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Accomodation">Accomodation</label>
            <div class="col-md-4">
                <select id="Accomodation" <?php if (isset($accom)) { echo "value='".$accom."'"; } ?>  <?php if ($approved) { echo "readonly"; } ?> name="accom" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>


        <!--  Travel Allowances Select Basic -->
       <div class="form-group">
            <label class="col-md-4 control-label" for="Travel Allowances">Travel Allowances</label>
            <div class="col-md-4">
                <select id="Travel Allowances" <?php if (isset($travel)) { echo "value='".$travel."'"; } ?>  <?php if ($approved) { echo "readonly"; } ?> name="travel" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>


        <!-- Other Facilities Textarea -->
      <div class="form-group">
            <label class="col-md-4 control-label" for="Other Facilities">Other Facilities</label>
            <div class="col-md-4">
                <textarea class="form-control" id="Other Facilities" <?php if ($approved) { echo "readonly"; } ?> placeholder="Other Facilities"  name="facilities"><?php if (isset($facilities)) { echo "".$facilities.""; } ?></textarea>
                <!-- <span class="help-block"></span>  -->
            </div>
        </div>


        <!-- <h4 class="text-center"><small></small></h4> -->
        <legend>Selection Process</legend>


        <!-- Resume Select Basic -->
       <div class="form-group">
            <label class="col-md-4 control-label" for="Shortlist from Resumes">Shortlist from Resumes</label>
            <div class="col-md-4">
                <select id="Shortlist from Resumes"  <?php if ($approved) { echo "readonly"; } ?> name="shortlist_from_Resumes" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Interview Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Personal Interview">Personal Interview</label>
            <div class="col-md-4">
                <select id="Personal_Interview" name="personal_Interview" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

     
   
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Seats offered:">Number of Seats Offered:</label>
            <div class="col-md-4">
                <input required id="Number of Seats offered" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($seats)) { echo "value='".$seats."'"; } ?> name="seats" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- eligible deptt Multiple Checkboxes -->
         <div class="form-group">
            <label class="col-md-4 control-label" for="Eligible">Eligible Departments and Programs</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="Eligible-0">
                        <input  type="checkbox"  name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-0" <?php if(isset($eligible_departments) && (in_array("CHE", $eligible))){ echo "checked = 'checked' " ;} ?> value="CHE">Chemical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-1">
                        <input  type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-1" <?php if(isset($eligible_departments) && (in_array("CE", $eligible))){ echo "checked = 'checked' " ;} ?> value="CE">Civil Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-2">
                        <input type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-2" <?php if(isset($eligible_departments) && (in_array("CSE", $eligible))){ echo "checked = 'checked' " ;} ?> value="CSE">Computer Science &amp; Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-3">
                        <input type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-3" <?php if(isset($eligible_departments) && (in_array("IT", $eligible))){ echo "checked = 'checked' " ;} ?> value="IT">Information Technology
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-4">
                        <input type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-4" <?php if(isset($eligible_departments) && (in_array("ECE", $eligible))){ echo "checked = 'checked' " ;} ?> value="ECE">Electronics and Communication Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-5">
                        <input type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-5" <?php if(isset($eligible_departments) && (in_array("EE", $eligible))){ echo "checked = 'checked' " ;} ?> value="EE">Electrical Engineering
                    </label>
                </div>

                <?php if ($approved) { echo 
                '<div class="checkbox" hidden>
                    <label for="Eligible-6" hidden>
                        <input type="checkbox" hidden checked name="eligible_departments[]"  id="Eligible-6" value="MEC">
                    </label>
                </div>';
                }
                ?>
                <div class="checkbox" >
                    <label for="Eligible-6" >
                        <input type="checkbox"  name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-6" <?php if(isset($eligible_departments) && (in_array("MEC", $eligible))){ echo "checked = 'checked' " ;} ?> value="MEC">Mechanical Engineering</label>
                </div>

                <div class="checkbox">
                    <label for="Eligible-7">
                        <input type="checkbox" name="eligible_departments[]" <?php if ($approved) { echo "disabled"; } ?> id="Eligible-7" <?php if(isset($eligible_departments) && (in_array("MME", $eligible))){ echo "checked = 'checked' " ;} ?> value="MEE">Metallurgical and Materials Engineering
                    </label>
                </div>
            </div>
        </div>

        <!-- <h4 class="text-center"><small>Logistics Requirements</small></h4> -->

       <legend> Logistics Requirements</legend>
<!-- Other Requirements (If Any) -->

        <div class="form-group">
            <label class="col-md-4 control-label" for="Requirements (If Any)">Requirements (If Any)</label>
            <div class="col-md-4">
                <textarea class="form-control" id="Requirements (If Any)" <?php if ($approved) { echo "readonly"; } ?> placeholder="Requirements (If Any)"  name="l_requirements"><?php if (isset($l_requirements)) { echo "".$l_requirements.""; } ?></textarea>
                <!-- <span class="help-block"></span>  -->
            </div>
        </div>

        
       <legend>Contact Person</legend>

        <!-- Text input-->
       <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
                <input required id="Name" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_name)) { echo "value='".$contact_name."'"; } ?> name="contact_name" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Designation">Designation</label>
            <div class="col-md-4">
                <input id="Designation" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_designation)) { echo "value='".$contact_designation."'"; } ?> name="contact_designation" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email Address">Email Address</label>
            <div class="col-md-4">
                <input required id="Email Address" style="text-transform:none;" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_email)) { echo "value='".$contact_email."'"; } ?> name="contact_email" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Contact Number (Mobile)">Contact Number (Mobile)</label>
            <div class="col-md-4">
                <input required id="Contact Number (Mobile)" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_number)) { echo "value='".$contact_number."'"; } ?> name="contact_number" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " <?php if (!$approved) { echo "type='submit'"; } ?> >
                    <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}elseif ($approved) { echo "Contact Admin to Edit "; }else echo "Save Changes"; ?>
                </button>
            </div>
        </div>

    </fieldset>
</form>
