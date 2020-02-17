<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Code Editor</h1>
					<button type="button" class="btn code-fill-screen" data-toggle="tooltip" data-placement="top" title="Full Screen" style="position: absolute; top: 23px; margin:0; right: 15px; background-color: transparent; color: #555555; padding: 0; font-size:20px;"><i class="fas fa-expand"></i></button>
				</div>
		</div>
		
		<div class="row code-editor-container">
			<div class="col-sm-5 offset-sm-1">
				<div class="code-editor-wrapper">
				<button type="button" class="btn code-fill-screen" data-toggle="tooltip" data-placement="top" title="Full Screen" style="position: absolute; top: 23px; z-index:999; margin:0; right: 15px; background-color: transparent; color: #555555; padding: 0; font-size:20px;"><i class="fas fa-expand"></i></button>
					<textarea name="code-editor" id="code-editor"></textarea>
				</div>
			</div>
			<div class="col-sm-5">
				<iframe id="preview" width="100%" style="border:0; height:100%; margin-top:20px;"></iframe>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("code-editor");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 