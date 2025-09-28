<?php
/**
 * Conference - Block
 */

$block_path = 'block-03';
$gutenberg_title = 'Block - 03';

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
$image      = esc_url(get_field('image'));
$descr      = wp_kses(get_field('descr'), $allowed_tags);

$btn_text   = wp_kses(get_field('btn_text'), $allowed_tags);
$btn_class  = wp_kses(get_field('btn_class'), $allowed_tags);

?>

<!-- <?= $block_path; ?> (start) -->
<section class="laminat">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="laminat__inner">
        <?php if($title): ?><h2 class="laminat__title section__title"><?= $title; ?></h2><?php endif; ?>
        <div class="laminat__text-row">
          <?php if($image): ?><img src="<?= $image; ?>" class="laminat__img" /><?php endif; ?>
          <?php if($descr): ?><div class="laminat__text"><?= $descr; ?></div><?php endif; ?>
        </div>

        <?php
        // Получаем поля
        $pros = get_field('l_pros');
        $cons = get_field('l_cons');

        // Проверяем, есть ли что-то для вывода
        if (($pros && array_filter($pros)) || ($cons && have_rows('l_cons'))): ?>
          <div class="laminat__proscons">

            <?php if ($pros && array_filter($pros)): ?>
              <div class="laminat__pros">
                <?php if (isset($pros['title']) && $pros['title']): ?>
                  <p class="laminat__proscons__title"><?= esc_html($pros['title']); ?></p>
                <?php endif; ?>
                <div class="laminat__pros-row">
                  <?php for ($i = 1; $i <= 4; $i++):
                    if (!empty($pros['text' . $i])): ?>
                      <div class="laminat__pros-item <?= $i === 1 ? 'green' : ''; ?>">
                        <?= esc_html($pros['text' . $i]); ?>
                      </div>
                  <?php endif;
                  endfor; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php if ($cons && have_rows('l_cons')): ?>
              <div class="laminat__cons">
                <?php if (isset($cons['title']) && $cons['title']): ?>
                  <p class="laminat__proscons__title"><?= esc_html($cons['title']); ?></p>
                <?php endif; ?>
                <div class="laminat__cons-row">
                  <?php while (have_rows('l_cons')): the_row();
                    $text = get_sub_field('text');
                    if ($text): ?>
                      <div class="laminat__cons-item">
                        <?= esc_html($text); ?>
                      </div>
                  <?php endif;
                  endwhile; ?>
                </div>
                <?php $img = get_sub_field('l_cons-img');
                if ($img): ?>
                  <img src="<?= esc_url($img); ?>" class="laminat__cons-img">
                <?php endif; ?>
              </div>
            <?php endif; ?>

          </div>
        <?php endif; ?>

        <?php $addtext = get_sub_field('l_addtext'); ?>
        <?php if (!empty($addtext)): ?>
          <div class="laminat__addtext divider__inner">
            <?= wp_kses_post($addtext); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
