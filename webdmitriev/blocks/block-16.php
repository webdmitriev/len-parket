<?php
/**
 * Conference - Block
 */

$block_path = 'block-16';
$gutenberg_title = 'Block - 16';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'a'    => array(
    'href' => array(),
  ),
  'b'    => array(),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title          = wp_kses(get_field('title'), $allowed_tags);
$image_title    = esc_url(get_field('image_title'));
$descr          = wp_kses(get_field('descr'), $allowed_tags);
$quote          = wp_kses(get_field('quote'), $allowed_tags);

$block_01_title = wp_kses(get_field('block_01_title'), $allowed_tags);
$block_01_image = esc_url(get_field('block_01_image'));
$block_01_descr = wp_kses(get_field('block_01_descr'), $allowed_tags);

$block_02_title = wp_kses(get_field('block_02_title'), $allowed_tags);
$block_02_image = esc_url(get_field('block_02_image'));
$block_02_descr = wp_kses(get_field('block_02_descr'), $allowed_tags);

$image_01       = esc_url(get_field('image_01'));
$image_02       = esc_url(get_field('image_02'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="ontop">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="ontop__inner section__inner">
        <div class="ontop__fragment">
          <?php if($image_title): ?><img src="<?= $image_title; ?>" alt="" class="ontop__img" /><?php endif; ?>
          <div class="ontop__block">
            <?php if($title): ?><h2 class="ontop__block-title section__title"><?= $title; ?></h2><?php endif; ?>
            <?php if($descr): ?><p class="ontop__block-text section__subtitle"><?= $descr; ?></p><?php endif; ?>
          </div>
        </div>

        <?php if($quote): ?><div class="divider__inner"><p class="divider__text"><?= $quote; ?></p></div><?php endif; ?>

        <div class="ontop__list">
          <div class="ontop__list-column">
            <div class="ontop__item" style="height: 100%">
              <div class="ontop__item-top">
                <?php if($block_01_title): ?><p class="ontop__item-title"><?= $block_01_title; ?></p><?php endif; ?>
                <?php if($block_01_image): ?><img src="<?= $block_01_image; ?>" alt="" class="ontop__item-icon" /><?php endif; ?>
              </div>
              <?php if($block_01_descr): ?><div class="ontop__item-text"><?= $block_01_descr; ?></div><?php endif; ?>
            </div>
          </div>
          <div class="ontop__list-column" style="justify-content: space-between">
            <div class="ontop__item">
              <div class="ontop__item-top">
                <?php if($block_02_title): ?><p class="ontop__item-title"><?= $block_02_title; ?></p><?php endif; ?>
                <?php if($block_02_image): ?><img src="<?= $block_02_image; ?>" alt="" class="ontop__item-icon"><?php endif; ?>
              </div>
              <?php if($block_02_descr): ?><div class="ontop__item-text"><?= $block_02_descr; ?></div><?php endif; ?>
            </div>
            <div class="ontop__item-images">
              <?php if($image_01): ?><img src="<?= $image_01; ?>" alt="" class="ontop__item-image" /><?php endif; ?>
              <?php if($image_02): ?><img src="<?= $image_02; ?>" alt="" class="ontop__item-image" /><?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
