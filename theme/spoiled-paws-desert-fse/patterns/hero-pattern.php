<?php
return [
    'title'       => __('Hero – Spoiled Paws', 'spoiled-paws'),
    'description' => __('Large hero section with brand title and tagline.', 'spoiled-paws'),
    'categories'  => ['spoiled-paws'],
    'content'     => '
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"className":"sp-fade-in"} -->
    <div class="wp-block-group sp-fade-in" style="padding-top:120px;padding-bottom:120px;text-align:center;">
        <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"72px"},"color":{"text":"#0CA6A6"}}} -->
        <h1 style="color:#0CA6A6;font-size:72px">Spoiled Paws</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"22px"}}} -->
        <p style="font-size:22px;">Handmade dog coats from the heart of New Mexico.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    '
];
