<?php
/**
 * Conference - Block
 */

$block_path = 'block-03';
$gutenberg_title = 'Block - 03';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id       = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc      = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title          = wp_kses(get_field('title'), $allowed_tags);
$image          = esc_url(get_field('image'));
$descr          = wp_kses(get_field('descr'), $allowed_tags);

$title_elements = wp_kses(get_field('title_elements'), $allowed_tags);
$elements       = get_field('elements'); // text

$title_blocks   = wp_kses(get_field('title_blocks'), $allowed_tags);
$blocks         = get_field('blocks'); // text
$image_blocks   = esc_url(get_field('image_blocks'));

$quote          = wp_kses(get_field('quote'), $allowed_tags);


?>

<!-- <?= $block_path; ?> (start) -->
<section class="laminat">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="laminat__inner">
        <?php if($title): ?><h2 class="laminat__title section__title"><?= $title; ?></h2><?php endif; ?>
        <div class="laminat__text-row">
          <?php if($image): ?><img src="<?= $image; ?>" class="laminat__img" /><?php endif; ?>
          <?php if($descr): ?><div class="laminat__text"><?= $descr; ?></div><?php endif; ?>
        </div>

        <div class="laminat__proscons">
          <div class="laminat__pros">
            <?php if($title_elements): ?><p class="laminat__proscons__title"><?= $title_elements; ?></p><?php endif; ?>
            <div class="laminat__pros-row">
              <?php if( have_rows('elements') ) : while ( have_rows('elements') ) : the_row(); ?>
                <div class="laminat__pros-item"><?= get_sub_field('text'); ?></div>
              <?php endwhile; endif; ?>
            </div>
          </div>

          <div class="laminat__cons">
            <?php if($title_blocks): ?><p class="laminat__proscons__title"><?= $title_blocks; ?></p><?php endif; ?>
            <div class="laminat__cons-row">
              <?php if( have_rows('blocks') ) : while ( have_rows('blocks') ) : the_row(); ?>
                <div class="laminat__pros-item"><?= get_sub_field('text'); ?></div>
              <?php endwhile; endif; ?>
            </div>
            <?php if($image_blocks): ?><img src="<?= $image_blocks; ?>" class="laminat__cons-img" /><?php endif; ?>
          </div>
        </div>

        <?php if($quote): ?><div class="laminat__addtext divider__inner"><?= $quote; ?></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
