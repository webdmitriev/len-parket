<?php

/**
 * Add css, js, fonts - for page-custom.php
 */
function webdmitriev_scripts() {
  if (is_page_template('webdmitriev/page-custom.php')) {
    wp_enqueue_style('webdmitriev-css', get_template_directory_uri() . '/webdmitriev/assets/scss/app.css', array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'webdmitriev_scripts');