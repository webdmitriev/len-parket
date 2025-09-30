<?php
/**
 * Conference - Block
 */

$block_path = 'block-18';
$gutenberg_title = 'Block - 18';

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
$descr          = wp_kses(get_field('descr'), $allowed_tags);
$image          = esc_url(get_field('image'));

$title_left     = wp_kses(get_field('title_left'), $allowed_tags);
$descr_left     = wp_kses(get_field('descr_left'), $allowed_tags);
$image_left     = esc_url(get_field('image_left'));

$title_right    = wp_kses(get_field('title_right'), $allowed_tags);
$elements_right = get_field('elements_right'); // icon, text

$quote          = wp_kses(get_field('quote'), $allowed_tags);
$text_bottom    = wp_kses(get_field('text_bottom'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="rules">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="rules__inner section__inner">
        <div class="rules__fragment">
          <div class="rules__block">
            <?php if($title): ?><h3 class="rules__title section__title"><?= $title; ?></h3><?php endif; ?>
            <?php if($image): ?><img src="<?= $image; ?>" alt="" class="rules__block-img" /><?php endif; ?>
            <?php if($descr): ?><p class="rules__descr section__descr"><?= $descr; ?></p><?php endif; ?>
          </div>
          <?php if(false): ?><img src="<?= $image; ?>" alt="" class="rules__img" /><?php endif; ?>
        </div>
        <div class="rules__options">
          <div class="rules__options-col1">
            <?php if($title_left): ?><h2 class="rules__options-title"><?= $title_left; ?></h2><?php endif; ?>
            <?php if($descr_left): ?><p class="rules__options-text"><?= $descr_left; ?></p><?php endif; ?>
            <?php if($image_left): ?><img src="<?= $image_left; ?>" alt="" class="rules__options-img" /><?php endif; ?>
          </div>
          <div class="rules__options-col2">
            <?php if($title_right): ?><p class="rules__options-descr"><?= $title_right; ?></p><?php endif; ?>
            <div class="rules__options-list">
              <?php if( have_rows('elements_right') ): while ( have_rows('elements_right') ): the_row(); ?>
                <div class="rules__options-item">
                  <?php if(get_sub_field('icon')): ?><img src="<?= get_sub_field('icon'); ?>" alt="" class="rules__options-item-img" /><?php endif; ?>
                  <?php if(get_sub_field('text')): ?><p class="rules__options-item-text"><?= get_sub_field('text'); ?></p><?php endif; ?>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
        <?php if($quote): ?><div class="divider__inner"><p class="divider__text"><?= $quote; ?></p></div><?php endif; ?>
        <?php if($text_bottom): ?><div class="rules__aftertext"><p><?= $text_bottom; ?></p></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
