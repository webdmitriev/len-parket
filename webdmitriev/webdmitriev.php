<?php

/**
 * Admin
 */
require get_template_directory() . '/webdmitriev/admin.php';


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

  // block-breadcrumbs
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-breadcrumbs',
    'title'           => __('Breadcrumbs'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-breadcrumbs.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // block-ocenka
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-ocenka',
    'title'           => __('Ocenka'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-ocenka.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

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

  // 02
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-02',
    'title'           => __('Block - 02'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-02.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-02.jpg">'
        )
      )
    )
  ));

  // 02-01
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-02-01',
    'title'           => __('Block - 02-01'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-02-01.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-02.jpg">'
        )
      )
    )
  ));

  // 03
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-03',
    'title'           => __('Block - 03'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-03.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-03.jpg">'
        )
      )
    )
  ));

  // 04
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-04',
    'title'           => __('Block - 04'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-04.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-04.jpg">'
        )
      )
    )
  ));

  // 05
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-05',
    'title'           => __('Block - 05'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-05.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-05.jpg">'
        )
      )
    )
  ));

  // 06
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-06',
    'title'           => __('Block - 06'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-06.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-06.jpg">'
        )
      )
    )
  ));

  // 07
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-07',
    'title'           => __('Block - 07'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-07.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-07.jpg">'
        )
      )
    )
  ));

  // 08
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-08',
    'title'           => __('Block - 08'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-08.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-08.jpg">'
        )
      )
    )
  ));

  // 09
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-09',
    'title'           => __('Block - 09'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-09.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-09.jpg">'
        )
      )
    )
  ));

  // 09-01
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-09-01',
    'title'           => __('Block - 09-01'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-09-01.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-09.jpg">'
        )
      )
    )
  ));

  // 10
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-10',
    'title'           => __('Block - 10'),
    'description'     => __('calculate'),
    'render_template' => 'webdmitriev/blocks/block-10.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-10.jpg">'
        )
      )
    )
  ));

  // 11
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-11',
    'title'           => __('Block - 11'),
    'description'     => __('services'),
    'render_template' => 'webdmitriev/blocks/block-11.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'block-11.jpg">'
        )
      )
    )
  ));

  // 12
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-12',
    'title'           => __('Block - 12'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-12.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 13
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-13',
    'title'           => __('Block - 13'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-13.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 14
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-14',
    'title'           => __('Block - 14'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-14.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 15
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-15',
    'title'           => __('Block - 15'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-15.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 16
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-16',
    'title'           => __('Block - 16'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-16.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 17
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-17',
    'title'           => __('Block - 17'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-17.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

  // 18
  acf_register_block_type(array(
    'name'            => 'webdmitriev-block-18',
    'title'           => __('Block - 18'),
    'description'     => __('Description'),
    'render_template' => 'webdmitriev/blocks/block-18.php',
    'category'        => 'block_webdmitriev',
    'icon'            => $icon,
    'keywords'        => array('webdmitriev'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . $image . 'default.jpg">'
        )
      )
    )
  ));

});

add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
  return array(
    'acf/webdmitriev-block-breadcrumbs',
    'acf/webdmitriev-block-ocenka',
    'acf/webdmitriev-block-01',
    'acf/webdmitriev-block-02',
    'acf/webdmitriev-block-02-01',
    'acf/webdmitriev-block-03',
    'acf/webdmitriev-block-04',
    'acf/webdmitriev-block-05',
    'acf/webdmitriev-block-06',
    'acf/webdmitriev-block-07',
    'acf/webdmitriev-block-08',
    'acf/webdmitriev-block-09',
    'acf/webdmitriev-block-09-01',
    'acf/webdmitriev-block-10',
    'acf/webdmitriev-block-11',
    'acf/webdmitriev-block-12',
    'acf/webdmitriev-block-13',
    'acf/webdmitriev-block-14',
    'acf/webdmitriev-block-15',
    'acf/webdmitriev-block-16',
    'acf/webdmitriev-block-17',
    'acf/webdmitriev-block-18',
    'core/html',
    'core/shortcode',
  );
}, 10, 2);

?>