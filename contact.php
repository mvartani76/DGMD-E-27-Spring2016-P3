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
					<li><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>					
					<li class="active"><a href="./contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<main class="xlarge-9 large-9 medium-9 columns" data-equalizer-watch>
		  
			  <form id="contact_id" method="post">
			    <h3>Quick Contact</h3>
			    <h4>We would love to hear from you! Please contact us today, and get reply with in 24 hours!</h4>
			    <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus></fieldset>
			    <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required></fieldset>
			    <fieldset><input placeholder="Your Email Address" id="emailaddr" name="emailaddr" type="email" tabindex="3"></fieldset>
			    <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="4"></fieldset>
				<fieldset><h4>What type of message do you want to send?</h4>
				    <input type="radio" id="dept1" name="dept" value="general" tabindex="6" checked> General
				    <input type="radio" id="dept2" name="dept" value="dues" tabindex="7"> Dues
				    <input type="radio" id="dept3" name="dept" value="complaint" tabindex="8"> Complaint
				    <input type="radio" id="dept4" name="dept" value="technical" tabindex="9"> Technical
				</fieldset>
			    <fieldset><textarea placeholder="Type your Message Here...." tabindex="10" required></textarea>
			    </fieldset>
			    <h4 class="centerh4">Preferred time for phone contact...</h4>
			    <div class="form50">
			    <fieldset><label>Start Time</label><input id="start_time" name="start_time" type="time" tabindex="11" value="00:00"></fieldset>
			  </div>
			      <div class="form50">
			    <fieldset><label>End Time</label><input id="end_time" name="end_time" type="time" tabindex="12" value="23:59"></fieldset>
			  </div>
			    <fieldset>
			      <button name="submit" type="submit" class="button my-secondary-background expanded" id="contact-submit" data-submit="...Sending">Submit</button>
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
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>			
</body>
</html>