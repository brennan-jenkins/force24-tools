<?php
	require_once('includes/header.php');
	error_reporting( E_ALL );
?>
<div class="container">
	<div class="page-container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 style="color:#00a4c3">Countdown Timer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<h3>Time \ Date</h3>
				<input type="text" class="date_countdown_input" value="2019-12-25+00:00:01">
				<div class="clear"></div>
				<h3>Background-color</h3>
				<input type="text" class="jscolor {onFineChange:'updateCountdownBackground(this)'}" value="ffffff">
				<div class="clear"></div>
				<h3>Font-color</h3>
				<input type="text" class="jscolor {onFineChange:'updateCountdownTextColor(this)'}" value="000000">
				<div class="clear"></div>
				<h3>font-size</h3>
				<input type="text" class="countdown_timer_font_size" value="60">
				<div class="clear"></div>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<div class="bgf5f5f5" style="text-align:center; padding:40px 0;">
					<img class="countdownTimerPreview" src="https://tools.force24.co.uk/gif.php?time=2019-12-25+00:00:01&width=365&height=60&boxColor=ffffff&font=BebasNeue&fontColor=000000&fontSize=60&xOffset=0&yOffset=60" alt="Countdown" style="display:inline-block">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div style="background-color:#f5f5f5; margin:20px 0 0; padding:20px;">
					<h5 style="color:#000000;">
						Your new countdown timer code!
					</h5>
					<p class="countdownTimerSrc" style="color:#000000; margin:0; padding:0; text-transform:inherit; font-family:courier new; font-size:14px; word-wrap; overflow-wrap: break-word;">
						&lt;img src="https://tools.force24.co.uk/gif.php?time=2019-12-25+00:00:01&width=365&height=60&boxColor=ffffff&font=BebasNeue&fontColor=000000&fontSize=60&xOffset=0&yOffset=60" alt="Countdown" class="imgmax">
					</p>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    document.body.classList.add("countdown-timer");
  });
</script>
<?php
	require_once('includes/footer.php');
?>