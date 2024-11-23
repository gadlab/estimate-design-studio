<?php
/**
 * Plugin Name: Estimate Design Studio
 * Plugin URI: https://gadlab.net.com/plugins/esd
 * Description: A plugin to manage your estimates in a Design Studio.
 * Version: 1.0.3
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

// Enqueue admin styles and scripts
function eds_enqueue_admin_assets($hook) {
    // Load styles only on the plugin's admin page
    if ($hook !== 'toplevel_page_estimate-design-studio') {
        return;
    }

    // Enqueue the admin CSS file
    wp_enqueue_style(
        'eds-admin-style',
        EDS_PLUGIN_URL . 'admin/css/eds-admin-style.css',
        [],
        '1.0.3'
    );

    // Enqueue the admin JS file
    wp_enqueue_script(
        'eds-admin-script',
        EDS_PLUGIN_URL . 'admin/js/eds-admin-script.js',
        ['jquery'],
        '1.0.3',
        true
    );
}
add_action('admin_enqueue_scripts', 'eds_enqueue_admin_assets');

// Example of additional functionality (if needed, you can extend here)
