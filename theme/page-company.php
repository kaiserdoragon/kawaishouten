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
  <section class="top_business company_message">
    <h2 class="ttl_sec">
      <span>代表挨拶</span>
      <div class="js_target">
        <p>M</p>
        <p>e</p>
        <p>s</p>
        <p>s</p>
        <p>a</p>
        <p>g</p>
        <p>e</p>
        <p>.</p>
      </div>
    </h2>
    <div class="company_message--inner">
      <div class="company_message--contents">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/img_company.png" alt="" width="384" height="327" alt="">
        <p>
          物流は、単にモノを運ぶ仕事ではありません。私たちがお届けするのは、お客さまが積み重ねてこられた信頼、食の安全、そして地域の日常です。その価値を、約束の時刻に、約束の温度で確実に届ける——それが河合商店の使命です。安全・衛生・法令遵守を徹底し、現場から信頼を運ぶ物流会社であり続けます。変わらない基準で、変わらない安心を。河合商店は、今日も実直に、丁寧に、価値ある「当たり前」を積み重ねてまいります。<br>今後とも変わらぬご支援を賜りますよう、心よりお願い申し上げます。
          <span>代表取締役　河合祐樹</span>
        </p>
      </div>
    </div>
  </section>

  <section class="business_days company_overview">
    <h2 class="ttl_sec">
      <span class="business_days--txt">会社概要</span>
      <div class="js_target is-hidden_sp">
        <p>C</p>
        <p>o</p>
        <p>m</p>
        <p>p</p>
        <p>a</p>
        <p>n</p>
        <p>y</p>
        <p>O</p>
        <p>v</p>
        <p>e</p>
        <p>r</p>
        <p>v</p>
        <p>i</p>
        <p>e</p>
        <p>w</p>
      </div>
      <div class="js_target is-hidden_pc">
        <p>C</p>
        <p>o</p>
        <p>m</p>
        <p>p</p>
        <p>a</p>
        <p>n</p>
        <p>y</p>
      </div>
      <div class="js_target_lower is-hidden_pc">
        <p>O</p>
        <p>v</p>
        <p>e</p>
        <p>r</p>
        <p>v</p>
        <p>i</p>
        <p>e</p>
        <p>w</p>
      </div>
    </h2>
    <div class="company_overview--info">
      <dl>
        <div>
          <dt>会社</dt>
          <dd>株式会社河合商店</dd>
        </div>
        <div>
          <dt>代表</dt>
          <dd>代表取締役 河合祐樹</dd>
        </div>
        <div>
          <dt>TEL</dt>
          <dd>0568-48-0600</dd>
        </div>
        <div>
          <dt>所在地</dt>
          <dd>
            〒480-0202<br>
            愛知県西春日井郡豊山町<br>
            豊場字幸田162番地</dd>
        </div>
        <div>
          <dt>FAX</dt>
          <dd>0568-48-0601</dd>
        </div>
        <div>
          <dt>資本金</dt>
          <dd>500万</dd>
        </div>
        <div>
          <dt>従業員数</dt>
          <dd>
            12名<br>
            運行管理者／1名　<br class="is-hidden_pc">中部愛貨物第34664号<br>
            整備管理者／2名　<br class="is-hidden_pc">中部愛整管第6915号、<br class="is-hidden_pc">6824号<br>
          </dd>
        </div>
        <div>
          <dt>事業内容</dt>
          <dd>
            一般貨物自動車運送始業／<br class="is-hidden_pc">中部自貨第245号　<br class="is-hidden_pc">事業者番号：560025605<br>
            第一種貨物利用運送事業／<br class="is-hidden_pc">中運自貨第272号　<br class="is-hidden_pc">事業者番号：0504030
          </dd>
        </div>
      </dl>
    </div>
    <div class="container company_overview--history">
      <h3>沿革</h3>
      <dl>
        <dt>令和2年2月</dt>
        <dd>運送会社（利用運送）河合商会を創立</dd>
        <dt>令和5年2月</dt>
        <dd>河合商会から株式会社河合商店へ法人化</dd>
        <dt>令和7年5月</dt>
        <dd>名古屋市北区から西春日井郡豊山町幸田へ本社移転</dd>
        <dt>令和7年8月</dt>
        <dd>春日井市に営業所（車両塗装・板金修理・仮装仲介施工）を開設</dd>
      </dl>
    </div>
    <div class="company_overview--gmap">
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1629.193707860087!2d136.90513165059318!3d35.24661646610286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x60037300604005bd%3A0xf7ba0f838ecbbcab!2z5qCq5byP5Lya56S-5rKz5ZCI5ZWG5bqX!5e0!3m2!1sja!2sjp!4v1761519533843!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>