<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit; // Exit if accessed directly.
}

// Delete plugin options
delete_option( 'eds_plugin_option' );