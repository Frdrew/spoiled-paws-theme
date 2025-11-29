<?php
/**
 * Plugin Name: Spoiled Paws – Custom Order Builder
 * Description: Build custom dog coat orders with measurements, fabrics, and special instructions.
 * Version: 1.0.0
 * Author: You
 */

if (!defined('ABSPATH')) exit;

define('SP_CO_DIR', plugin_dir_path(__FILE__));
define('SP_CO_URL', plugin_dir_url(__FILE__));

require_once SP_CO_DIR . 'inc/form.php';
require_once SP_CO_DIR . 'inc/fields.php';
require_once SP_CO_DIR . 'inc/woo-hooks.php';
require_once SP_CO_DIR . 'inc/emails.php';
require_once SP_CO_DIR . 'inc/statuses.php';

// Enqueue scripts
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('spco-form', SP_CO_URL . 'assets/css/form.css', [], '1.0');

    wp_enqueue_script('spco-form', SP_CO_URL . 'assets/js/form.js', [], '1.0', true);
    wp_enqueue_script('spco-measure', SP_CO_URL . 'assets/js/measurements.js', [], '1.0', true);
});

// Shortcode for custom order form
add_shortcode('custom_order_form', 'spco_render_form_shortcode');
