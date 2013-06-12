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

// Use the sandbox environment for testing
GoCardless::$environment = 'sandbox';

// Set config vars
$account_details = array(
  'app_id'        => '6Z7S6GBJQMVFYVAYG04MQYNX9KY1FBCDVJ0R59CP2219MFPTT1N4FAV4QKJQ9JQV',
  'app_secret'    => 'JHST49KMH5FYF32CMGEMGQGXN0N57H1XPVAG78V1HWZRY38G7EQZRD3X3T5HM6AZ',
  'merchant_id'   => '0CBHNN477Y',
  'access_token'  => 'MDAMPYAG3ZTYP6FB3Z3KKSYD3SCQPD5M5Z1TPG14JCT7BSAQQ3NTGDCJ33NSFXEN'
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
	$bannercontent .= "<p style=\"padding-top:0px;color:#7b9d3e;font-size: 50px;\"><a href=\"".$subscription_url."\" style=\"color:#7b9d3e;text-decoration:none;\">Pay securely via GoCardless</a></p>";
}else{
$bannercontent .= "<form name=\"input\" action=\"signup.php\" method=\"post\">
<p style=\"padding-top:0px;color:#7b9d3e;font-size: 50px;\">Enter the number of users you require: <input type=\"text\" name=\"amount\">
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
