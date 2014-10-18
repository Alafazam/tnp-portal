<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$flashError = $this->session->flashdata('flashError');
echo $flashError;

if (!isset($approved)) {
$approved = 0;
}

$eligible = array();
if (isset($eligible_departments)) {   
    foreach ($eligible_departments as $key => $value) {
        $eligible[$key] = $value;
    }
}else{}

?>
<link rel="stylesheet" type="text/css" media="screen"href="/css/datepicker.css">
<script type="text/javascript"src="/js/datepicker.js"></script>
<script type="text/javascript" src="/js/datetimepicker.pt-BR.js"></script>
<style>.form-control[readonly] {
     cursor: text;
}</style>

<form class="form-horizontal" role="form" <?php if(!isset($job_desig)){ echo "action='/recruiter_create_job/newJob'"; }elseif(isset($job_desig)&&!$approved){echo "action='/recruiter_create_job/newJob/edit'"; } ?> method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Job Profile</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Job Designation">Job Designation</label>
            <div class="col-md-4">
                <input required   <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($job_desig)) { echo "value='".$job_desig."'"; } ?> id="Job Designation" name="job_desig" type="text" placeholder="Job Designation" class="form-control input-md"  >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Job Description">Job Description</label>
            <div class="col-md-4">
                <textarea  id="Job Description" <?php if ($approved) { echo "readonly"; } ?> name="job_descr"  type="text" required  placeholder="Job Description" class="form-control input-md"><?php if (isset($job_descr)) { echo "".$job_descr.""; } ?></textarea>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Place of Posting">Place of Posting</label>
            <div class="col-md-4">
                <input required id="Place of Posting" <?php if ($approved) { echo "readonly"; } ?>  name="place" <?php if (isset($place)) { echo "value='".$place."'"; } ?> type="text" placeholder="Place of Posting" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
          <label for="last_date" class="col-md-4 control-label">Application Deadline</label>
          <div id="datetimepicker1"   class="input-append input-group date col-md-4">
            <input required <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($application_dead_line)) { echo "value='".$application_dead_line."'"; } ?> name="application_dead_line" class="form-control add-on" data-format="yyyy-MM-dd hh:mm:ss" type="text">
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
};

if (isset($job_id))
{echo '<input hidden name="job_id" type="text" value="'.$job_id.'">';
}



    ?>
        <legend>Salary Details</legend>

        <!-- <h4 class="text-center"><small>Salary Details</small></h4> -->

        <div class="container-fluid">
            <p>
                <h5>
                    <strong>Please Note:</strong>
                </h5>
                <small>
                    1. Performance based bonus should not be declared as part of Gross/CTC but to be indicated in Bonus/Perks/Incentive section.
                    <br/>2. Any amount to be disbursed later than the end of first 12 months should not be a part of Gross/CTC.
                    <br/>3. Joining Bonus/Signing Bonus to be indicated in Bonus/Perks/Incentive section.
                    <br/>4. Statutory Annual Payouts (e.g., Medical, LTC etc.) not to be a part of Gross.
                    <br/>
                </small>
            </p>
        </div>
        <br/>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Cost to Company">Cost to Company</label>
            <div class="col-md-4">
                <input <?php if (isset($ctc)) { echo "value='".$ctc."'"; } ?>  required id="Cost to Company" <?php if ($approved) { echo "readonly"; } ?> required name="ctc" type="text" placeholder="Cost to Company" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label"  for="Gross">Gross (Take-home, before tax and other deductions)</label>
            <div class="col-md-4">
                <input <?php if (isset($gross)) { echo "value='".$gross."'"; } ?> required id="Gross" <?php if ($approved) { echo "readonly"; } ?> name="gross" type="text" placeholder="Gross" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bonus">Bonus/Perks/Incentive (if any)</label>
            <div class="col-md-4">
                <input <?php if (isset($bonus)) { echo "value='".$bonus."'"; } ?> required id="bonus" <?php if ($approved) { echo "readonly"; } ?> name="bonus" type="text" placeholder="bonus" class="form-control input-md">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Bond">Bond or Service Contract(If yes, give details)</label>
            <div class="col-md-4">
                <select id="Bond" <?php if (isset($bond)) { echo "value='".$bond."'"; } ?>  <?php if ($approved) { echo "readonly"; } ?> name="bond" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bond_desc">Bond Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="bond_desc" <?php if ($approved) { echo "readonly"; } ?> placeholder="Bond Description" <?php if (isset($bond_desc)) { echo "value='".$bond_desc."'"; } ?> name="bond_desc"></textarea>
                <!-- <span class="help-block"></span>  -->
            </div>
        </div>


        <!-- <h4 class="text-center"><small></small></h4> -->
        <legend>Selection Process</legend>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Shortlist from Resumes">Shortlist from Resumes</label>
            <div class="col-md-4">
                <select id="Shortlist from Resumes"  <?php if ($approved) { echo "readonly"; } ?> name="shortlist_from_Resumes" class="form-control">
                    <option value="YES">YES</option>
                    <option <?php if (isset($shortlist_from_Resumes)&&$shortlist_from_Resumes=='NO') { echo "checked"; } ?> value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Written Test (Technical, Aptitude) ">Written Test (Technical, Aptitude)</label>
            <div class="col-md-4">
                <select id="Written Test" <?php if ($approved) { echo "readonly"; } ?> name="written_Test" class="form-control">
                    <option value="YES">YES</option>
                    <option <?php if (isset($written_Test)&&$written_Test=='NO') { echo "checked"; } ?> value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Group Discussion">Group Discussion</label>
            <div class="col-md-4">
                <select id="Group_Discussion" <?php if ($approved) { echo "readonly"; } ?> name="group_Discussion" class="form-control">
                    <option value="YES">YES</option>
                    <option <?php if (isset($written_Test)&&$group_Discussion=='NO') { echo "checked"; } ?> value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Personal Interview">Personal Interview</label>
            <div class="col-md-4">
                <select id="Personal_Interview" <?php if ($approved) { echo "readonly"; } ?> name="personal_Interview" class="form-control">
                    <option value="YES">YES</option>
                    <option <?php if (isset($written_Test)&&$personal_Interview=='NO') { echo "checked"; } ?> value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Medical Test">Medical Test</label>
            <div class="col-md-4">
                <select id="Medical_Test" <?php if ($approved) { echo "readonly"; } ?> name="medical_Test" class="form-control">
                    <option value="YES">YES</option>
                    <option <?php if (isset($written_Test)&&$medical_Test=='NO') { echo "checked"; } ?> value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label"    for="Number of Rounds">Number of Rounds</label>
            <div class="col-md-4">
                <input required id="Number_of_Rounds" <?php if ($approved) { echo "readonly"; } ?> required <?php if (isset($number_of_rounds)) { echo "value='".$number_of_rounds."'"; } ?> name="number_of_rounds" type="text" placeholder="Number of Rounds" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Minimum Number of offers you intend to make:">Minimum Number of offers you intend to make:</label>
            <div class="col-md-4">
                <input required id="MinNoOffers" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($min_offers)) { echo "value='".$min_offers."'"; } ?> name="min_offers" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
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
        <legend>Logistics Requirements</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Members">Number of Members</label>
            <div class="col-md-4">
                <input required id="Number of Members" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($number_of_members)) { echo "value='".$number_of_members."'"; } ?> name="number_of_members" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Rooms required for selection process">Number of Rooms required for selection process</label>
            <div class="col-md-4">
                <input required <?php if ($approved) { echo "readonly"; } ?> id="Number of Rooms required for selection process" <?php if (isset($number_of_rooms)) { echo "value='".$number_of_rooms."'"; } ?> name="number_of_rooms" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Other Requirements">Other Requirements</label>
            <div class="col-md-4">
                <input  id="Other Requirements" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($other_requirements)) { echo "value='".$other_requirements."'"; } ?> name="other_requirements" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

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
                <button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " <?php if(!isset($job_desig)){ echo "type='submit'"; }elseif(isset($job_desig)&&!$approved){echo ""; } ?>  >
                    <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}elseif ($approved) { echo "Contact Admin to Edit "; }else echo "Save Changes"; ?>
                </button>
            </div>
        </div>

    </fieldset>
</form>
