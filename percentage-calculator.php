<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 style="color:#00a4c3">Percentage Calculator</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-1 calculator">
				<h3>Percentage Calculator</h3>
				<div class="percentage-1 percentage">
					<div class="">
						<input type="text" name="percentage-1-input-per" class="percentage-1-input-per">
						<div class="clear"></div>
					</div>
					<div class="">
						<input type="text" name="percentage-1-input-val" class="percentage-1-input-val">
						<div class="clear"></div>
					</div>
					<div class="">
						<input type="text" name="percentage-1-output" class="percentage-1-output">
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 calculator">
				<h3>Reversed Percentage Calculator</h3>
				<div class="percentage-2 percentage">
					<div class="">
						<input type="text" name="percentage-2-input-per" class="percentage-2-input-per">
						<div class="clear"></div>
					</div>
					<div class="">
						<input type="text" name="percentage-2-input-val" class="percentage-2-input-val">
						<div class="clear"></div>
					</div>
					<div class="">
						<input type="text" name="percentage-2-output" class="percentage-2-output">
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
  document.body.classList.add("percentage-calculator");
</script>
<?php
	require_once('includes/footer.php');
?> 