<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

//=================****************=============
//paypal credentilas
define('PRO_PAYPAL', 0);
define("PAYPAL_CLIENTID", "ASg0sJx2YwvAfNfDR8bUvoLFXaQJ01B_C6YDDTd3S2Y3zSkfZhhvFOm0-CfNx1NIDlF6YFWApkxhfFUf");
define("PAYPAL_SECRET", "EFTbeSKjMaGhtMLdz6X5bnPHkTmKkS9JRWoFNGXwRvF55icgcUOCqlfg9Yob372QgAxWmORdGSLs4bjR");
define("PAYPAL_BASE_URL", "https://api.sandbox.paypal.com/v1/");
define("PAYPAL_ENV", "sandbox");
define('CURRENCY', 'INR');

//razorpay credentials
define('RAZOR_KEY_ID', 'rzp_test_3NABl4hPrcNdZx');
define('RAZOR_KEY_SECRET', 'JGKDjHNzGhU0NHz90jvH8VPy');

