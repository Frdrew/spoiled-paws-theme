<?php
if (!defined('ABSPATH')) exit;

function spco_add_statuses($statuses) {
    $new = [];

    $new['wc-custom-pending']   = 'Custom Pending';
    $new['wc-custom-inprogress'] = 'In Progress';
    $new['wc-custom-ready']      = 'Ready for Pickup';

    return array_merge($statuses, $new);
}
add_filter('wc_order_statuses', 'spco_add_statuses');
