<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*
Plugin Name: Oxsn Sitemap
Plugin URI: https://oxsn.com/
Description: This plugin adds sitemap shortcodes!
Author: oxsn
Author URI: https://oxsn.com/
Version: 0.0.1
*/


define( 'oxsn_sitemap_plugin_basename', plugin_basename( __FILE__ ) );
define( 'oxsn_sitemap_plugin_dir_path', plugin_dir_path( __FILE__ ) );
define( 'oxsn_sitemap_plugin_dir_url', plugin_dir_url( __FILE__ ) );

if ( ! function_exists ( 'oxsn_sitemap_settings_link' ) ) {

	add_filter( 'plugin_action_links', 'oxsn_sitemap_settings_link', 10, 2 );
	function oxsn_sitemap_settings_link( $links, $file ) {

		if ( $file != oxsn_sitemap_plugin_basename )
		return $links;
		$settings_page = '<a href="' . menu_page_url( 'oxsn-sitemap', false ) . '">' . esc_html( __( 'Settings', 'oxsn-sitemap' ) ) . '</a>';
		array_unshift( $links, $settings_page );
		return $links;

	}

}

require_once( oxsn_sitemap_plugin_dir_path . 'main-tab/etc.php' );
require_once( oxsn_sitemap_plugin_dir_path . 'plugin-tab/etc.php' );
require_once( oxsn_sitemap_plugin_dir_path . 'quicktags/etc.php' );
require_once( oxsn_sitemap_plugin_dir_path . 'shortcodes/etc.php' );


?>