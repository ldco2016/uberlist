<?php
  // Check if admin
if (is_admin()) {
    // Add Scripts
    function ul_add_admin_scripts()
    {
        wp_enqueue_style('ul-admin-style', plugins_url().'/uberlist/css/style-admin.css');
    }

    add_action('admin_init', 'ul_add_admin_scripts');
}

  // Add scripts
function ul_add_scripts()
{
    wp_enqueue_style('ul-style', plugins_url().'/uberlist/css/style.css');
    wp_enqueue_script('ul-main-scripts', plugins_url().'/uberlist/js/main.js');
}

  add_action('wp_enqueue_scripts', 'ul_add_scripts');


    ?>
