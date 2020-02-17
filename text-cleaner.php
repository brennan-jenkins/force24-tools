<?php
	require_once('includes/header.php');
?>
<div class="row">
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
			<div class="col-sm-10 offset-sm-1">
				<h1 style="color:#00a4c3">Text Cleaner</h1>
			</div>
			<div class="col-sm-5 offset-sm-1" style="padding-right:0;">
				<textarea name="text-cleaner-input" id="textinput" placeholder="Insert text here..." rows="7" style="min-height:200px"></textarea>
				<button type="button" class="btn reset-text" data-toggle="tooltip" data-placement="top" title="Clear text" style="position: absolute; top: 23px; margin:0; right: 15px; background-color: transparent; color: #555555; padding: 0; font-size:20px;"><i class="far fa-trash-alt"></i></button>
				<p class="display-word-count"></p>
				<p class="display-character-count"></p>
			</div>
			<div class="col-sm-5" style="padding-left:0;">
				<textarea readonly name="text-cleaner-output" id="textoutput" rows="7" placeholder="Clean text will be rendered here..." style="min-height:200px"></textarea>
				<button type="button" class="btn copy-text" data-toggle="tooltip" data-placement="top" title="Copy text" style="position: absolute; bottom: 23px; margin:0; right: 30px; background-color: transparent; color: #555555; padding: 0; font-size:20px;"><i class="far fa-copy"></i></button>
			</div>
			<div class="col-sm-10 offset-sm-1 text-options">			
				<div class="styled-checkbox">
					<input type="checkbox" name="text-options" value="Remove new lines" id="lines">
					<label for="lines"></label>
				</div><div class="styled-checkbox">
					<input type="checkbox" name="text-options" value="Remove tab spaces" id="tab">
					<label for="tab"></label>
				</div><div class="styled-checkbox">
					<input type="checkbox" name="text-options" value="Remove extra spaces" id="spaces">
					<label for="spaces"></label>
				</div><div class="styled-checkbox">
					<input type="checkbox" name="text-html-options" value="Character to HTML code" id="htmlChars">
					<label for="htmlChars"></label>
				</div><div class="styled-checkbox">
					<input type="checkbox" name="text-html-options" value="line to br" id="brTag">
					<label for="brTag"></label>
				</div>
				<br>
				<div class="styled-checkbox">
					<input type="radio" name="text-style-options" value="To Sentence case" id="sentence">
					<label for="sentence"></label>
				</div><div class="styled-checkbox">
					<input type="radio" name="text-style-options" value="To Uppercase" id="upper">
					<label for="upper"></label>
				</div><div class="styled-checkbox">
					<input type="radio" name="text-style-options" value="To Lowercase" id="lower">
					<label for="lower"></label>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("text-cleaner");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 