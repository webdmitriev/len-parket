<?php
/**
 * Conference - Block
 */

$block_path = 'block-05';
$gutenberg_title = 'Block - 05';

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

$title        = wp_kses(get_field('title'), $allowed_tags);
$image        = esc_url(get_field('image'));
$descr        = wp_kses(get_field('descr'), $allowed_tags);

$title_blocks = wp_kses(get_field('title_blocks'), $allowed_tags);
$blocks       = get_field('blocks'); // title, size, descr, image
$text         = wp_kses(get_field('text'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="blog-kinds">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">

      <div class="blog-kinds__text-block">
        <?php if($image): ?><img src="<?= $image; ?>" class="blog-kinds__img" /><?php endif; ?>

        <div class="blog-kinds__info">
          <?php if($title): ?><div class="blog-kinds__title section__title"><?= $title; ?></div><?php endif; ?>
          <?php if($image): ?><img src="<?= $image; ?>" class="blog-kinds__img" /><?php endif; ?>
          <?php if($descr): ?><p class="blog-kinds__text"><?= $descr; ?></p><?php endif; ?>
        </div>
      </div>

      <?php if($title_blocks): ?><div class="blog-kinds__title section__title"><?= $title_blocks; ?></div><?php endif; ?>

      <div class="blog-kinds__row">
        <?php if( have_rows('blocks') ) : while ( have_rows('blocks') ) : the_row();
          $size =  get_sub_field('size');
        ?>
          <div class="blog-kinds__item <?= $size === 'big' ? 'big' : ''; ?>">
            <?php if(get_sub_field('image')): ?><img src="<?= get_sub_field('image'); ?>" class="blog-kinds__item-img"><?php endif; ?>
            <div class="blog-kinds__item-info">
              <?php if(get_sub_field('title')): ?><div class="blog-kinds__item-title <?= $size === 'big' ? 'big' : ''; ?>"><?= get_sub_field('title'); ?></div><?php endif; ?>
              <?php if(get_sub_field('descr')): ?><div class="blog-kinds__item-text"><?= get_sub_field('descr'); ?></div><?php endif; ?>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>

      <?php if($text): ?><div class="hero__addtext divider__inner"><?= $text; ?></div><?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
