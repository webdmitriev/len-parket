<?php
/**
 * Conference - Block
 */

$block_path = 'block-09-01';
$gutenberg_title = 'Block - 09-01';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'b'    => array(),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id   = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc  = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title      = wp_kses(get_field('title'), $allowed_tags);
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$image      = esc_url(get_field('image'));

$block_icon = esc_url(get_field('block_icon'));
$block_text = wp_kses(get_field('block_text'), $allowed_tags);

$text       = wp_kses(get_field('text'), $allowed_tags);
$quote      = wp_kses(get_field('quote'), $allowed_tags);

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
      <div class="help__inner section__inner">
        <div class="help__frame">
          <div class="help__block">
            <?php if($title): ?><h2 class="help__title section__title"><?= $title; ?></h2><?php endif; ?>
            <?php if($descr): ?><p class="help__descr section__descr"><?= $descr; ?></p><?php endif; ?>
            <div class="help__item">
              <?php if($block_icon): ?><img src="<?= $block_icon; ?>" alt="" class="help__frame-img" /><?php endif; ?>
              <?php if($block_text): ?><p><?= $block_text; ?></p><?php endif; ?>
            </div>
            <?php if($image): ?><img src="<?= $image; ?>" alt="" class="help__img-inside" /><?php endif; ?>
          </div>
          <?php if($image): ?><img src="<?= $image; ?>" alt="" class="help__img"><?php endif; ?>
        </div>
        <?php if($text): ?><p class="help__text"><?= $text; ?></p><?php endif; ?>
        <?php if($quote): ?><div class="divider__inner"><p class="divider__text"><?= $quote; ?></p></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
