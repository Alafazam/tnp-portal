<link rel="stylesheet" href="/css/timeline.css">

<div class="container-fluid">
		<h2>Announcements</h2>
		<legend></legend>

	<div class="row">
    

        <div class="timeline-centered">
			<!-- Start of articals -->
	
			<?php 
		if ($jobs) {
			foreach ($jobs as $key)
            // implode("-", array_reverse(explode("/", $var)));
			// {	$key['application_dead_line'] = implode("-", array_reverse(explode("/", $key['application_dead_line'])));
            {
                $key['type'] = $key['approved'];

				if ($key['type']==='1') {
					$type = "<div class='timeline-icon bg-success'><i class='entypo-feather'></i></div>";
				} else{
					$type = "<div class='timeline-icon bg-secondary'><i class='entypo-suitcase'></i></div>";
				}
				echo "<article class='timeline-entry'>

	            <div class='timeline-entry-inner'>".$type."<div class='timeline-label'>
	                    <h2><a href='/recruiter_myjobs/view/".$key['job_id']."'>".$key['job_desig']."</a> <span>".$key['application_dead_line']."</span></h2>
                        <pre>".$key['place']."</pre>
                        <pre>CTC:".$key['ctc'].", GROSS:".$key['gross']."</pre>
                        <p>".$key['job_descr']."</p>	                    
	                	<a class='btn btn-primary btn-md' style='margin-top:10px;'href='/recruiter_myjobs/delete/".$key['job_id']."'>Delete this job</a>
                	</div>
	            </div>
	        </article>";

			} 
		}else{

		echo '
		<article class="timeline-entry">
		<div class="timeline-entry-inner">
		<div class="timeline-label">
		<h4><a href="/recruiter_create_job">Want to create a job..???</a></h4>
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
