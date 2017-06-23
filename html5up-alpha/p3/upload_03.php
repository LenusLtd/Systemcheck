<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>WSS - A2 - DW</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html">WSS:Embedded</a> by Daniel Wedgbrow</h1>
				<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Criteria</a>
								<ul>
									<li><a href="screen.html">System Checker:- P2</a></li>
									<li><a href="uploader.html">File Uploader:- P3</a></li>
									<li><a href="#">Simple Login:- P4</a></li>
                                    <li><a href="#">Guest Book:- P5</a></li>
							</ul>
						</li>
					<!--	<li><a href="signin.php" class="button">Sign Up</a></li -->
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Image Uploader</h2>
					<p>Thank you for using Image Uploader, your image should now be online.</p>
				</header>
				<div class="box">
					<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					<h3>Your Upload Information</h3>
            <!--THIS IS THE PHP PRINT SECTION-->  
                    <?php //additional content has been added to allow for three image types to be uploaded. 
if (($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/gif") &&
        $_FILES["file"]["size"] < 500000)
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("images/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "images/" . $_FILES["file"]["name"]);
            echo "Saved as: " . "images/" . $_FILES["file"]["name"];
        }
    }
}
else
{
    if ($_FILES["file"]["type"] != "image/png")
        echo "File is not of the permitted type.";
    else if ($_FILES["file"]["size"] < 65536)
        echo "File exceeds permitted size.";
}
?>

              <!--END------THIS IS THE PHP PRINT SECTION--> 
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="http://www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; danielwedgbrow@epizy.com 2015. All rights reserved.</li>
				</ul>
			</footer>

	</body>
</html>