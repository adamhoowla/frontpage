<?php
// Include the library
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
  'amount'           => '39.00',
  'interval_length'  => 6,
  'interval_unit'    => 'month'
);

// Generate the url
$subscription_url = GoCardless::new_subscription_url($subscription_details);

// Display the link
echo '<a href="'.$subscription_url.'">New subscription</a>';

?>
