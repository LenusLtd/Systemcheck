
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>WSS - A2 - JH</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html">Web Server Scripting PreClass</a> by Jordon Holmes</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Criteria</a>
								<ul>
									<li><a href="screen.html">System Checker - P2</a></li>
									<li><a href="uploader.html">File Uploader - P3</a></li>
									<li><a href="login.html">Simple Login - P4</a></li>
									<li><a href="#">Guest Book - P5</a></li>
									<!--<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>-->
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container 75%">
				<header>
					<h2>Simple Login</h2>
					<p>This is a simple login system</p>
<?php
 session_start();
 if($_SESSION['login'] != "OK")
 {
 header('Location: login.php');
 exit();
 }
 ?>
  <head>
 <title>Protected Web Page</title>
 </head>
 <body>

 <h1>Protected Web Page</h1>
     <br>
 <?php
 echo "<p>You have successfully logged in!</p>";
 echo "<p>Your username is: ";

 echo $_SESSION['username'];
 echo "<br/>";
 echo "Your password is: ";
 echo $_SESSION['password'];
 echo "</p>"
 ?>
 </body>

								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="http://www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy;</li>
				</ul>
			</footer>

	</body>
</html>