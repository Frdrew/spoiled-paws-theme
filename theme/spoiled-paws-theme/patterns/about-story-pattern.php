<?php
return [
    'title'       => __('About – Story Block', 'spoiled-paws'),
    'description' => __('About section with story text and NM desert styling.', 'spoiled-paws'),
    'categories'  => ['spoiled-paws'],
    'content'     => '
    <!-- wp:group {"className":"sp-fade-in"} -->
    <div class="wp-block-group sp-fade-in" style="padding:60px;">
        <!-- wp:heading {"level":2} -->
        <h2>Our Story</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Spoiled Paws began right here in the New Mexico desert, where the nights get cold and dogs need 
        warm, beautiful coats. Each piece is handmade with care — just the way your pup deserves.</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->
    '
];
