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
			<!--<div class="menu large-12 columns">-->
			<div class="top-bar" id="nav-menu">
				<ul class="menu expanded">
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="./thingstodo.php">Things to Do</a></li>
					<li class="active"><a href="./photogallery.php">Photo Gallery</a></li>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="row photogallery">
			<h2>The Shores of Glenwood Photo Gallery</h2>
			<p>We are all very proud of the beauty and serenity of our neighborhood. Please click on the albums below to see the beauty of the land, the houses, the wildlife, and most importantly, the people of The Shores of Glenwood.</p>
			<p>We would love for you to share your Shores of Glenwood photo memories with us. Please contact us and we will upload your photos to this site.</p> 
		</div>
		<div class="row" data-equalizer>
			<div class="large-3 medium-6 columns" data-equalizer-watch>
				<h3>The Nature Preserve</h3>
			    <a href="#"><img src="img/sog-preserve-entrance-250.jpg" alt="Our Nature Preserve"></a>
			    <p>We are so lucky to have a state nature preserve with a forest, lake and a river with lots of natural wildlife.</p>
			</div>
			<div class="large-3 medium-6 columns" data-equalizer-watch>
				<h3>The Front Pond</h3>
			    <a href="#"><img src="img/sog-pond-winter-350.jpg" alt="The Front Pond"></a>
			    <p>The pond near our subdivision entrance way is both beautiful as well as a source for winter enjoyment.</p>
			</div>
			<div class="large-3 medium-6 columns" data-equalizer-watch>
				<h3>Night Time</h3>
			    <a href="#"><img src="img/sog-entrance-night-250.jpg" alt="Night Time"></a>
			    <p>The beauty of our neighborhood at night during the holidays...</p>
			</div>
			<div class="large-3 medium-6 columns" data-equalizer-watch>
				<h3>Our Houses</h3>
			    <a href="#"><img src="img/sog-houses-300.jpg" alt="Our Houses"></a>
			    <p>We have many beautiful houses in our neighborhood. Please see pictures of the houses that our residents have shared.</p>
			</div>
		</div>
	</div>
	<div class="row">
	    <footer class="xlarge-12 large-12 medium-12 columns">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>