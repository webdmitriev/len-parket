<?php
/**
 * Conference - Block
 */

$block_path = 'block-15';
$gutenberg_title = 'Block - 15';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'a'    => array(),
  'b'    => array(),
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$title        = wp_kses(get_field('title'), $allowed_tags);
$descr_01     = wp_kses(get_field('descr_01'), $allowed_tags);
$image_01     = esc_url(get_field('image_01'));

$descr_02     = wp_kses(get_field('descr_02'), $allowed_tags);
$image_02     = esc_url(get_field('image_02'));

$descr_03     = wp_kses(get_field('descr_03'), $allowed_tags);

$quote        = wp_kses(get_field('quote'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="choice">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="choice__inner section__inner">
        <h3 class="choice__title section__title"><?= $title; ?></h3>
        <div class="choice__frame">
          <div class="choice__block">
            <p><?= $descr_01; ?></p>
            <img src="<?= $image_01; ?>" alt="" class="choice__block-img-uneditable" />

            <p><?= $descr_02; ?></p>
            <img src="<?= $image_02; ?>" alt="" class="choice__block-img-editable">

            <p><?= $descr_03; ?></p>
            <div class="choice__contacts">
              <?php if (have_rows('social-links', 'option')): ?>
                <?php while (have_rows('social-links', 'option')): the_row(); ?>
                  <div class="link-btns" style="gap:10px">
                    <a href="https://api.whatsapp.com/send?phone=<?php the_sub_field('whatsapp-link'); ?>" class="link-btns__item"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-link.svg" alt="" class="link-btns__img"></a>
                    <a href="<?php the_sub_field('tg-link'); ?>" class="link-btns__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tg-link.svg" alt="" class="link-btns__img"></a>
                    <a href="mailto:<?php the_field("mail-address", "option"); ?>" class="link-btns__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mail-link.svg" alt="" class="link-btns__img"></a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if (have_rows('callback-block', 'option')): ?>
                <?php while (have_rows('callback-block', 'option')): the_row(); ?>
                  <div class="subinfo-text">
                    <p class="subinfo__text_small"><?php the_sub_field('callback__worktime'); ?></p>
                    <a href="tel:+7 (812) 920-30-34" class="subinfo__text_big">+7 (812) 920-30-34</a>
                    <a href="tel:<?php the_sub_field('callback__tel'); ?>" class="subinfo__text_big"><?php the_sub_field('callback__tel'); ?></a>
                    <a href="#!" class="subinfo__text_small subinfo__link modal-btn" data-modal="consultation">Заказать обратный звонок</a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="choice__block2">
            <img src="<?= $image_01; ?>" alt="" class="choice__block-img-uneditable">
            <img src="<?= $image_02; ?>" alt="" class="choice__block-img-editable">
          </div>
        </div>
        <div class="divider__inner">
          <p class="divider__text"><?= $quote; ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
