<?php
/*
Plugin Name: External Update Example
Plugin URI: http://example.com/
Description: Demonstrates how to handle plugin updates from a third-party source. 
Version: 1.1
Author: Janis Elsts
Author URI: http://w-shadow.com/
*/

require 'plugin-updates/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AiresDagraca/external-update-example',
	__FILE__
    'external-update-example'
);

    
//Here's how you can add query arguments to the URL.
//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');