<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
?>
<form class="form-horizontal" role="form" action="profile/aboutme/save" method="post" accept-charset="utf-8">
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
      <label class="col-md-4 control-label" for="coj">Career objectives</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="coj" name="coj"></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="tech">Technical Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="tech" name="tech"></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="otherskills">Other Skills</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="otherskills" name="otherskills"></textarea>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="save"></label>
      <div class="col-md-4">
        <button id="save" name="save" class="btn btn-primary" type="submit">Save Changes</button>
      </div>
    </div>

  </fieldset>
</form>
