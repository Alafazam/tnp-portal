<?php
$data= $this->session->userdata('logged_in');
$flashSuccess =$this->session->flashdata('flashSuccess');
$username=$data['username'];
?>




<form class="form-horizontal" role="form" action="aboutme/save" method="post" accept-charset="utf-8">
  <fieldset>

    <!-- Form Name -->
    <legend>About Me</legend>
    <!-- ECA,Career_obj,Technical_Skills,Other_skills -->
    <!-- Textarea -->
 
  <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="branch">Branch</label>
      <div class="col-md-4">
        <select id="branch" name="branch"  class="form-control">
          <option <?php if($branch=='CHE'){ echo 'selected' ;} ?> value="CHE">Chemical</option>
          <option <?php if($branch=='CIV'){ echo 'selected' ;} ?> value="CIV">Civil</option>
          <option <?php if($branch=='CS'){ echo 'selected' ;} ?> value="CS">Computer Science</option>
          <option <?php if($branch=='ELE'){ echo 'selected' ;} ?> value="ELE">Electrical</option>
          <option <?php if($branch=='ECE'){ echo 'selected' ;} ?> value="ECE">Electronics &amp; Communications</option>
          <option <?php if($branch=='IT'){ echo 'selected' ;} ?> value="IT">Information Technology</option>
          <option <?php if($branch=='MEC'){ echo 'selected' ;} ?> value="MEC">Mechanical</option>
          <option <?php if($branch=='MAM'){ echo 'selected' ;} ?> value="MAM">Materials and Mettalurgy</option>
        </select>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Career_obj">Career objectives </label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Career_obj"  data-validation="length" data-validation-length="max200" name="Career_obj"><?php if($eca){echo $Career_obj ;} ?></textarea>
      </div>
    </div>
    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Technical_Skills">Technical Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Technical_Skills" data-validation="length" data-validation-length="max320" name="Technical_Skills"><?php if($eca){echo $Technical_Skills ;} ?></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Other_skills">Other Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Other_skills" data-validation="length" data-validation-length="max320" name="Other_skills"><?php if($eca){echo $Other_skills ;} ?></textarea>
      </div>
    </div>

  
      <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="eca">Extra Curricular Activities</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="eca" data-validation="length" data-validation-length="max320" name="eca"><?php if($eca){echo $eca ;} ?></textarea>
      </div>
    </div>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="save"></label>
      <div class="col-md-4">
        <button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " type="submit">
          <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}else echo "Save Changes"; ?>
        </button>
      </div>
    </div>
  </fieldset>
</form>
