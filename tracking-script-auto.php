<?php
	require_once('includes/header.php');
?>
<?php
	$html = file_get_contents($_POST['website-url-value']);
	$clientID = $_POST['clientID'];
	$anonCookieValue = $_POST['anonCookieValue'];
	if(!empty($html)) {
		$website_doc = new DOMDocument();

		libxml_use_internal_errors(TRUE); //disable libxml errors

		$website_doc->loadHTML($html);

		libxml_clear_errors(); //remove errors for bad html

		$xpath = new DOMXPath($website_doc);

		$forms = $xpath->query("//form");
	}
?>
<div class="container">
	<div class="page-container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 style="color:#00a4c3">Force24 Tracking Script & Form Mapping</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<form action="" method="post">
					<h3>Page URL:</h3><br>
					<input type="text" name="website-url-value" id="website-url-value" style="border:1px solid #000;" />
					<div class="clear"></div>
					<h3>Your Client ID:</h3><br>
					<input type="text" name="clientID" id="clientID" style="border:1px solid #000;" maxlength="36" />
					<div class="clear"></div>
					<h3 class="black-text">Would you like anonymous data collection?</h3>
					<div class="styled-radio"><input type="radio" name="anonCookieValue" id="anonCookieTrue" value="true"><label for="anonCookieTrue">Yes</label></div>
					<div class="styled-radio"><input type="radio" name="anonCookieValue" id="anonCookieFalse" value="false"><label for="anonCookieFalse">No</label></div>
					<div class="clear"></div>
					<div style="display:block; clear:both; margin-bottom:20px;"></div>
					<input type="submit" name="submit" value="Find forms" class="button" />
				</form>
			</div>
			<div class="col-md-5">
				<h3>Forms we found on your page...</h3>
				<?php
					foreach($forms as $key => $form) {
					$inputs = $xpath->query('
						descendant::input[@type="email"]|
						descendant::input[@type="text"]|
						descendant::input[@type="radio"]|
						descendant::input[@type="checkbox"]|
						descendant::input[@type="tel"]|
						descendant::input[@type="date"]|
						descendant::input[@type="number"]|
						descendant::input[@type="time"]|
						descendant::textarea|
						descendant::select', $form);	
						echo "<div class='single-form'><strong>Form ".($key+1) . " - " . $form->getAttribute('id') . "</strong><div class='all-fields'>";
						foreach ($inputs as $input) {
							echo "<div class='single-input'>" . $input->getAttribute('name') . '</div>';
						}
						echo "</div></div>";
					}
				?>
			</div>
			<div class="col-md-10 offset-md-1">
				<h3>Copy this code and paste it before the closing <code>body</code> tag in your website</h3>
			<textarea name="" id="autoTrackCode" cols="30" rows="10"><!-- Start Force24 tracking -->
<script>
	!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){
	(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,
	_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,
	_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,
	"script","//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");
	/* Set clientId */
	f24("create", "<?php echo $clientID ?>");
	/* Place custom commands here */
	f24("send", "pageview");
	f24("cookieAnonymous", <?php echo $anonCookieValue ?>);
	f24("formSelector", "<?php 
							foreach($forms as $key => $form) {
								if(!empty($form->getAttribute('id'))) {
									echo 'form#' . $form->getAttribute('id') . ', ';
								}
								else if(!empty($form->getAttribute('name'))) {
									echo 'form[name=' . $form->getAttribute('name') . '], ';
								}
								else if(!empty($form->getAttribute('data-f24name'))) {
									echo 'form[data-f24name=' . $form->getAttribute('data-f24name') . '], ';
								}
							}
							?>");
	f24("formMap", [
						<?php 
							foreach($forms as $key => $form) {
								echo "{\n";
								if(!empty($form->getAttribute('id'))) {
									echo "selector:'form#" . $form->getAttribute('id') . "',\n";
								}
								else if(!empty($form->getAttribute('name'))) {
									echo "selector:'form[name=" . $form->getAttribute('name') . "]',\n";
								}
								else if(!empty($form->getAttribute('data-f24name'))) {
									echo "selector:'form[data-f24name=" . $form->getAttribute('data-f24name') . "]',\n";
								}
								else{
									echo "selector:'',\n";
								}
								if(!empty($form->getAttribute('id'))) {
									echo "meta:{id: '" . $form->getAttribute('id') . "', name: '" . $form->getAttribute('id') . "', f24name: '" . $form->getAttribute('id') . "'},\n";
								}
								else if(!empty($form->getAttribute('name'))) {
									echo "meta:{id: '" . $form->getAttribute('name') . "', name: '" . $form->getAttribute('name') . "', f24name: '" . $form->getAttribute('name') . "'},\n";
								}
								else if(!empty($form->getAttribute('data-f24name'))) {
									echo "meta:{id: '" . $form->getAttribute('data-f24name') . "', name: '" . $form->getAttribute('data-f24name') . "', f24name: '" . $form->getAttribute('data-f24name') . "'},\n";
								}
								else{
									echo "meta:{id:'', name:'', f24name:''},\n";
								}
								echo "fields:{\n";
								$inputs = $xpath->query('
								descendant::input[@type="email"]|
								descendant::input[@type="text"]|
								descendant::input[@type="radio"]|
								descendant::input[@type="checkbox"]|
								descendant::input[@type="tel"]|
								descendant::input[@type="date"]|
								descendant::input[@type="number"]|
								descendant::input[@type="time"]|
								descendant::textarea|
								descendant::select', $form);	
								foreach ($inputs as $input) {
									$fnameSim = similar_text('FirstName', $input->getAttribute('name'), $fnamePerc);
									$fname2Sim = similar_text('fname', $input->getAttribute('name'), $fname2Perc);
									$fname3Sim = similar_text('contactname', $input->getAttribute('name'), $fname3Perc);
									$mnameSim = similar_text('MiddleName', $input->getAttribute('name'), $mnamePerc);
									$lnameSim = similar_text('LastName', $input->getAttribute('name'), $lnamePerc);
									$lname2Sim = similar_text('lName', $input->getAttribute('name'), $lname2Perc);
									$lname3Sim = similar_text('surname', $input->getAttribute('name'), $lname3Perc);
									$companySim = similar_text('CompanyName', $input->getAttribute('name'), $companyPerc);
									$company2Sim = similar_text('Company', $input->getAttribute('name'), $company2Perc);
									$jobSim = similar_text('JobTitle', $input->getAttribute('name'), $jobPerc);
									$job2Sim = similar_text('position', $input->getAttribute('name'), $job2Perc);
									$phoneSim = similar_text('PhoneNumber', $input->getAttribute('name'), $phonePerc);
									$phone2Sim = similar_text('Phone', $input->getAttribute('name'), $phone2Perc);
									$emailSim = similar_text('EmailAddress', $input->getAttribute('name'), $emailPerc);
									$email2Sim = similar_text('Email', $input->getAttribute('name'), $email2Perc);
									$titleSim = similar_text('Title', $input->getAttribute('name'), $titlePerc);
									$pcSim = similar_text('Postcode', $input->getAttribute('name'), $pcPerc);
									$pc2Sim = similar_text('zipcode', $input->getAttribute('name'), $pc2Perc);
									$townSim = similar_text('Town', $input->getAttribute('name'), $townPerc);
									$citySim = similar_text('City', $input->getAttribute('name'), $cityPerc);
									$countySim = similar_text('County', $input->getAttribute('name'), $countyPerc);
									$county2Sim = similar_text('state', $input->getAttribute('name'), $county2Perc);
									$countrySim = similar_text('Country', $input->getAttribute('name'), $countryPerc);
									if($fnamePerc > 75 || $fname2Perc > 90 || $fname3Perc > 75){
										echo '"FirstName": "';
									}
									else if($mnamePerc > 75){
										echo '"MiddleName": "';
									}
									else if($lnamePerc > 75 || $lname2Perc > 90 || $lname3Perc > 75){
										echo '"LastName": "';
									}
									else if($companyPerc > 75 || $company2Perc > 75){
										echo '"CompanyName": "';
									}
									else if($jobPerc > 75 || $job2Perc > 75){
										echo '"JobTitle": "';
									}
									else if($phonePerc > 75 || $phone2Perc > 75){
										echo '"PhoneNumber": "';
									}
									else if($emailPerc > 75 || $email2Perc > 75){
										echo '"EmailAddress": "';
									}
									else if($titlePerc > 75){
										echo '"Salutation": "';
									}
									else if($cityPerc > 75 || $townPerc > 75){
										echo '"City": "';
									}
									else if($countyPerc > 75 || $county2Perc > 75){
										echo '"County": "';
									}
									else if($countryPerc > 75){
										echo '"Country": "';
									}
									else if($pcPerc > 75 || $pc2Perc > 75){
										echo '"PostCode": "';
									}
									else{
										echo '"Aux1": "';
									}
									echo $input->getAttribute('name');
									echo '"';
									echo ",\n";
								}
								echo "},\n";
								echo "marketingList: '00000000-0000-0000-0000-000000000000'\n";
								echo "},\n";
							}
						?>
]);
</script>
<!-- End Force24 tracking -->
					</textarea>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("tracking-script-auto");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 