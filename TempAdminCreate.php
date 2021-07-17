<?php

  session_start();
  ob_start();
  include("dbconnect.php");
  include("_mysql.php");
  
 ?>

<!DOCTYPE html>
<html lang='en'>

<!-- Mirrored from 669-nc.ourlodgepage.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 02:56:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<meta content='width=device-width, initial-scale=1' name='viewport'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<meta content='' name='author'>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="hlYCZvcz0fAxqgdxbnBYkcOk620TxRkAlqWLZpo3sNzvIf94/zMK9P67wiQDftc8jpNFYS57E1lmJZag9u2A7Q==" />

<title>Kernersville Lodge #669 A.F. &amp; A.M.</title>
<link href='icons/apple-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
<link href='icons/apple-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
<link href='icons/apple-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
<link href='icons/apple-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
<link href='icons/apple-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
<link href='icons/apple-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
<link href='icons/apple-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
<link href='icons/apple-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
<link href='icons/apple-icon-180x180.png' rel='apple-touch-icon' sizes='180x180'>
<link href='icons/android-icon-192x192.png' rel='icon' sizes='192x192' type='image/png'>
<link href='icons/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
<link href='icons/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
<link href='icons/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
<meta content='#ffffff' name='msapplication-TileColor'>
<meta content='/icons/ms-icon-144x144.png' name='msapplication-TileImage'>
<meta content='#ffffff' name='theme-color'>

<!-- core CSS -->
<link href='css/bootstrap.css' rel='stylesheet'>
<link href='css/animate.min.css' rel='stylesheet'>
<link href='css/prettyPhoto.css' rel='stylesheet'>
<link href='css/responsive.css' rel='stylesheet'>
<link rel="stylesheet" media="all" href="assets/theme_2-a7d9056e3c5ae36b3b3cf54a706a9d6bc80bb783295aa0bf5bc9604c44025920.css" />


<!--[if lt IE 9]>
<script src='/js/html5shiv.js'></script>
<script src='/js/respond.min.js'></script>
<![endif]-->
</head>
<body>
<div class='container'>
<div id='header'>
<div id='name'>
Kernersville Lodge 669 A.F. &amp; A.M.
<div id='location'>
701 S. Main St., Kernersville, NC 27284
</div>
</div>
<div id='app' style='position: absolute; right: 0px; top 0px; background: white; padding: 2px 5px; border-radius: 0px 0px 0px 10px; width: 150px;'>
<a style="font-size: 20px;" href="https://www.ourlodgepage.com/app">Member Portal</a>
</div>
</div>
</div>
<div class='container'>
<div class='navbar navbar-default navbar-static-top' role='navigation'>
<div id='nav-container'>
<div class='navbar-header'>
<button class='navbar-toggle' data-target='.navbar-collapse' data-toggle='collapse' type='button'>
<span class='sr-only'>Toggle Navigation</span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</button>
</div>
<div class='navbar-collapse collapse'>
<ul class='nav navbar-nav' id='nav'>
<li class=''>
<a href='index.html'>Home</a>
</li>
<li class=''>
<a href="contact.html">Contact</a>
</li>
<li class=''>
<a href='calendar.html'>Calendar</a>
</li>
<li class=''>
<a href='about.html'>About</a>
</li>
<li class=''>
<a href='current_officers.html'>Current Officers</a>
</li>
<li class=''>
<a href='past_officers.html'>Past Officers</a>
</li>
<li class=''>
<a href='photos.html'>Photos</a>
</li>
<li class=''>
<a href='files.html'>Files</a>
</li>
<li class=''>
<a href='news.html'>News</a>
</li>
<li class='active'>
<a href='coaching.php'>Coaching</a>
</li>

<li class='' id='navbar-user'>
<a href='sign_in.html'>Sign In / Create Account</a>
</li>
</ul>
</div>
</div>
</div>
<div id='flash'>

</div>
</div>
<div class='container'>
<div class='content'>
<div class='content container-fluid'>
<div class='row'>
<div class='col-md-10 col-md-offset-1 view'>
<h2>Coaching Login</h2>
<form action="actions/createuser.php" method="post">
<br>
  <div class="container">
    <label for="uname"><b>Username</b></label>
	<br>
    <input type="text" placeholder="Username" name="Username" required>
 <br>
 <br>
    <label for="psw"><b>Password</b></label>
	<br>
    <input type="password" placeholder="Password" name="Password" required>
<br>
<br>
    <label for="uname"><b>Admin Name</b></label>
	<br>
    <input type="text" placeholder="Your Full Name" name="AdminName" required>
 <br>
 <br>
    <label for="psw"><b>Email</b></label>
	<br>
    <input type="text" placeholder="Enter Email" name="Email" required>
<br>
<br>
    <button type="submit">Create Account</button>
<br>
  </div>
<br>
  <div class="container" style="width: 50%">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</div>
</div>

</div>
</div>
<div class='container'>
<div class='footer-container'>
<div class='row'>
<div class='col-md-3 col-xs-6'>
<h4>Kernersville #669</h4>
<p>
701 S. Main St.
<br>
Kernersville, NC 27284
</p>
</div>
<div class='col-md-3 col-xs-6'>
<div id='home-page-map-container'>
</div>
</div>
<div class='col-md-3 col-xs-12'>
</div>
<div class='col-md-3 col-xs-12'>
<ul>
<li class=''>
<a href='history.html'>History</a>
</li>
<li class=''>
<a href='charities.html'>Charities</a>
</li>
<li class=''>
<a href='join.html'>Join</a>
</li>

<li>
<a href="http://www.grandlodge-nc.org/">Grand Lodge of North Carolina</a>
</li>
<li>
<a target="_new" href="https://moriapp.zendesk.com/hc/en-us/categories/360002758493-Our-Lodge-Page-OLP-">Help</a>
</li>
<li>
<a href="terms_of_service.html">Terms of Service</a>
</li>
<li>
<a href="privacy_policy.html">Privacy Policy</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<script src="assets/application-b0481aa8b14f1dddbbb4929bfa994e8abe5ffdaa589a16688f6d91eec122ceb7.js"></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/jquery.prettyPhoto.js'></script>
<script src='js/jquery.isotope.min.js'></script>
<script src='js/main.js'></script>
<script src='js/wow.min.js'></script>
<script src='js/sticky_menu.js'></script>

</body>

<!-- Mirrored from 669-nc.ourlodgepage.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 02:56:58 GMT -->
</html>
