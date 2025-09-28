<?php

/**
 * Add css, js, fonts - for page-custom.php
 */
function webdmitriev_scripts() {
  if (is_page_template('single-custom.php')) {
    wp_enqueue_style('webdmitriev-css', get_template_directory_uri() . '/webdmitriev/assets/scss/app.css', array(), '1.0.0');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/webdmitriev/assets/js/jquery-3.6.1.min.js', false, null, false);
    wp_enqueue_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'webdmitriev_scripts');