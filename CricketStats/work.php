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
	<title>Work</title>


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

	<!-- Modernizr JS -->
	<!--<script src="js/modernizr-2.6.2.min.js"></script>-->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

		<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine/style.css" />
<script type="text/javascript" src="engine/jquery.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
<!-- End WOWSlider.com HEAD section -->
	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.php">Home</a></h1>
				<nav role="navigation">
					<ul>
						<li class="active"><a href="work.php">Work</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
		 <?php  if(isset($_SESSION["username"])){echo '<li class="cta"> <a href="logout.php?action=logout">Logout</a></li>';}
            else {echo '<li class="cta"> <a href="login.php">Login</a></li>';} ?>  
					</ul>
				</nav>
			</div>
		</div>
	</header>
	

<!--	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			
		</div>
	</div>-->

			<section>
			<canvas id="myCanvas" width="578" height="200"></canvas>
			<script>
			var canvas = document.getElementById('myCanvas');
			var context = canvas.getContext('2d');

			// do cool things with the context
			context.font = '20pt Calibri';
			context.fillStyle = 'blue';
			context.fillText('    <?php  if(isset($_SESSION["username"])){echo 'Welcome '.$_SESSION["username"];}else {echo "Welcome Guest!";}  ?>!', 150,100);
			</script>	
		  </section>


<!--<div class="container">-->
			<h2>Data Visualization</h2>
			
    <div id="chart_div"></div>
    <br/>
    <script>
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'Team', 'Matches'],
          [ 'India', 866],
          [ 'Australia',838 ],
          ['Pakistan', 823],
          ['Sri Lanka', 729],
					['West Indies',719],
          ['New Zealand',659],
          ['England',626],
          ['South Africa',518],
          ['Zimbabwe',432],
          ['Bangladesh',289]
        ]);

        var options = {
          chart: {
            title: 'ODIs-ALL TEAM- Matches ',
            subtitle: '2014',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 250,
          colors: ['#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
</script>
	


			<!-- Code for credits links-->
			<div class="container">
			<h2>Audio</h2>
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><span class="glyphicon glyphicon-hand-right"></span> Click for Audio</button>
			<div id="demo1" class="collapse">
			<table align=center><tr><td>
			<audio controls="controls" autoplay="autoplay">
			<source src="../assignments/resource/audio/direaudio.mp3" type="audio/mpeg">
			<source src="../assignments/resource/audio/direaudio.ogg" type="audio/ogg">
			<p class="sidebar">Your browser does not support the audio element</p>
			</audio>
			</td></tr></table>
			</div>
			</div>


			<div class="container">
			<h2>Video</h2>
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><span class="glyphicon glyphicon-hand-right"></span>Click for Video</button>
			<div id="demo2" class="collapse">
						<table align=center><tr><td>
						<video width=500 height=500 controls="controls">
						<source src="../assignments/resource/video/LongRoad.mp4" type="video/mp4">
						<source src="../assignments/resource/video/LongRoad.ogg" type="video/ogg">
						<p class="sidebar">If video is not visible, your browser does not support HTML5 video</p>
						</video>
						</td></tr></table>
			</div>
			</div>


			<div class="container">
			<h2>JSON Implementation</h2>
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"><span class="glyphicon glyphicon-hand-right">       </span>JSON Implementation</button>
			<div id="demo3" class="collapse">
			<div id="id01"></div>

							<script>
							var xmlhttp = new XMLHttpRequest();
							var url = "getusers.php";

							xmlhttp.onreadystatechange=function() {
									if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											myFunction(xmlhttp.responseText);
									}
							}
							xmlhttp.open("GET", url, true);
							xmlhttp.send();

							function myFunction(response) {
									var arr = JSON.parse(response);
									var i;
									var out = "<table>";

									for(i = 0; i < arr.length; i++) {
											out += "<tr><td>" +
											arr[i].firstname +
											"</td><td>" +
											arr[i].lastname +
											"</td><td>" +
											arr[i].email +
											"</td></tr>";
									}
									out += "</table>";
									document.getElementById("id01").innerHTML = out;
							}
							</script>

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
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>


