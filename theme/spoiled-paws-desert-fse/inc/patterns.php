<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function sp_register_patterns() {

    register_block_pattern_category( 'spoiled-paws', [
        'label' => __( 'Spoiled Paws', 'spoiled-paws' )
    ]);

    $pattern_dir = SP_THEME_DIR . '/patterns';

    foreach (glob($pattern_dir . '/*.php') as $pattern_file) {
        register_block_pattern(
            'spoiled-paws/' . basename($pattern_file, '.php'),
            include $pattern_file
        );
    }
}

add_action( 'init', 'sp_register_patterns' );
