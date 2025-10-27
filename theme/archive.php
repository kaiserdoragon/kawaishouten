<?php get_header(); ?>
<div class="eyecatch -news">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/eyecatch.jpg" alt="" width="1920" height="420">
  <div class="page_ttl">
    <h2>お知らせ</h2>
    <span>News.</span>
  </div>
</div>
<?php get_template_part('include/common', 'breadcrumb'); ?>
<div class="news_page">
  <main>
    <div class="news_archive">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <a href="<?php the_permalink(); ?>">
              <div class="news_archive--img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/img_thumbnail.jpg" alt="" width="85" height="85">
                <?php endif; ?>
              </div>
              <div class="news_archive--contents">
                <h2>
                  <?php
                  $title  = get_the_title();
                  $limit  = 15; // 15文字まで
                  $short  = mb_substr($title, 0, $limit, 'UTF-8');
                  $after  = (mb_strlen($title, 'UTF-8') > $limit) ? '' : ''; // 省略記号

                  echo esc_html($short . $after);
                  ?>
                </h2>
                <time class="post_meta--date" datetime="<?php the_time('Y年n月j日'); ?>"><?php the_time('Y年n月j日'); ?></time>
                <p><?php echo strip_tags(get_the_excerpt()); ?></p>
              </div>
            </a>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="pagination">
      <?php wp_pagination(); ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>