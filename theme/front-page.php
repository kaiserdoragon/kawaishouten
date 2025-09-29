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
        <a href="#">MORE</a>
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
        <dl class="top_info--list">
          <?php foreach ($my_posts as $post): setup_postdata($post); ?>
            <dt>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </dt>
            <dd class="top_info--time">
              <span class="top_info--time">
                <?php the_time('Y年m月d日'); ?>
              </span>
            </dd>
            <dd class="top_info--txt"><?php echo get_the_excerpt(); ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php wp_reset_postdata(); ?>
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
        <div class="js_target">
          <p>
            <svg width="117" height="131" viewBox="0 0 117 131" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M84.4287 46.2422C81.4502 32.6191 73.5645 25.8076 60.7715 25.8076C52.959 25.8076 46.6113 28.3223 41.7285 33.3516C38.8965 36.2812 36.8213 39.5527 35.5029 43.166C33.0615 49.8066 31.8408 57.082 31.8408 64.9922C31.8408 72.4141 33.0127 79.4453 35.3564 86.0859C37.6514 92.4336 41.46 97.1943 46.7822 100.368C51.1279 103.005 56.0107 104.323 61.4307 104.323C66.8018 104.323 71.5137 102.98 75.5664 100.295C79.2773 97.8047 82.0117 94.4111 83.7695 90.1143C84.502 88.2588 85.0879 85.5977 85.5273 82.1309L116.875 86.7451C115.508 92.7998 113.994 97.707 112.334 101.467C108.184 110.646 102.202 117.678 94.3896 122.561C90.4834 124.953 85.8936 126.833 80.6201 128.2C74.8096 129.714 68.7305 130.471 62.3828 130.471C53.2031 130.471 44.5117 128.957 36.3086 125.93C24.9316 121.73 16.0693 114.138 9.72168 103.151C6.49902 97.585 4.05762 90.9443 2.39746 83.2295C1.17676 77.3213 0.566406 71.2666 0.566406 65.0654C0.566406 55.2998 2.10449 45.998 5.18066 37.1602C8.0127 28.957 12.5293 21.8281 18.7305 15.7734C23.8574 10.6953 29.8389 6.91113 36.6748 4.4209C44.585 1.54004 52.959 0.0996094 61.7969 0.0996094C81.3281 0.0996094 96.0742 6.64258 106.035 19.7285C109.355 24.0254 111.846 28.6396 113.506 33.5713C114.043 35.1826 114.629 37.4043 115.264 40.2363L84.4287 46.2422Z" fill="url(#paint0_linear_3_312)" />
              <defs>
                <linearGradient id="paint0_linear_3_312" x1="-4.99999" y1="-40.8158" x2="802.828" y2="387.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>
          </p>
          <p>
            <svg width="122" height="131" viewBox="0 0 122 131" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M61.7988 0.0996094C73.8105 0.0996094 84.4551 2.90723 93.7324 8.52246C102.717 13.9424 109.528 21.3643 114.167 30.7881C119.001 40.6514 121.418 51.9551 121.418 64.6992C121.418 75.3926 119.538 85.5 115.778 95.0215C112.946 102.199 108.723 108.596 103.107 114.211C92.1699 125.1 78.0586 130.544 60.7734 130.544C51.8379 130.544 43.3662 128.933 35.3584 125.71C24.6162 121.413 16.1445 114.113 9.94336 103.811C6.57422 98.2441 4.03516 91.6279 2.32617 83.9619C0.958984 77.9072 0.275391 71.6816 0.275391 65.2852C0.275391 54.4941 2.13086 44.3623 5.8418 34.8896C8.52734 27.9561 12.6045 21.8037 18.0732 16.4326C29.1084 5.54395 43.6836 0.0996094 61.7988 0.0996094ZM60.4805 25.8809C53.0586 25.8809 46.7842 28.4199 41.6572 33.498C38.6299 36.5254 36.4082 39.9434 34.9922 43.752C32.5508 50.3926 31.3301 57.4971 31.3301 65.0654C31.3301 72.7314 32.5752 79.8848 35.0654 86.5254C36.4814 90.334 38.752 93.8008 41.877 96.9258C46.8574 102.004 53.2051 104.543 60.9199 104.543C68.5371 104.543 74.7871 102.053 79.6699 97.0723C82.6973 94.0449 84.9678 90.6025 86.4814 86.7451C88.9717 80.1045 90.2168 73.0244 90.2168 65.5049C90.2168 57.5459 88.9717 50.2217 86.4814 43.5322C84.333 37.624 80.5732 33.0342 75.2021 29.7627C71.0518 27.1748 66.1445 25.8809 60.4805 25.8809Z" fill="url(#paint0_linear_3_311)" />
              <defs>
                <linearGradient id="paint0_linear_3_311" x1="-132" y1="-40.8157" x2="675.828" y2="387.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>

          </p>
          <p>
            <svg width="136" height="126" viewBox="0 0 136 126" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M54.8516 125.614C54.2168 121.073 52.0928 113.676 48.4795 103.422L34.6367 63.5049C33.2695 59.3545 31.5605 54.0566 29.5098 47.6113C28.4355 44.1445 27.6299 41.6543 27.0928 40.1406C28.1182 52.0059 28.6064 61.918 28.5576 69.877V102.323C28.5576 112.577 28.9727 120.341 29.8027 125.614H0.286133C1.06738 119.95 1.48242 112.187 1.53125 102.323V24.1738C1.43359 13.7734 1.01855 5.98535 0.286133 0.80957H39.9102C40.6426 6.22949 42.5225 13.2852 45.5498 21.9766L68.0352 86.6494L90.374 21.9766C93.499 12.9922 95.3789 5.93652 96.0137 0.80957H135.711C134.881 7.05957 134.466 14.8477 134.466 24.1738V102.323C134.466 112.968 134.881 120.731 135.711 125.614H106.194C106.976 120.048 107.366 112.284 107.366 102.323V69.7305C107.61 61.7715 108.074 51.8594 108.758 39.9941C106.316 48.8809 104.046 56.376 101.946 62.4795L87.4443 103.495C83.6357 114.579 81.5117 121.952 81.0723 125.614H54.8516Z" fill="url(#paint0_linear_3_310)" />
              <defs>
                <linearGradient id="paint0_linear_3_310" x1="-268" y1="-42.8157" x2="539.828" y2="385.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>

          </p>
          <p>
            <svg width="102" height="126" viewBox="0 0 102 126" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.387695 125.614C1.16895 120.097 1.58398 112.675 1.63281 103.349V22.3428C1.58398 13.7979 1.16895 6.47363 0.387695 0.370117C6.54004 0.663086 13.9131 0.80957 22.5068 0.80957H55.3193C71.1396 0.80957 83.0781 4.78906 91.1348 12.748C97.9219 19.5352 101.315 29.0078 101.315 41.166C101.315 53.959 97.5801 64.0664 90.1094 71.4883C81.8574 79.6914 70.2119 83.793 55.1729 83.793H31.3691V102.909C31.418 112.577 31.833 120.146 32.6143 125.614H0.387695ZM31.3691 58.3047H53.708C59.0791 58.3047 63.2295 56.8643 66.1592 53.9834C69.0889 51.2002 70.5537 47.2207 70.5537 42.0449C70.5537 37.1621 69.2109 33.3535 66.5254 30.6191C63.7422 27.7383 59.4697 26.2979 53.708 26.2979H31.3691V58.3047Z" fill="url(#paint0_linear_3_309)" />
              <defs>
                <linearGradient id="paint0_linear_3_309" x1="-422" y1="-42.8157" x2="385.828" y2="385.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>
          </p>
          <p>
            <svg width="130" height="126" viewBox="0 0 130 126" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M93.9727 125.614C93.0449 119.56 91.8486 114.14 90.3838 109.354L86.3555 96.6836H43.582L39.5537 109.354C37.6494 115.458 36.4043 120.878 35.8184 125.614H0.735352C2.59082 121.806 5.00781 115.702 7.98633 107.304L40.3594 17.0693C42.9961 9.69629 44.6074 4.27637 45.1934 0.80957H84.3779C85.0615 4.37402 86.7217 9.79395 89.3584 17.0693L121.951 107.304C124.832 115.36 127.225 121.464 129.129 125.614H93.9727ZM79.0312 71.4883L64.8223 26.5176L50.7598 71.4883H79.0312Z" fill="url(#paint0_linear_3_308)" />
              <defs>
                <linearGradient id="paint0_linear_3_308" x1="-528" y1="-42.8157" x2="279.828" y2="385.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>
          </p>
          <p>
            <svg width="113" height="126" viewBox="0 0 113 126" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M82.9268 80.0576C82.292 73.124 81.9746 65.7021 81.9746 57.792V23.5146C81.9258 13.7979 81.5107 6.22949 80.7295 0.80957H112.883C112.102 6.13184 111.687 13.749 111.638 23.6611V103.275C111.687 112.895 112.102 120.341 112.883 125.614H79.9238C77.4824 120.536 73.7227 114.188 68.6445 106.571L40.959 64.6768C36.8086 58.3779 33.2441 52.25 30.2656 46.293C30.9492 53.5684 31.2666 60.9902 31.2178 68.5586V102.177C31.2178 112.577 31.6328 120.39 32.4629 125.614H0.456055C1.28613 120.634 1.70117 112.772 1.70117 102.03V23.1484C1.60352 13.9688 1.18848 6.52246 0.456055 0.80957H33.1221C34.2451 4.47168 37.7852 10.7461 43.7422 19.6328L72.0869 62.1133C76.2373 68.3145 79.8506 74.2959 82.9268 80.0576Z" fill="url(#paint0_linear_3_307)" />
              <defs>
                <linearGradient id="paint0_linear_3_307" x1="-667" y1="-42.8157" x2="140.828" y2="385.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>
          </p>
          <p>
            <svg width="124" height="126" viewBox="0 0 124 126" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M77.1143 75.6631V103.422C77.1143 111.479 77.5293 118.876 78.3594 125.614H45.6201C46.4014 119.56 46.792 112.162 46.792 103.422V75.6631L12.4414 19.0469C8.48633 12.7969 4.45801 6.71777 0.356445 0.80957H38.2959C39.4189 4.56934 41.7627 9.81836 45.3271 16.5566L61.9531 47.0254L78.6523 16.6299C82.4609 9.69629 84.7803 4.42285 85.6104 0.80957H123.477C119.18 7.01074 115.176 13.0898 111.465 19.0469L77.1143 75.6631Z" fill="url(#paint0_linear_3_306)" />
              <defs>
                <linearGradient id="paint0_linear_3_306" x1="-790" y1="-42.8157" x2="17.8276" y2="385.126" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#001F63" />
                  <stop offset="1" stop-color="#00E1EC" />
                </linearGradient>
              </defs>
            </svg>
          </p>
          <p>
            O
          </p>
          <p>
            v
          </p>
          <p>
            e
          </p>
          <p>
            r
          </p>
          <p>
            V
          </p>
          <p>
            i
          </p>
          <p>
            e
          </p>
          <p>
            w
          </p>
          <p>
            .
          </p>
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