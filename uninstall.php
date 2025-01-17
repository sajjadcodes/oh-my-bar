<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://mobeenabdullah.com
 * @since      0.1.0
 *
 * @package    Oh_My_Bar
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Options cleanup
$read_bar_options = [
	'rb_background_color',
	'rb_foreground_color',
	'rb_background_opacity',
	'rb_bar_shadow',
	'rb_bar_rounded',
	'rb_bar_placement',
	'rb_bar_height',
	'rb_show_home_page',
	'rb_show_single_post',
	'rb_show_single_page',
	'rb_show_archive',
];
foreach ( $read_bar_options as $option ) {
	delete_option( $option );
}
