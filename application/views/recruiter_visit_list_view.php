<style>
	.company_name{
		font-size: 24px;
		margin-right: 10px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Our visits</h2>
		<legend></legend>


			<div class="list-group">
<?php 
if (isset($data)&&$data) {
				
			foreach ($data as $key)
            {		
            	            
            	echo '	

			  <a href="/recruiter_visit/view/'.$key["v_id"].'" style="margin-bottom:3px;" class="list-group-item">
			    <h3 class="list-group-item-heading row">
			    	<p class="col-md-8">Visiting Date:	'.$key["date"].'</p>
		    	</h3>
				<div class="list-group-item-text row">
			    	<p class="col-md-6 ">Contact Person: '.$key["contact_name"].'</p>
		    	</div>
			  </a>

'	;
			

	} 
}
			?>

		<div>
			<a href="/recruiter_visit/plan">Want to plan a new visit?</a>
		</div>

		</div>