<?php
if (!defined('ABSPATH')) exit;

add_action('rest_api_init', function() {

    register_rest_route('spmd/v1', '/stats', [
        'methods' => 'GET',
        'callback' => 'spmd_get_stats',
        'permission_callback' => function() {
            return current_user_can('manage_woocommerce');
        }
    ]);

    register_rest_route('spmd/v1', '/recent-orders', [
        'methods' => 'GET',
        'callback' => 'spmd_get_recent_orders',
        'permission_callback' => function() {
            return current_user_can('manage_woocommerce');
        }
    ]);

});
