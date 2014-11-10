<style>
	.company_name{
		font-size: 24px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Available interns</h2>
		<legend></legend>


			<div class="list-group">
<?php 
	if (isset($interns)&&$interns) {
			echo '
			<div class="panel panel-primary">
			  <div class="panel-heading company_name">Available Internship Openings</div>
			  <ul class="list-group">
			';

			foreach ($interns as $key)
		    {	$deadline = new DateTime($key["application_dead_line"]);
				$deadline1 = $deadline->format('d-m-y');
	  			echo '
	  			<a class="row list-group-item"style="margin-right:5px;margin-left:5px;" href="/interns/view/'.$key["intern_id"].'">
	  			<div class="col-md-2">Title :'.$key["intern_name"].'</div>
	  			<div class="col-md-3">Company :'.$company_names["".$key["r_id"].""].'</div>
	  			<div class="col-md-2">Discribtion :'.$key["training_descr"].'</div>
	  			<div class="col-md-3">'.$key["eligible_departments"].'</div>
	  			<div class="col-md-2">Last date to Apply	:'.$deadline1.'</div>
	  			</a>';

	  		}
	  		echo '</ul>';
	  	}			

  	?>

		</div>