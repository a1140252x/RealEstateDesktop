<?php
/**
 * Version: 3.4.5
 * Author: Isidro León
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define RE_FILE.
if ( ! defined( 'RE_FILE' ) ) {
	define( 'RE_FILE', __FILE__ );
}

// Include the main RealEstate class.
if ( ! class_exists( 'RealEstate' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class/realestate.php';
}

/**
 * Main instance of WooCommerce.
 * Returns the main instance of RE to prevent the need to use globals.
 * @return RealEstate
 */
function re() {
	return RealEstate::instance();
}

// Global for backwards compatibility.
$GLOBALS['realestate'] = re();
