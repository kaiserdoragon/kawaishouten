<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="<?php if (wp_title('', false)): ?><?php bloginfo('name'); ?>の<?php echo trim(wp_title('', false)); ?>のページです。<?php endif; ?><?php bloginfo('description'); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrap">
		<header class="header">
			<div class="header--inner">
				<h1 class="header--logo">
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.svg" alt="株式会社河合商店" width="214" height="51"></a>
				</h1>
				<button id="js-gnav_btn" class="gnav_btn">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="header--nav">
					<nav id="js-gnav" class="gnav">
						<ul>
							<li <?php if (is_front_page() || is_home()) : ?> class="is_current" <?php endif; ?>>
								<a href="<?php echo esc_url(home_url('/')); ?>"><span>HOME</span>ホーム</a>
							</li>
							<li <?php if (is_page('about')): ?> class="is_current" <?php endif; ?>>
								<a href="<?php echo esc_url(home_url('/business')); ?>"><span>Business</span>事業内容と取り組み</a>
							</li>
							<li <?php if (is_page('recruit')): ?> class="is_current" <?php endif; ?>>
								<a href="https://doraever.jp/company/1252536"><span>Recruit</span>採用情報</a>
							</li>
							<li <?php if (is_page('company')): ?> class="is_current" <?php endif; ?>>
								<a href="<?php echo esc_url(home_url('/company')); ?>"><span>Company</span>会社概要</a>
							</li>
							<li <?php if (is_archive()): ?> class="is_current" <?php endif; ?>>
								<a href="<?php echo esc_url(home_url('/news')); ?>"><span>News</span>お知らせ</a>
							</li>
							<li class="is-hidden_pc">
								<a class="header--link" href="<?php echo esc_url(home_url('/contact')); ?>"><span>Contact</span>お問い合わせ</a>
							</li>
						</ul>
					</nav>
					<a class="header--link" href="<?php echo esc_url(home_url('/contact')); ?>"><span>Contact</span>お問い合わせ</a>
				</div>
			</div>
		</header>