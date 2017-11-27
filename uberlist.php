<?php
  /**
   * Plugin Name: UberList
   * Description: A ToDo list plugin
   * Version 1.0
   * Author: Daniel Cortes
   **/

// Exit if Accessed Directly
if (!defined('ABSPATH')) {
    exit;
}

  // Load Scripts
  require_once plugin_dir_path(__FILE__) . 'includes/uberlist-scripts.php';

  // Load Shortcodes
  require_once plugin_dir_path(__FILE__) . 'includes/uberlist-shortcodes.php';

// Check if admin
if (is_admin()) {
    // Load Custom Post Types
    include_once plugin_dir_path(__FILE__) . 'includes/uberlist-cpt.php';

    // Load Custom Fields
    include_once plugin_dir_path(__FILE__) . 'includes/uberlist-fields.php';
}

    ?>
