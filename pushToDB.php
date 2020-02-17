<?php 
require_once("dbConfig.php");
if(
	(isset($_POST['firstName'])&& $_POST['firstName'] !='') && 
	(isset($_POST['lastName'])&& $_POST['lastName'] !='') && 
	(isset($_POST['email'])&& $_POST['email'] !='')
){
	require_once("contactMail.php");
	$yourFirstName = $conn->real_escape_string($_POST['firstName']);
	$yourLastName = $conn->real_escape_string($_POST['lastName']);
	$yourEmail = $conn->real_escape_string($_POST['email']);

	$sql="INSERT INTO framework_submissions (firstName, lastName, email) VALUES ('".$yourFirstName."','".$yourLastName."', '".$yourEmail."')";


	if(!$result = $conn->query($sql)){
		die('There was an error running the query [' . $conn->error . ']');
	}
	else
	{
		echo "Thank you! We will contact you soon";
	}
}
else
{
	echo "Please fill First Name, Last Name and Email";
}
?>