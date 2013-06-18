<? include_once("functions.php"); ?>

<!DOCTYPE html>

<html lang="en-GB">
	<head>
		<meta charset="utf-8" />
		<title>Hoowla | cloud based conveyancing software</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width" />

		<link href="style.css" rel="stylesheet" />

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src='scripts/respond.min.js'></script>
		<![endif]-->
	</head>

	<body>

		<div id="dev-bar">
			<ul>
				<li><a href="#" id="lines-on-button">Lines On</a></li>
				<li><a href="#" id="user-login-button">User Logged In</a></li>
				<li><a href="#" id="hide-button">Hide</a></li>
			</ul>
		</div>

		<header role="banner">
			<!-- TODO alt text -->
			<!-- TODO Homepage URL -->
			<a href="index.php" id="logo"><img src="images/logo.png" alt="" /></a>

			<nav>
				<div class="user-details">
					<ul>
						<li>Welcome <a href="#">John Doe</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Sign Out</a></li>
					</ul>
				</div>
				<ul role="navigation">
					<li><a href="index.php" <?php if(strcmp (CurrentPageURL(),"index.php")==0){ echo "class=\"active\"";}?>>Home</a></li>
					<li><a href="pricing.php" <?php if(strcmp (CurrentPageURL(),"pricing.php")==0){ echo "class=\"active\"";}?>>Pricing</a></li>
					<li><a href="referralscheme.php" <?php if(strcmp (CurrentPageURL(),"referralscheme.php")==0){ echo "class=\"active\"";}?>>Referral Scheme</a></li>
					<li><a href="signup.php" <?php if(strcmp (CurrentPageURL(),"signup.php")==0){ echo "class=\"active\"";}?>>Signup</a></li>
				</ul>
			</nav>
		</header>

		<main role="main">