<?php
  	date_default_timezone_set('Europe/London');
  	$dateNow = date('m/d/Y h:i:s a');
  	$data = [];
  	$fields = []; // insert correct field names
  	foreach ($fields as $field) {
      	if (isset($_POST[$field])) {
          	$field = $_POST[$field];
          	$data[] = is_array($field) ? implode(', ', $field) : trim($field);
      	} else {
          	$data[] = '';
      	}
  	}  

	$handle = fopen((__dir__)."/csvName.csv", "a+"); // replace with correct csv name
	fputcsv($handle, $data);
	fclose($handle);

	$to = "volen.angelov@force24.co.uk"; // this is your Email address
	// $bcc = "";
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$subject = "Xpertise Submission by: " . $_POST['firstName']. $_POST['lastName'];
	$message =
	    "ContactGUID: https://platform.data-crypt.com/contact/" . $_POST['contactId'] . "\r\n".
	    "Date/Time Created: " . $_POST['date'] . "\r\n";
	mail($to,$subject,$message,$headers);
	echo 'done';
  
?>