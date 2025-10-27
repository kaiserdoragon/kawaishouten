<?php get_header(); ?>
<div class="eyecatch">
  <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  <div class="page_ttl">
    <h2><?php the_title(); ?></h2>

    <?php
    // 現在ページのスラッグ取得
    $slug = get_post_field('post_name', get_queried_object_id());

    // 先頭1文字だけ大文字（PHP 8.4+ の mb_ucfirst があれば使用）
    if (function_exists('mb_ucfirst')) {
      $slug_cap = mb_ucfirst($slug, 'UTF-8');
    } else {
      $first = mb_strtoupper(mb_substr($slug, 0, 1, 'UTF-8'), 'UTF-8');
      $rest  = mb_substr($slug, 1, null, 'UTF-8');
      $slug_cap = $first . $rest;
    }

    // 末尾に「.」を1つだけ付ける
    $slug_cap = rtrim($slug_cap, '.') . '.';

    // 出力：属性は esc_attr、テキストは esc_html でエスケープ
    printf(
      '<span>%s</span>',
      esc_html($slug_cap)
    );
    ?>
  </div>
</div>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<?php $slug_name = $post->post_name; ?>
<main class="<?php echo $slug_name; ?>_page">
  <div class="container">
    <p>会社概要</p>
    <section class="company_overview">
      <h3>沿革</h3>
      <div class="company_overview--gmap">
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1629.193707860087!2d136.90513165059318!3d35.24661646610286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037300604005bd%3A0xf7ba0f838ecbbcab!2z5qCq5byP5Lya56S-5rKz5ZCI5ZWG5bqX!5e0!3m2!1sja!2sjp!4v1761519533843!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>