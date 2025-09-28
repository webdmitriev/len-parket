<?php


/**
 * Blocks categories
 */
add_filter('block_categories_all', function($categories, $post) {
  $categories[] = array(
    'slug'  => 'block_webdmitriev',
    'title' => __('Блоки для блога', 'webdmitriev'),
    'icon'  => 'wordpress',
  );

  return $categories; 
}, 10, 2);


/**
 * Gutenberg blocks
 */
add_action('acf/init', function() {

  $icon = file_get_contents( get_template_directory() . '/webdmitriev/images/icon.svg' );
  $image = get_template_directory_uri() . '/webdmitriev/images/';

  // 01
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-01',
    'title'           => __('Block - 01'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-01.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-01.jpg">'
        )
      )
    )
  ));

});

add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
  return array(
    'acf/webdmitriev-block-01',
  );
}, 10, 2);

?>