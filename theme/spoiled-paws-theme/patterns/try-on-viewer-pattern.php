<?php
return [
    'title'       => __('Coat Try-On Viewer', 'spoiled-paws'),
    'description' => __('Interactive dog coat try-on component.', 'spoiled-paws'),
    'categories'  => ['spoiled-paws'],
    'content'     => '
    <!-- wp:group {"className":"sp-fade-in"} -->
    <div class="wp-block-group sp-fade-in" style="padding:40px;">

        <!-- wp:heading {"level":2} -->
        <h2>Try a Coat On!</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Select a dog silhouette, choose a coat, and spin the model!</p>
        <!-- /wp:paragraph -->

        <!-- Custom Plugin Block -->
        <!-- wp:coat-viewer/block /-->

    </div>
    <!-- /wp:group -->
    '
];
