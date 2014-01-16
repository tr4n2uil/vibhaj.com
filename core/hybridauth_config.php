<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => HOST. APP. 'auth/', 

		"providers" => array ( 
			// openid providers
			"openid" => array (
				"enabled" => false
			),

			"yahoo" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ),
			),

			"aol"  => array ( 
				"enabled" => false 
			),

			"google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "453516979674-h6ivs7jmt6t4cmttj5khhnpou0db9le8.apps.googleusercontent.com", "secret" => "wlzYoc8SZmI16XuMXQtfpkzk" )
			),

			"facebook" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ), 
			),

			"twitter" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			// windows live
			"live" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			"myspace" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"linkedin" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"foursquare" => array (
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,

		"debug_file" => "",
	);

?>
