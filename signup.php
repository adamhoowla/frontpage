<html>
<head>
<?php include('htmlheader.php');?>
</head>
<?php include('htmlheader.php');?>
<body>
<?php

if (isset($_POST['amount'])){
	$amount = 45 * $_POST['amount'];
}else{
	$amount = "45.00";
}
include_once 'lib/GoCardless.php';


// Set config vars
$account_details = array(
  'app_id'        => '02SG2BG38P1FVHW5MGH8G49VAFGQADX4N2YJN4VNXPBCSAP0NT7G6H3QXH1M4D3M',
  'app_secret'    => '222C7XPPZ9REWRACT43NDYJ9WQ9AWNJQGRJX4K4JRV6R492MQG4P0PGBEE8HT4WX',
  'merchant_id'   => '0CBHNN477Y',
  'access_token'  => 'BXCSY28TCK5HCZH66BG93SJAVKGPT8PT43BRHZ5RXBAHPTGFV90DZ2V7YNDQH5KC'
);

// Initialize GoCardless
GoCardless::set_account_details($account_details);


// The parameters for the payment
$subscription_details = array(
  'amount'           => $amount,
  'interval_length'  => 1,
  'interval_unit'    => 'month',
  'start_at'    => '2013-08-31',
  'expires_at'    => '2014-02-28'
);

// Generate the url
$subscription_url = GoCardless::new_subscription_url($subscription_details);
?>
<div id="wrapper">
<?php 
$bannerimgurl = "images/bannerbg.png";
$bannercontent = "<h1>Sign up now</h1>";
if (isset($_POST['amount'])){
	$bannercontent .= "<p style=\"padding-top:0px;color:#7b9d3e;font-size: 50px;\"><a href=\"".$subscription_url."\" style=\"color:#7b9d3e;text-decoration:none;\">Pay &pound;".$amount." securely via GoCardless</a></p>";
}else{
$bannercontent .= "<form name=\"input\" action=\"signup.php\" method=\"post\">
<p style=\"padding-top:0px;color:#7b9d3e;font-size: 50px;margin-bottom:10px;\">Number of users you require:<br><input style=\"width: 147px height: 37px; margin-bottom: 15px;\" type=\"text\" name=\"amount\"><br>
<input type=\"image\" src=\"images/calculatecost.png\" alt=\"Calculate cost\" />
</form>
";

}	
		
$bannercontent .= "<p>No payment will be taken until August the 31st and we offer a 100% money back guarantee for the first 6 months.</p>";

include('header.php'); ?>
<section id="main">
<div class="whiteblock clearfix">
<div style="width:80%;margin-left:10%;margin-right:10%;text-align: center;">
<?php 

// Display the link
//echo '<a href="'.$subscription_url.'">Sign up now</a>';

?>
</div>
</div>
<?php include('footer.php');?>
</section>
</div>
<script type="text/javascript" src="jhoowla.js"></script>

</body>
</html>
