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
						<li><a href="./index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="./thingstodo.php">Things to Do</a></li>
						<li><a href="./photogallery.php">Photo Gallery</a></li>
						<li><a href="./login.php">Login</a></li>
						<li class="active"><a href="./register.php">Register</a></li>					
						<li><a href="./contact.php">Contact Us</a></li>
					</ul>
					<!--<a class="toggle-nav" href="#">&#9776;</a>-->				
				</div>
			</div>
		</div>
		<div class="row" data-equalizer>
			<main class="large-8 columns" data-equalizer-watch>
				<form id="register_id" method="post">
					<h3>Registration</h3>
				    <h4>Please fill out the information below to register with the Shores of Glenwood site...</h4>
				    <div class="form50">
				      <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Street Address 1" id="streetaddr1" name="streetaddr1" type="text" tabindex="3" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Street Address 2" id="streetaddr2" name="streetaddr2" type="text" tabindex="4"></fieldset>
				      <fieldset><input placeholder="City" id="city" name="city" type="text" tabindex="5" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="State/Province" id="state_prov" name="state_prov" type="text" tabindex="6" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Zip Code / Postal Code" id="zip_post_code" name="zip_post_code" type="text" tabindex="7" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Country" id="country" name="country" type="text" tabindex="8" required><span class="error"></span></fieldset>
				    </div>
				    <div class="form50">
				      <fieldset><input placeholder="Your Email Address (minimum of 5 characters)" id="emailaddr" name="emailaddr" type="email" tabindex="9" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Confirm Email Address" id="confirmemailaddr" name="confirmemailaddr" type="email" tabindex="10" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="11" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Desired Username" id="username" name="username" type="text" tabindex="13" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Password" id="userpassword" name="userpassword" type="password" tabindex="14" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Confirm Password" id="confirmuserpassword" name="confirmuserpassword" type="password" tabindex="15" required><span class="error"></span></fieldset>
				    </div>
				    <fieldset>
				      <button name="submit" type="submit" id="register-submit" data-submit="...Sending">Submit</button>
				    </fieldset>
			  	</form>
			</main>
			<div class="col-1 outside-w-wrapper" data-equalizer-watch>
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