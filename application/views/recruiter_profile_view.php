<?php $data=$this->session->userdata('logged_in');
 $username=$data['username'];
 $flashSuccess =$this->session->flashdata('flashSuccess');
 
$eligible = array();
if (isset($eligible_departments)) {   
    foreach ($eligible_departments as $key => $value) {
        $eligible[$key] = $value;
    }
}
 ?>


<form class="form-horizontal" role="form" action="recruiter_profile/save" method="post" accept-charset="utf-8">
    <fieldset>

        <!-- Form Name -->
        <legend>
            <?php if(isset($Company_name)){ echo $Company_name;}else{ echo "My Profile";} ?>
        </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Company_name">Company Name</label>
            <div class="col-md-5">
                <input id="Company_name" <?php if(isset($Company_name)){ echo "value = '".$Company_name. "'" ;} ?>name="Company_name" type="text" placeholder="Company Name" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="website_link">Website Link</label>
            <div class="col-md-5">
                <div class="input-group">
                    <span style="text-transform:none;" class="input-group-addon">www.</span>
                    <input style="text-transform:none;" id="website_link" <?php if(isset($website_link)){ echo "value = '".$website_link. "'" ;} ?>name="website_link" class="form-control" placeholder="example.com" type="text">
                </div>

            </div>
        </div>


        <div class="form-group">
            <label for="offer" class="col-md-4 control-label">Eligible Courses</label>
            <div class="row">
                <div class="col-md-2">
                    <div class="checkbox">
                        <label for="offer-0">
                            <input type="checkbox" id="one" <?php if($offer=='1' ){ echo "checked=checked" ;} ?>name="offer[]" value="1">B.Tech
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox">
                        <label for="offer-1">
                            <input type="checkbox" id="two" <?php if($offer=='2' ){ echo "checked=checked" ;} ?>name="offer[]" value="2">M.Tech
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Eligible">Eligible Departments and Programs</label>

            <div class="col-md-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"hidden>
                    </label>
                </div>
                <h4 class="text-center">B.Tech</h4>
                <div class="checkbox">
                    <label for="Eligible-0">
                        <input type="checkbox" <?php if($branch && (in_array( "CHE", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-0" value="CHE">Chemical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-1">
                        <input type="checkbox" <?php if($branch && (in_array( "CE", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-1" value="CE">Civil Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-2">
                        <input type="checkbox" <?php if($branch && (in_array( "CSE", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-2" value="CSE">Computer Science &amp; Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-3">
                        <input type="checkbox" <?php if($branch && (in_array( "IT", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-3" value="IT">Information Technology
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-4">
                        <input type="checkbox" <?php if($branch && (in_array( "ECE", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-4" value="ECE">Electronics and Communication Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-5">
                        <input type="checkbox" <?php if($branch && (in_array( "EE", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-5" value="EE">Electrical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-6">
                        <input type="checkbox" <?php if($branch && (in_array( "MEC", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-6" value="MEC">Mechanical Engineering
                    </label>
                </div>
                <div class="checkbox">
                    <label for="Eligible-7">
                        <input type="checkbox" <?php if($branch && (in_array( "MME", $eligible))){ echo "checked = 'checked' " ;} ?>name="eligible_departments[]" id="Eligible-7" value="MME">Metallurgical and Materials Engineering
                    </label>
                </div>
                <h4 class="text-center">M.Tech</h4>
                <div class="checkbox">
                    <label for="Eligible-8">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-8" <?php if(isset($branch) && (in_array( "SE", $eligible))){ echo "checked = 'checked' " ;} ?>value="SE">Structural Engineering
                    </label>
                </div>

                <div class="checkbox">
                    <label for="Eligible-9">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-9" <?php if(isset($branch) && (in_array( "EPS", $eligible))){ echo "checked = 'checked' " ;} ?>value="EPS">Electrical Power and Energy Systems
                    </label>
                </div>

                <div class="checkbox">
                    <label for="Eligible-10">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-10" <?php if(isset($branch) && (in_array( "CIT", $eligible))){ echo "checked = 'checked' " ;} ?>value="CIT">Communication and Information Technology
                    </label>
                </div>

                <div class="checkbox">
                    <label for="Eligible-12">
                        <input type="checkbox" name="eligible_departments[]" id="Eligible-11" <?php if(isset($branch) && (in_array( "MSD", $eligible))){ echo "checked = 'checked' " ;} ?>value="MSD">Mechanical System Design
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
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="Private Sector" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-0" value="Private Sector" checked="checked">Private Sector
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-1">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="Start-up" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-1" value="Start-up">Start-up
                        </label>
                    </div>
                </div>
            </div>
            <label class="col-md-4 control-label" for="Company_Type"></label>
            <div class="row">
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-2">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="Government" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-2" value="Government">Government
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-3">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="Public Sector" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-3" value="Public Sector">Public Sector
                        </label>
                    </div>
                </div>
            </div>
            <label class="col-md-4 control-label" for="Company_Type"></label>
            <div class="row">
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-2">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="MNC (Indian Origin)" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-4" value="MNC (Indian Origin)">MNC (Indian Origin)
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-3">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="MNC (Foreign Origin)" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-5" value="MNC (Foreign Origin)">MNC (Foreign Origin)
                        </label>
                    </div>
                </div>
            </div>

            <label class="col-md-4 control-label" for="Company_Type"></label>
            <div class="row">
                <div class="col-md-2">
                    <div class="radio">
                        <label for="Company_Type-2">
                            <input type="radio" name="Company_Type" <?php if($Company_Type=="Others" ){ echo "checked = 'checked' " ;} ?>id="Company_Type-6" value="Others">Others
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
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-0" <?php if($Industry_Sector=="Analytics" ){ echo "checked = 'checked' " ;} ?>value="Analytics" checked="checked">Analytics
                        </label>
                    </div>
                </div>
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-1">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-1" <?php if($Industry_Sector=="Consulting" ){ echo "checked = 'checked' " ;} ?>value="Consulting">Consulting
                        </label>
                    </div>
                </div>
            </div>
            <label class="col-md-4 control-label" for="Industry_Sector"></label>
            <div class="row">
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-2">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-2" <?php if($Industry_Sector=="Core" ){ echo "checked = 'checked' " ;} ?>value="Core">Core (Technical)
                        </label>
                    </div>
                </div>
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-3">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-3" <?php if($Industry_Sector=="Finance" ){ echo "checked = 'checked' " ;} ?>value="Finance">Finance
                        </label>
                    </div>
                </div>
            </div>
            <label class="col-md-4 control-label" for="Industry_Sector"></label>
            <div class="row">
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-4">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-4" <?php if($Industry_Sector=="IT" ){ echo "checked = 'checked' " ;} ?>value="IT">IT
                        </label>
                    </div>
                </div>
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-5">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-5" <?php if($Industry_Sector=="Management" ){ echo "checked = 'checked' " ;} ?>value="Management">Management
                        </label>
                    </div>
                </div>
            </div>
            <label class="col-md-4 control-label" for="Industry_Sector"></label>
            <div class="row">
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-6">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-6" <?php if($Industry_Sector=="Teaching" ){ echo "checked = 'checked' " ;} ?>value="Teaching">Teaching &amp; Research
                        </label>
                    </div>
                </div>
                <div class="col-md-2">

                    <div class="radio">
                        <label for="Industry_Sector-7">
                            <input type="radio" name="Industry_Sector" id="Industry_Sector-7" <?php if($Industry_Sector=="Other" ){ echo "checked = 'checked' " ;} ?>value="Other">Other
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
