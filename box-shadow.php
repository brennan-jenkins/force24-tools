<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">CSS Box Shadow Generator</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-md-4 offset-md-1 box-shadow-sliders-wrapper">
					<div class="box-shadow-sliders">
						<div class="box-shadow-slider box-shadow-horizontal">
							<h3>Horizontal Shift <button class="horizontal-reset" style="float:right;">Reset</button></h3>
							<span class="box-shadow-horizontal-slider" data-min="-100" data-max="100" data-step="1" data-value="0" data-id="horizontalSlider"></span>
						</div>
						<div class="box-shadow-slider box-shadow-vertical">
							<h3>Vertical Shift <button class="vertical-reset" style="float:right;">Reset</button></h3>
							<span class="box-shadow-vertical-slider" data-min="-100" data-max="100" data-step="1" data-value="0" data-id="verticalSlider"></span>
						</div>
						<div class="box-shadow-slider box-shadow-spread">
							<h3>Spread <button class="spread-reset" style="float:right;">Reset</button></h3>
							<span class="box-shadow-spread-slider" data-min="0" data-max="100" data-step="1" data-value="10" data-id="spreadSlider"></span>
						</div>
						<div class="box-shadow-slider box-shadow-blur">
							<h3>Blur <button class="blur-reset" style="float:right;">Reset</button></h3>
							<span class="box-shadow-blur-slider" data-min="0" data-max="100" data-step="1" data-value="30" data-id="blurSlider"></span>
						</div>
						<div class="box-shadow-slider box-shadow-opacity">
							<h3>Opacity <button class="opacity-reset" style="float:right;">Reset</button></h3>
							<span class="box-shadow-opacity-slider" data-min="0" data-max="100" data-step="1" data-value="100" data-id="opacitySlider"></span>
						</div>
						<div class="box-shadow-slider box-shadow-colour">
							<h3>colour</h3>
							<input value="000000" class="jscolor {onFineChange:'updateBox(this)'}">
						</div>
						<div class="clear"></div>
						<div class="box-shadow-slider box-shadow-colour">
							<h3>Inset?</h3>
							<div class="styled-checkbox"><input value="out" type="checkbox" id="box-shadow-inset">
							<label for="box-shadow-inset"></label></div>
						</div>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div class="box-shadow-preview">
						<p>Preview</p>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="box-shadow-styles" style="background-color:#f5f5f5; margin:20px 0 0; padding:20px;">
					<h5 style="color:#000000;">
						Your new box-shadow code!
					</h5>
					<p style="color:#000000; margin:0; padding:0; text-transform:inherit; font-family:courier new; font-size:14px;">
						box-shadow: rgba(0,0,0,1) 0px 0px 30px 10px;<br>
						-webkit-box-shadow: rgba(0,0,0,1) 0px 0px 30px 10px;<br>
						-moz-box-shadow: rgba(0,0,0,1) 0px 0px 30px 10px;
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("box-shadow");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 