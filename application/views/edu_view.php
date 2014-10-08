<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$fname=$data['fname'];
?>


<form class="form-horizontal" role="form" action="educational/save" method="post" accept-charset="utf-8">
  <fieldset>

    <!-- Form Name -->
    <legend>Educational Details</legend>

    <h4 class="text-center"><small>12th Standard</small></h4>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="school_name1">School Name</label>  
      <div class="col-md-6">
        <input id="school_name1" value="<?php if ($school_name1) {echo $school_name1 ;}?>" name="school_name1" type="text" placeholder="School Name" class="form-control input-md">
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="year1">Year of passing</label>
      <div class="col-md-4">
        <select id="year1" name="year1"  class="form-control">
          <option <?php if($year1=='2008'){ echo 'selected' ;} ?> value="2008">2008</option>
          <option <?php if($year1=='2009'){ echo 'selected' ;} ?> value="2009">2009</option>
          <option <?php if($year1=='2010'){ echo 'selected' ;} ?> value="2010">2010</option>
          <option <?php if($year1=='2011'){ echo 'selected' ;} ?> value="2011">2011</option>
          <option <?php if($year1=='2012'){ echo 'selected' ;} ?> value="2012">2012</option>
          <option <?php if($year1=='2013'){ echo 'selected' ;} ?> value="2013">2013</option>
          <option <?php if($year1=='2014'){ echo 'selected' ;} ?> value="2014">2014</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="board1">Board</label>  
      <div class="col-md-4">
        <input id="board1" name="board1" value="<?php if($board1){ echo $board1 ;} ?>" type="text" placeholder="CBSE" class="form-control input-md">

      </div>
    </div>

    <!-- Appended Input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="percentage1">Aggregate</label>
      <div class="col-md-4">
        <div class="input-group">
          <input id="percentage1" name="percentage1" value="<?php if($percentage1){ echo $percentage1 ;} ?>" class="form-control" placeholder="Percentage" type="text">
          <span class="input-group-addon">%</span>
        </div>

      </div>
    </div>

    <h4 class="text-center"><small>10th Standard</small></h4>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="school_name2">School Name</label>  
      <div class="col-md-6">
        <input id="school_name2" name="school_name2" value="<?php if($school_name2){ echo $school_name2 ;} ?>" type="text" placeholder="School Name" class="form-control input-md">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="year2">Year of passing</label>
      <div class="col-md-4">
        <select id="year2" name="year2" class="form-control">
          <option <?php if($year2=='2006'){ echo 'selected' ;} ?> value="2006">2006</option>
          <option <?php if($year2=='2007'){ echo 'selected' ;} ?> value="2007">2007</option>
          <option <?php if($year2=='2008'){ echo 'selected' ;} ?> value="2008">2008</option>
          <option <?php if($year2=='2009'){ echo 'selected' ;} ?> value="2009">2009</option>
          <option <?php if($year2=='2010'){ echo 'selected' ;} ?> value="2010">2010</option>
          <option <?php if($year2=='2011'){ echo 'selected' ;} ?> value="2011">2011</option>
          <option <?php if($year2=='2012'){ echo 'selected' ;} ?> value="2012">2012</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="board2">Board</label>  
      <div class="col-md-4">
        <input id="board2" name="board2" type="text" value="<?php if($board2){ echo $board2 ;} ?>" placeholder="CBSE" class="form-control input-md">

      </div>
    </div>

    <!-- Appended Input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="percentage2">Aggregate</label>
      <div class="col-md-4">
        <div class="input-group">
          <input id="percentage2" name="percentage2" value="<?php if($percentage2){ echo $percentage2 ;} ?>" class="form-control" placeholder="Percentage" type="text">
          <span class="input-group-addon">%</span>
        </div>

      </div>
    </div>

    <h4 class="text-center"><small>Entrance Exam</small></h4>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="air">AIR</label>  
      <div class="col-md-4">
        <input id="air" name="air" type="text" value="<?php if($air){ echo $air ;} ?>" placeholder="Rank" class="form-control input-md">
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="year3">Year</label>
      <div class="col-md-4">
        <select id="year3" name="year3" class="form-control">
          <option <?php if($year3=='2008'){ echo 'selected' ;} ?> value="2008">2008</option>
          <option <?php if($year3=='2009'){ echo 'selected' ;} ?> value="2009">2009</option>
          <option <?php if($year3=='2010'){ echo 'selected' ;} ?> value="2010">2010</option>
          <option <?php if($year3=='2011'){ echo 'selected' ;} ?> value="2011">2011</option>
          <option <?php if($year3=='2012'){ echo 'selected' ;} ?> value="2012">2012</option>
          <option <?php if($year3=='2013'){ echo 'selected' ;} ?> value="2013">2013</option>
          <option <?php if($year3=='2014'){ echo 'selected' ;} ?> value="2014">2014</option>
        </select>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="quota">Quota</label>
      <div class="col-md-4">
        <select id="quota" name="quota" value="<?php if($quota){ echo $quota ;} ?>" class="form-control">
          <option value="Home State">Home State</option>
          <option value="Other State">Other State</option>
        </select>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="category">Category</label>
      <div class="col-md-4">
        <select id="category" name="category" value="<?php if($category){ echo $category ;} ?>" class="form-control">
          <option value="General">General</option>
          <option value="S.C">S.C.</option>
          <option value="S.T">S.T.</option>
          <option value="O.B.C">O.B.C.</option>
        </select>
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
