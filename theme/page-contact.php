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
  <div class="contact_lead">
    <img src="../wp-content/themes/theme/img/common/header_logo.png" alt="株式会社河合商店" width="470" height="112">
    <div class="contact_lead--number">
      <p>TEL：0568-48-0600</p>
      <p>FAX：0568-48-0601</p>
    </div>
    <p>以下項目にご記入いただき送信してください。お急ぎの場合は必ずお電話でご連絡ください。</p>
  </div>
  <?php echo do_shortcode('[contact-form-7 id="2568f9b" title="お問い合わせ" html_class="h-adr"]'); ?>
  <section class="top_about contact_catch">
    <div class="contact_catch--inner">
      <div>
        <h2 class="ttl_sec">
          <div class="js_target">
            <p>R</p>
            <p>E</p>
            <p>C</p>
            <p>R</p>
            <p>U</p>
            <p>I</p>
            <p>T</p>
            <p>.</p>
          </div>
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_driver.png" alt="ドライバー求人サイト ドラEVER" width="191" height="66">
        <a href="https://doraever.jp/company/1252536">
          採用情報をドラEVERで見る
          <svg class="icon-arrow" width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M27 1L32 6L27 11" stroke="currentColor" />
            <path d="M0 6L32 6" stroke="currentColor" />
          </svg>
        </a>
      </div>
      <div class="contact_catch--img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact/img_catch.png" alt="" width="503" height="202">
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>