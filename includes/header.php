<?php
    session_set_cookie_params(0, '/', $_SERVER['HTTP_HOST'], $secure=true, $httponly=true);
    session_start();

    require('includes/forceapi.class.php');    

    $force24 = new Force24API();
    
    if(isset($_COOKIE['f24_personId']) &&
        $force24->validateGuid($_COOKIE['f24_personId'])) {
        $f24_guid = $_COOKIE['f24_personId'];
    }
    
    if(isset($_GET['f24_pid']) &&
        $force24->validateGuid($_GET['f24_pid'])){
        $f24_guid = $_GET['f24_pid'];
    }
    
    if(isset($f24_guid)) {
        $force24->setLogin("mrbrennan", "bigcarowner"); // Replace with correct portal username and password
        
        // Get the token outside of the class as you may want to do multiple requests in one script run
        $token = $force24->getToken();
        
        if($token['access_token']) {
            $force24->setToken($token['access_token']);
            
            // Detect a GUID and request the personId
            $intId = $force24->getPersonId($f24_guid);
            
            if(is_integer($intId)) {
                $f24_pid = $intId;
            } 
            
            // Retrieve the data
            $visitor_info = $force24->getContactInfo($f24_pid); 
        } 
    }

    // die (print_r  ($visitor_info));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Force24" content="Brennan Jenkins" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv = "content-language" content = "en">
    <meta name="description" content="Force24's Web and HTML email tools to assist in speeding up the creation of html/css/js elements that would normally take valuable time."/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/ucp5xlh.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="includes/xq-dark.css">
    <link rel="stylesheet" href="includes/codemirror.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="build/css/styles.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">

    <link rel="icon" href="https://www.google.com/s2/favicons?domain=https://force24.co.uk" type="image/x-icon">

    <title>Force24 | Web Tools for easier Marketing</title>
</head>
<body>

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 logo-left">
                <h1><span>Force24</span> Web Tools</h1>
            </div>
			<div class="col-md-6 logo-right">
                <span>Crafted for<br>everyone by</span> <a href="index.php"><img src="images/force24_logo.png" alt="Force24 web tools" style="max-width:100%;" /></a>
            </div>
		</div>
	</div>
</div>

