<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Semester wise SGPA</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cursem">Current Semester</label>
  <div class="col-md-4">
    <select id="cursem" name="cursem" class="form-control">
      <option value="1">I</option>
      <option value="2">II</option>
      <option value="3">III</option>
      <option value="4">IV</option>
      <option value="5">V</option>
      <option value="6">VI</option>
      <option value="7">VII</option>
      <option value="8">VIII</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem1">Semester I</label>  
  <div class="col-md-4">
  <input id="sem1" name="sem1" type="text" placeholder="SGPA I" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem2">Semester II</label>  
  <div class="col-md-4">
  <input id="sem2" name="sem2" type="text" placeholder="SGPA II" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem3">Semester III</label>  
  <div class="col-md-4">
  <input id="sem3" name="sem3" type="text" placeholder="SGPA III" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem4">Semester IV</label>  
  <div class="col-md-4">
  <input id="sem4" name="sem4" type="text" placeholder="SGPA IV" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem5">Semester V</label>  
  <div class="col-md-4">
  <input id="sem5" name="sem5" type="text" placeholder="SGPA V" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem6">Semester VI</label>  
  <div class="col-md-4">
  <input id="sem6" name="sem6" type="text" placeholder="SGPA VI" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem7">Semester VII</label>  
  <div class="col-md-4">
  <input id="sem7" name="sem7" type="text" placeholder="SGPA VII" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sem8">Semester VIII</label>  
  <div class="col-md-4">
  <input id="sem8" name="sem8" type="text" placeholder="SGPA VIII" class="form-control input-md">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="supply">Supplementary</label>
  <div class="col-md-4">
    <select id="supply" name="supply" class="form-control">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="back">Backlog</label>
  <div class="col-md-4">
    <select id="back" name="back" class="form-control">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Reason for Supplementary/ Backlog If Any</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="reason" name="reason"></textarea>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cgpa">Overall CGPA</label>  
  <div class="col-md-4">
  <input id="cgpa" name="cgpa" type="text" placeholder="CGPA" class="form-control input-md">
    
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