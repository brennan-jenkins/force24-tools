<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">HTML email - RSS feed</h1>
				</div>
		</div>
		
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<?php
					$xml = simplexml_load_file("https://www.force24.co.uk/blog/feed/");
					foreach($xml->channel->item as $rssitem) {
						echo '<h3>' . $rssitem->title[0] . '</h3>';
						echo $rssitem->description[0] . '<br>';
						echo '<a href="' . $rssitem->link[0] . '">Read more</a><br><br>';
					}
				?>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("css-gradient");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 