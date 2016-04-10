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
	<link rel="stylesheet" href="css/weather-style.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
  </head>
  <body>
	<div class="wrapper">

		<!-- Replaced header with row div as this seems to allow the header image to stay
			 adjacent to the menu when scaling to the different screen sizes. -->
		<div class=" row xlarge-12 large-12 medium-12 columns">
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
				<ul class="menu expanded">
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="./thingstodo.php">Things to Do</a></li>
					<li><a href="./photogallery.php">Photo Gallery</a></li>
					<li class="active"><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>					
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>			
			</div>
		</div>
		<div class="row" data-equalizer>
			<main class="xlarge-9 large-9 medium-9 columns login_id-background-color" data-equalizer-watch>
		  
			  		<form data-abide novalidate method="post">
						<h3 id="login_id-h3" >Login</h3>
			    		<h4 id="login_id-h4" >Please enter your username and password to login...</h4>
			    		<fieldset><input type="text" placeholder="Username" id="login_username" name="username" tabindex="1" required>

						<span class="form-error">
							Username is required.
						</span>
						</fieldset>

			    		<fieldset><input placeholder="Password" id="password" name="userpassword" type="password" tabindex="2" required>

						<span class="form-error">
							Password is required.
						</span>

			    		<fieldset>

						<div data-abide-error class="alert callout" style="display: none;">
							<p class="callout.alert"><i class="fi-alert"></i> There are some errors in your form.</p>
						</div>

			      		<button name="submit" type="submit" class="button my-secondary-background expanded" id="login_id-submit" data-submit="...Sending">Submit</button>
			    		</fieldset>
			  		</form>
			</main>
			<div class="outside-w-wrapper xlarge-3 large-3 medium-3 columns" data-equalizer-watch>
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
	<script src="js/eqheight.js"></script>
	<script type="text/javascript">
	if ('addEventListener' in window) {
	    window.addEventListener('resize', function(){
	        sameHeights();
	    });
	    window.addEventListener('load', function(){
	        sameHeights();
	    });
	}
	</script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>	
</body>
</html>