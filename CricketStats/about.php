<?php
session_start();
?>
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
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
						<li class="active"><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
	 <?php  if(isset($_SESSION["username"])){echo '<li class="cta"> <a href="logout.php?action=logout">Logout</a></li>';}
            else {echo '<li class="cta"> <a href="login.php">Login</a></li>';} ?>  
					</ul>
				</nav>
			</div>
		</div>
	</header>
	


	<div class="fh5co-about animate-box">
	<!-- Code for credits links-->
<div class="container">
<h2>Credits</h2>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-hand-right"></span> Credits</button>
<div id="demo" class="collapse">
<ul>
	
<li> Template has been used from freehtml5 Website <a href="https://freehtml5.co/flew-free-html5-bootstrap-template/">freehtml5 Website</a></li>
<li> HTML5 section has been learned from W3Schools Website <a href="http://www.w3schools.com/TAgs/tag_section.asp">W3Schools Website</a></li>
<li> Login Authentication from <a href="http://php.net/manual/en/features.http-auth.php">PHP Docs Website</a></li>
<li>Client site <a href="http://www.w3schools.com/jquery/">W3Schools Website</a></li>
<li> External feature to send mail  <a href="https://github.com/PHPMailer/PHPMailer">Github Project</a></li>
<li> Data Visualization Google Charts <a href="https://developers.google.com/chart/"> Website</a></li>
<li> JSON for Data Interchange <a href="http://www.w3schools.com/json/">W3Schools Website</a></li>
<li> Form Validation <a href="http://www.w3schools.com/html/html_form_elements.asp">W3Schools Website</a></li>
<li> Canvas Element <a href="http://www.w3schools.com/html/html5_canvas.asp">W3Schools Website</a></li>
<li> Audio Tag <a href="http://www.w3schools.com/html/html5_audio.asp">W3Schools Website</a></li>
<li> Video Tag <a href="http://www.w3schools.com/html/html5_video.asp">W3Schools Website</a></li>
<li> CSS Glyphs <a href="http://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp">W3Schools Website</a></li>
<li> Favicon creator <a href="http://www.favicon-generator.org"> Website</a></li>
<li> Image Optimization <a href="http://optimizilla.com">optimizilla Website</a></li>
<li> Google Font <a href="https://www.google.com/fonts/specimen/Raleway"> Website</a></li>

	
	</ul>
</div>
</div>



<!-- Code for credits links-->
<div class="container">
<h2>Wireframe</h2>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><span class="glyphicon glyphicon-hand-right"></span> Wireframe</button>
<div id="demo1" class="collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>


			<div class="container">
			<h2>Project Walkthrough</h2>
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><span class="glyphicon glyphicon-hand-right"></span> Project Walkthrough</button>
			<div id="demo2" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
			</div>

		<!-- Code for credits links-->
			<div class="container">
			<h2>Content Map</h2>
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"> <span class="glyphicon glyphicon-hand-right"></span> Content Map</button>
      <div id="demo3" class="collapse">
			<svg><img src="images/content.svg" alt="Content map"></svg>
			</div>
			</div>


	</div>

	<div class="fh5co-team fh5co-light-grey-section">
		<div class="container">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>The Team</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Athan Smith</h3>
						<h4>Co-Founder, CEO</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Nathalie Kosley</h3>
						<h4>Co-Founder, CTO</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Yanna Kuzuki</h3>
						<h4>Co-Founder, Principal</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
	</div>
	
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
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

