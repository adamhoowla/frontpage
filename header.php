<? include_once("functions.php"); ?>
<!doctype html>

<html lang="en-GB">
	<head>
		<meta charset="utf-8" />
		<title>Hoowla | Cloud-based Conveyancing Software</title>

		<meta name="description" content="Hoowla gives you a easy to understand snap shot view of your businesses. Data about your firm is displayed to allow you to understand what is and isn't working.">
		<meta name="viewport" content="width=device-width">

		<link rel="icon" href="favicon.ico">

		<!-- Human readable copy @ /css/main.scss -->
		<link rel="stylesheet" href="style.css">
		<link rel="canonical" href="http://www.hoowla.com/">

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<header role="banner">
			<a href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>" id="logo"><img src="images/logo.png" alt="Hoowla | Cloud-based Conveyancing Software" /></a>

			<nav>
				<!--
				<div class="user-details">
					<ul>
						<li>Welcome <a href="#">John Doe</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Sign Out</a></li>
					</ul>
				</div>
				-->
				<ul role="navigation">
					<li><a href="index.php" <?php if(strcmp (CurrentPageURL(),"index.php")==0){ echo "class=\"active\"";}?>>Home</a></li>
					<li><a href="pricing.php" <?php if(strcmp (CurrentPageURL(),"pricing.php")==0){ echo "class=\"active\"";}?>>Pricing</a></li>
					<li><a href="referralscheme.php" <?php if(strcmp (CurrentPageURL(),"referralscheme.php")==0){ echo "class=\"active\"";}?>>Referral Scheme</a></li>
					<li><a href="signup.php" <?php if(strcmp (CurrentPageURL(),"signup.php")==0){ echo "class=\"active\"";}?>>Signup</a></li>
				</ul>
			</nav>
		</header>

		<main role="main">