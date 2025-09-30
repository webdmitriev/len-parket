<?php
/**
 * Conference - Block
 */

$block_path = 'block-13';
$gutenberg_title = 'Block - 13';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'b'    => array(),
  'a'    => array(),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title        = wp_kses(get_field('title'), $allowed_tags);
$sub_title    = wp_kses(get_field('sub_title'), $allowed_tags);
$elements     = get_field('elements'); // icon, title, descr
$descr_title  = wp_kses(get_field('descr_title'), $allowed_tags);
$image        = esc_url(get_field('image'));
$descr        = wp_kses(get_field('descr'), $allowed_tags);
$quote        = wp_kses(get_field('quote'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="construction">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="construction__inner section__inner">
        <h2 class="construction__title section__title"><?= $title; ?></h2>
        <p class="construction__descr section__descr"><?= $sub_title; ?></p>
        <ul class="construction__list">
          <?php if( have_rows('elements') ): while ( have_rows('elements') ): the_row(); ?>
            <li class="construction__item">
              <img src="<?= get_sub_field('icon'); ?>" alt="" class="construction__item-img">
              <p class="construction__item-title"><?= get_sub_field('title'); ?></p>
              <p class="construction__item-text"><?= get_sub_field('descr'); ?></p>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <p class="construction__text"><?= $descr_title; ?></p>
        <div class="construction__frame">
          <img src="<?= $image; ?>" alt="" class="construction__frame-img" />
          <div class="construction__frame-texts"><?= $descr; ?></div>
        </div>
        <div class="divider__inner"><p class="divider__text"><?= $quote; ?></p></div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
