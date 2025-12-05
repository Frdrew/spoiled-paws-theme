/*
 * Plugin Name: Spoiled Paws Coat Viewer
 * GitHub Plugin URI: Frdrew/spoiled-paws-coat-viewer
 * Primary Branch: main
 */
<?php
/**
 * Spoiled Paws Desert FSE Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Global paths
define( 'SP_THEME_DIR', get_template_directory() );
define( 'SP_THEME_URI', get_template_directory_uri() );

// Load setup
require_once SP_THEME_DIR . '/inc/setup.php';
require_once SP_THEME_DIR . '/inc/enqueue.php';
require_once SP_THEME_DIR . '/inc/patterns.php';
