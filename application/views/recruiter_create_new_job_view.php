<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
?>
<link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
 
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>


<form class="form-horizontal" role="form" action="recruiter_create_job/newJob" method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Job Profile</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Job Designation">Job Designation</label>
            <div class="col-md-4">
                <input required id="Job Designation" name="job_desig" type="text" placeholder="Job Designation" class="form-control input-md" required>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Job Description">Job Description</label>
            <div class="col-md-4">
                <textarea id="Job Description" name="job_descr" type="text" placeholder="Job Description" class="form-control input-md"></textarea>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Place of Posting">Place of Posting</label>
            <div class="col-md-4">
                <input required id="Place of Posting" name="place" type="text" placeholder="Place of Posting" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
          <label for="last_date" class="col-md-4 control-label">Application Deadline</label>
          <div id="datetimepicker1" class="input-append input-group date col-md-4">
            <input required name="application_dead_line" class="form-control " data-format="yyyy-MM-dd hh:mm:ss" type="text">
            <span class="add-on input-group-addon">
              <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
            </span>
          </div>
      </div>
      
      <script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
</script>

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
                <input required id="Cost to Company" name="ctc" type="text" placeholder="Cost to Company" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Gross">Gross (Take-home, before tax and other deductions)</label>
            <div class="col-md-4">
                <input required id="Gross" name="gross" type="text" placeholder="Gross" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bonus">Bonus/Perks/Incentive (if any)</label>
            <div class="col-md-4">
                <input required id="bonus" name="bonus" type="text" placeholder="bonus" class="form-control input-md">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Bond">Bond or Service Contract(If yes, give details)</label>
            <div class="col-md-4">
                <select id="Bond" name="bond" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bond_desc">Bond Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="bond_desc" placeholder="Bond Description" name="bond_desc"></textarea>
                <!-- <span class="help-block"></span>  -->
            </div>
        </div>


        <!-- <h4 class="text-center"><small></small></h4> -->
        <legend>Selection Process</legend>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Shortlist from Resumes">Shortlist from Resumes</label>
            <div class="col-md-4">
                <select id="Shortlist from Resumes" name="shortlist_from_Resumes" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Written Test (Technical, Aptitude) ">Written Test (Technical, Aptitude)</label>
            <div class="col-md-4">
                <select id="Written Test" name="written_Test" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Group Discussion">Group Discussion</label>
            <div class="col-md-4">
                <select id="Group_Discussion" name="group_Discussion" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Personal Interview">Personal Interview</label>
            <div class="col-md-4">
                <select id="Personal_Interview" name="personal_Interview" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Medical Test">Medical Test</label>
            <div class="col-md-4">
                <select id="Medical_Test" name="medical_Test" class="form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Rounds">Number of Rounds</label>
            <div class="col-md-4">
                <input required id="Number_of_Rounds" name="number_of_rounds" type="text" placeholder="Number of Rounds" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Minimum Number of offers you intend to make:">Minimum Number of offers you intend to make:</label>
            <div class="col-md-4">
                <input required id="MinNoOffers" name="min_offers" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Eligible">Eligible Departments and Programs</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="Eligible-0">
                        <input  type="checkbox" name="eligible_departments[]" id="Eligible-0" value="CHE">Chemical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-1">
                        <input  type="checkbox" name="eligible_departments[]" id="Eligible-1" value="CE">Civil Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-2">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-2" value="CSE">Computer Science &amp; Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-3">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-3" value="IT">Information Technology
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-4">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-4" value="ECE">Electronics and Communication Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-5">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-5" value="EE">Electrical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-6">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-6" value="MEC">Mechanical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-7">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-7" value="MEE">Metallurgy Engineering
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
                <input required id="Number of Members" name="number_of_members" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Rooms required for selection process">Number of Rooms required for selection process</label>
            <div class="col-md-4">
                <input required id="Number of Rooms required for selection process" name="number_of_rooms" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Other Requirements">Other Requirements</label>
            <div class="col-md-4">
                <input  id="Other Requirements" name="other_requirements" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
                <input required id="Name" name="contact_name" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Designation">Designation</label>
            <div class="col-md-4">
                <input id="Designation" name="contact_designation" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email Address">Email Address</label>
            <div class="col-md-4">
                <input required id="Email Address" name="contact_email" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Contact Number (Mobile)">Contact Number (Mobile)</label>
            <div class="col-md-4">
                <input required id="Contact Number (Mobile)" name="contact_number" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " type="submit">
                    <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}else echo "Save Changes"; ?>
                </button>
            </div>
        </div>

    </fieldset>
</form>
