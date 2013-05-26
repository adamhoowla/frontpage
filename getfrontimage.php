<?php
if (isset($_GET['w'])){
	$width = $_GET['w'] -20;
}else{
	$width = "1349";
}
//get the host name
$hostname = "http://" . $_SERVER['SERVER_NAME'];
if ($hostname == "http://localhost"){
	$hostname .= "/hoowla/frontpage";
}
$imageurl = $hostname . "/images/hoowlabanner.png";
echo "<img style=\"float:left;\" src=\"timthumb.php?src=" .$imageurl ."&w=".$width."&h=460&a=t\" alt=\"\">";
?>
