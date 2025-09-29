<?php
/**
 * Conference - Block
 */

$block_path = 'block-10';
$gutenberg_title = 'Block - 10';

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
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$image      = esc_url(get_field('image'));

$images     = get_field('images'); // image
$cf7        = get_field('cf7');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="calculate">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="calculation-form">

        <div class="calculation-form__descr">
          <?php if($title): ?><p class="calculation-form__title"><?= $title; ?></p><?php endif; ?>
          <?php if($descr): ?><p class="calculation-form__text"><?= $descr; ?></p><?php endif; ?>
        </div>

        <?php if($image): ?><img class="calculation-form__img" src="<?= $image; ?>" alt="Картинка" /><?php endif; ?>

        <div class="calculation-form__form">

          <?= $cf7 ?? do_shortcode($cf7); ?>

          <div class="calculation-form__imgs">
            <div class="calculation-form__imgs-img"></div>
            <?php if( have_rows('images') ) : while ( have_rows('images') ) : the_row(); ?>
              <img class="calculation-form__imgs-img" src="<?= get_sub_field('image'); ?>" alt="Картинка" />
            <?php endwhile; endif; ?>
          </div>

        </div>

      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
