<?php
/**
 * Plugin Name:     Newspack Gds
 * Plugin URI:      https://newspack.blog
 * Description:     Ad services integration.
 * Author:          Automattic
 * License:         GPL2
 *
 * @package         Newspack
 */

defined( 'ABSPATH' ) || exit;

// Define NEWSPACK_GAM_PLUGIN_FILE.
if ( ! defined( 'NEWSPACK_ADS_PLUGIN_FILE' ) ) {
	define( 'NEWSPACK_ADS_PLUGIN_FILE', __FILE__ );
}

// Include the main Newspack Google Ad Manager class.
if ( ! class_exists( 'Newspack_Ads' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-newspack-ads.php';
}
