<?php
/**
 * Conference - Block
 */

$block_path = 'block-06';
$gutenberg_title = 'Block - 06';

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
$sub_title  = wp_kses(get_field('sub_title'), $allowed_tags);
$elements   = get_field('elements');
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$image      = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="recommend">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="recommend__inner">
        <?php if($title): ?><h2 class="recommend__title section__title"><?= $title; ?></h2><?php endif; ?>
        <?php if($sub_title): ?><p class="recommend__subtitle"><?= $sub_title; ?></p><?php endif; ?>
        <div class="recommend__row">
          <?php if (have_rows('elements')): ?>
            <ul class="recommend__list">
              <?php while (have_rows('elements')): the_row(); ?>
                <li class="recommend__item"><?php the_sub_field('text'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <?php if($image): ?><img src="<?= $image; ?>" alt="" class="recommend__img" /><?php endif; ?>
        </div>
        <?php if($descr): ?><div class="recommend__addtext divider__inner"><?= $descr; ?></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
