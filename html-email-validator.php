<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
			<div class="container-banner">
				<div class="col-md-10 offset-md-1" style="padding:0;">
					<h6>
					Force24 have written multiple comprehensive step by step instructions that will help you achieve any issue you might be struggling with... <a href="http://support.data-crypt.com/building-emails" target="_blank">Read more</a>
					</h6>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<h1 style="color:#00a4c3; margin-top: 20px;">Force24 Email HTML validator</h1>
				<div class="main-wrap code-edit">
					<!--ul>
						<li id="byDirectInput">
							Direct input
						</li>
						<li id="byUpload">
							By file upload
						</li>
						<div class="clear"></div>
					</ul-->
					<h3>Paste your HTML code here:</h3>
					<div id="codeEditor"></div>
					<div class="clear"></div>
					<!--div id="codeUpload">
						<button type="button" class="button " onclick="document.getElementById('uploadThis').click()">Add HTML file</button>
						<div class="form-group inputDnD">
							<h3 class="sr-only" for="inputFile">File Upload</h3>
							<input type="file" class="form-control-file text-primary font-weight-bold" id="uploadThis" accept="text/html" onchange="loadfile(this)" data-title="Drag and drop a file">
							<div class="clear"></div>
						</div>
					</div-->
					<iframe src="" frameborder="0" class="middle-man" id="middle-man" style="display:none"></iframe>
					<button class="validate-code button">Validate this</button>
				</div>	
				<div>
					<h3 id="copyCodeHead">Copy this result back into your code:</h3>
					<div id="codeOutput"></div>
					<button class="downloadTemplate button">Download Template</button>
				</div>	
			</div>
			
			<div class="col-md-4 offset-md-1">
				<h3>If there are issues in your code, they will appear here:</h3>
				<div class="validate-messages">
					<div class="error-wrapper">
					</div>
					<div class="clear"></div>
					<div class="notice-wrapper">
					</div>
					<div class="clear"></div>
					<div class="information-wrapper">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("email-validator");
    });
</script>
<?php
	require_once('includes/footer.php');
?>
