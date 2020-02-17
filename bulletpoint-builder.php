<?php
	require_once('includes/header.php');
?>



<div>
	<div class="container">
		<div class="page-container">
		<div class="modal" id="copiedToClip" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title black-text">Copied to clipboard</h5>
      </div>
    </div>
  </div>
</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">Bulletpoint builder</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 offset-md-1">
					
					<input type="text" id="generateList" placeholder="Insert bulletpoint text" name="generateList">
					<div class="clear"></div>
					<h3>
						Choose bulletpoint style:
</h3>
					<select name="" id="bulletStyle">
						<option value="disc" selected="">&bull;</option>
						<option value="circle">&#9675;</option>
						<option value="square">&#9632;</option>
						<option value="dash">-</option>
						<option id="imageSelect" value="image">image</option>
					</select>
					<div class="clear"></div>
					<h3>
						Bulletpoint Vertical Alignment
</h3>
					<select name="" id="bulletAlign">
						<option value="top" selected="">top</option>
						<option value="middle">middle</option>
						<option value="bottom">bottom</option>
					</select>
					<div class="clear"></div>
					<h3>Bullet point width (percentage)</h3>
					<div class="changeResizeWrapper">
						<input type="number" class="changeResize" id="td1Val" value="3" maxlength="3" max="100" min="0">
					</div>
					
					<div class="clear"></div>
					<!-- <label for="" style="display: block; margin: 15px 0 0 0;">Text width</label>
					<input type="text" class="changeResize" id="td3Val" value="94"> -->
				</div>
				<div class="col-md-5 offset-md-1">
					<div style="width: 100%; padding: 25px 0;" id="tableWrapper"><table id="previewTable" border="0" cellspacing="0" cellpadding="0" style="width: 100%;"></table>
					</div>
				</div>
			</div>
			<div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<a href="" class="button" id="generateCode">Generate HTML</a>
					<div class="clear"></div>
					</div>
					<div class="col-md-10 offset-md-1">
						<textarea name="" id="bulletpointOutput" rows="20" style="width: 100%;"></textarea>
						<button type="button" class="copy-text" data-toggle="tooltip" data-placement="top" title="Copy text" style="position: absolute; bottom: 23px; margin:0; right: 30px; background-color: transparent; color: #555555; padding: 0; font-size:20px;"><i class="far fa-copy"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("bulletpoint-page");
    });
</script>


<?php
	require_once('includes/footer.php');
?> 