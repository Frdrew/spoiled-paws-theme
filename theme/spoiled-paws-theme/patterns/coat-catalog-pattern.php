<?php
return [
    'title'       => __('Coat Catalog Grid', 'spoiled-paws'),
    'description' => __('Grid layout for displaying coats.', 'spoiled-paws'),
    'categories'  => ['spoiled-paws'],
    'content'     => '
    <!-- wp:group {"className":"sp-fade-in"} -->
    <div class="wp-block-group sp-fade-in" style="padding:40px;">
        <!-- wp:heading {"level":2} -->
        <h2>Our Coats</h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/product-category {"columns":3,"rows":1} /-->

        <!-- Placeholder message -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Products will appear here when added in WooCommerce.</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->
    '
];
