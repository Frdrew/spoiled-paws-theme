<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function sp_enqueue_assets() {

    wp_enqueue_style(
        'sp-transitions',
        SP_THEME_URI . '/assets/css/transitions.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'sp-transitions',
        SP_THEME_URI . '/assets/js/transitions.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'sp-scroll-effects',
        SP_THEME_URI . '/assets/js/scroll-effects.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'sp-coat-card-tilt',
        SP_THEME_URI . '/assets/js/coat-card-tilt.js',
        [],
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'sp_enqueue_assets' );
