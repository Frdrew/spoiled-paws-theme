<?php
if (!defined('ABSPATH')) exit;

function sp_cv_enqueue() {
    wp_enqueue_style(
        'spcv-viewer',
        SP_CV_URL . 'assets/css/viewer.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'spcv-rotator',
        SP_CV_URL . 'assets/js/rotator.js',
        ['wp-element'],
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'spcv-3d',
        SP_CV_URL . 'assets/js/viewer-3d.js',
        ['wp-element'],
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'spcv-utils',
        SP_CV_URL . 'assets/js/loader-utils.js',
        ['wp-element'],
        '1.0.0',
        true
    );
}
add_action('enqueue_block_assets', 'sp_cv_enqueue');
