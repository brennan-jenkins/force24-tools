<?php
date_default_timezone_set('Europe/London');
$dateNow = date('m/d/Y h:i:s a');
$data = [];
$fields = ['firstName', 'lastName', 'email']; // insert correct field names
foreach ($fields as $field) {
	if (isset($_POST[$field])) {
		$field = $_POST[$field];
		$data[] = is_array($field) ? implode(', ', $field) : trim($field);
	} else {
		$data[] = '';
	}
}  

$handle = fopen((__dir__)."/includes/csvName.csv", "a+"); // replace with correct csv name
fputcsv($handle, $data);
fclose($handle);

$toEmail = "html@force24.com";
$mailHeaders = "From: " . $_POST["firstName"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["firstName"], $_POST["lastName"], $_POST["email"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>