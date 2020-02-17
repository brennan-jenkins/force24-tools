<?php
	require_once('includes/header.php');
?>
<?php
	$html = file_get_contents($_POST['website-url-value']);
	if(!empty($html)) {
		$website_doc = new DOMDocument();

		libxml_use_internal_errors(TRUE); //disable libxml errors

		$website_doc->loadHTML($html);

		libxml_clear_errors(); //remove errors for bad html

		$xpath = new DOMXPath($website_doc);

		$rssElements = $xpath->query("//li[contains(@class, 'job')]");
	}
?>
<div class="col-md-5 offset-md-1">
  <form action="" method="post">
    <h3>Page URL:</h3><br>
    <input type="text" name="website-url-value" id="website-url-value" style="border:1px solid #000;" />
    <div class="clear"></div>
    <input type="submit" name="submit" value="Generate XML" class="button" />
  </form>
</div>
<div class="col-md-5">
  
<h3>RSS items we found on your page...</h3>
				<?php
					foreach($rssElements as $key => $rssElement) {
            $rssElementItems = $xpath->query('
						descendant:://a[contains(@href, "://")]|
						descendant:://h4|
						descendant:://li[contains(@class, "tag")]|
						descendant:://p', $rssElement);	
						echo "<div class='single-rss-element'><div class='all-fields'>";
						foreach ($rssElementItems as $rssElementItem) {
							echo "<div class='single-rss-item'>test</div>";
						}
						echo "</div></div>";
					}
				?>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("web-to-xml");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 