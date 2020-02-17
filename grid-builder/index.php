<?php
    session_set_cookie_params(0, '/', $_SERVER['HTTP_HOST'], $secure=true, $httponly=true);
    session_start();

    require('../includes/forceapi.class.php');    

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
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Force24 | Web Tools for easier Marketing</title>

    <link rel="icon" href="https://www.google.com/s2/favicons?domain=https://force24.co.uk" type="image/x-icon">
  <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  <link href="css/layoutit.css" rel="stylesheet">

  <script src="lib/jquery/dist/jquery.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.htmlClean.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

</head>

<body style="min-height: 824px;" class="edit">
<div class="navbar navbar-inverse navbar-fixed-top navbar-layoutit">
  <div class="collapse navbar-collapse">
    <div class="col-sm-6 logo-left" style="padding:0;">
        <h1><span>Force24</span> Web Tools</h1>
    </div>
    <div class="col-sm-6 logo-right" style="padding:0;">
        <span>Crafted for<br>everyone by</span> <a href="/index.php"><img src="../images/force24_logo.png" alt="Force24 web tools" style="max-width:100%;"></a>
    </div>
  </div>
  <!--/.navbar-collapse -->
</div>
<!--/.navbar-fixed-top -->

<div class="container">
  <div class="row">
  <ul class="nav" id="menu-layoutit" style="margin-right:0; padding:0; padding-top:10px;top: 118px; right: 15px; left: 300px; z-index: 99; position: fixed;background-color:#ffffff;">
      <li style="float:right;">
        <div class="btn-group functions-nav" data-toggle="buttons-radio">
          <button type="button" id="edit" class="button btn btn-xs btn-primary active" style="text-transform: Capitalize; color: #00a4c3; text-indent: 0px; font-size: 12px; letter-spacing: 1px; font-weight: 300; position: relative; text-align: center; height: 32px; background: #ffffff; border: 1px solid #00a4c3;"><i class="far fa-edit"></i>
            Edit
          </button>
          <button type="button" class="button btn btn-xs btn-primary" style="text-transform: Capitalize; color: #00a4c3; text-indent: 0px; font-size: 12px; letter-spacing: 1px; font-weight: 300; position: relative; text-align: center; height: 32px; background: #ffffff; border: 1px solid #00a4c3;" id="sourcepreview">
            <i class="far fa-eye"></i>
            Live Preview
          </button>
        </div>
        <div class="btn-group functions-nav">
          <button type="button" class="button btn btn-xs btn-primary" style="text-transform: Capitalize; color: #00a4c3; text-indent: 0px; font-size: 12px; letter-spacing: 1px; font-weight: 300; position: relative; text-align: center; height: 32px; background: #ffffff; border: 1px solid #00a4c3;" id="button-download-modal" data-target="#downloadModal" role="button" data-toggle="modal"><i class="fas fa-download"></i>
            Download Code
          </button>
          <button class="button btn btn-xs btn-primary" style="text-transform: Capitalize; color: #00a4c3; text-indent: 0px; font-size: 12px; letter-spacing: 1px; font-weight: 300; position: relative; text-align: center; height: 32px; background: #ffffff; border: 1px solid #00a4c3;" href="#clear" id="clear">
          <i class="far fa-trash-alt"></i>
            Clear
          </button>
        </div>
      </li>
    </ul>
    <div class="">
      <div class="sidebar-nav">

        <ul class="nav nav-list accordion-group layout-groups">
          <li class="nav-header">
            <i class="glyphicon-plus glyphicon"></i>
            Grid Elements
          </li>
          <li class="rows" id="estRows">

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
              
              <div class="preview drag">
                <input value="12" class="form-control" style="visibility:hidden" type="text">
                <img src="img/12.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-12 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="6 6" class="form-control" style="visibility:hidden" type="text">
                <img src="img/6x6.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-6 column"></div>
                  <div class="col-md-6 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="8 4" class="form-control" style="visibility:hidden" type="text">
                <img src="img/8x4.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-8 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
              <span class="button drag label label-default">
                <i class="glyphicon glyphicon-move"></i>
                Drag
              </span>

              <div class="preview drag">
                <input value="4 8" class="form-control" style="visibility:hidden" type="text">
                <img src="img/4x8.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-4 column"></div>
                  <div class="col-md-8 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="4 4 4" class="form-control" style="visibility:hidden" type="text">
                <img src="img/4x4x4.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-4 column"></div>
                  <div class="col-md-4 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="3 3 3 3" class="form-control" style="visibility:hidden" type="text">
                <img src="img/3x3x3x3.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-3 column"></div>
                  <div class="col-md-3 column"></div>
                  <div class="col-md-3 column"></div>
                  <div class="col-md-3 column"></div>
                </div>
              </div>
            </div>
            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="2 6 4" class="form-control" style="visibility:hidden" type="text">
                <img src="img/2x6x4.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-2 column"></div>
                  <div class="col-md-6 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>
            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="2 2 2 2 2 2" class="form-control" style="visibility:hidden" type="text">
                <img src="img/2x2x2x2x2x2.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-2 column"></div>
                  <div class="col-md-2 column"></div>
                  <div class="col-md-2 column"></div>
                  <div class="col-md-2 column"></div>
                  <div class="col-md-2 column"></div>
                  <div class="col-md-2 column"></div>
                </div>
              </div>
            </div>
            <div class="lyrow ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview drag">
                <input value="2 8 2" class="form-control" style="visibility:hidden" type="text">
                <img src="img/2x8x2.png" alt="" style="position: absolute; top: 0;"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-2 column"></div>
                  <div class="col-md-8 column"></div>
                  <div class="col-md-2 column"></div>
                </div>
              </div>
            </div>

          </li>
        </ul>

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <i class="glyphicon glyphicon-plus"></i>
            Basic
          </li>
          <li class="boxes" id="elmBase">
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      Alignment
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-left">Left Align Text</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-center">Centre Align Text</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-right">Right Align Text</a>
                                      </li>
                                    </ul>
								</span>
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      Styling
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="muted">Disabled</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-warning">Warning</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-error">Error</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-info">Info</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-success">Success</a>
                                      </li>
                                    </ul>
								</span>
							</span>

              <div class="preview">Heading</div>
              <div class="view">
                <h3 contenteditable="true">Insert heading here</h3>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      Alignment
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-left">Left Align Text</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-center">Centre Align Text</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-right">Right Align Text</a>
                                      </li>
                                    </ul>
								</span>
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      Styling
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="muted">Disabled</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-warning">Warning</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-error">Error</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-info">Info</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-success">Success</a>
                                      </li>
                                    </ul>
								</span>

								<a class="btn btn-xs btn-default" href="#" rel="lead">Lead</a>
							</span>

              <div class="preview">paragraph</div>
              <div class="view">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                </p>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="pull-right">Pull right</a>
							</span>
              <div class="preview">Address</div>
              <div class="view clearfix">
                <address contenteditable="true"><strong>Force24 Ltd.</strong>
                  <br>
                  2, Indigo Blu,
                  <br>
                  14 Crown Point Rd,
                  <br>
                  Leeds LS10 1EL
                  <br> 
                  P: 0845 272 5990
                  <br>
                  W: www.force24.co.uk
                </address>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="pull-right">Pull right</a>
							</span>

              <div class="preview">Reference block</div>
              <div class="view clearfix">
                <blockquote contenteditable="true">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                  </p>
                  <small>
                    Name |
                    <cite title="Source Title"> Job Title</cite>
                  </small>
                </blockquote>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="list-unstyled">No Style</a>
								<a class="btn btn-xs btn-default" href="#" rel="list-inline">Inline</a>
							</span>

              <div class="preview">Unordered List</div>
              <div class="view">
                <ul contenteditable="true">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit</li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="list-unstyled">No Style</a>
								<a class="btn btn-xs btn-default" href="#" rel="list-inline">Inline</a>
							</span>

              <div class="preview">Ordered List</div>
              <div class="view">
                <ol contenteditable="true">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit</li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ol>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="dl-horizontal">Change Alignment</a>
							</span>

              <div class="preview">Description List</div>
              <div class="view">
                <dl contenteditable="true">
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms.</dd>
                  <dt>Euismod</dt>
                  <dd>
                    Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                  </dd>
                  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  <dt>Felis euismod semper eget lacinia</dt>
                  <dd>
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus.
                  </dd>
                </dl>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      Image
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-rounded">Rounded</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-circle">Circle</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-thumbnail">Thumbnail</a>
                                      </li>
                                    </ul>
								</span>
							</span>

              <div class="preview">Image</div>
              <div class="view">
                <img alt="140x140"
                     src="img/default_004.jpg">
              </div>
            </div>
          </li>
        </ul>

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <i class="glyphicon glyphicon-plus"></i>
            Components
          </li>
          <li class="boxes" id="elmComponents">
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview">Breadcrumb</div>
              <div class="view">

                <ul class="breadcrumb">
                  <li>
                    <a href="#" contenteditable="true">Home</a>
                  </li>
                  <li>
                    <a href="#" contenteditable="true">Library</a>
                  </li>
                  <li class="active" contenteditable="true">Data</li>
                </ul>

              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="well">Well</a>
							</span>

              <div class="preview">Combination</div>
              <div class="view">
                <div class="jumbotron" contenteditable="true">
                  <h1>Heading!</h1>

                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                  </p>

                  <p>
                    <a class="btn btn-primary btn-large" href="#">Learn more</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview">Head | Subhead</div>
              <div class="view">
                <div class="page-header">
                  <h1 contenteditable="true">
                    Heading
                    <small>Subheading</small>
                  </h1>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview">Head | Text</div>
              <div class="view">
                <h2 contenteditable="true">Heading</h2>

                <p contenteditable="true">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                </p>

                <p>
                  <a class="btn" href="#" contenteditable="true">View details »</a>
                </p>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="button remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Delete
              </a>
							<span class="button drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								Drag
							</span>

              <div class="preview">Cross Sells</div>
              <div class="view">
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default_006.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default_007.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </li>
        </ul>

        
   

      </div>
    </div>
    <!--/span-->
    <div style="min-height: 754px;" class="demo ui-sortable">
      <div class="lyrow">
        <a href="#close" class="button remove label label-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Delete
        </a>
			<span class="button drag label label-default">
				<i class="glyphicon glyphicon-move"></i>
				Drag
			</span>

        <div class="preview">9 3</div>
        <div class="view">
          <div class="row clearfix">
            <div class="col-md-12 column ui-sortable">
              
              <div class="box box-element">
                <a href="#close" class="button remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  Delete
                </a>
              <span class="button drag label label-default">
                <i class="glyphicon glyphicon-move"></i>
                Drag
              </span>
                <div class="preview">Jumbotron</div>
                <div class="view">
                  <div class="jumbotron well" contenteditable="true">
                    <h1>Force24 | Microsite Grid Builder</h1>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu euismod quam. Proin fringilla ante ut urna finibus elementum a in nunc. Suspendisse euismod sagittis nisl. Sed porta, velit non mattis lobortis, magna odio vehicula nunc, at semper tellus tellus eu orci. Nam ultricies, nibh id blandit mollis, enim urna facilisis turpis, eu pretium quam quam in nunc. Praesent sed magna nulla. Ut volutpat, tellus sit amet congue interdum, urna nibh dignissim odio, vitae vehicula diam ex eget lacus. In volutpat iaculis mi placerat volutpat. Nullam ipsum dolor, hendrerit id lacinia sed, rhoncus et arcu.
                    </p>

                    <p>
                      <a class="btn btn-primary btn-large" href="#">Learn more</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lyrow" style="display: block;">
        <a href="#close" class="button remove label label-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Delete
        </a>
		<span class="button drag label label-default">
			<i class="glyphicon glyphicon-move"></i>
			Drag
		</span>

        <div class="preview">4 4 4</div>
        <div class="view">
          <div class="row clearfix">
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="button remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  Delete
                </a>
						<span class="button drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							Drag
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="button remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  Delete
                </a>
						<span class="button drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							Drag
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="button remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  Drag
                </a>
						<span class="button drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							Drag
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/span-->
    <div id="download-layout">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="#">Link</a>
                  </li>
                  <li>
                    <a href="#">Link</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong
                            class="caret"></strong></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Action</a>
                      </li>
                      <li>
                        <a href="#">Another action</a>
                      </li>
                      <li>
                        <a href="#">Something else here</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">Separated link</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">One more separated link</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input class="form-control" type="text">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="#">Link</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong
                            class="caret"></strong></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Action</a>
                      </li>
                      <li>
                        <a href="#">Another action</a>
                      </li>
                      <li>
                        <a href="#">Something else here</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">Separated link</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </nav>
            <div class="jumbotron">
              <h1>
                Hello, world!
              </h1>

              <p>
                This is a template for a simple marketing or informational website.
                It includes a large callout called the hero unit and three supporting
                pieces of content. Use it as a starting point to create something more
                unique.
              </p>

              <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/row-->

  <script type="text/javascript">
    $(document).ready(function () {
      // alert($('#download-layout').html());
    });
  </script>
</div>
<!--/.fluid-container-->

<script type="text/javascript">

  function saveLayout() {
    return;
    $.ajax({
      type: "POST",
      url: "/build_v3/saveLayout",
      data: {'layout-v3': $('.demo').html()},
      success: function (data) {
        //updateButtonsVisibility();
      }
    });
  }

  //下载代码
  function downloadLayout() {
    $.ajax({
      type: "POST",
      url: "/build_v3/downloadLayout",
      data: {'layout-v3': $('#download-layout').html()},
      success: function (data) {
        window.location.href = '/build_v3/download';
      }
    });
  }

  function downloadHtmlLayout() {
    $.ajax({
      type: "POST",
      url: "/build_v3/downloadLayout",
      data: {'layout-v3': $('#download-layout').html()},
      success: function (data) {
        window.location.href = '/build_v3/downloadHtml';
      }
    });
  }

  function undoLayout() {

    $.ajax({
      type: "POST",
      url: "/build_v3/getPreviousLayout",
      data: {},
      success: function (data) {
        undoOperation(data);
      }
    });
  }

  function redoLayout() {

    $.ajax({
      type: "POST",
      url: "/build_v3/getPreviousLayout",
      data: {},
      success: function (data) {
        redoOperation(data);
      }
    });
  }

  $(document).on('hidden.bs.modal', function (e) {
    $(e.target).removeData('bs.modal');
  });

  $('body').on('click', '#continue-share-non-logged', function () {
    $('#share-not-logged').hide();
    $('#share-logged').removeClass('hide');
    $('#share-logged').show();
  });

  $('body').on('click', '#continue-download-non-logged', function () {
    $('#download-not-logged').hide();
    $('#download').removeClass('hide');
    $('#download').show();
    $('#downloadhtml').removeClass('hide');
    $('#downloadhtml').show();
    $('#download-logged').removeClass('hide');
    $('#download-logged').show();
  });


</script>

<div style="display: none;" class="modal fade" id="downloadModal" tabindex="-1" role="dialog"
     aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Download</h4>
      </div>
      <div class="modal-body">

        <div id="download-logged" class="">
          <div class="alert alert-info">Your HTML is below, you can copy and paste this into the &lt;body&gt; of your website.
          </div>
          <p>
				<textarea>&lt;div class="container"&gt;
	&lt;div class="row clearfix"&gt;
		&lt;div class="col-md-12 column"&gt;
			&lt;nav class="navbar navbar-default" role="navigation"&gt;
				&lt;div class="navbar-header"&gt;
					 &lt;button type="button" class="navbar-toggle"
data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
&lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;/button&gt; &lt;a
class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
				&lt;/div&gt;

				&lt;div class="collapse navbar-collapse"
id="bs-example-navbar-collapse-1"&gt;
					&lt;ul class="nav navbar-nav"&gt;
						&lt;li class="active"&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="dropdown"&gt;
							 &lt;a href="#" class="dropdown-toggle"
data-toggle="dropdown"&gt;Dropdown&lt;strong
class="caret"&gt;&lt;/strong&gt;&lt;/a&gt;
							&lt;ul class="dropdown-menu"&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Another action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Something else here&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Separated link&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;One more separated link&lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
					&lt;form class="navbar-form navbar-left" role="search"&gt;
						&lt;div class="form-group"&gt;
							&lt;input class="form-control" type="text" /&gt;
						&lt;/div&gt; &lt;button type="submit" class="btn
btn-default"&gt;Submit&lt;/button&gt;
					&lt;/form&gt;
					&lt;ul class="nav navbar-nav navbar-right"&gt;
						&lt;li&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="dropdown"&gt;
							 &lt;a href="#" class="dropdown-toggle"
data-toggle="dropdown"&gt;Dropdown&lt;strong
class="caret"&gt;&lt;/strong&gt;&lt;/a&gt;
							&lt;ul class="dropdown-menu"&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Another action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Something else here&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Separated link&lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;

			&lt;/nav&gt;
			&lt;div class="jumbotron"&gt;
				&lt;h1&gt;
					Hello, world!
				&lt;/h1&gt;
				&lt;p&gt;
					This is a template for a simple marketing or informational website.
 It includes a large callout called the hero unit and three supporting
pieces of content. Use it as a starting point to create something more
unique.
				&lt;/p&gt;
				&lt;p&gt;
					 &lt;a class="btn btn-primary btn-large" href="#"&gt;Learn
more&lt;/a&gt;
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row clearfix"&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</textarea>
          </p>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

  <script type="text/javascript">
    downloadLayoutSrc();
    $('#modal-download-sign-in-button').click(function (event) {
      $('.help-inline').hide();
      var form = $('#boxDownloadLoginForm');
      var ajaxLoginUrl = '/login/ajaxLogin';
      jQuery.ajax({
        type: "post",
        dataType: "json",
        url: ajaxLoginUrl,
        data: form.serialize(),
        success: function (response) {
          if (response.success) {
            $('#download-not-logged').hide();
            $('#download').removeClass('hide');
            $('#download').show();
            $('#downloadhtml').removeClass('hide');
            $('#downloadhtml').show();
            $('#download-logged').removeClass('hide');
            $('#download-logged').show();
          } else {
            if (response.errors && response.errors.length > 0) {
              $.each(response.errors, function (i, item) {
                $('#' + item.field + '-download-error').html(item.error);
                $('#' + item.field + '-download-error').show();
              });
            }
          }
        },
        error: function (response) {

        }
      });

      return false;
    });
  </script>

</div>

<!-- Start Force24 tracking -->
<script>     
	!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){
		(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,     
		_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,     
		_2.src=c,_4.parentNode.insertBefore(_2,_4)
	}
	(window,document, "script","//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");  
	f24("create", "DB41DC8A-D5CD-4027-8670-744BDFFB0588");//replace with correct cliendId
	f24("send", "pageview");
</script>
<!-- End Force24 tracking -->

</body>
</html>