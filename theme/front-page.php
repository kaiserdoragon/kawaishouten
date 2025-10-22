<?php get_header(); ?>
<main>
  <div class="top_mv">
    <h2 class="ttl_sec">
      <div class="txt_animation_underup">
        <p>信</p>
        <p>頼</p>
        <p>で</p>
        <p>走</p>
        <p>る</p>
        <p>。</p>
      </div>
      <div class="txt_animation_flow">
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
        <p class="loop_text">DRIVEN BY TRUST</p>
      </div>
    </h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv.jpg" alt="" width="1920" height="1025">
  </div>

  <section class="top_about">
    <div class="container">
      <div class="top_about--inner">
        <div>
          <h2 class="ttl_sec">
            <span>私達について。</span>
            <div class="js_target">
              <p>A</p>
              <p>b</p>
              <p>o</p>
              <p>u</p>
              <p>t</p>
              <p>　</p>
              <p>u</p>
              <p>s</p>
              <p>.</p>
            </div>
          </h2>
          <strong>個性や強みを尊重し、<br>助け合いとチームワークで未来を築く</strong>
          <p>
            私たちの原動力は「人」です。 <br>
            地域に根ざした物流サービスを通じて、人々の暮らしと産業を支える存在でありたいと考えています。<br>
            社員一人ひとりの力を尊重し、仲間と協力し合うことで、より良い環境とサービスを築いてきました。<br>
            これからも物流の現場から価値を創造し、お客様と地域社会の発展に貢献し続けてまいります。
          </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/about.png" alt="" width="547" height="456">
      </div>
      <a href="<?php echo esc_url(home_url('/about')); ?>">
        More
        <svg class="icon-arrow" width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M27 1L32 6L27 11" stroke="currentColor" />
          <path d="M0 6L32 6" stroke="currentColor" />
        </svg>
      </a>
    </div>
  </section>


  <section class="top_info">
    <div class="top_info--inner">
      <h2 class="top_info--ttl">
        <span>お知らせ</span>
        NEWS.
        <a href="<?php echo esc_url(home_url('/news')); ?>">MORE</a>
      </h2>
      <div class="top_info--contents">
        <?php
        $args = array(
          'posts_per_page' => 1,
          'post_type' => 'post', //postは通常の投稿機能
          'post_status' => 'publish'
        );
        $my_posts = get_posts($args);
        ?>
        <div class="top_info--thumbnail">
          <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <?php else: ?>
          <?php endif; ?>
        </div>
        <div class="top_info--list">
          <?php
          if (!empty($my_posts)) :
            foreach ($my_posts as $post): setup_postdata($post); ?>
              <a href="<?php the_permalink(); ?>">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <span class="top_info--time">
                  <?php the_time('Y年m月d日'); ?>
                </span>
                <p class="top_info--txt">
                  <?php echo strip_tags(get_the_excerpt()); ?>
                </p>
              </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // ← これが重要！
            ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <div class="top_scroll">
    <p>scroll</p>
    <img src="<?php echo get_template_directory_uri(); ?>/img/top/arrow_triple.svg" alt="" width="30" height="81">
  </div>

  <section class="top_business">
    <div class="container">
      <h2 class="ttl_sec">
        <span>企業取り組み</span>
        <div class="js_target">
          <p>B</p>
          <p>U</p>
          <p>S</p>
          <p>I</p>
          <p>N</p>
          <p>E</p>
          <p>S</p>
          <p>S</p>
          <p>.</p>
        </div>
      </h2>
      <p class="top_business--txt">
        当社は、東海エリアを中心とした市場配送（定期便）および一般貨物配送（久留米運送等）を基盤に、幅広い物流サービスを展開しています。さらに、関東・関西エリアへの産地便輸送や、地場エリアでの集荷業務にも対応し、地域と広域をつなぐ柔軟な輸送ネットワークを構築しています。取扱品目は、青果物をはじめとする生鮮品や一般貨物まで多岐にわたり、特に鮮度や品質が求められる青果物の輸送においては、確実で迅速な配送体制を整えています。私たちは「安全・安心・確実」をモットーに、物流を通じてお客様の事業活動を支えるとともに、地域社会の発展に貢献してまいります。
      </p>
      <ol>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/business01.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>運行情報システム<br>管理システムの導入</dt>
            <dd>そらEVER「運SOUL」を活用して、車両管理及び乗務員の管理の一元化アプリを利用して車両の運行状況、貨物追跡等 正確且つ安全な運行管理を実施しています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/business02.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>庫内温度監視</dt>
            <dd>冷凍冷蔵車には、庫内温度監視システム「おんどとり」を装備して生鮮食料品などの輸送の温度管理をしています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/business03.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>アルコール検査</dt>
            <dd>運転者にアルコールチェッカーを使用し始業前、始業後にアルコール検査を実施しています。</dd>
          </dl>
        </li>
        <li class="is_fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/business04.png" alt="" width="320" height="220" alt="">
          <dl>
            <dt>教育プログラム</dt>
            <dd>運行管理者、整備管理者による、定期的な社内教育に取り組んでいます。初任者運転車講習、運行管理者基礎講習 運転者への適性診断の実施</dd>
          </dl>
        </li>
      </ol>
      <a href="<?php echo esc_url(home_url('/about')); ?>">
        More
        <svg class="icon-arrow" width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M27 1L32 6L27 11" stroke="currentColor" />
          <path d="M0 6L32 6" stroke="currentColor" />
        </svg>
      </a>
    </div>
  </section>

  <section class="top_company">
    <div class="top_company--inner">
      <h2 class="ttl_sec">
        <div class="js_target ">
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_c.svg" alt="C" width="116" height="130">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_o.svg" alt="O" width="121" height="130">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_m.svg" alt="M" width="135" height="124">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_p.svg" alt="P" width="100" height="125">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_a.svg" alt="A" width="128" height="125">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_n.svg" alt="N" width="112" height="125">
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/txt_y.svg" alt="Y" width="123" height="125">
          </p>
          <p>O</p>
          <p>v</p>
          <p>e</p>
          <p>r</p>
          <p>V</p>
          <p>i</p>
          <p>e</p>
          <p>w</p>
          <p>.</p>
        </div>
        <span>企業紹介</span>
      </h2>
      <div class="top_company--contents">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/company.jpg" alt="株式会社河合商店" width="919" height="670">
        <div>
          <h3>お客様に信頼される会社を目指し、<br class="is-hidden_sp">日々の業務に真摯に取り組んでいます。</h3>
          <p>
            私たちは「安全・信頼・誠実」を基本理念とし、すべての業務においてお客様との信頼関係を大切にしています。日々の運行管理では法令遵守はもちろん、従業員一人ひとりの健康と意識向上にも力を入れています。<br>
            また、社員が安心して働ける職場環境づくりが、高品質なサービスの提供につながると考えています。教育制度の充実、健康管理の徹底、コミュニケーションの活性化など、「人」を大切にする運営を心掛けています。<br>
            「選ばれる企業」であり続けるため、誠実な姿勢を忘れず、一歩ずつ着実に前進してまいります。
          </p>
          <a href="<?php echo esc_url(home_url('/about')); ?>">
            More
            <svg class="icon-arrow" width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M27 1L32 6L27 11" stroke="currentColor" />
              <path d="M0 6L32 6" stroke="currentColor" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>



  <!-- <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div> -->
</main>
<?php get_footer(); ?>