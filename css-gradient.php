<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">CSS Gradient Generator</h1>
				</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 offset-md-1">
				<div class="form-row">
					<h3 class="black-text">Gradient Direction</h3>
					<div class="clear"></div>
					<a href="" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Bottom to Top"><i class="fa fa-arrow-alt-circle-up"></i></a>
					<a href="" data-css-gradient-direction="right top" data-toggle="tooltip" data-placement="top" title="Bottom Left to Top Right"><i class="fa fa-arrow-alt-circle-up" style="transform: rotate(45deg);"></i></a>
					<a href="" data-css-gradient-direction="right" data-toggle="tooltip" data-placement="top" title="Left to Right"><i class="fa fa-arrow-alt-circle-right"></i></a>
					<a href="" data-css-gradient-direction="right bottom" data-toggle="tooltip" data-placement="top" title="Top Left to Bottom Right"><i class="fa fa-arrow-alt-circle-right" style="transform: rotate(45deg);"></i></a>
					<a href="" data-css-gradient-direction="bottom" data-toggle="tooltip" data-placement="top" title="Top to Bottom"><i class="fa fa-arrow-alt-circle-down"></i></a>
					<a href="" data-css-gradient-direction="left bottom" data-toggle="tooltip" data-placement="top" title="Top Right to Bottom Left"><i class="fa fa-arrow-alt-circle-down" style="transform: rotate(45deg);"></i></a>
					<a href="" data-css-gradient-direction="left" data-toggle="tooltip" data-placement="top" title="Right to Left"><i class="fa fa-arrow-alt-circle-left"></i></a>
					<a href="" data-css-gradient-direction="left top" data-toggle="tooltip" data-placement="top" title="Bottom Right to Top Left"><i class="fa fa-arrow-alt-circle-left" style="transform: rotate(45deg);"></i></a>
					<a href="" data-css-gradient-direction="radial" data-toggle="tooltip" data-placement="top" title="Circular from Middle"><i class="fa fa-circle-notch"></i></a>
				</div>
				<div class="form-row">
					<h3 class="black-text">Colour One</h3>
					<input class="jscolor {onFineChange:'updateCssGradientOne(this)'}" id="primaryColour" value="132c46">
				</div>
				<div class="clear"></div>
				<div class="form-row">
					<h3 class="black-text">Colour Two</h3>
					<input class="jscolor {onFineChange:'updateCssGradientTwo(this)'}" id="secondaryColour" value="00a4c3">
				</div>
			</div>
			<div class="col-md-5 offset-md-1">
				<div class="css-gradient-preview">
					<p>Preview</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="css-gradient-styles" style="background-color:#f5f5f5; margin:20px 0 0; padding:20px;">
					<h5 style="color:#000000;">
						Your new CSS gradient code!
					</h5>
					<p style="color:#000000; margin:0; padding:0; text-transform:inherit; font-family:courier new; font-size:14px;">
						background-image: linear-gradient(to bottom, #132c46, #00a4c3);
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("css-gradient");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 