<?php
$data= $this->session->userdata('logged_in');
$flashSuccess =$this->session->flashdata('flashSuccess');

if ($data['type']!='admin') {
$fname=$data['fname'];
$username=$data['username'];
}



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

if ($job["bond_desc"]=='') {
$job["bond_desc"] = 'NA';
}


echo '
<div class="panel panel-primary">
  <div class="panel-heading text-center">'.$company_name.'</div>
  
  <ul class="list-group">
  	<li class="list-group-item"><label class="col-md-6">Designation</label>
  	<span class="text-center">'.$job["job_desig"].' </span>
  	</li>
    <li class="list-group-item"><p>'.$job["job_descr"].'</p>
    </li>
  	<li class="list-group-item"><label class="col-md-6">Application_dead_line:</label>
  	<span class="text-center">'.$job["application_dead_line"].' </span>
  	</li>
    <li class="list-group-item "><label class="col-md-6">Place Of Posting:</label>
    <span class="text-center">'.$job["place"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Eligible Departments And Programs:</label>
    <span class="text-center">'.$job["eligible_departments"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Cost To Company:</label>
    <span class="text-center">'.$job["ctc"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Gross (Take-Home, Before Tax And Other Deductions):</label>
    <span class="text-center">'.$job["gross"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Bonus/Perks/Incentive (If Any):</label>
    <span class="text-center">'.$job["bonus"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Bond Or Service Contract(If Yes, Give Details):</label>
    <span class="text-center">'.$job["bond"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Bond Description:</label>
    <span class="text-center">'.$job["bond_desc"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Shortlist From Resumes:</label>
    <span class="text-center">'.$job["shortlist_from_Resumes"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Written Test (Technical, Aptitude):</label>
    <span class="text-center">'.$job["written_Test"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Group Discussion:</label>
    <span class="text-center">'.$job["group_Discussion"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Personal Interview:</label>
    <span class="text-center">'.$job["personal_Interview"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Medical Test:</label>
    <span class="text-center">'.$job["medical_Test"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Number Of Rounds:</label>
    <span class="text-center">'.$job["number_of_rounds"].' </span>
    </li>
    <li class="list-group-item"><label class="col-md-6">Minimum Number Of Offers You Intend To Make::</label>
    <span class="text-center">'.$job["min_offers"].' </span>
    </li>
  </ul>
</div>

';
			$deadline = new DateTime();
			$deadline1 = $deadline->format('d-m-y');


  	 ?>


<?php if ($data['type']!='admin') {
 ?>
<form class="form-horizontal" role="form" <?php if(!$alreadyApplied) echo 'action="/jobs/apply" method="post"';else{echo 'action="/myapplications/delete/'.$job["job_id"].'"';} ?> >
  <fieldset>
   <input id="r_id" name="r_id" type="text" class="hidden" value="<?php echo $job["r_id"] ;?>" >
   <input id="job_id" name="job_id" type="text" class="hidden" value="<?php echo $job["job_id"] ;?>" >
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
<?php }else{
  ?>

<form class="form-horizontal" role="form" action="/admin_jobs/approveJob" method="post">
  <fieldset>
   <input id="job_id" name="job_id" type="text" class="hidden" value="<?php echo $job["job_id"] ;?>" >
  <!-- Button -->
  <div class="form-group">
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary"><?php if($job["approved"]=='1'){echo "You have Approved this job";}else{echo "Approve this job";} ?></button>
    </div>
  </div>

  </fieldset>
</form>

<?php  }; ?>







</div>


