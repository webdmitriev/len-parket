<?php
/**
 * Conference - Block
 */

$block_path = 'block-07';
$gutenberg_title = 'Block - 07';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'a'    => array(
    'href' => array(),
  ),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$block_id   = wp_kses(get_field('block_id'), $allowed_tags);
$block_bgc  = get_field('block_bgc') ? 'background-color:' . get_field('block_bgc') : false;

$title      = wp_kses(get_field('title'), $allowed_tags);
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$text       = wp_kses(get_field('text'), $allowed_tags);
$elements   = get_field('elements'); // image, title, text
$divider    = wp_kses(get_field('divider'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="comparison">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="comparison__inner section__inner">
        <?php if($title): ?><h3 class="comparison__title section__title"><?= $title; ?></h3><?php endif; ?>
        <?php if($descr): ?><p class="comparison__descr section__descr"><?= $descr; ?></p><?php endif; ?>

        <ul class="comparison__list">
          <?php if( have_rows('elements') ) : while ( have_rows('elements') ) : the_row(); ?>
            <li class="comparison__item">
              <img src="<?php the_sub_field('image'); ?>" alt="" class="comparison__item-img">
              <p class="comparison__item-title"><?php the_sub_field('title'); ?></p>
              <p class="comparison__item-text"><?php the_sub_field('text'); ?></p>
            </li>
          <?php endwhile; endif; ?>
        </ul>

        <?php if($text): ?><p class="comparison__text"><?= $text; ?></p><?php endif; ?>
        <?php if($divider): ?><div class="divider__inner"><p class="divider__text"><?= $divider; ?></p></div><?php endif; ?>

      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
