<?php
/**
 * Conference - Block
 */

$block_path = 'block-17';
$gutenberg_title = 'Block - 17';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'a'     => array(
    'href'  => array(),
  ),
  'b'     => array(),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title      = wp_kses(get_field('title'), $allowed_tags);
$sub_title  = wp_kses(get_field('sub_title'), $allowed_tags);
$elements   = get_field('elements'); // image, title, descr

?>

<!-- <?= $block_path; ?> (start) -->
<section class="ways">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="ways__inner section__inner">
        <?php if($title): ?><h2 class="ways__title section__title"><?= $title; ?></h2><?php endif; ?>
        <?php if($sub_title): ?><p class="ways__subtitle section__descr"><?= $sub_title; ?></p><?php endif; ?>
        <ul class="ways__list">
          <?php if( have_rows('elements') ): while ( have_rows('elements') ): the_row(); ?>
            <li class="ways__item">
              <?php if(get_sub_field('image')): ?><img src="<?= get_sub_field('image'); ?>" alt="" class="ways__item-img" /><?php endif; ?>
              <?php if(get_sub_field('title')): ?><p class="ways__item-title"><?= get_sub_field('title'); ?></p><?php endif; ?>
              <?php if(get_sub_field('descr')): ?><p class="ways__item-text"><?= get_sub_field('descr'); ?></p><?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
