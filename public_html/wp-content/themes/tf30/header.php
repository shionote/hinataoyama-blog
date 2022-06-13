<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TWTZ8DW');</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
	<link rel="icon" href="./img/icon-home.png">

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWTZ8DW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- header -->
	<header id="header">
		<div class="inner">
			<?php if(is_home() || is_front_page()):?>
				<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php else : ?>
				<div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
			<?php endif; ?>
			<div class="header-sub"><?php bloginfo('description'); ?></div>

			<!-- header-nav -->
			<nav class="header-nav">
				<!-- <div class="inner"> -->
					<?php wp_nav_menu(
						array(
							'depth' => 1,
							'theme_location' => 'global',
							'container' => 'false',
							'menu_class' => 'header-list',
						)
						);
					?>
				<!-- </div>/inner -->
			</nav><!-- header-nav -->
		</div><!-- /inner -->
	</header><!-- /header -->

	<!-- drawer -->
	<div class="drawer">
		<!-- drawer-content -->
		<div class="drawer-content">
			<?php wp_nav_menu(
				array(
					'depth' => 1,
					'theme_location' => 'drawer',
					'container' => 'nav',
					'container_class' => 'drawer-nav',
					'menu_class' => 'drawer-list',
				)
				);
			?>
		</div><!-- /drawer-content -->
	</div><!-- /drawer -->

	
