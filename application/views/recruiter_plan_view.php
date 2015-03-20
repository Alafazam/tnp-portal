 <!-- <h4 class="text-center"><small>Logistics Requirements</small></h4> -->
<?php 

if (isset($jobs)) {
    //plan mode
    $bogie = "";
    foreach ($jobs as $key) {
        $bogie.= "<option value='".$key["job_id"]."'>".$key["job_desig"]."</option>";
    }
}else if (isset($job_id)&&ctype_digit($job_id)&&isset($job_desig)) {
    # code...
    $bogie = "";
    $bogie.= "<option  value='".$job_id."'>".$job_desig."</option>";
}


 ?>

        <link rel="stylesheet" type="text/css" media="screen"href="/css/datepicker.css">
<script type="text/javascript"src="/js/datepicker.js"></script>


<form class="form-horizontal" role="form" action="/recruiter_visit/save" method="post" accept-charset="utf-8">
  

  <fieldset>


  <!-- <h4 class="text-center"><small>Logistics Requirements</small></h4> -->

    <legend>For Designation</legend>
    <div class="form-group">
            <label class="col-md-4 control-label" for="Designations">Designations</label>
            <div class="col-md-4">
                <select id="job_id" <?php if (isset($job_id)) { echo "readonly"; } ?> name="job_id" class="form-control">
                <?php echo $bogie; ?>

                </select>
            </div>
        </div>


        
        <legend>Date of Visit</legend>

        <div class="form-group">
          <label for="last_date" class="col-md-4 control-label">Your Expected date of visit</label>
          <div id="datetimepicker1"   class="date col-md-4">
              <input type="text" data-validation="date" data-validation-format="yyyy-mm-dd" data-date-format="yyyy-mm-dd" <?php if (isset($date)) { echo "value='".$date."'"; } ?> name="date" autofocus required class="form-control">
          </div>
      </div>
      <?php 
      echo 
     "<script type='text/javascript'>
  $('#datetimepicker1 input').datepicker({
    format: 'yyyy-mm-dd',
    startDate: 'today'
});

</script>";

    ?>
    

        <legend>Logistics Requirements</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Members">Number of Members</label>
            <div class="col-md-4">
                <input  id="Number of Members" value="0" data-validation="number" <?php if (isset($number_of_members)) { echo "value='".$number_of_members."'"; } ?> name="number_of_members" type="text" placeholder="0" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Rooms required for selection process">Number of Rooms required for selection process</label>
            <div class="col-md-4">
                <input   data-validation="number" value="0" id="Number of Rooms required for selection process" <?php if (isset($number_of_rooms)) { echo "value='".$number_of_rooms."'"; } ?> name="number_of_rooms" type="text" placeholder="0" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Other Requirements">Other Requirements</label>
            <div class="col-md-4">
                <textarea rows="4" class="form-control" id="other_requirements" data-validation="length" data-validation-length="max3200" name="other_requirements"><?php if (isset($other_requirements)) { echo $other_requirements; } ?></textarea>

            </div>
        </div>

        <legend>Contact Person</legend>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
                <input  id="Name"  <?php if (isset($contact_name)) { echo "value='".$contact_name."'"; } ?> name="contact_name" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Designation">Designation</label>
            <div class="col-md-4">
                <input id="Designation"  <?php if (isset($contact_designation)) { echo "value='".$contact_designation."'"; } ?> name="contact_designation" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email Address">Email Address</label>
            <div class="col-md-4">
                <input required id="Email Address" data-validation="email" style="text-transform:none;"  <?php if (isset($contact_email)) { echo "value='".$contact_email."'"; } ?> name="contact_email" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Contact Number (Mobile)">Contact Number (Mobile)</label>
            <div class="col-md-4">
                <input  id="Contact Number (Mobile)"  <?php if (isset($contact_number)) { echo "value='".$contact_number."'"; } ?> name="contact_number" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        

 <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="save" name="save" class="btn btn-primary <?php if(isset($flashSuccess)&&$flashSuccess){echo 'btn-success' ;} ?> " type='submit' >
                    <?php if(isset($flashSuccess)&&$flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}else{echo "Save";} ?>
                </button>
            </div>
        </div>

    </fieldset>
</form>