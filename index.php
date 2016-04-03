<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shores of Glenwood</title>
	<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
  	<script type="text/javascript" src="js/menu.js"></script>
  </head>
  <body>

	<div class="wrapper">
		<div class="row">
			<header class="large-12 columns">
			<img data-interchange="[img/sog-entrance-800.jpg, small], 
				[img/sog-entrance-1000.jpg, medium], 
				[img/sog-entrance-1200.jpg, large]">
			<noscript><img src="img/sog-entrance-800.jpg.jpg"></noscript>
			</header>
		</div>

		<div class="title-bar" data-responsive-toggle="nav-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Menu</div>
		</div>
		<div class="row">
			<!--<div class="menu large-12 columns">-->
			<div class="top bar" id="nav-menu">
				<div class="top-bar-left">
					<!--<ul class="active-toggle">-->
					<ul class="menu">
						<li class="active"><a href="./index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="./thingstodo.php">Things to Do</a></li>
						<li><a href="./photogallery.php">Photo Gallery</a></li>
						<li><a href="./login.php">Login</a></li>
						<li><a href="./register.php">Register</a></li>
						<li><a href="./contact.php">Contact Us</a></li>
					</ul>
					<!--<a class="toggle-nav" href="#">&#9776;</a>-->
				</div>
			</div>
		</div>
		<div class="row">
			<main class="large-8 columns">
				<h2>Welcome to the Shores of Glenwood Neighborhood Association Website!</h2>
				
				<!-- Using picturefill, load different pictures depending on the width of the screen
				This picture is in the upper left hand corner of the main section under the <h2> title... -->
				<picture class="first_main_pic">
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="images/sog-entrance-drive-orig-350.jpg" media="(min-width: 1050px)">
					<source srcset="images/sog-entrance-drive-orig-250.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
					<source srcset="images/sog-entrance-drive-orig-200.jpg" media="(min-width: 480px) and (max-width: 767px) ">
					<!--[if IE 9]></video><![endif]-->
					<img src="images/sog-entrance-drive-orig-350.jpg" alt="Drive into Our Neighborhood!">
				</picture>

				<p>This site contains information about our great community located in Commerce Township, Michigan. Shores of Glenwood is a highly esteemed neighborhood of homes set in a carefully preserved environment with majestic oak trees and evergreens, beautiful rolling hills, a few ponds, a gently flowing stream, and lots of natural wildlife.</p>
				
				<!-- Using picturefill, load different pictures depending on the width of the screen
				This picture is in the lower right hand corner of the main section -->
				<picture class="second_main_pic">
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="images/sog-entrance-sign-250.jpg" media="(min-width: 1050px)">
					<source srcset="images/sog-entrance-sign-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
					<source srcset="images/sog-entrance-sign-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
					<!--[if IE 9]></video><![endif]-->
					<img src="images/sog-entrance-sign.jpg" alt="Drive into Our Neighborhood!">
				</picture>

				<p>We are an active community of families, young couples, empty-nesters, and other lively people who enjoy a peaceful atmosphere and close proximity to city attractions and water recreation areas.</p>

			</main>
			<div class="outside-w-wrapper large-4 columns">
				<h3>Local Time &amp; Weather</h3>
				<p>
					<?php
					// Return date/time info of a timestamp; then format the output
					date_default_timezone_set('America/New_York');
					
					$mydate=getdate();
					echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
					echo "<br>";
					
	   				$currenttime = date('h:i A');
	   				echo date('h:i A',strtotime($currenttime));
	   				echo "<br>";
	   				echo "<br>";
					?>
				</p>
				<!-- This is the placeholder html code to insert the openweather code using javascript
				I thought this would be a nice touch to add to a neighborhood community website...
				This code was inspired from the following links:
				https://github.com/michael-lynch/open-weather
				http://openweathermap.org/

				Unfortunately, my city does not show up on the database so it chose the closest city to it... -->
				<div class="weather-wrapper hide">
					<img src="#" class="weather-icon" alt="Weather Icon" />
			
					<p><strong>Place</strong><br>
					<span class="weather-place"></span></p>
			
					<p><strong>Temperature</strong>
					<br><span class="weather-temperature"></span></p>
					
					<p><strong>Description</strong>
					<br><span class="weather-description capitalize"></span></p>
					
					<p><strong>Humidity</strong>
					<br><span class="weather-humidity"></span></p>
					
					<p><strong>Wind speed</strong>
					<br><span class="weather-wind-speed"></span></p>
					
					<p><strong>Sunrise</strong>
					<br><span class="weather-sunrise"></span></p>
					
					<p><strong>Sunset</strong>
					<br><span class="weather-sunset"></span></p>
				</div>
			</div>			
		</div>
	</div>
	<div class="row">
	    <footer class="large-12 columns">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

	<!-- Specific code for configuring the openweather data to the subdivision location -->
	<script src="/js/openWeather.js"></script>
	<script>
		$(function() {
		
			$('.weather-temperature').openWeather({
				key: '1ae2a03185008da881e3c6cf3c53b1fc',
				city: 'Commerce Township, MI',
				units: 'f',
				descriptionTarget: '.weather-description',
				windSpeedTarget: '.weather-wind-speed',
				minTemperatureTarget: '.weather-min-temperature',
				maxTemperatureTarget: '.weather-max-temperature',
				humidityTarget: '.weather-humidity',
				sunriseTarget: '.weather-sunrise',
				sunsetTarget: '.weather-sunset',
				placeTarget: '.weather-place',
				iconTarget: '.weather-icon',
				customIcons: '/images/icons/weather/',
				success: function() {
				
					//show weather
					$('.weather-wrapper').show();
					
				},
				error: function(message) {
				
					console.log(message);
				
				}
			});
			
		});
	
	</script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>