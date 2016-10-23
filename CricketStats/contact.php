<?php
session_start();




//This functionality is used to send an email 
if(isset($_POST['submit'])){
	
	require 'engine/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'outlook.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'garg6849@stthomas.edu';                 // SMTP username
$mail->Password = 'Ilovecali@11';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('garg6849@stthomas.edu', 'Neha Garg');
$mail->addAddress($_POST['email'],$_POST['name']);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact Page';
$mail->Body    = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
    }
?>
<!--end of code-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cric &mdash; Cricket Stats</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="images/favicon1.ico" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.php">Home</a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="work.php">Work</a></li>
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
			 <?php  if(isset($_SESSION["username"])){echo '<li class="cta"> <a href="logout.php?action=logout">Logout</a></li>';}
            else {echo '<li class="cta"> <a href="login.php">Login</a></li>';} ?>  
					</ul>
				</nav>
			</div>
		</div>
	</header>
	

	
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>2115 Summit Avenue, St. Paul, Minnesota 55105, USA</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">garg6849@stthomas.edu</a></li>
						<li><i class="icon-globe"></i><a href="#">www.stthomas.edu</a></li>
					</ul>
				</div>


				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
							<form action="" method="post">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="name" placeholder="Name" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Send Message" name="submit" class="btn btn-primary" type="submit">
							</div>
						</div>
		</form>				
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3><a href="about.php">About us</a></h3>
				<p>We are the creators of the expectional cricket statatics. </p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Learn More</h3>
				<ul class="float">
					<li><a href="http://www.w3schools.com/js/default.asp">Learn PHP</a></li>
					<li><a href="http://www.w3schools.com/php/default.asp">Learn JS</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="https://twitter.com/UofStThomasMN/"><i class="icon-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/UofStThomasMN/"><i class="icon-facebook"></i></a></li>
					<li><a href="https://plus.google.com/+uofstthomasmn/posts"><i class="icon-google-plus"></i></a></li>
					<li><a href="https://www.instagram.com/uofstthomasmn/"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2016 Cricket Stats. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by Neha Garg</span></p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

