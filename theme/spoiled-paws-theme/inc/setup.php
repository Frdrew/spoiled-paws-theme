<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function sp_theme_setup() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'sp_theme_setup' );
