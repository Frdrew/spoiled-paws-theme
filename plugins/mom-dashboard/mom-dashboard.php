<?php
/**
 * Plugin Name: Spoiled Paws – Mom Dashboard
 * Description: A simplified business dashboard for your mom to see orders, custom coat requests, and stats.
 * Version: 1.0.0
 * Author: You
 */

if (!defined('ABSPATH')) exit;

define('SP_MD_DIR', plugin_dir_path(__FILE__));
define('SP_MD_URL', plugin_dir_url(__FILE__));

require_once SP_MD_DIR . 'inc/admin-page.php';
require_once SP_MD_DIR . 'inc/rest.php';
require_once SP_MD_DIR . 'inc/stats.php';
require_once SP_MD_DIR . 'inc/simplify-admin.php';

// Enqueue assets
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style('spmd-css', SP_MD_URL . 'assets/css/dashboard.css', [], '1.0');
    wp_enqueue_script('spmd-js', SP_MD_URL . 'assets/js/dashboard.js', ['wp-element'], '1.0', true);
});
