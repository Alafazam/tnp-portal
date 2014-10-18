<style>
	.company_name{
		font-size: 24px;
		margin-right: 10px;
	}
</style>

<div class="container-fluid">
		<h2>Companies</h2>
		<legend></legend>


<?php 
if (isset($list)&&$list) {
			foreach ($list as $key)
            {		$key["visit"] = "22/8/2014";
            
            	echo '	
					    <div class="panel panel-default">
						  	<div class="panel-heading">
							  	<h3 class="panel-title row">
							  		<p class="col-md-8"><a class="text-left company_name" href="/recruiters/view/'.$key["r_id"].'">'.$key["Company_name"].'</a>'.$key["Company_type"].'</p>
							    	<p  class="col-md-4 text-right">'.$key["Industry_Sector"].'</p>
						    	</h3>
						    	<div class="row">
							    	<label class="col-md-8 ">'.$key["visit"].'</label>
							    	<p class="col-md-4 text-right">'.$key["branchez"].'</p>
						    	</div>
						  	</div>
						  	<div class="panel-body">
							 	<p>'.$key["Brief"].'</p>   
							</div>
						</div>
'	;
			}

	} 

			?>
