<?php get_header(); ?>
<div class="eyecatch -news">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/eyecatch.jpg" alt="" width="1920" height="420">
  <div class="page_ttl">
    <h2>お知らせ</h2>
    <span>News.</span>
  </div>
</div>

<?php get_template_part('include/common', 'breadcrumb'); //　Breadcrumb NavXTを使わないときは削除
?>

<div class="news_page">
  <main>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="container">
          <article class="single_contents">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h2 class="single_contents--ttl"><?php the_title(); ?></h2>
            <span class="single_contents--cat"><?php the_category(' '); ?></span>
            <div class="post_content">
              <?php the_content(); ?>
            </div>
          </article>

          <!-- ページング＋サムネイル画像 -->
          <?php $TITLE_MAX = 40; ?>
          <ul class="paging">
            <li class="paging--list paging--list-next">
              <?php
              $next_post = get_next_post();
              if ($next_post):
                $next_thumb = get_the_post_thumbnail(
                  $next_post->ID,
                  'thumbnail',
                  [
                    'class'   => 'paging--thumb',
                    'alt'     => esc_attr(get_the_title($next_post->ID)),
                    'loading' => 'lazy',
                  ]
                );

                // 表示用と属性用の日時
                $next_datetime_attr = get_the_date('c', $next_post); // ISO8601
                $next_datetime_text = get_the_date('Y年n月j日', $next_post); // ← 年月日のみ
              ?>
                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                  <div class="paging--thumb">
                    <?php
                    if ($next_thumb) {
                      echo $next_thumb;
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri() . '/img/common/img_thumbnail.jpg') . '" alt="">';
                    }
                    ?>
                  </div>
                  <div class="paging--txt">
                    <span class="paging--label">≪次の記事</span>
                    <p class="paging--title">
                      <?php
                      $raw = get_the_title($next_post->ID); // タイトル取得
                      echo esc_html(mb_strimwidth(wp_strip_all_tags($raw), 0, $TITLE_MAX, '…', 'UTF-8'));
                      ?>
                    </p>
                    <time class="paging--date" datetime="<?php echo esc_attr($next_datetime_attr); ?>">
                      <?php echo esc_html($next_datetime_text); ?>
                    </time>
                  </div>
                </a>
              <?php endif; ?>
            </li>

            <li class="paging--list -back">
              <a href="<?php echo esc_url(home_url('/news/')); ?>">一覧へ戻る</a>
            </li>

            <li class="paging--list paging--item-prev">
              <?php
              $prev_post = get_previous_post();
              if ($prev_post):
                $prev_thumb = get_the_post_thumbnail(
                  $prev_post->ID,
                  'thumbnail',
                  [
                    'class'   => 'paging--thumb',
                    'alt'     => esc_attr(get_the_title($prev_post->ID)),
                    'loading' => 'lazy',
                  ]
                );

                // 表示用と属性用の日時
                $prev_datetime_attr = get_the_date('c', $prev_post);
                $prev_datetime_text = get_the_date('Y年n月j日', $prev_post); // ← 年月日のみ
              ?>
                <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                  <div class="paging--thumb">
                    <?php
                    if ($prev_thumb) {
                      echo $prev_thumb;
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri() . '/img/common/img_thumbnail.jpg') . '" alt="">';
                    }
                    ?>
                  </div>
                  <div class="paging--txt">
                    <span class="paging--label">前の記事≫</span>
                    <p class="paging--title">
                      <?php
                      $raw = get_the_title($prev_post->ID);
                      echo esc_html(mb_strimwidth(wp_strip_all_tags($raw), 0, $TITLE_MAX, '…', 'UTF-8'));
                      ?>
                    </p>
                    <time class="paging--date" datetime="<?php echo esc_attr($prev_datetime_attr); ?>">
                      <?php echo esc_html($prev_datetime_text); ?>
                    </time>
                  </div>
                </a>
              <?php endif; ?>
            </li>
          </ul>


          <?php endwhile; ?><?php endif; ?>
        </div>
  </main>
</div>
<?php get_footer(); ?>