<?php
$data= $this->session->userdata('logged_in');
$flashSuccess =$this->session->flashdata('flashSuccess');
$message =$this->session->flashdata('message');

?>
<link rel="stylesheet" type="text/css" media="screen"href="/css/datepicker.css">
<script type="text/javascript"src="/js/datepicker.js"></script>
<style>.form-control[readonly] {
     cursor: text;
}


</style>




<form class="form-horizontal" role="form" action="admin_feeds/save" method="post" accept-charset="utf-8">
  <fieldset>

    <!-- Form Name -->
    <legend>Create a new Announcement</legend>

 <div class="form-group">
           <label class="col-md-4 control-label" for="gender">For</label>
           <div class="col-md-4"> 
             <label class="radio-inline" for="type-0">
               <input type="radio" name="type" id="type-0" value="1" checked>
               Students
             </label> 
             <label class="radio-inline" for="type-1">
               <input type="radio" name="type" id="type-1" value="2">
               Recruiters
             </label>
             <label class="radio-inline" for="type-1">
               <input type="radio" name="type" id="type-1" value="3">
               Both
             </label>
           </div>
         </div>



        <div class="form-group">
            <label class="col-md-4 control-label" for="heading">Heading</label>
            <div class="col-md-4">
                <input required  id="heading" name="heading" type="text" placeholder="heading" class="form-control input-md">
            </div>
        </div>


      <div class="form-group">
          <label for="date" class="col-md-4 control-label">Date</label>
          <div id="datetimepicker1"   class=" date col-md-4">
        <input type="text" data-date-format="yyyy-mm-dd"  name="date" required class="form-control">
        </div>
      </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Career_obj">Data/body </label>
      <div class="col-md-4">                     
        <textarea rows="4" class="form-control" id="Career_obj"  data-validation="length" data-validation-length="max2000" name="data"></textarea>
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
<script type='text/javascript'>

  $('#datetimepicker1 input').datepicker({
    format: 'yyyy-mm-dd'});

</script>