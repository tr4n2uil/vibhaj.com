<?php
/**
 *	Sample Project Settings
 *
 *	Vibhaj Rajan <vibhaj8@gmail.com>
 *
 *	Licensed under MIT License 
 *	http://www.opensource.org/licenses/mit-license.php
 *
**/

	// default settings
	define( 'ROOT', dirname( __FILE__ ) .'/../' );

	// project settings
	define( 'BP_ROOT', ROOT .'lib/backend.php/src/' );
	define( 'DEBUG', false );

	// url utility settings
	define( 'HOST', ( $_SERVER[ 'SERVER_PORT' ] == 80 ? 'http' : 'https' ). '://'. $_SERVER[ 'HTTP_HOST' ] );
	define( 'APP', $_SERVER[ 'HTTP_HOST' ] == '127.0.0.1' ? '/bitbucket/vibhaj.com/' : '/' );
	define( 'HOME', 'home' );
	define( 'CACHE_DIR', ROOT. 'cache/' );

	// auth utility settings
	define( 'COOKIE_NAME', 'sessionid' );
	define( 'COOKIE_EXPIRY', 15 );
	define( 'COOKIE_DOMAIN', '127.0.0.1' );
	define( 'COOKIE_PATH', '/' );
	define( 'COOKIE_SECURE', false );
	define( 'COOKIE_HTTPONLY', true );
	define( 'LOGIN_URL', APP. 'login/' );
	define( 'LOGIN_REDIRECT', APP );
	define( 'LOGOUT_REDIRECT', APP );

	// db utility settings
	$DATABASES = array(
		'default' => array( 
			'dsn' => 'mysql:host=localhost;port=3306;dbname=thoughtsense',
			'user' => 'root',
			'pass' => 'krishna',
		),
		'socket' => array(
			'dsn' => 'mysql:unix_socket=/tmp/mysql.sock;dbname=blackpearl',
			'user' => 'root',
			'pass' => 'krishna',
		),
	);
	
	// utility settings
	define( 'MEDIA_ROOT', ROOT. 'drive' .DIRECTORY_SEPARATOR );

?>

