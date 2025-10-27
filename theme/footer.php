<footer class="footer">
    <p class="footer--logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo.svg" alt="株式会社河合商店" width="253" height="61">
        </a>
    </p>
    <ul>
        <li <?php if (is_front_page() || is_home()) : ?> class="is_current" <?php endif; ?>>
            <a href="<?php echo esc_url(home_url('/')); ?>"><span>HOME</span>ホーム</a>
        </li>
        <li <?php if (is_page('about')): ?> class="is_current" <?php endif; ?>>
            <a href="<?php echo esc_url(home_url('/business')); ?>"><span>Business</span>事業内容と取り組み</a>
        </li>
        <li <?php if (is_page('recruit')): ?> class="is_current" <?php endif; ?>>
            <a href="<?php echo esc_url(home_url('/recruit')); ?>"><span>Recruit</span>採用情報</a>
        </li>
        <li <?php if (is_page('company')): ?> class="is_current" <?php endif; ?>>
            <a href="<?php echo esc_url(home_url('/company')); ?>"><span>Company</span>会社概要</a>
        </li>
        <li <?php if (is_archive()): ?> class="is_current" <?php endif; ?>>
            <a href="<?php echo esc_url(home_url('/news')); ?>"><span>News</span>お知らせ</a>
        </li>
        <li>
            <a class="header--link" href="<?php echo esc_url(home_url('/contact')); ?>"><span>Contact</span>お問い合わせ</a>
        </li>
    </ul>
    <small>http//yexttexttttexxxt.@text</small>
</footer>
</div>
<?php wp_footer(); ?>
<script>
    window.WebFontConfig = {
        custom: {
            families: ['Noto Sans JP', 'Oswald'],
            urls: [
                'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&display=swap'
            ]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
</body>

</html>