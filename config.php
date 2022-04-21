<?php 
// Product Details 
// Minimum amount is $0.50 US 
// Test Stripe API configuration 

define('STRIPE_API_KEY', 'Your_API_Secret_key');  
define('STRIPE_PUBLISHABLE_KEY', 'Your_API_Publishable_key'); 

define('STRIPE_SUCCESS_URL', 'http://localhost/stripe/success.php'); 
define('STRIPE_CANCEL_URL', 'http://localhost/stripe/cancel.php'); 

// Database configuration   
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'codeat21'); 
?>



