<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$eligible = array();
foreach ($branches as $key => $value) {
    $eligible[$key] = $value['branch'];
}

?>


   <form class="form-horizontal" role="form" action="recruiter_profile/save" method="post" accept-charset="utf-8">
            <fieldset>

                <!-- Form Name -->
                <legend><?php if(isset($Company_name)){ echo $Company_name;}else{ echo "My Profile";} ?></legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Company_name">Company Name</label>
                    <div class="col-md-5">
                        <input id="Company_name" <?php if(isset($Company_name)){ echo "value = '".$Company_name."'" ;} ?> name="Company_name" type="text" placeholder="Company Name" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="website_link">Website Link</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span style="text-transform:none;" class="input-group-addon">www.</span>
                            <input style="text-transform:none;" id="website_link" <?php if(isset($website_link)){ echo "value = '".$website_link."'" ;} ?> name="website_link" class="form-control" placeholder="example.com" type="text">
                        </div>

                    </div>
                </div>
              

              <div class="form-group">
                <label for="offer" class="col-md-4 control-label">We Offer</label>
                <div class="row">
                  <div class="col-md-2">
                    <div class="checkbox">
                      <label for="offer-0">
                        <input type="checkbox" id="one" <?php if($offer=='1'||$offer=='3'){ echo "checked=checked" ;} ?> name="offer" value="1">Internships
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="checkbox">
                      <label for="offer-1">
                        <input type="checkbox" id="two" <?php if($offer=='2'||$offer=='3'){ echo "checked=checked" ;} ?>name="offer" value="2">Jobs
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="checkbox">
                      <!-- <label for="offer-2"> -->
                        <input hidden type="checkbox" id="three" name="offer" value="3">
                      <!-- </label> -->
                    </div>
                  </div>
                </div>
              </div>
              <script>
              //TODO:
              //Dear Furture Self OR Ankit Sir
              //write a small script that will make value of offer as three when both intership and job are checked
              //and make that third one hidden


              //dear past self thank you for pointing that out :)
            $('input[name=offer]').change(function() {
            if ($('#one').is(':checked') && $('#two').is(':checked')) {
                $('#three').prop('checked', true);
                }else{
                $('#three').prop('checked', false);
                }
            });

            </script>
            
            <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Eligible">Eligible Departments and Programs</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="Eligible-0">
                        <input  type="checkbox" <?php if($branches && (in_array("CHE", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-0" value="CHE">Chemical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-1">
                        <input  type="checkbox" <?php if($branches && (in_array("CE", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-1" value="CE">Civil Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-2">
                        <input type="checkbox" <?php if($branches && (in_array("CSE", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-2" value="CSE">Computer Science &amp; Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-3">
                        <input type="checkbox" <?php if($branches && (in_array("IT", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-3" value="IT">Information Technology
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-4">
                        <input type="checkbox" <?php if($branches && (in_array("ECE", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-4" value="ECE">Electronics and Communication Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-5">
                        <input type="checkbox" <?php if($branches && (in_array("EE", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-5" value="EE">Electrical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-6">
                        <input type="checkbox" <?php if($branches && (in_array("MEC", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-6" value="MEC">Mechanical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-7">
                        <input type="checkbox" <?php if($branches && (in_array("MME", $eligible))){ echo "checked = 'checked' " ;} ?> name="eligible_departments[]" id="Eligible-7" value="MME">Metallurgical and Materials Engineering
                    </label>
                </div>
            </div>
        </div>



                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Company_Type">Company Type</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-0">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="Private Sector"){ echo "checked = 'checked' " ;} ?> id="Company_Type-0" value="Private Sector" >1.Private Sector
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-1">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="Start-up"){ echo "checked = 'checked' " ;} ?> id="Company_Type-1" value="Start-up">2.Start-up
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="Government"){ echo "checked = 'checked' " ;} ?> id="Company_Type-2" value="Government">3.Government
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-3">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="Public Sector"){ echo "checked = 'checked' " ;} ?> id="Company_Type-3" value="Public Sector">4.Public Sector
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="MNC (Indian Origin)"){ echo "checked = 'checked' " ;} ?> id="Company_Type-4" value="MNC (Indian Origin)">5.MNC (Indian Origin)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-3">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="MNC (Foreign Origin)"){ echo "checked = 'checked' " ;} ?> id="Company_Type-5" value="MNC (Foreign Origin)">6.MNC (Foreign Origin)
                                </label>
                            </div>
                        </div>
                    </div>

                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="Others"){ echo "checked = 'checked' " ;} ?> id="Company_Type-6" value="Others">7.Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Industry_Sector">Industry Sector</label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-0">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-0" <?php if($Industry_Sector=="Analytics"){ echo "checked = 'checked' " ;} ?> value="Analytics" checked="checked">1.Analytics
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-1">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-1" <?php if($Industry_Sector=="Consulting"){ echo "checked = 'checked' " ;} ?> value="Consulting">2.Consulting
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-2">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-2" <?php if($Industry_Sector=="Core"){ echo "checked = 'checked' " ;} ?> value="Core">3.Core (Technical)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-3">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-3" <?php if($Industry_Sector=="Finance"){ echo "checked = 'checked' " ;} ?> value="Finance">4.Finance
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-4">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-4" <?php if($Industry_Sector=="IT"){ echo "checked = 'checked' " ;} ?> value="IT">5.IT
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-5">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-5" <?php if($Industry_Sector=="Management"){ echo "checked = 'checked' " ;} ?> value="Management">6.Management
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-6">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-6" <?php if($Industry_Sector=="Teaching"){ echo "checked = 'checked' " ;} ?> value="Teaching">7.Teaching &amp; Research
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-7">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-7" <?php if($Industry_Sector=="Other"){ echo "checked = 'checked' " ;} ?> value="Other">8.Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Brief">Brief write-up on the Company (50 -75 words)</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="Brief" name="Brief"><?php if(isset($Brief)){ echo $Brief ;} ?></textarea>
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
