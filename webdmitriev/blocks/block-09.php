<?php
/**
 * Conference - Block
 */

$block_path = 'block-09';
$gutenberg_title = 'Block - 09';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id   = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc  = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title      = wp_kses(get_field('title'), $allowed_tags);
$image      = esc_url(get_field('image'));
$descr      = wp_kses(get_field('descr'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="help">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="help__text-block">
        <div class="help__info">
          <?php if($title): ?><h3 class="help__title section__title"><?= $title; ?></h3><?php endif; ?>
          <?php if($image): ?><img src="<?= $image; ?>" class="help__img" /><?php endif; ?>
          <?php if($descr): ?><div class="help__text"><?= $descr; ?></div><?php endif; ?>
        </div>

        <?php if($image): ?><img src="<?= $image; ?>" class="help__img" /><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
