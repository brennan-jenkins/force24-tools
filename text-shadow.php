<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">CSS Text Shadow Generator</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-md-4 offset-md-1 text-shadow-sliders-wrapper">
					<div class="text-shadow-sliders">
						<div class="text-shadow-slider text-shadow-horizontal">
							<h3>Horizontal Shift <button class="horizontal-reset" style="float:right;">Reset</button></h3>
							<span class="text-shadow-horizontal-slider" data-min="-40" data-max="40" data-step="1" data-value="2" data-id="horizontalSlider"></span>
						</div>
						<div class="text-shadow-slider text-shadow-vertical">
							<h3>Vertical Shift <button class="vertical-reset" style="float:right;">Reset</button></h3>
							<span class="text-shadow-vertical-slider" data-min="-40" data-max="40" data-step="1" data-value="2" data-id="verticalSlider"></span>
						</div>
						<div class="text-shadow-slider text-shadow-blur">
							<h3>Blur <button class="blur-reset" style="float:right;">Reset</button></h3>
							<span class="text-shadow-blur-slider" data-min="0" data-max="20" data-step="1" data-value="2" data-id="blurSlider"></span>
						</div>
						<div class="text-shadow-slider text-shadow-opacity">
							<h3>Opacity <button class="opacity-reset" style="float:right;">Reset</button></h3>
							<span class="text-shadow-opacity-slider" data-min="0" data-max="100" data-step="1" data-value="100" data-id="opacitySlider"></span>
						</div>
						<div class="text-shadow-slider text-shadow-colour">
							<h3>colour</h3>
							<input value="000000" class="jscolor {onFineChange:'updateText(this)'}">
						</div>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div class="text-shadow-preview">
						<h2>Preview</h2>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="text-shadow-styles" style="background-color:#f5f5f5; margin:20px 0 0; padding:20px;">
					<h5 style="color:#000000;">
						Your new text-shadow code!
					</h5>
					<p style="color:#000000; margin:0; padding:0; text-transform:inherit; font-family:courier new; font-size:14px;">
						text-shadow: rgba(0,0,0,1) 2px 2px 2px;
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("text-shadow");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 