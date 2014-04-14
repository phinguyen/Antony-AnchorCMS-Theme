<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
	    <meta name="viewport" content="width=device-width">
	 	<meta property="og:type" content="website">
		<meta property="og:site_name" content="<?php echo site_name(); ?>">
		<?php if(is_homepage() == true && is_article() == false) : ?>
		<meta property="og:title" content="<?php echo page_title('Page can’t be found'); ?>">
		<meta property="og:url" content="<?php echo full_url(); ?>">
		<meta property="og:description" content="<?php echo site_description(); ?>">
		<?php else: ?>
		<meta property="og:title" content="<?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?>">
		<meta property="og:url" content="<?php echo full_url(); ?><?php echo e(current_url()); ?>">
		<meta property="og:description" content="<?php if(strlen(article_description())) : echo article_description(); else: echo site_description(); endif; ?>">
		<?php endif; ?>
        <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>

	</head>
	<body class="<?php echo body_class(); ?>">
		<div id="container">
			<section id="main">
				<header id="crying">
					<div class="logo">
						<span><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_meta('logo'); ?></a></span>
					</div>
					<?php if(has_menu_items()): ?>
					<div class="nav">
						<ul>
							<?php while(menu_items()): ?>
							<li>
								<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?> >
									<?php echo menu_name(); ?>
								</a>
							</li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endif; ?>
					<div class="search-box">
						<form id="search" action="<?php echo search_url(); ?>" method="post">
							<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
						</form>
					</div>
				</header>