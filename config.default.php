<?php defined('IN_CMS') or die('No direct access allowed.');

/*
	Anchor Cms - Default configuration
*/
return array(
	//  MySQL database details
	'database' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' => 'anchorcms'
	),

	// Set debugging options.
	// Used for development only. I'd turn this off the live site.
	'debug' => false
);
