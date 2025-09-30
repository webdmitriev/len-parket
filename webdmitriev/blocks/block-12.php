<?php
/**
 * Conference - Block
 */

$block_path = 'block-12';
$gutenberg_title = 'Block - 12';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title      = wp_kses(get_field('title'), $allowed_tags);
$descr      = wp_kses(get_field('descr'), $allowed_tags);
$btn_text   = wp_kses(get_field('btn_text'), $allowed_tags);
$elements   = get_field('elements');
$image      = esc_url(get_field('image'));

?>

<!-- <?= $block_path; ?> (start) -->
<section class="first">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="first-wrapper">
        <div class="first-wrapper__block">
          <?php if($title): ?><p class="first__title main-title"><?= $title; ?></p><?php endif; ?>
          <?php if($image): ?><img src="<?= $image; ?>" alt="" class="first-wrapper__img a768_show" /><?php endif; ?>
          <?php if($descr): ?><p class="first__subtitle first-text"><?= $descr; ?></p><?php endif; ?>
          <?php if($btn_text): ?><button type="button" class="first__btn green-btn calc-btn modal-btn" data-modal="calculation"><img src="<?php echo get_template_directory_uri(); ?>/img/calc-btn.svg" alt=""><?= $btn_text; ?></button><?php endif; ?>

          <div class="first__cards">
            <?php if( have_rows('elements') ): while ( have_rows('elements') ): the_row(); ?>
              <div class="first__card">
                <img src="<?= get_sub_field('icon'); ?>" alt="" />
                <p class="first-text first__card-text"><?= get_sub_field('descr'); ?></p>
              </div>
            <?php endwhile; endif; ?>
          </div>

        </div>
        <?php if($image): ?><div class="first-wrapper__block a768_hidden"><img src="<?= $image; ?>" alt="" class="first-wrapper__img" /></div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
