<?


if (isset($_POST['amount'])) {
	$amount = 45 * $_POST['amount'];
} else {
	$amount = "45.00";
}


include_once 'lib/GoCardless.php';

// Use the sandbox environment for testing
GoCardless::$environment = 'production';


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

echo $subscription_url;
?>