<?php
/**
 * Conference - Block
 */

$block_path = 'block-02-01';
$gutenberg_title = 'Block - 02-01';

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
$sub_title    = wp_kses(get_field('sub_title'), $allowed_tags);

$title_block  = wp_kses(get_field('title_block'), $allowed_tags);
$descr_block  = wp_kses(get_field('descr_block'), $allowed_tags);
$image_block  = esc_url(get_field('image_block'));

$pd_pros_title  = wp_kses(get_field('pd_pros_title'), $allowed_tags);
$pd_pros        = get_field('pd_pros'); // text

$pd_cons_title  = wp_kses(get_field('pd_cons_title'), $allowed_tags);
$pd_cons        = get_field('pd_cons'); // text

?>

<!-- <?= $block_path; ?> (start) -->
<section class="parket">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="parket__inner">
        <?php if($title): ?><h2 class="parket__title section__title"><?= $title; ?></h2><?php endif; ?>
        <?php if($sub_title): ?><p class="parket__subtitle"><?= $sub_title; ?></p><?php endif; ?>

        <div class="parket__text-row">
          <div class="parket__block">
            <?php if($title_block): ?><p class="parket__text-title"><?= $title_block; ?></p><?php endif; ?>
            <?php if($descr_block): ?><div class="parket__text"><?= $descr_block; ?></div><?php endif; ?>
          </div>
          <?php if($image_block): ?><img src="<?= $image_block; ?>" class="parket__img" /><?php endif; ?>
        </div>

        <div class="parket__pros-cons">
          <?php if (have_rows('pd_pros')): ?>
            <div class="parket__col parket__col-pros">
              <?php if($pd_pros_title): ?><p class="parket__col-title"><?= $pd_pros_title; ?></p><?php endif; ?>
              <ul class="parket__col-list">
                <?php while (have_rows('pd_pros')): the_row(); ?>
                  <li class="parket__col-item"><?php the_sub_field('text'); ?></li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php if (have_rows('pd_cons')): ?>
            <div class="parket__col parket__col-cons">
              <?php if($pd_cons_title): ?><p class="parket__col-title"><?= $pd_cons_title; ?></p><?php endif; ?>
              <ul class="parket__col-list">
                <?php while (have_rows('pd_cons')): the_row(); ?>
                  <li class="parket__col-item"><?php the_sub_field('text'); ?></li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
