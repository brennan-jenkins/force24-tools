<?php
	require_once('includes/header.php');
?>
<div class="container">
<div class="modal" id="copiedToClip" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title black-text">Copied to clipboard</h5>
      </div>
    </div>
  </div>
</div>
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Favicon Finder</h1>
				</div>
		</div>
		<div class="row favicon-finder">
				<div class="col-md-10 offset-md-1">
						<h4 style="margin-bottom:20px;">Easily get the favicon from any site by simply copying the website url into the input box and copying the output from the textarea, check out the preview to ensure you have the correct image. you can use this to update the favicon on your microsite within our portal</h4>
						<div>
								<h3>Your Website URL</h3>
								<input type="text" name="enterFaviconUrl" class="websiteUrl" placeholder="Enter Website URL" style="background-image: url('https://icons.duckduckgo.com/ip2/platform.data-crypt.com.ico'); background-repeat:no-repeat; background-position:center right 10px; background-size:16px;">
								<div class="clear"></div>
						</div>
						<div>
								<h3>Your Outcome URL</h3>
								<input type="text" value="https://icons.duckduckgo.com/ip2/platform.data-crypt.com.ico" readonly class="favicon-code" style="">
								<div class="clear"></div>
						</div>
						<div style="width:30%">
								<button class="button copy-favicon" style="width:100%; color:#ffffff!important;">Copy Link</button>
						</div>
				</div>
		</div>	
		<div class="clear"></div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    document.body.classList.add("favicon-finder");
  });
</script>
<?php
	require_once('includes/footer.php');
?>