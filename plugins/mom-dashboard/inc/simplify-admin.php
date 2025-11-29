<?php
if (!defined('ABSPATH')) exit;

// Hide unnecessary menus
add_action('admin_menu', function () {

    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');

});
