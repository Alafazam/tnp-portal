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
    <div class="form-group">
      <label class="col-md-4 control-label" for="eca">Extra Curricular Activities</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="eca" name="eca"><?php if($eca){echo $eca ;} ?></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Career_obj">Career objectives</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Career_obj" name="Career_obj"><?php if($eca){echo $Career_obj ;} ?></textarea>
      </div>
    </div>
    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Technical_Skills">Technical Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Technical_Skills" name="Technical_Skills"><?php if($eca){echo $Technical_Skills ;} ?></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Other_skills">Other Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="Other_skills" name="Other_skills"><?php if($eca){echo $Other_skills ;} ?></textarea>
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
