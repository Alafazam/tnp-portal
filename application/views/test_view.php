<?php
$data= $this->session->userdata('logged_in');
$username=$data['username'];
$flashSuccess =$this->session->flashdata('flashSuccess');
$fname=$data['fname'];
?>
 <!-- <?php  

	if ($flashSuccess) {
		echo "
		<script>
		$( document ).ready(function() {
		$('#myModal').modal('show');
		$('.modal-body').text('i am model ');
		});
		</script>
		";
	}
 ?>-->
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
$visit = "22/8/2014";
            
            	echo '	
					    <div class="panel panel-default">
						  	<div class="panel-heading">
							  	<h3 class="panel-title row">
							  		<p class="col-md-8"><a class="text-left company_name" href="/recruiters/view/'.$r_id.'">'.$Company_name.'</a>'.$Company_type.'</p>
							    	<p  class="col-md-4 text-right">'.$Industry_Sector.'</p>
						    	</h3>
						    	<div class="row">
							    	<label class="col-md-8 ">'.$visit.'</label>
							    	<p class="col-md-4 text-right">'.$branchez.'</p>
						    	</div>
						  	</div>
						  	<div class="panel-body">
							 	<p>'.$Brief.'</p>   
							</div>
						</div>
'	;
		

			?>
