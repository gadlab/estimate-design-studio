<?php
/**
 * Plugin Name: Estimate Design Studio
 * Plugin URI: https://gadlab.net.com/plugins/esd
 * Description: A plugin to manage your estimates in a Design Studio.
 * Version: 1.0.0
 * Author: Gad Lab / Pierre-Yves Gadina
 * Author URI: https://gadlab.net/
 * Text Domain: estimate-design-studio
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define plugin constants
define( 'EDS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EDS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include admin page
require_once EDS_PLUGIN_DIR . 'admin/admin-page.php';

// Load plugin textdomain
function eds_load_textdomain() {
    load_plugin_textdomain( 'estimate-design-studio', false, dirname( __FILE__ ) . '/languages' );
}
add_action( 'plugins_loaded', 'eds_load_textdomain' );

