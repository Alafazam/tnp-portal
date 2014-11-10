<?php
$data= $this->session->userdata('logged_in');
$flashSuccess =$this->session->flashdata('flashSuccess');
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
	$visit = "22/8/2014";
	$today = new DateTime();
       
	echo '
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading company_name panel-success text-center">'.$Company_name.'</div>
		  
		  <ul class="list-group">
		    <a class="list-group-item" href="#">Official Website</a>
		    <li class="list-group-item">Company Type: '.$Company_type.'</li>
		    <li class="list-group-item">Industry Sector: '.$Industry_Sector.'</li>
		    <li class="list-group-item">Expected Date of Visit: '.$visit.'</li>
		    <li class="list-group-item">Eligible Branches: '.$branchez.'</li>
		  </ul>
		  <div class="panel-body">
		 	<p>Brief:
		 	'.$Brief.'</p>   
		  </div>
		</div>
	';

	if (isset($jobs)&&$jobs) {
		echo '
		<div class="panel panel-primary">
		  <div class="panel-heading company_name">Job Positions Available</div>
		  <ul class="list-group">
		';

		foreach ($jobs as $key)
	    {	 $deadline = new DateTime($key["application_dead_line"]);
			$deadline1 = $deadline->format('d-m-y');
			// echo $interval->format('%d days');
			// $deadline->format('y-m-d') ;
			// $interval = date_diff($deadline, $today);
			// $interval = $today->diff($deadline);
  			echo '
  			<a class="row list-group-item"style="margin-right:5px;margin-left:5px;" href="/jobs/view/'.$key["job_id"].'">
  			<div class="col-md-3">Designation :'.$key["job_desig"].'</div>
  			<div class="col-md-2">Place :'.$key["place"].'</div>
  			<div class="col-md-2">CTC :'.$key["ctc"].'PM</div>
  			<div class="col-md-2">Lastdate to Apply	:'.$deadline1.'PM</div>
  			<div class="col-md-3">'.$key["eligible_departments"].'</div>
  			</a>';

  		}
  	}
  	 ?>
  </ul>
</div>


