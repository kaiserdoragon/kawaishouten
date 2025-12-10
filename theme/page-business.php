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

  <section class="business_concept">
    <div class="container">
      <div class="business_concept--inner">
        <div class="business_concept--content">
          <h2 class="ttl_sec">
            <span>私達のコンセプト</span>
            <div class="js_target">
              <p>W</p>
              <p>h</p>
              <p>a</p>
              <p>t</p>
              <p>W</p>
              <p>e</p>
              <p>B</p>
              <p>e</p>
              <p>l</p>
              <p>i</p>
              <p>e</p>
              <p>v</p>
              <p>e</p>
              <p>.</p>
            </div>
          </h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_concept.jpg" alt="" width="658" height="612" class="business_concept--img_sp">
          <p class="business_concept--lead">私たちが大切にする<br class="is-hidden_pc"><span>4</span>つの価値観</p>
          <ul>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/img/business/values_01.png" alt="" width="127" height="127"></li>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/img/business/values_02.png" alt="" width="127" height="127"></li>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/img/business/values_03.png" alt="" width="127" height="127"></li>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/img/business/values_04.png" alt="" width="127" height="127"></li>
          </ul>
          <strong>できるを活かし、<br class="is-hidden_pc">連携の力で約束に応える。</strong>
          <p class="business_concept--txt">
            株式会社河合商店は、社員一人ひとりの個性とチームワークを大切に、東海エリアを中心に青果物・一般貨物の地場〜中距離配送を行う運送会社です。肩書より信頼、役職より現場。互いの「できる」を持ち寄って、日々の仕事に誠実さと誇りを込めています。「何のために働くのか」。私たちは、社員それぞれが働く意味を見つけられる場所でありたいと考えています。 小さな現場の積み重ねが、地域の“当たり前”を支えている。その実感を、チーム全員で分かち合える会社へ。お客様の「当たり前」を支えるために、安全最優先・品質第一で日々の輸送に取り組んでいます。
          </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_concept.jpg" alt="" width="658" height="612" class="business_concept--img_pc">
      </div>
    </div>
  </section>

  <section class="business_possible">
    <div class="container">
      <span>私達ができること</span>
      <h2 class="ttl_sec">
        <div class="js_target">
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_o_1.svg" alt="O" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_n_1.svg" alt="n" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_t_1.svg" alt="T" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_i.svg" alt="i" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_m_1.svg" alt="m" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_e_1.svg" alt="e" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_dot_1.svg" alt="" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_o_2.svg" alt="O" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_n_2.svg" alt="n" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_t_2.svg" alt="T" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_e_2.svg" alt="e" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_m_2.svg" alt="m" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_p.svg" alt="p" width="" height="">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/txt_dot_2.svg" alt="" width="" height="">
          </p>
        </div>
      </h2>
      <p class="business_possible--lead">青果・食品に強い。<br>時間と温度にこだわる配送。</p>
      <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/business/service01.png" alt="" width="174" height="173"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/business/service02.png" alt="" width="174" height="173"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/business/service03.png" alt="" width="174" height="173"></li>
      </ul>
      <p class="business_possible--train">車両：<br class="is-hidden_pc">ウィング車／冷蔵車／保冷車（計7台）<br class="is-hidden_pc"><img src="<?php echo get_template_directory_uri(); ?>/img/business/img_parallelogram.png" alt="" width="60" height="30"></p>

      <table>
        <tr>
          <th>対象/用途</th>
          <td>市場・センター／企業間B2B</td>
        </tr>
        <tr>
          <th>エリア・時間帯</th>
          <td>東海地場／関東・関西中距離、夜間納品可</td>
        </tr>
        <tr>
          <th>温度帯</th>
          <td>冷蔵０〜１０℃／保冷</td>
        </tr>
        <tr>
          <th>積付け形態</th>
          <td>手積み／パレット／フォークリフト</td>
        </tr>
        <tr>
          <th>受付形態</th>
          <td>定期／スポット／チャーター</td>
        </tr>
      </table>
      <ol class="business_possible--list">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/catch_01.png" alt="" width="320" height="220">
          <dl>
            <dt>市場配送（定期便）</dt>
            <dd>東海エリアの市場・大手スーパー向けに定期ルートで安定運行。発注リズムに合わせて配車・時刻管理を行い、遅配ゼロを目標に運行管理。</dd>
          </dl>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/catch_02.png" alt="" width="320" height="220">
          <dl>
            <dt>一般貨物配送（BtoB）</dt>
            <dd>大手運送会社等との連携を含む企業間配送。雑貨・工業製品など幅広い品目に対応。手積み／パレット輸送／フォークリフトに対応。</dd>
          </dl>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/catch_03.png" alt="" width="320" height="220">
          <dl>
            <dt>産地便（関東・関西）</dt>
            <dd>産地〜市場・センター間の中距離輸送。青果物など鮮度重視の荷扱いで、納品時間・温度帯の指定に柔軟対応。</dd>
          </dl>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/catch_04.png" alt="" width="320" height="220">
          <dl>
            <dt>地場集荷</dt>
            <dd>名古屋近郊を中心に集荷→仕分け→納品をワンストップ。スポット／チャーターのご相談も可能。</dd>
          </dl>
        </li>
      </ol>
    </div>
  </section>

  <section class="top_business business_safety">
    <div class="container">
      <h2>品質・安全・法令遵守</h2>
      <p>
        河合商店は、安全・衛生・法令遵守を「空気のように当たり前なもの」として、日々の現場に根づかせます。事故を起こさない、品質を落とさない、約束の時間を守る――その“当たり前”は偶然では生まれません。私たちは、ルールと仕組みを整え、記録し、振り返り、改善を繰り返すことで、お客さまの信頼と食の安心を運び続けます。現場の一人ひとりが同じ基準で判断し、迷わず正しく動けるよう、リスクを見える化し、温度や衛生状態を数値で管理し、運行状況をリアルタイムで共有。出庫前の体調・酒気帯びチェックから、積み込み・輸送・納品後の清掃まで、すべてを手順化しています。そしてその基準を、継続的な教育とテクノロジーでアップデートし続けます。
      </p>
      <ol>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_quality_01.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>運行情報システム／<br class="is-hidden_pc">管理システムの導入</dt>
            <dd>ドラEVER「運SOUL」を活用して、車両管理及び乗務員の管理の一元化アプリを利用して車両の運行状況、貨物追跡等 正確且つ安全な運行管理を実施しています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_quality_02.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>庫内温度監視</dt>
            <dd>冷凍冷蔵車には、庫内温度監視システム「おんどとり」を装備して生鮮食料品などの輸送の温度管理をしています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_quality_03.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>アルコール検査</dt>
            <dd>運転者にアルコールチェッカーを使用し始業前、始業後にアルコール検査を実施しています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/img_quality_04.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>教育プログラム</dt>
            <dd>運行管理者、整備管理者による、定期的な社内教育に取り組んでいます。初任者運転車講習、運行管理者基礎講習 運転者への適性診断の実施</dd>
          </dl>
        </li>
      </ol>
    </div>
  </section>

  <section class="business_days">
    <h2 class="ttl_sec">
      <span class="business_days--txt">河合商店の日々</span>
      <div class="js_target is-hidden_sp">
        <p>L</p>
        <p>i</p>
        <p>f</p>
        <p>e</p>
        <p>a</p>
        <p>t</p>
        <p>K</p>
        <p>a</p>
        <p>w</p>
        <p>a</p>
        <p>i</p>
        <p>S</p>
        <p>h</p>
        <p>o</p>
        <p>t</p>
        <p>e</p>
        <p>n</p>
        <p>.</p>
      </div>
      <div class="js_target is-hidden_pc">
        <p>L</p>
        <p>i</p>
        <p>f</p>
        <p>e</p>
        <p>a</p>
        <p>t</p>
      </div>
      <div class="js_target_lower is-hidden_pc">
        <p>K</p>
        <p>a</p>
        <p>w</p>
        <p>a</p>
        <p>i</p>
        <p>S</p>
        <p>h</p>
        <p>o</p>
        <p>t</p>
        <p>e</p>
        <p>n</p>
      </div>
    </h2>
    <div class="swiper_business--wrap">
      <div class="swiper_business swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide01.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide02.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide03.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide04.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide05.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide06.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide07.png" alt="" width="450" height="337">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/slide08.png" alt="" width="450" height="337">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

</main>

<?php get_footer(); ?>