<style>
	.company_name{
		font-size: 24px;
		margin-right: 10px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Companies</h2>
		<legend></legend>


			<div class="list-group">
<?php 
if (isset($list)&&$list) {

			// for ($i=0; $i <35 ; $i++) { 
				
			foreach ($list as $key)
            {		$key["visit"] = "22/8/2014";//TODO make calender for slecting visiting date
        			$key["Accepting applications"] = true;
            
            	echo '	

			  <a href="/recruiters/view/'.$key["r_id"].'" style="margin-bottom:3px;" class="list-group-item">
			    <h3 class="list-group-item-heading row">
			    	<p class="col-md-8">'.$key["Company_name"].'<small>'.$key["Company_type"].'</small></p>
			    	<p  class="col-md-4 text-right">'.$key["Industry_Sector"].'</p>
		    	</h3>
				<div class="list-group-item-text row">
			    	<p class="col-md-8 ">Visiting on: '.$key["visit"].'</p>
			    	<p class="col-md-4 text-right">Eligible Branches: '.$key["branchez"].'</p>
		    	</div>
			  </a>

'	;
			

	} 
}
			?>

		</div>