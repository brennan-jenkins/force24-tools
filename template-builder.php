<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-12">
					<h1 style="color:#00a4c3">Force24 Email Template Builder</h1>
				</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-row">
					<h3 class="black-text">Company Name</h3>
					<input type="text" value="" placeholder="Force24" class="template-company-name">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Upload your logo</h3>
					<input type="file">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Your website link</h3>
					<input type="text" value="" placeholder="tools.force24.co.uk" class="template-company-url">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Call to action background colour</h3>
					<input class="jscolor {onFineChange:'updateCtaBgColour(this)'}" value="00A4C3">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Call to action border colour</h3>
					<input class="jscolor {onFineChange:'updateCtaBorderColour(this)'}" value="00A4C3">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Call to text colour</h3>
					<input class="jscolor {onFineChange:'updateCtaTextColour(this)'}" value="ffffff">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Primary Colour</h3>
					<input class="jscolor {onFineChange:'updatePrimaryColour(this)'}" value="00a7c0">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Primary Colour</h3>
					<input class="jscolor {onFineChange:'updateSecondaryColour(this)'}" value="e5f6f9">
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-8 email-template-container"></div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("template-builder");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 