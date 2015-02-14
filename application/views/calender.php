<link href="/css/fullcalendar.min.css" rel="stylesheet" />
<script src="/js/moment.min.js"></script>
<script src="/js/fullcalendar.min.js"></script>

<script>

var j = new Date();
var a = ""+j.getFullYear()+"-"+(j.getMonth()+1)+"-"+j.getDate();

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: a,
			// editable: true,
			lazyFetching:false,
			height: 'auto',
			eventLimit: true, // allow "more" link when too many events
			fixedWeekCount:false,
			events: [
				<?php 
				if (isset($data)){					
					foreach ($data as $value) {
					echo "
					{
					title: '".$value['Company_name']."',
					url: 'recruiters/view/".$value['r_id']."',
					start: '".$value['date']."'
					},"	;	
					}
				};
				?>
				{
					title: 'calendar by fullcalendar.io',
					url: 'http://fullcalendar.io',
					start: '2000-09-28'
				}
			]
		});
		
	});

</script>
<style>

	body {
		/*margin: 40px 5px;*/
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		/*font-size: 14px;*/
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

#calendar-con{
		margin-top: 35px;

}
</style>

<div id="calendar-con"	class="container-fluid">
	<div id='calendar'></div>
</div>
