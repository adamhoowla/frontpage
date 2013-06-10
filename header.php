<header>
<img id="logo" src="images/logo.png" alt="Hoowla logo">
<nav id="skipTo">
<ul style="padding-left:0px;">
<li>
<a href="#main" title="Skip to Main Content">Skip to Main Content</a>
</li>
</ul>
</nav>
<h1>Demo</h1>
<nav>
<?php

function CurrentPageURL() 
{
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

?>
<ul id="headerMenu">
<li><a href="index.php" <?php if(strcmp (CurrentPageURL(),"index.php")==0){ echo "class=\"active\"";}?>>HOME</a></li>
<li><a href="pricing.php" <?php if(strcmp (CurrentPageURL(),"pricing.php")==0){ echo "class=\"active\"";}?>>PRICING</a></li>
<li><a href="referalscheme.php" <?php if(strcmp (CurrentPageURL(),"referalscheme.php")==0){ echo "class=\"active\"";}?>>REFERAL SCHEME</a></li>
<li><a href="signup.php" <?php if(strcmp (CurrentPageURL(),"signup.php")==0){ echo "class=\"active\"";}?>>SIGNUP</a></li>
</ul>
</nav>
<?php if (isset($bannerimgurl)){
//	echo "<img src=\"" . $bannerimgurl . "\" alt=\"banner\">";
	echo "<div id=\"banner\" style=\"background-image: url('".$bannerimgurl."');height:358px;background-position:center;\">";
	if (isset($bannercontent)){
		echo $bannercontent;
	}

}else{?>
<div id="banner">
<img src="images/hoowlabanner.png" alt="banner" />
<?php } ?>
</div>
</header>
