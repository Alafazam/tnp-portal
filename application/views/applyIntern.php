<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$fname=$data['fname'];
$alreadyApplied=false;
if (isset($application)&&$application) {
$alreadyApplied = true;
}

?>
 <style>
	.company_name{
		font-size: 24px;
	}
</style>


<div class="container-fluid">
		<h2></h2>
		<legend></legend>


 <?php 
if (isset($intern)&&$intern) {
  # code...
echo '
<div class="panel panel-primary">
  <div class="panel-heading text-center">'.$company_name.'</div>
  
  <ul class="list-group">
    <li class="list-group-item"><label class="col-md-6">Designation</label>
    <span class="text-center">'.$intern["intern_name"].' </span>
    </li>
    <li class="list-group-item"><p>'.$intern["training_descr"].'</p>
    </li>
    <li class="list-group-item"><label class="col-md-6">Application_dead_line:</label>
    <span class="text-center">'.$intern["application_dead_line"].' </span>
    </li>
    <li class="list-group-item "><label class="col-md-6">Skills Required:</label>
    <span class="text-center">'.$intern["skills"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Eligible Departments And Programs:</label>
    <span class="text-center">'.$intern["eligible_departments"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Stipend:</label>
    <span class="text-center">'.$intern["stipend"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Location:</label>
    <span class="text-center">'.$intern["loc"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Shortlist From Resumes:</label>
    <span class="text-center">'.$intern["shortlist_from_Resumes"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Personal Interview:</label>
    <span class="text-center">'.$intern["personal_Interview"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Seats:</label>
    <span class="text-center">'.$intern["seats"].' </span>
    </li>
  </ul>
</div>

';
}
      $deadline = new DateTime();
      $deadline1 = $deadline->format('d-m-y');


  	 ?>

<form class="form-horizontal" role="form" <?php if(!$alreadyApplied) echo 'action="/interns/apply" method="post"';else{echo 'action="/myapplications/delete/'.$intern["intern_id"].'"';} ?> >
<fieldset>
 <input id="r_id" name="r_id" type="text" class="hidden" value="<?php echo $intern["r_id"] ;?>" >
 <input id="intern_id" name="intern_id" type="text" class="hidden" value="<?php echo $intern["intern_id"] ;?>" >
 <input id="username" name="username" type="text" class="hidden" value="<?php echo $username; ?>" >
 <input id="date" name="date" type="text" class="hidden" value="<?php echo $deadline1; ?>" >

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Any Thing Special you want to mention</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="textarea" name="cover_letter"><?php if($alreadyApplied){echo $application['cover_letter'];} ?></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary"><?php if($alreadyApplied){echo "You have already applied,Take Back";}else{echo "Apply For This !";} ?></button>
  </div>
</div>


</fieldset>
</form>








</div>


