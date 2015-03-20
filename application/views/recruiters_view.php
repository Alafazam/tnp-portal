<style>
	.company_name{
		font-size: 24px;
		margin-right: 10px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Visiting companies</h2>
		<legend></legend>
			<div class="container-fluid" style="max-width:900px">
			<div class="list-group">
<?php 
if (isset($list)&&$list&&isset($cal)&&$cal) {

			// for ($i=0; $i <35 ; $i++) { 
				
			foreach ($list as $key)
            {		
            	
            // $key["visit"] = "22/8/2014";//TODO make calender for slecting visiting date //DONE BITCH
        			$key["Accepting applications"] = true;
            	$key["branchez"]  = str_replace(",",", ",$key["branchez"]);
            	echo '	
            <li class="list-group-item row" style="padding:0px;margin-left:0px;">
           
           <div class="col-md-2 " style="color:#fff;text-align: center;padding-bottom:10px;padding-top:10px;background-color: rgb(221, 75, 57) !important;">' . $cal[$key["r_id"]] . '</div>
           <div class="col-md-4" style="padding-bottom:10px;padding-top:10px;text-transform: capitalize;"><a href="/recruiters/view/' . $key["r_id"] . '" ">' . $key["Company_name"] . '</a></div>
           
           <div class="col-md-6">'.$key["branchez"].'</div>
           </li>


'	;
			

	} 
}
			?>

		</div>
	</div>