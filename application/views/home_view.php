<?php if (!isset($message)) {
$message = $this->session->flashdata('message');
}

 ?>
<link rel="stylesheet" href="/css/timeline.css">



<div class="container-fluid">
		<h2>Announcements</h2>
		<legend></legend>

	<div class="row">
    

        <div class="timeline-centered">
			<!-- Start of articals -->
	
			<?php foreach ($feeds as $key)
			{	$type = "";
				if ($key['type']==='1') {
					$type = "<div class='timeline-icon bg-success'><i class='entypo-feather'></i></div>";
				} elseif ($key['type']==='2') {
					$type = "<div class='timeline-icon bg-secondary'><i class='entypo-suitcase'></i></div>";
				} elseif ($key['type']==='3') {
					$type = "<div class='timeline-icon bg-warning'><i class='entypo-camera'></i></div>";
				}
				echo "<article class='timeline-entry'>

	            <div class='timeline-entry-inner'>".$type."<div class='timeline-label'>
	                    <h2><a href='#'>".$key['heading']."</a> <span>".$key['date']."</span></h2>
	                    <p><pre>".$key['data']."</pre></p>
	                </div>
	            </div>
	        </article>";

			} ?>

	        <article class='timeline-entry'>

	            <div class='timeline-entry-inner'>

	                <div class='timeline-icon bg-success'>
	                    <i class='entypo-feather'></i>
	                </div>

	                <div class='timeline-label'>
	                    <h2><a href='#'>Art Ramadani</a> <span>posted a status update</span></h2>
	                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
	                </div>
	            </div>
	        </article>


	        <article class="timeline-entry">

	            <div class="timeline-entry-inner">

	                <div class="timeline-icon bg-secondary">
	                    <i class="entypo-suitcase"></i>
	                </div>

	                <div class="timeline-label">
	                    <h2><a href="#">Job Meeting</a></h2>
	                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
	                </div>
	            </div>

	        </article>


	        <article class="timeline-entry">

	            <div class="timeline-entry-inner">

	                <div class="timeline-icon bg-warning">
	                    <i class="entypo-camera"></i>
	                </div>

	                <div class="timeline-label">
	                    <h2><a href="#">Arber Nushi</a> <span>changed his</span> <a href="#">Profile Picture</a></h2>

	                    <blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
	                </div>
	            </div>

	        </article>


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
