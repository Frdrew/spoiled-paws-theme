<?php
if (!defined('ABSPATH')) exit;

add_action('woocommerce_order_status_custom-pending', function ($order_id) {
    $order = wc_get_order($order_id);
    $admin = get_option('admin_email');

    wp_mail(
        $admin,
        "New Custom Coat Order (#$order_id)",
        "A new custom coat order has been submitted."
    );
});
