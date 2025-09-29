<?php
/**
 * Conference - Block
 */

$block_path = 'block-08';
$gutenberg_title = 'Block - 08';

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
$elements   = get_field('elements'); // properties, varnish, oil

$numAttr    = rand(1, 100000);

?>

<?php if( !is_admin() ) : ?>
  <style>
    .table-chars[data-h="<?= $numAttr; ?>"] h2 {
      text-align: center;
      color: #201E1D;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
      margin-top: 20px;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] thead {
      background: #92C75D;
      color: #fff;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] th,
    .table-chars[data-h="<?= $numAttr; ?>"] td {
      font-size: 16px;
      text-align: left;
      border-bottom: 1px solid #e0e0e0;
      padding: 14px 18px;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] thead tr th {
      font-size: 20px;
      color: #fff;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] th {
      font-size: 16px;
      font-weight: bold;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] tr:hover {
      background-color: #f1f8f4;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] td:first-child {
      font-size: 16px;
      font-weight: bold;
      color: #92C75D;
      line-height: normal;
      width: 25%;
    }

    .table-chars[data-h="<?= $numAttr; ?>"] thead tr:first-child:hover {
      background-color: #92C75D;
    }

    @media(max-width: 600px) {
      .table-chars[data-h="<?= $numAttr; ?>"] thead tr th {
        font-size: 18px;
      }

      .table-chars[data-h="<?= $numAttr; ?>"] td:first-child {
        font-size: 14px;
      }

      .table-chars[data-h="<?= $numAttr; ?>"] th,
      .table-chars[data-h="<?= $numAttr; ?>"] td {
        padding: 16px;
      }
    }

    @media(max-width: 600px) {
      .table-chars[data-h="<?= $numAttr; ?>"] thead tr th {
        font-size: 14px;
      }

      .table-chars[data-h="<?= $numAttr; ?>"] td:first-child {
        font-size: 13px;
      }

      .table-chars[data-h="<?= $numAttr; ?>"] th,
      .table-chars[data-h="<?= $numAttr; ?>"] td {
        font-size: 13px;
        padding: 8px;
      }
    }
  </style>
<?php endif; ?>

<!-- <?= $block_path; ?> (start) -->
<section class="table-chars" data-h="<?= $numAttr; ?>">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><h2 class="table-chars__title section__title"><?= $title; ?></h2><?php endif; ?>
      <table>
        <thead>
          <tr>
            <th>Свойства</th>
            <th>Лак</th>
            <th>Масло</th>
          </tr>
        </thead>
        <tbody>
          <?php if( have_rows('elements') ) : while ( have_rows('elements') ) : the_row(); ?>
            <tr>
              <td><?= get_sub_field('properties'); ?></td>
              <td><?= get_sub_field('varnish'); ?></td>
              <td><?= get_sub_field('oil'); ?></td>
            </tr>
          <?php endwhile; endif; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->
