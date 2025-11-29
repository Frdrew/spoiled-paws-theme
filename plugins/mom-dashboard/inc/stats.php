<?php
if (!defined('ABSPATH')) exit;

function spmd_get_stats() {
    $wc_orders = wc_get_orders([
        'limit' => -1,
        'return' => 'ids'
    ]);

    return [
        'total_orders' => count($wc_orders),
        'custom_pending' => spmd_count_orders_by_status('custom-pending'),
        'in_progress' => spmd_count_orders_by_status('custom-inprogress'),
        'ready' => spmd_count_orders_by_status('custom-ready'),
        'completed' => spmd_count_orders_by_status('completed'),
    ];
}

function spmd_count_orders_by_status($status) {
    return count(wc_get_orders([
        'limit' => -1,
        'status' => $status,
        'return' => 'ids'
    ]));
}

function spmd_get_recent_orders() {
    $orders = wc_get_orders([
        'limit' => 8,
        'orderby' => 'date',
        'order' => 'DESC'
    ]);

    $out = [];
    foreach ($orders as $order) {
        $out[] = [
            'id' => $order->get_id(),
            'status' => $order->get_status(),
            'total' => $order->get_total(),
            'date' => $order->get_date_created()->date('M j'),
        ];
    }

    return $out;
}
