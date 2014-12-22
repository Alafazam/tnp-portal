<style>
	.company_name{
		font-size: 24px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Available Jobs</h2>
		<legend></legend>
<table class="table table-hover">
      <thead>
        <tr>
          <th class="col-md-2">Name</th>
          <th class="col-md-1">Branch</th>
          <th class="col-md-4">Career objective</th>
          <th class="col-md-4">Cover Letter</th>
          <th class="col-md-1">Action</th>
        </tr>
      </thead>
      <tbody>


<?php 
	if (isset($jobs)&&$jobs) {
		$data= $this->session->userdata('logged_in');

		if ($data['type']=='admin') {
			$admin = 'admin_';
		}else {
		$admin = '';
		}

			foreach ($jobs as $key)
		    {	$deadline = new DateTime($key["application_dead_line"]);
				$deadline1 = $deadline->format('d-m-y');
	  			echo '
	  			<a  href="/'.$admin.'jobs/view/'.$key["job_id"].'">
	  			<tr>	
	  			<td>'.$company_names["".$key["r_id"].""].'</td>
	  			<td>'.$key["job_desig"].'</td>
	  			<td>'.$key["eligible_departments"].'</td>
	  			<td>'.$key["place"].'</td>
	  			<td>'.$deadline1.'</td>
	  			
	  			</tr>
	  			</a>
	  			';

	  		}
	  	}			

  	?>
  </tbody>
</table>
		</div>