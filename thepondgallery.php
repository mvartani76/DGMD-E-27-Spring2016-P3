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
				<ul class="menu dropdown expanded" data-dropdown-menu>
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="./thingstodo.php">Things to Do</a></li>
					<li class="active"><a href="./photogallery.php">Photo Gallery</a></li>
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
		<div class="row photogallery">
			<h2>The Shores of Glenwood Entry Pond during the Winter</h2>
			<p>The pond near the entrance of our subdivision is a sanctuary for much wildlife during the summer but during the winter months, not much wildlife to be found... </p>
		</div>
		<div class="row">
		<!-- Using Foundation Orbit javascript widget to create an image carousel for the pond pictures -->
			<div class="orbit pondgallery" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<ul class="orbit-container">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
					<li class="is-active orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond1.jpg" alt="The Pond">
						<figcaption class="orbit-caption">The pond is just on the other side of the street...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond2.jpg" alt="The Pond">
						<figcaption class="orbit-caption">A closer look at the well...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond3.jpg" alt="The Pond">
						<figcaption class="orbit-caption">A view of the pond with the well from the street...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond4.jpg" alt="The Pond">
						<figcaption class="orbit-caption">Many kids use the pond to ice skate on in the winter...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond5.jpg" alt="The Pond">
						<figcaption class="orbit-caption">The well is non-functional...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond6.jpg" alt="The Pond">
						<figcaption class="orbit-caption">Another view of the pond...</figcaption>
					</li>
					<li class="orbit-slide">
						<img class="orbit-image" src="img/pondgallery/pond7.jpg" alt="The Pond">
						<figcaption class="orbit-caption">And here is the pond again...</figcaption>
					</li>																				
				</ul>
				<nav class="orbit-bullets">
					<button class="is-active" data-slide="0"><span class="show-for-sr">The pond is just on the other side of the street...</span><span class="show-for-sr">Current Slide</span></button>
					<button data-slide="1"><span class="show-for-sr">A view of the pond with the well from the street...</span></button>
					<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
					<button data-slide="3"><span class="show-for-sr">Many kids use the pond to ice skate on in the winter...</span></button>
					<button data-slide="4"><span class="show-for-sr">The well is non-functional...</span></button>
					<button data-slide="5"><span class="show-for-sr">Another view of the pond...</span></button>
					<button data-slide="6"><span class="show-for-sr">And here is the pond again...</span></button>
				</nav>
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