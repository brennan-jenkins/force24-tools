<?php

//$conn = new mysqli("host", "password", "username", "DB Name");

// localhost DB connection
$conn = new mysqli("localhost", "root", "", "testing");

// staging DB connection
//$conn = new mysqli("localhost", "", "", "force24_staging");

// live DB connection
//$conn = new mysqli("localhost", "", "", "");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>