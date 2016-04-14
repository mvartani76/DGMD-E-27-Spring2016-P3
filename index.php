<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Shores of Glenwood</title>
	<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/app.css" />
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  </head>
  <body>
	<div class="wrapper">

		<!-- Replaced header with row div as this seems to allow the header image to stay
			 adjacent to the menu when scaling to the different screen sizes. -->
		<div class="row xlarge-12 large-12 medium-12 columns">
			<img data-interchange="[img/sog-entrance-500.jpg, small], 
				[img/sog-entrance-800.jpg, medium], 
				[img/sog-entrance-1000.jpg, large], 
				[img/sog-entrance-1200.jpg, xlarge]">
			<noscript><img src="img/sog-entrance-800.jpg.jpg"></noscript>
		</div>

		<div class="title-bar" data-responsive-toggle="nav-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Menu</div>
		</div>

		<div class="row">
			<div class="top-bar" id="nav-menu">
				<ul class="menu dropdown expanded" data-dropdown-menu>
					<li class="active"><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="./thingstodo.php">Things to Do</a></li>
					<li><a href="./photogallery.php">Photo Gallery</a></li>
					<!-- Login/Register is a dropdown menu and contains submenus for Login and Register -->
					<li class=".is-dropdown-submenu-parent"><a href="#">Login/Register</a>
					    <ul class="menu">
      						<li><a href="./login.php">Login</a></li>
      						<li><a href="./register.php">Register</a></li>
    					</ul>
    				</li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<main class="xlarge-9 large-9 medium-9 columns">
				<h2>Welcome to the Shores of Glenwood Neighborhood Association Website!</h2>
				
				<!-- Using interchange, load different pictures depending on the width of the screen
				This picture is in the upper left hand corner of the main section under the <h2> title... -->
				<div class="first_main_pic">
					<img data-interchange="[img/sog-entrance-drive-orig-350.jpg, small], 
						[img/sog-entrance-drive-orig-200.jpg, medium], 
						[img/sog-entrance-drive-orig-250.jpg, large], 
						[img/sog-entrance-drive-orig-350.jpg, xlarge]">
					<noscript><img src="img/sog-entrance-drive-orig-350.jpg"></noscript>
				</div>

				<p>This site contains information about our great community located in Commerce Township, Michigan. Shores of Glenwood is a highly esteemed neighborhood of homes set in a carefully preserved environment with majestic oak trees and evergreens, beautiful rolling hills, a few ponds, a gently flowing stream, and lots of natural wildlife.</p>
				
				<!-- Using interchange, load different pictures depending on the width of the screen
				This picture is in the lower right hand corner of the main section -->
				<div class="second_main_pic">
					<img data-interchange="[img/sog-entrance-sign.jpg, small], 
						[img/sog-entrance-sign-150.jpg, medium],
						[img/sog-entrance-sign-200.jpg, large],
						[img/sog-entrance-sign-250.jpg, xlarge]">
					<noscript><img src="img/sog-entrance-sign.jpg"></noscript>					
				</div>

				<p>We are an active community of families, young couples, empty-nesters, and other lively people who enjoy a peaceful atmosphere and close proximity to city attractions and water recreation areas.</p>

			</main>
			<div class="outside-w-wrapper xlarge-3 large-3 medium-3 columns hide-for-small-only">
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
				<div class="weather-wrapper">
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
	    <footer class="xlarge-12 large-12 medium-12 columns">
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
				customIcons: '/img/icons/weather/',
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
    <!--<script src="js/vendor/jquery.min.js"></script>-->
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>