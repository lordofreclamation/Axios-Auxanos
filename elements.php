<!DOCTYPE HTML>

<html>
<head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

	<title>Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<?php

	 require_once('./Includes/init.php');

	// Process the submitted form
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	User::signup($_POST);

	// Redirect to signup success page
	header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Vendor/signup_success.php');
	exit;
	}


	// Set the title, show the page header, then the rest of the HTML
	$page_title = 'Sign Up';
	

	?>

</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Video Network <span>by Du'Bois</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="generic.html">INFO</a></li>
					<li><a href="elements.php">LOG-IN </a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Join The Fastest Growing Network</p>
						<h2><b>Video Network</b></h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
					<h2 id="elements"><b>Bringing It All Together</b></h2>
					<div class="row 200%">
						<div class="6u 12u$(medium)">

							<!-- Text stuff -->
								
							<!-- Lists -->
								<h3></h3>
								<div class="row">
									<div class="6u 12u$(small)">
																			

										<h4>Media Pages</h4>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
										</ul>

									</div>
								</div>
								

								<h4></h4>
								
								<div class="row">
									
								</div>

							
								<h3>Share your Passions and Ambitions</h3>
								<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod.
							Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing 
							accumsan faucibus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis.</blockquote>

							
								<h3></h3>

								<h4></h4>
								<div>
								</div>

								<h4></h4>
								<div class="table-wrapper">
									<table class="alt">
										
									</table>
								</div>

						</div>
						<div class="6u$ 12u$(medium)">



							<!-- Form -->
							


							
							
							



							<h3>Profile wall </h3>

							<h4>See Your work</h4>
							<span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<!-- Break -->
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<!-- Break -->
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
								</div>
							</div>

							<h4>Unique &amp; Clean</h4>
							<p><span class="image left"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>
							<p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>


							<!-- Preformatted Code -->
							<h3>Embedding made Easy </h3>
							<pre><code><iframe width="390" height="315" src="https://www.youtube.com/embed/SB-qEYVdvXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </code></pre>

						</div>
					</div>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Video Network. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>