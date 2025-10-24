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
    <div class="container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <section>
            <a href="<?php the_permalink(); ?>">
              <div>
                <?php if (has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/img_thumbnail.jpg" alt="" width="169" height="169">
                <?php endif; ?>
              </div>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <time class="post_meta--date" datetime="<?php the_time('Y年n月j日'); ?>"><?php the_time('Y年n月j日'); ?></time>
              <p><?php echo strip_tags(get_the_excerpt()); ?></p>
            </a>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="pagination">
        <?php wp_pagination(); ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>