<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function eds_add_admin_menu() {
    add_menu_page(
        __( 'Estimate Design Studio', 'estimate-design-studio' ),
        __( 'Estimate Design Studio', 'estimate-design-studio' ),
        'manage_options',
        'estimate-design-studio',
        'eds_render_admin_page',
        'dashicons-admin-appearance',
        6
    );
}
add_action( 'admin_menu', 'eds_add_admin_menu' );

function eds_render_admin_page() {
    ?>
    <div class="eds-wrap">
        <div class="eds-admin-container eds-fluid-wrap">
            <!-- Plugin Navigation -->
            <nav class="eds-plugin-navigation eds-navbar eds-navbar-expand-lg eds-navbar-light eds-bg-light">
                <div class="eds-fluid-wrap">
                    <a class="eds-brand" href="#"><?php esc_html_e('EDS Plugin', 'estimate-design-studio'); ?></a>
                    <button class="eds-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#eds-navbar"
                        aria-controls="eds-navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'estimate-design-studio'); ?>">
                        <span class="eds-navbar-toggler-icon"></span>
                    </button>
                    <div class="eds-collapse eds-navbar-collapse" id="eds-navbar">
                        <ul class="eds-navbar-nav">
                            <li class="eds-nav-item">
                                <a class="eds-nav-link eds-active" href="#eds_section1"><?php esc_html_e('Section 1', 'estimate-design-studio'); ?></a>
                            </li>
                            <li class="eds-nav-item">
                                <a class="eds-nav-link" href="#eds_section2"><?php esc_html_e('Section 2', 'estimate-design-studio'); ?></a>
                            </li>
                            <li class="eds-nav-item">
                                <a class="eds-nav-link" href="#eds_footer"><?php esc_html_e('Footer', 'estimate-design-studio'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Title and Intro Section -->
            <header class="eds-header">
                <div class="eds-container">
                    <h1 class="eds-title"><?php esc_html_e('Welcome to the EDS Plugin', 'estimate-design-studio'); ?></h1>
                    <p class="eds-intro"><?php esc_html_e('This plugin allows you to manage advanced features for your WordPress site. Explore the options below.', 'estimate-design-studio'); ?></p>
                </div>
            </header>

            <!-- Main Section -->
            <main class="eds-main">
                <div class="eds-container">
                    <!-- Sub-section 1 -->
                    <section id="eds_section1" class="eds-section">
                        <div class="eds-row">
                            <div class="eds-col">
                                <h2 class="eds-section-title"><?php esc_html_e('Main Section 1', 'estimate-design-studio'); ?></h2>
                                <p class="eds-section-content"><?php esc_html_e('Add the main content for this section here.', 'estimate-design-studio'); ?></p>
                            </div>
                            <div class="eds-col">
                                <div class="eds-section-sidebar eds-bg-light">
                                    <h3><?php esc_html_e('Sidebar', 'estimate-design-studio'); ?></h3>
                                    <p><?php esc_html_e('Supplements or quick actions.', 'estimate-design-studio'); ?></p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Sub-section 2 -->
                    <section id="eds_section2" class="eds-section">
                        <div class="eds-row">
                            <div class="eds-col">
                                <h3 class="eds-subsection-title"><?php esc_html_e('Column 1', 'estimate-design-studio'); ?></h3>
                                <p><?php esc_html_e('Content for the first column.', 'estimate-design-studio'); ?></p>
                            </div>
                            <div class="eds-col">
                                <h3 class="eds-subsection-title"><?php esc_html_e('Column 2', 'estimate-design-studio'); ?></h3>
                                <p><?php esc_html_e('Content for the second column.', 'estimate-design-studio'); ?></p>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <!-- Footer -->
            <footer id="eds_footer" class="eds-footer eds-bg-dark eds-text-light">
                <div class="eds-container eds-text-center">
                    <p><?php echo esc_html( gmdate( 'Y-m-d H:i:s' ) ); ?></p>
                </div>
            </footer>
        </div>
    </div>

    <?php
}

function eds_enqueue_admin_scripts( $hook ) {
    if ( $hook !== 'toplevel_page_estimate-design-studio' ) {
        return;
    }
    wp_enqueue_style( 'eds-admin-style', EDS_PLUGIN_URL . 'admin/css/eds-admin-style.css' );
    wp_enqueue_script( 'eds-admin-script', EDS_PLUGIN_URL . 'admin/js/eds-admin-script.js', array( 'jquery' ), null, true );
}
add_action( 'admin_enqueue_scripts', 'eds_enqueue_admin_scripts' );