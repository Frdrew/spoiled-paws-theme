<?php
return [
    'title'       => __('Custom Coat CTA', 'spoiled-paws'),
    'description' => __('Call to action linking to custom coat order form.', 'spoiled-paws'),
    'categories'  => ['spoiled-paws'],
    'content'     => '
    <!-- wp:group {"className":"sp-fade-in","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}}} -->
    <div class="wp-block-group sp-fade-in" style="text-align:center;padding:40px;">
        <!-- wp:heading {"level":3,"style":{"color":{"text":"#0CA6A6"}}} -->
        <h3 style="color:#0CA6A6;">Need Something Custom?</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>We make coats for every size and every pup. Tailored to perfection.</p>
        <!-- /wp:paragraph -->

        <!-- wp:button {"backgroundColor":"adobe","textColor":"white"} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-white-color has-adobe-background-color"
               href="/custom-order">Start Your Custom Order</a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:group -->
    '
];
