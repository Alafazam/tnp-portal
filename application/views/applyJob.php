<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$fname=$data['fname'];
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


echo '
<div class="panel panel-primary">
  <div class="panel-heading text-center">'.$company_name.'</div>
  <div class="panel-body">
    <p>'.$job["job_descr"].'</p>
  </div>

  <ul class="list-group">
  	<li class="list-group-item"><label class="col-md-8">Designation</label>
  	<span class="text-center">'.$job["job_desig"].'</span>
  	</li>
  	<li class="list-group-item"><label class="col-md-8">Application_dead_line</label>
  	<span class="text-center">'.$job["application_dead_line"].'</span>
  	</li>
    <li class="list-group-item "><label class="col-md-8">Place Of Posting</label>
    <span class="text-center">'.$job["place"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Eligible Departments And Programs</label>
    <span class="text-center">'.$job["eligible_departments"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Cost To Company</label>
    <span class="text-center">'.$job["ctc"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Gross (Take-Home, Before Tax And Other Deductions)</label>
    <span class="text-center">'.$job["gross"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Bonus/Perks/Incentive (If Any)</label>
    <span class="text-center">'.$job["bonus"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Bond Or Service Contract(If Yes, Give Details)</label>
    <span class="text-center">'.$job["bond"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Bond Description</label>
    <span class="text-center">'.$job["bond_desc"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Shortlist From Resumes</label>
    <span class="text-center">'.$job["shortlist_from_Resumes"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Written Test (Technical, Aptitude)</label>
    <span class="text-center">'.$job["written_Test"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Group Discussion</label>
    <span class="text-center">'.$job["group_Discussion"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Personal Interview</label>
    <span class="text-center">'.$job["personal_Interview"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Medical Test</label>
    <span class="text-center">'.$job["medical_Test"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Number Of Rounds</label>
    <span class="text-center">'.$job["number_of_rounds"].'</span>
    </li>
    <li class="list-group-item"><label class="col-md-8">Minimum Number Of Offers You Intend To Make:</label>
    <span class="text-center">'.$job["min_offers"].'</span>
    </li>
  </ul>
</div>

';
			$deadline = new DateTime();
			$deadline1 = $deadline->format('d-m-y');


  	 ?>

<form class="form-horizontal" role="form" <?php if(!$alreadyApplied) echo 'action="/jobs/apply"'; ?> method="post">
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
    <button id="singlebutton" name="singlebutton" class="btn btn-primary"><?php if($alreadyApplied){echo "You have already applied";}else{echo "Apply For This !";} ?></button>
  </div>
</div>

</fieldset>
</form>








</div>


