<?php

if($_POST["Submit"]) {
    $recipient="gregory_baker2@hms.harvard.edu";
    $subject="SYLARAS inquiry";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["subject"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$subject";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sylaras : Systemic Lymphoid Architecture Response Assessment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h2 id="colorlib-logo"><a href="index.html"><img src="images/sylarasassets/logo.png" class="img-responsive"></a> <b>SY</b>stemic <b>L</b>ymphoid <b>A</b>rchitecture <b>R</b>esponse <b>AS</b>sessment</h2>
			<h5 align="right">A platform for discovery-based immunophenotyping</h5>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.html">Home</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script></small></p>

			</div>
		</aside>

		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<div class="container">

         <?=$thankYou ?>

				 <form method="post" action="contact.php">

					 <label for="fname">Full Name</label>
					 <input type="text" id="fname" name="sender" placeholder="">

					 <label for="email">Email</label>
					 <input type="text" id="email" name="senderEmail" placeholder="">

					 <label for="affiliation">Affiliation</label>
					 <input type="text" id="affiliation" name="affiliation" placeholder="university, institute, company, etc.">

					 <label for="country">Country</label>
					 <input type="text" id="country" name="country" placeholder="">

					 <label for="subject">Subject</label>
					 <textarea id="subject" name="subject" placeholder="Your inquery.." style="height:100px"></textarea>

					 <input type="Submit" value="Submit">

				 </form>
			</aside>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
