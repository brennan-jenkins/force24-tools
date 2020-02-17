<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Add calendar event to HTML email</h1>
				</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-1">
				<h3>Start Date</h3>
				<input type="text" class="date_start_input">
				<div class="clear"></div>
				<h3>End Date</h3>
				<input type="text" class="date_end_input">
				<div class="clear"></div>
				<h3>Title</h3>
				<input type="text" class="title_input">
				<div class="clear"></div>
				<h3>Description</h3>
				<textarea type="text" class="desc_input"></textarea>
				<div class="clear"></div>
				<h3>Location</h3>
				<input type="text" class="location_input">
				<div class="clear"></div>
				<h3>Organiser</h3>
				<input type="text" class="org_input">
				<div class="clear"></div>
				<h3>Organiser email</h3>
				<input type="text" class="org_email_input">
				<div class="clear"></div>
			</div>
			<div class="col-md-5 offset-md-1">
				<div class="addtocalendar">
					<h3>Preview Links</h3>
					<var class="atc_event"  style="display:none;">
							<var class="atc_date_start">2014-05-04 18:00:00</var>
							<var class="atc_date_end">2014-05-04 18:00:00</var>
							<var class="atc_timezone">Europe/London</var>
							<var class="atc_title">Force24 Calendar Event</var>
							<var class="atc_description">May the force24 be with you</var>
							<var class="atc_location">Leeds</var>
							<var class="atc_organizer">Force24</var>
							<var class="atc_organizer_email">test@force24.co.uk</var>
					</var>
				</div>
				
				<div style="background-color:#f5f5f5; margin:20px 0 0; padding:20px;">
						<h5 style="color:#000000;">
							Your new calendar event code!
						</h5>
						<div class="calendarCode"></div>
					</div>
			</div>			
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("add-to-calendar");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 