<link rel="stylesheet" href="/css/timeline.css">

<div class="container-fluid">
		<h2>Announcements</h2>
		<legend></legend>
	<div class="row">
    

        <div class="timeline-centered">
			<!-- Start of articals -->
	
			<?php 
			if (isset($interns)&&$interns) 
			{
				foreach ($interns as $key)
	            {
	            // implode("-", array_reverse(explode("/", $var)));
				// {	$key['application_dead_line'] = implode("-", array_reverse(explode("/", $key['application_dead_line'])));
	                $key['type'] = $key['approved'];

					if ($key['type']==='1') {
						$type = "<div class='timeline-icon bg-success'><i class='entypo-feather'></i></div>";
					} else{
						$type = "<div class='timeline-icon bg-secondary'><i class='entypo-suitcase'></i></div>";
					}
					echo "<article class='timeline-entry'>

		            <div class='timeline-entry-inner'>".$type."<div class='timeline-label'>
		                    <h2><a href='/recruiter_myinterns/view/".$key['intern_id']."'>".$key['intern_name']."</a> <span>".$key['application_dead_line']."</span></h2>
	                        <pre>".$key['loc']."</pre>
	                        <pre>Stripend: ".$key['stipend']." 	Accomodation: ".$key['accom']."</pre>
	                        <p>".$key['training_descr']."</p>
	                        <p>Skills Required<br>".$key['skills']."</p>	                    
		                	<a class='btn btn-primary btn-md' style='margin-top:10px;'href='/recruiter_myinterns/delete/".$key['intern_id']."'>Delete this internship offer</a>
	                	</div>
		            </div>
		        </article>";

				} 
		}else{

		echo '
		<article class="timeline-entry">
		<div class="timeline-entry-inner">
		<div class="timeline-label">
		<h4><a href="/recruiter_create_intern">Want to create an internship offer..???</a></h4>
		</div>
		</div>
		</article>
		';
		// echo '
		// <article class="timeline-entry">
		// <div class="timeline-entry-inner">
		// <div class="timeline-label">
		// <h4><a href="/recruiter_create_job">Want to create a job..???</a></h4>
		// </div>
		// </div>
		// </article>
		// ';


		}
		?>
	
	        <article class="timeline-entry begin">

	            <div class="timeline-entry-inner">

	                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
	                    <i class="entypo-flight"></i> +
	                </div>

	            </div>

	        </article>

    </div>

    
	</div>
</div>
