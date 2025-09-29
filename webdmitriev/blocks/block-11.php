<?php
/**
 * Conference - Block
 */

$block_path = 'block-11';
$gutenberg_title = 'Block - 11';

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
$posts      = get_field('posts'); // title, link, descr, image

?>

<!-- <?= $block_path; ?> (start) -->
<section class="services" style="padding-top: 0px">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><h3 class="services__title section__title"><?= $title; ?></h3><?php endif; ?>

      <div class="services__items">
        <?php if( have_rows('posts') ) : while ( have_rows('posts') ) : the_row(); ?>
          <a class="services__item" href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener">
            <img class="services__item-img" src="<?= get_sub_field('image') ?? $image_base64; ?>" alt="Ремонт паркета" />
            <?php if(get_sub_field('title')): ?><div class="services__item-title"><?= get_sub_field('title'); ?></div><?php endif; ?>
            <?php if(get_sub_field('descr')): ?><div class="services__item-descr"><?= get_sub_field('descr'); ?></div><?php endif; ?>
          </a>
        <?php endwhile; endif; ?>
      </div>

    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
