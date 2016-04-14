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
				<ul class="menu dropdown expanded" data-dropdown-menu>
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li class="active"><a href="./thingstodo.php">Things to Do</a></li>
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
		<div class="row" data-equalizer>
			<!-- Added the col-push-1 class which moves this column right 25% to make this display (col-2)
			     display in the middle for screen sizes >479px.
			     For screen sizes <=479px, they will display in normal order as written. -->
			<main class="xlarge-6 large-6 medium-6 xlarge-push-3 large-push-3 medium-push-3 columns" data-equalizer-watch>
				<h2>Things to Do in Commerce Township</h2>
				
				<p style="clear: both;">As there are many lakes and rivers nearby, there are many water activities to do here in our community from boating and water skiing to
				fishing, kayaking, paddle boarding, and swimming.</p>

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_left_pic">
						<img data-interchange="[img/lowerstraitslake-350.jpg, small], 
							[img/lowerstraitslake-150.jpg, medium], 
							[img/lowerstraitslake-200.jpg, large], 
							[img/lowerstraitslake-250.jpg, xlarge]">
						<noscript><img src="img/lowerstraitslake-350.jpg"></noscript>
					</div>

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_right_pic">
						<img data-interchange="[img/loonlake-350.jpg, small], 
							[img/loonlake-150.jpg, medium], 
							[img/loonlake-200.jpg, large], 
							[img/loonlake-250.jpg, xlarge]">
						<noscript><img src="img/loonlake-350.jpg"></noscript>						
					</div>
					<p style="clear: both;"></p>
					
					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_left_pic">
						<img data-interchange="[img/kayaking-350.jpg, small], 
							[img/kayaking-150.jpg, medium], 
							[img/kayaking-200.jpg, large], 
							[img/kayaking-250.jpg, xlarge]">
						<noscript><img src="img/kayaking-350.jpg"></noscript>
					</div>

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_right_pic">
						<img data-interchange="[img/paddleboard-350.jpg, small], 
							[img/paddleboard-150.jpg, medium], 
							[img/paddleboard-200.jpg, large], 
							[img/paddleboard-250.jpg, xlarge]">
						<noscript><img src="img/paddleboard-350.jpg"></noscript>						
					</div>

					<p style="clear: both;">
						<br>
						There are also many restaurants, farms, golf courses, and parks to explore.
					</p> 

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_left_pic">
						<img data-interchange="[img/BeaconHill-350.jpg, small], 
							[img/BeaconHill-150.jpg, medium], 
							[img/BeaconHill-200.jpg, large], 
							[img/BeaconHill-250.jpg, xlarge]">
						<noscript><img src="img/BeaconHill-350.jpg"></noscript>						
					</div>	

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_right_pic">
						<img data-interchange="[img/long-family-orchard-farm-350.jpg, small], 
							[img/long-family-orchard-farm-150.jpg, medium], 
							[img/long-family-orchard-farm-200.jpg, large], 
							[img/long-family-orchard-farm-250.jpg, xlarge]">
						<noscript><img src="img/long-family-orchard-farm-350.jpg"></noscript>							
					</div>
					<p style="clear: both;"></p>

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_left_pic">
						<img data-interchange="[img/its-a-matter-of-taste-350.jpg, small], 
							[img/its-a-matter-of-taste-150.jpg, medium], 
							[img/its-a-matter-of-taste-200.jpg, large], 
							[img/its-a-matter-of-taste-250.jpg, xlarge]">
						<noscript><img src="img/its-a-matter-of-taste-350.jpg"></noscript>							
					</div>

					<!-- Using interchange, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<div class="thingstodo_main_right_pic">
						<img data-interchange="[img/corn-long-350.jpg, small], 
							[img/corn-long-150.jpg, medium], 
							[img/corn-long-200.jpg, large], 
							[img/corn-long-250.jpg, xlarge]">
						<noscript><img src="img/corn-long-350.jpg"></noscript>								
					</div>

			</main>
			<!-- Added the xxx-push-3 class which moves this column right 25% to make this display (xxx-3)
			     display in the right for screen sizes >479px
			     For screen sizes <=479px, they will display in normal order as written. -->
			<div class="xlarge-3 large-3 medium-3 xlarge-push-3 large-push-3 medium-push-3 columns outside-w-wrapper" data-equalizer-watch>
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

			<!-- Added the col-pull-3 class which moves this column left 75% to make this display (col-1)
			     display in the left for screen sizes >479px
			     For screen sizes <=479px, they will display in normal order as written. -->
			<aside class="xlarge-3 large-3 medium-3 xlarge-pull-9 large-pull-9 medium-pull-9 columns" data-equalizer-watch>
				<h3>Commerce Township Info</h3>
				<ul>
					<li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Population:</a> 40,186</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Total Area:</a> 29.8 square miles</li>
			        <li><a href="http://www.distance-cities.com/distance-detroit-mi-to-commerce-township-mi" target="_blank">Miles northwest from Detroit:</a> 28</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of Households:</a> 12,379</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of Families:</a> 9,754</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Household Income:</a> $72,702</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Family Income:</a> $79,976</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Age:</a> 36 years</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of School Districts:</a> 2</li>
		        </ul>
			</aside>

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
</body>
</html>