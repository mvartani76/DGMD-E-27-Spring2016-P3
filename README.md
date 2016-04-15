#DGMD-E-27-Spring2016-P3

This is the third assignment for DGMD E-27.

#Source Code

The code consists of the following files:

##Source HTML/php:
**index.php** - This is the landing page for the site. The header image is now contained in a div and uses interchange to swap for the various screen sizes. There is a main section that has some text describing the site and neighborhood as well as some responsive images that also use interchange. There is also a sidebar that incorporates a weather widget using the openweather API.

**photogallery.php** - This is a page for showing various neighborhood photo albums which could be accessed by clicking on the image. Only the pond image links to a gallery (thepondgallery.php. There is no weather sidebar on this page.

**thepondgallery.php** - This is a gallery page containing various photos of the neighborhood pond. This file incorporates the Orbit JavaScript based widget.

**thingstodo.php** - This is a page for showing pictures of things to do in the city where my neighborhood resides. This page also shows the column swapping when going from desktop to mobile portrait mode as described in the week 3 videos. This page also uses more media queries around the end points for the typical media queries to maximize the image sizes for the appropriate screen widths.

**contact.php/login.php/register.php** - These are all form based php files with the weather widget side bar on the right side.

##SASS Source Files:
**app.scss** - This is the default foundation sass file that links in all the other partial sass files..<br>

##SASS Partial Files:
**_formstyle.scss** - Stylings for the various forms in the site.<br>
**_form_variables.scss** - Sass variables used in formstyle partial.<br>
**_form_extends.scss** - Extends used in the formstyle partial.<br>
**_form_mixins.scss** - Mixins used in the formstyle partial.<br>

## Generated CSS Files:
As everything is incorporated as partials, there is only one generated css file with regards to the work that I am doing.
**app.css** - This stylesheet contains all the styles from the foundation files as well as my own specific stylings.<br>

##JS Source Files (not including associated js needed for foundation):
**openWeather.js** - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.<br>

# Assignment Specific Topics
## Browser/Operating System
I primarily used a Google Chrome browser (Version 48.0.2564.116 m) running on a Windows 10 (64 bit) machine and Safari running on an Apple iPhone 6s plus (iOS 9.2.1).
## Build a Website with Foundation
I am using the responsive website I built from Assignment 1 and then added SASS to in Assignment 2 as a starting point for this assignment.<br>
The URL for Assignment 1 is: http://dgmd-e27-p1.mikevartanian.me/index.php<br>
The URL for Assignment 2 is: http://dgmd-e27-p2.mikevartanian.me/index.php<br>
The comments and code for Assignment 1 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>
The comments and code for Assignment 2 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P2<br>

## Grid

The site incorporates a responsive grid system using the foundation framework.<br>
The site utilizes the **Source Ordering** feature in **thingstodo.php** to move the order of the columns around between the small (mobile portrait) and large (desktop) screen widths.<br>
In all screen widths besides small (mobile portrait), the aside showing the township information is the leftmost column, the main section is in the middle, and the weather bar is on the right. In the small (mobile portrait) screen width, the main section is effectively the leftmost column as it is shown on top while the township information is on the right since it is below. The weather bar is hidden for small screen widths so is not shown.<br>

The code snippet starting at **line 50** of **thingstodo.php** shown below shows how the main section is setup.
```HTML
<!-- Added the xxx-push-3 class which moves this column right 25% to make this display (xxx-6)
display in the middle for screen sizes >479px.
For screen sizes <=479px, they will display in normal order as written. -->
<main class="xlarge-6 large-6 medium-6 xlarge-push-3 large-push-3 medium-push-3 columns" data-equalizer-watch>
	<h2>Things to Do in Commerce Township</h2>
	...
</main>
```
The main section is six (6) columns wide and is pushed right three (3) columns for all screen widths except small.<br>

The code snippet starting at **line 148** of **thingstodo.php** shown below shows how the weather bar is setup.
```HTML
<!-- Added the xxx-push-3 class which moves this column right 25% to make this display (xxx-3)
display in the right for screen sizes >479px
For screen sizes <=479px, they will display in normal order as written. -->
<div class="xlarge-3 large-3 medium-3 xlarge-push-3 large-push-3 medium-push-3 columns outside-w-wrapper hide-for-small-only" data-equalizer-watch>
	<h3>Local Time &amp; Weather</h3>
	...
</div>
```
The weather bar is three (3) columns wide and is pushed right three (3) columns for all screen widths except small.<br>

The code snippet starting at **line 201** of **thingstodo.php** shown below shows how the `<aside>` is setup.
```HTML
<!-- Added the col-pull-9 class which moves this column left 75% to make this display (xxx-3)
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
```
The `<aside>` is three (3) columns wide and is pulled left nine (9) columns for all screen widths except small. This effectively puts it as the leftmost column for all screen widths except small.<br>

## Navigation

The site has a navigation bar below the header image of each page. The navigation bar is responsive and toggles (uses a hamburger button) for the small screen size. The navigation bar is also expanded, incorpartes top-bar adn the dropdown features. The code below shows the navigation bar for **index.php** (starting at line 28 in **index.php**).

```PHP
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
```
## Styling
The site incorporates many of the different style elements in the site.
### Button
The form pages all incorporate a button for submission of the form.<br>
An example of an expanded button using a custom color from **login.php** is shown below.
```HTML
<fieldset>
	<!-- Use a callout to indicate to user that there are errors in the form -->
	<div data-abide-error class="alert callout" style="display: none;">
		<p class="callout.alert"><i class="fi-alert"></i> There are some errors in your form.</p>
	</div>

	<!-- Using Foundation Button class with customized color that I added to the color pallette -->
	<button name="submit" type="submit" class="button my-secondary-background expanded" id="login_id-submit" data-submit="...Sending">Submit</button>
</fieldset>
```
The button is declared on **line 81** of **login.php**.  Similar examples of the button are located in **register.php** and **contact.php**.
### Callout
The form pages also all incorporate a callout to indicate to the user that if there are errors in the form. An example of a callout using a custom color from **register.php** is shown below.
```HTML
<fieldset>
	<div data-abide-error class="alert callout" style="display: none;">
		<p class="callout.alert"><i class="fi-alert"></i> There are some errors in your form.</p>
	</div>				    
	<button name="submit" type="submit" class="button my-secondary-background expanded" id="register-submit" data-submit="...Sending">Submit</button>
</fieldset>
```
We see the callout implemented in the parent div and paragraph. The parent div callout is from *line 76** of **register.php**. Similar examples of callouts are located in **login.php** and **contact.php**.

## Form

There are three forms pages in the side and they are located in the following files.<br>
**login.php** - This is the login form page.<br>
**register.php** - This is the registration form page.<br>
**contact.php** - This is the contact form page.<br>

All the forms use Javascript Abide form validation tool. The code snippet for the login form is shown below. This starts at 
line 55 of **login.php**.
```PHP
<form class="login_id" data-abide novalidate method="post">
	<h3>Login</h3>
	<h4>Please enter your username and password to login...</h4>
	<fieldset>
		<input type="text" placeholder="Username" id="login_username" name="username" tabindex="1" required>
		<!-- Throw an error message if username is not entered -->
		<span class="form-error">
			Username is required.
		</span>
	</fieldset>

	<fieldset>
		<input placeholder="Password" id="password" name="userpassword" type="password" tabindex="2" required>
		<!-- Throw and error messiage if password is not entered -->
		<span class="form-error">
		  Password is required.
		</span>
	</fieldset>

	<fieldset>
		<!-- Use a callout to indicate to user that there are errors in the form -->
		<div data-abide-error class="alert callout" style="display: none;">
			<p class="callout.alert"><i class="fi-alert"></i> There are some errors in your form.</p>
		</div>

		<!-- Using Foundation Button class with customized color that I added to the color pallette -->
		<button name="submit" type="submit" class="button my-secondary-background expanded" id="login_id-submit" data-submit="...Sending">Submit</button>
	</fieldset>
</form>
```
