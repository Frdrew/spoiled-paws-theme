<?php
if (!defined('ABSPATH')) exit;

function spco_register_statuses() {

    register_post_status('wc-custom-pending', [
        'label' => 'Custom Pending',
        'public' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Custom Pending (%s)', 'Custom Pending (%s)')
    ]);

    register_post_status('wc-custom-inprogress', [
        'label' => 'In Progress',
        'public' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('In Progress (%s)', 'In Progress (%s)')
    ]);

    register_post_status('wc-custom-ready', [
        'label' => 'Ready for Pickup',
        'public' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Ready (%s)', 'Ready (%s)')
    ]);
}
add_action('init', 'spco_register_statuses');
