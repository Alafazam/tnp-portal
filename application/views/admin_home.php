<?php
if (!isset($message)) {
    $message = $this->session->flashdata('message');
}

?>
<link rel="stylesheet" href="/css/timeline.css">



<div class="container-fluid">
	<h2>Announcement</h2>
	<legend></legend>
	<div class="row">
        <div class="timeline-centered">
			<!-- Start of articals -->
	
			<?php

if (isset($feeds) && $feeds) {
    foreach ($feeds as $key) {
        $type = "";
        if ($key['type'] === '1') {
            $type = "<div class='timeline-icon bg-success'><i class='entypo-feather'></i></div>";
        } elseif ($key['type'] === '2') {
            $type = "<div class='timeline-icon bg-secondary'><i class='entypo-suitcase'></i></div>";
        } elseif ($key['type'] === '3') {
            $type = "<div class='timeline-icon bg-warning'><i class='entypo-camera'></i></div>";
        }
        echo "<article class='timeline-entry'>

	            <div class='timeline-entry-inner'>" . $type . "<div class='timeline-label'>
	                    <h2><a href='#'>" . $key['heading'] . "</a> <span>" . $key['date'] . "</span></h2>
	                    <p><pre>" . $key['data'] . "</pre></p>
	            	<a href='#".$key["feed_id"]."' style='padding:3px 12px' class='btn btn-warning'>Edit</a>
          			<a href='#".$key['feed_id']."' style='padding:3px 12px' class='btn btn-danger'>Delete</a>
	                </div>
	            </div>
	        </article>";
        
    }
} else {
    echo "No new Announcements";
}
?>

	     
    <article class="timeline-entry begin">

        <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <a href="/admin_feeds">	<i class="entypo-flight"></i> +</a>
                </div>

            </div>

	</article>


</div>
	</div>
</div>
