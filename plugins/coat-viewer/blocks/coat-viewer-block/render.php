<?php
/**
 * Server-rendered output for the Coat Viewer block.
 */

if (!defined('ABSPATH')) exit;

// Base URLs for images
$base_url = plugins_url('/assets/images/', dirname(__FILE__, 2));
?>

<div class="spcv-container">

    <!-- Dog Silhouette Layer -->
    <img 
        id="spcv-silhouette" 
        class="spcv-layer spcv-silhouette-layer" 
        src="" 
        alt="Dog silhouette"
    />

    <!-- Active Coat Layer -->
    <img 
        id="spcv-active-coat" 
        class="spcv-layer spcv-coat-layer" 
        src="" 
        alt="Dog coat"
    />

    <!-- Control Panel -->
    <div class="spcv-controls">

        <!-- Breed Selector -->
        <?php 
        include __DIR__ . '/ui-breed-selector.html';
        ?>

        <!-- Coat Selector -->
        <?php 
        include __DIR__ . '/ui-coat-selector.html';
        ?>

    </div>

</div>
<!-- Size Selector -->
<?php include __DIR__ . '/ui-size-selector.html'; ?>
