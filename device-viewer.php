<?php
	require_once('includes/header.php');
?>
<div class="container-fluid">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Device Viewer</h1>
				</div>
		</div>
		<div class="row">
			<div class="col-md-2 offset-md-1">
				<div class="form-row">
					<h3 class="black-text">Select Device</h3>
					<select name="selectDevice" id="selectDevice">
						<option value="Iphone XR" data-device-name="iphone-xr" data-width="414" data-height="896">Iphone XR</option> <!--414 x 896-->
						<option value="Iphone XS" data-device-name="iphone-xs" data-width="375" data-height="812">Iphone XS</option> <!--375 x 812-->
						<option value="Iphone XS Max" data-device-name="iphone-xs-max" data-width="414" data-height="896">Iphone XS Max</option> <!--414 x 896-->
						<option value="Iphone X" data-device-name="iphone-x" data-width="375" data-height="812">Iphone X</option> <!--375 x 812-->
						<option value="Iphone 8 Plus" data-device-name="iphone-8-plus" data-width="414" data-height="736">Iphone 8 Plus</option> <!--414 x 736-->
						<option value="Iphone 8" data-device-name="iphone-8" data-width="375" data-height="667">Iphone 8</option> <!--	375 x 667-->
						<option value="Iphone 7 Plus" data-device-name="iphone-7-plus" data-width="414" data-height="736">Iphone 7 Plus</option> <!--414 x 736-->
						<option value="Iphone 7" data-device-name="iphone-7" data-width="375" data-height="667">Iphone 7</option> <!--375 x 667-->
						<option value="Iphone 6 Plus / 6S Plus" data-device-name="iphone-6-plus" data-width="414" data-height="736">Iphone 6 Plus / 6S Plus</option> <!--414 x 736-->
						<option value="Iphone 6 / 6S" data-device-name="iphone-6" data-width="375" data-height="667">Iphone 6 / 6S</option> <!--375 x 667-->
						<option value="Iphone 5" data-device-name="iphone-5" data-width="320" data-height="568">Iphone 5</option> <!--320 x 568-->
						<option value="Iphone 5C" data-device-name="iphone-5c" data-width="320" data-height="568">Iphone 5C</option> <!--320 x 568-->
						<option value="Iphone 5S" data-device-name="iphone-5s" data-width="320" data-height="568">Iphone 5S</option> <!--320 x 568-->
						<option value="Iphone 4" data-device-name="iphone-4" data-width="320" data-height="480">Iphone 4</option> <!--320 x 480-->
						<option value="Iphone 4S" data-device-name="iphone-4s" data-width="320" data-height="480">Iphone 4S</option> <!--320 x 480-->
						<option value="Iphone 3G" data-device-name="iphone-3g" data-width="320" data-height="480">Iphone 3G</option> <!--320 x 480-->
						<option value="Iphone 3GS" data-device-name="iphone-3gs" data-width="320" data-height="480">Iphone 3GS</option> <!--320 x 480-->
						<option value="Iphone" data-device-name="iphone" data-width="320" data-height="480">Iphone</option> <!--320 x 480-->
						<option value="Samsung S10+" data-device-name="samsung-s10-plus" data-width="414" data-height="896" selected>Samsung S10+</option> <!---->
						<option value="Samsung S10" data-device-name="samsung-s10" data-width="414" data-height="896">Samsung S10</option> <!---->
						<option value="Samsung S10E" data-device-name="samsung-s10e" data-width="414" data-height="896">Samsung S10E</option> <!---->
						<option value="Samsung S9+" data-device-name="samsung-s9-plus" data-width="360" data-height="740">Samsung S9+</option> <!--360 x 740-->
						<option value="Samsung S9" data-device-name="samsung-s9" data-width="360" data-height="740">Samsung S9</option> <!--360 x 740-->
						<option value="Samsung S8+" data-device-name="samsung-s8-plus" data-width="360" data-height="740">Samsung S8+</option> <!--360 x 740-->
						<option value="Samsung S8" data-device-name="samsung-s8" data-width="360" data-height="740">Samsung S8</option> <!--360 x 740-->
						<option value="Samsung S7 Edge" data-device-name="samsung-s7-edge" data-width="360" data-height="640">Samsung S7 Edge</option> <!--360 x 640-->
						<option value="Samsung S7" data-device-name="samsung-s7" data-width="360" data-height="640">Samsung S7</option> <!--360 x 640-->
						<option value="Samsung S6 Edge" data-device-name="samsung-s6-edge" data-width="360" data-height="640">Samsung S6 Edge</option> <!--360 x 640-->
						<option value="Samsung S6" data-device-name="samsung-s6" data-width="360" data-height="640">Samsung S6</option> <!--360 x 640-->
						<option value="Nexus 5" data-device-name="nexus-5" data-width="360" data-height="598">Nexus 5</option> <!--360 x 598-->
						<option value="Nexus 6" data-device-name="nexus-6" data-width="411" data-height="731">Nexus 6 / Nexus 6P</option> <!--411 x 731-->
						<option value="Huawei P20 Lite" data-device-name="huawei-p20-lite" data-width="360" data-height="760">Huawei P20 Lite</option> <!--360 x 760-->
						<option value="Huawei P20 Pro" data-device-name="huawei-p20-pro" data-width="360" data-height="747">Huawei P20 Pro</option> <!--360 x 747-->
						<option value="Huawei P20" data-device-name="huawei-p20" data-width="360" data-height="747">Huawei P20</option> <!--360 x 748-->
						<option value="iPad" data-device-name="iPad" data-width="768" data-height="1024">iPad / iPad 2 / iPad 3 / iPad Air / iPad Mini</option> <!--360 x 748-->
					</select>
					<div class="clear"></div>
				</div>
				<div class="form-row">
					<h3 class="black-text">Select Orientation</h3>
					<select name="orientation" id="orientation">
						<option value="Iphone XR" data-orientation="portrait">Portrait</option>
						<option value="Iphone XS" data-orientation="landscape">Landscape</option>
					</select>
					<div class="clear"></div>
				</div>
				<div class="form-row">
					<h3 class="black-text">Website URL</h3>
					<input type="text" class="websiteUrl" value="http://frontendstaging.force24.co.uk/tools/">
					<!-- <p>Please note, Websites will only show if Frames are allowed by the website you are trying to view</p> -->
					<div class="clear"></div>
				</div>
				<div class="form-row">
					<h3 class="black-text">Direct HTML Input</h3>
					<textarea name="directInput" id="directInput" cols="30" rows="10"></textarea>
					<div class="clear"></div>
				</div>
			</div>
			<div class="col-md-8 offset-md-1" style="position:relative;">
				<div style="background-color:#f2f2f2;">
					<div class="phone-container">
						<div class="phone-camera"></div>
						<div class="phone-speaker"></div>
						<div class="phone-button"></div>
						<div class="phone-notch"></div>
						<iframe src="https://frontendstaging.force24.co.uk/tools" width="360" height="740" style="" class="deviceViewport"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
  document.body.classList.add("device-viewer");
</script>
<?php
	require_once('includes/footer.php');
?> 