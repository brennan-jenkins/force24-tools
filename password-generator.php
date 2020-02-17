<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Password Generator</h1>
				</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="form-row password-row">
					<h3 class="text-muted">How many characters should your password be?</h3>
					<input type="number" class="form-control character-set" maxlength="3" value="12" min="1" max="999" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);" >
					<div class="clear"></div>
				</div>
				<div class="form-row password-row">
					<h3 class="text-muted">Generate a password using uppercase, lowercase, numbers and special characters:</h3>
					<input type="text" class="form-control" rel="gp" data-size="12" data-character-set="a-z,A-Z,0-9,#">
					<button type="button" class="btn getNewPass icon--refresh" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Generate New">Refresh</button>
					<div class="clear"></div>
				</div>
				<div class="form-row password-row">
					<h3 class="text-muted">Generate a password using uppercase and lowercase character sets:</h3>
					<input type="text" class="form-control" rel="gp" data-size="12" data-character-set="a-z,A-Z">
					<button type="button" class="btn getNewPass icon--refresh" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Generate New">Refresh</button>
					<div class="clear"></div>
				</div>
				<div class="form-row password-row">
					<h3 class="text-muted">Generate a password using just uppercase character set:</h3>
					<input type="text" class="form-control" rel="gp" data-size="12" data-character-set="A-Z">
					<button type="button" class="btn getNewPass icon--refresh" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Generate New">Refresh</button>
					<div class="clear"></div>
				</div>
				<div class="form-row password-row">
					<h3 class="text-muted">Generate a password using just lowercase character set:</h3>
					<input type="text" class="form-control" rel="gp" data-size="12" data-character-set="a-z">
					<button type="button" class="btn getNewPass icon--refresh" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Generate New">Refresh</button>
					<div class="clear"></div>
				</div>
				<div class="form-row password-row">
					<h3 class="text-muted">Generate a password using just the numbers character set:</h3>
					<input type="text" class="form-control" rel="gp" data-size="12" data-character-set="0-9">
					<button type="button" class="btn getNewPass icon--refresh" data-css-gradient-direction="top" data-toggle="tooltip" data-placement="top" title="Generate New">Refresh</button>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("password-generator");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 