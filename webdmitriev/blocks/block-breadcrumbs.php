<?php
/**
 * Conference - Block
 */

$block_path = 'block-breadcrumbs';
$gutenberg_title = 'Block - breadcrumbs';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'    => array(),
  'span'  => array(
    'class' => array(),
  )
);

$text     = wp_kses(get_field('text'), $allowed_tags);
$link     = esc_url(get_field('link'));
$bg_1920  = get_field('bg_1920') ? "background-image: url(" . esc_url(get_field('bg_1920')) . ")"  : false;

?>

<!-- <?= $block_path; ?> (start) -->
<section class="breadcrumbs-section">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenberg-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?> - (не редактируется)</div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="breadcrumbs">
        <a href="<?php echo get_home_url( null, '/' ); ?>">Циклевка паркета</a>
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" />
        <a href="<?php echo get_home_url( null, '/blog' ); ?>">Блог</a>
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" />
        <p class='current-page-bc'><?php the_title() ?></p>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
