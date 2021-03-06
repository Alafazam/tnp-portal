<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$fname=$data['fname'];
?>

<form class="form-horizontal" role="form" action="academic/save" method="post" accept-charset="utf-8">
<fieldset>
<!-- Form Name -->
<legend>Semester wise SGPA</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cursem">Current Semester</label>
  <div class="col-md-4">
    <select id="cursem" name="cursem" class="form-control">
      <option <?php if ($cursem==='1'||$cursem==='0') {echo 'selected';}?> value="1">I</option>
      <option <?php if ($cursem==='2') {echo 'selected';}?> value="2">II</option>
      <option <?php if ($cursem==='3') {echo 'selected';}?> value="3">III</option>
      <option <?php if ($cursem==='4') {echo 'selected';}?> value="4">IV</option>
      <option <?php if ($cursem==='5') {echo 'selected';}?> value="5">V</option>
      <option <?php if ($cursem==='6') {echo 'selected';}?> value="6">VI</option>
      <option <?php if ($cursem==='7') {echo 'selected';}?> value="7">VII</option>
      <option <?php if ($cursem==='8') {echo 'selected';}?> value="8">VIII</option>
      <option <?php if ($cursem==='9') {echo 'selected';}?> value="9">Passout</option>
    </select>
  </div>
</div>
<!-- Text input-->
<h3 class="text-center"><small>if result is awaited put 0</small></h3>
<div class="form-group row">
  <label class="col-md-4 control-label" for="sem1">Semester I</label>  
  <div class="col-md-2">
  <input id="sem1" name="sem1" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem1) {echo $sem1;}?>" type="text" placeholder="SGPA I" class="form-control input-md">
  </div>
  <label class="col-md-2 control-label" for="sem2">Semester II</label>  
  <div class="col-md-2">
  <input id="sem2" name="sem2" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem2) {echo $sem2;}?>" type="text" placeholder="SGPA II" class="form-control input-md">    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem3">Semester III</label>  
  <div class="col-md-2">
  <input id="sem3" name="sem3" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem3) {echo $sem3;}?>" type="text" placeholder="SGPA III" class="form-control input-md">
  </div>
  <label class="col-md-2 control-label" for="sem4">Semester IV</label>  
  <div class="col-md-2">
  <input id="sem4" name="sem4" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem4) {echo $sem4;}?>" type="text" placeholder="SGPA IV" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem5">Semester V</label>  
  <div class="col-md-2">
  <input id="sem5" name="sem5" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem5) {echo $sem5;}?>" type="text" placeholder="SGPA V" class="form-control input-md">
  </div>
  <label class="col-md-2 control-label" for="sem6">Semester VI</label>  
  <div class="col-md-2">
  <input id="sem6" name="sem6" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem6) {echo $sem6;}?>" type="text" placeholder="SGPA VI" class="form-control input-md"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem7">Semester VII</label>  
  <div class="col-md-2">
  <input id="sem7" name="sem7" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem7) {echo $sem7;}?>" type="text" placeholder="SGPA VII" class="form-control input-md">
  </div>
  <label class="col-md-2 control-label" for="sem8">Semester VIII</label>  
  <div class="col-md-2">
  <input id="sem8" name="sem8" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($sem8) {echo $sem8;}?>" type="text" placeholder="SGPA VIII" class="form-control input-md"> 
  </div>
</div>

<legend></legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="supply">Supplementary</label>
  <div class="col-md-2">
     <input id="supply" name="supply" value="<?php if ($supply) {echo $supply;}?>" type="text" placeholder="Supply" class="form-control input-md"> 
  </div>
  <label class="col-md-2 control-label" for="back">Backlog</label>
  <div class="col-md-2">
     <input id="back" name="back" value="<?php if ($back) {echo $back;}?>" type="text" placeholder="Backlog" class="form-control input-md"> 
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Reason for Supplementary/ Backlog If Any</label>
  <div class="col-md-4">                     
    <textarea class="form-control" data-validation="length" data-validation-length="max300" id="reason" name="reason"><?php if ($reason) {echo $reason;}?></textarea>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cgpa">Overall CGPA</label>  
  <div class="col-md-4">
  <input id="cgpa" name="cgpa" data-validation="number" data-validation-allowing="range[0.00;10.00],float" value="<?php if ($cgpa) {echo $cgpa;}?>" type="text" placeholder="CGPA" class="form-control input-md">
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