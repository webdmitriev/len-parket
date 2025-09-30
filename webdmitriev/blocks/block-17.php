<?php
/**
 * Conference - Block
 */

$block_path = 'block-17';
$gutenberg_title = 'Block - 17';

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

$text     = wp_kses(get_field('text'), $allowed_tags);
$link     = esc_url(get_field('link'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="ways">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="ways__inner section__inner">
        <h2 class="ways__title section__title"><?php the_field('ways_title'); ?></h2>
        <p class="ways__subtitle section__descr"><?php the_field('ways_subtitle'); ?></p>
        <ul class="ways__list">
          <?php if (get_field('ways_list')) : ?>
            <?php while (has_sub_field('ways_list')) : ?>
              <li class="ways__item">
                <img src="<?php the_sub_field('ways_item-img'); ?>" alt="" class="ways__item-img">
                <p class="ways__item-title"><?php the_sub_field('ways_item-title'); ?></p>
                <p class="ways__item-text"><?php the_sub_field('ways_item-text'); ?></p>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
