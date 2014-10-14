<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
?>


   <form class="form-horizontal" role="form" action="recruiter_profile/save" method="post" accept-charset="utf-8">
            <fieldset>

                <!-- Form Name -->
                <legend>Form Name</legend>

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
                        <input hidden type="checkbox" name="offer" value="3">
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

            </script>
            

                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Company_Type">Company Type</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-0">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="1.Private Sector"){ echo "checked = 'checked' " ;} ?> id="Company_Type-0" value="1.Private Sector" >1.Private Sector
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-1">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="2.Start-up"){ echo "checked = 'checked' " ;} ?> id="Company_Type-1" value="2.Start-up">2.Start-up
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="3.Government"){ echo "checked = 'checked' " ;} ?> id="Company_Type-2" value="3.Government">3.Government
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-3">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="4.Public Sector"){ echo "checked = 'checked' " ;} ?> id="Company_Type-3" value="4.Public Sector">4.Public Sector
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="5.MNC (Indian Origin)"){ echo "checked = 'checked' " ;} ?> id="Company_Type-4" value="5.MNC (Indian Origin)">5.MNC (Indian Origin)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-3">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="6.MNC (Foreign Origin)"){ echo "checked = 'checked' " ;} ?> id="Company_Type-5" value="6.MNC (Foreign Origin)">6.MNC (Foreign Origin)
                                </label>
                            </div>
                        </div>
                    </div>

                    <label class="col-md-4 control-label" for="Company_Type"></label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="radio">
                                <label for="Company_Type-2">
                                    <input type="radio" name="Company_Type" <?php if($Company_Type=="7.Others"){ echo "checked = 'checked' " ;} ?> id="Company_Type-6" value="7.Others">7.Others
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
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-0" <?php if($Industry_Sector=="1.Analytics"){ echo "checked = 'checked' " ;} ?> value="1.Analytics" checked="checked">1.Analytics
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-1">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-1" <?php if($Industry_Sector=="2.Consulting"){ echo "checked = 'checked' " ;} ?> value="2.Consulting">2.Consulting
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-2">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-2" <?php if($Industry_Sector=="3.Core"){ echo "checked = 'checked' " ;} ?> value="3.Core">3.Core (Technical)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-3">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-3" <?php if($Industry_Sector=="4.Finance"){ echo "checked = 'checked' " ;} ?> value="4.Finance">4.Finance
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-4">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-4" <?php if($Industry_Sector=="5.IT"){ echo "checked = 'checked' " ;} ?> value="5.IT">5.IT
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-5">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-5" <?php if($Industry_Sector=="6.Management"){ echo "checked = 'checked' " ;} ?> value="6.Management">6.Management
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="Industry_Sector"></label>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-6">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-6" <?php if($Industry_Sector=="7.Teaching"){ echo "checked = 'checked' " ;} ?> value="7.Teaching">7.Teaching &amp; Research
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="radio">
                                <label for="Industry_Sector-7">
                                    <input type="radio" name="Industry_Sector" id="Industry_Sector-7" <?php if($Industry_Sector=="8.Other"){ echo "checked = 'checked' " ;} ?> value="8.Other">8.Other
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
