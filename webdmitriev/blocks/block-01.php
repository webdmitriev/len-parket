<?php
/**
 * Conference - Block
 */

$block_path = 'block-01';
$gutenberg_title = 'Block - 01';

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

$title          = wp_kses(get_field('title'), $allowed_tags);
$title_bgc_show = get_field('title_bgc_show') ? 'padding-left: 0;background-color: #92C75D;padding: 22px;border-radius: 5px;font-weight: 600;color: white;align-self: flex-start;' : '';
$descr          = wp_kses(get_field('descr'), $allowed_tags);
$excerpt        = wp_kses(get_field('excerpt'), $allowed_tags);
$image          = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="hero">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="hero__inner">
        <div class="hero__block">
          <?php if($title): ?><h1 class="hero__title section__title" style="<?= $title_bgc_show; ?>"><?= $title; ?></h1><?php endif; ?>
          <?php if($image): ?><img src="<?= $image; ?>" alt="" class="hero__block-img"><?php endif; ?>
          <?php if($descr): ?><p class="hero__descr section__descr"><?= $descr; ?></p><?php endif; ?>
        </div>
        <?php if($image): ?><img src="<?= $image; ?>" alt="" class="hero__img" /><?php endif; ?>
        <?php if($excerpt): ?><div class="hero__addtext divider__inner"><?= $excerpt; ?></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
