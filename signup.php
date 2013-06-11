<html>
<head>
<?php include('htmlheader.php');?>
</head>
<?php include('htmlheader.php');?>
<body>

<div id="wrapper">
<?php 
$bannerimgurl = "images/bannerbg.png";
$bannercontent = "<h1>Referral Scheme</h1><p style=\"padding-top:0px;color:#7b9d3e;font-size: 50px;\">&pound;45</p><p>for evey user you signup</p>";
include('header.php'); ?>
<section id="main">
<div class="whiteblock clearfix">
<div style="width:80%;margin-left:10%;margin-right:10%;text-align: center;">
<?php 
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
  'amount'           => '45.00',
  'interval_length'  => 6,
  'interval_unit'    => 'month'
);

// Generate the url
$subscription_url = GoCardless::new_subscription_url($subscription_details);

// Display the link
echo '<a href="'.$subscription_url.'">Sign up now</a>';

?>
</div>
</div>
<?php include('footer.php');?>
</section>
</div>
<script type="text/javascript" src="jhoowla.js"></script>

</body>
</html>
