<?php

/**
 * @wordpress-plugin
 * Plugin Name:     Lanyard
 * Plugin URI:      http://www.adampatterson.ca
 * Description:     Lanyard is a very simple OOP / Bootstrap for WordPress plugins using Composer.
 * Version:         0.0.1
 * Author:          Adam Patterson
 * Author URI:      http://www.adampatterson.ca
 * License:         MIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';
//add_action( 'plugins_loaded', array( 'PluginNameSpace\Bootstrap', 'init' ) );
PluginNameSpace\Bootstrap::init();

register_activation_hook( __FILE__, [ 'PluginNameSpace\Actions', 'activationHook' ] );
register_deactivation_hook( __FILE__, [ 'PluginNameSpace\Actions', 'deactivationHook' ] );
