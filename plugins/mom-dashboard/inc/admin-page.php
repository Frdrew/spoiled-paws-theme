<?php
if (!defined('ABSPATH')) exit;

function spmd_add_menu() {
    add_menu_page(
        'Spoiled Paws Dashboard',
        'Spoiled Paws',
        'manage_woocommerce',
        'spmd-dashboard',
        'spmd_render_dashboard',
        'dashicons-pets',
        3
    );
}
add_action('admin_menu', 'spmd_add_menu');

function spmd_render_dashboard() {
    include SP_MD_DIR . 'templates/dashboard.php';
}
