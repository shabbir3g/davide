<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davide
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Slabb">
  <meta property="og:title" content="Slabb — Creative Portfolio HTML5 Template">
  <meta property="og:description" content="Slabb HTML — is a unique creative solution for your personal website. Crafted with the modern design tendencies in mind Slabb allows to showcase your portfolio in a very nice and spectacular way.">
  <meta property="og:url" content="http://themes.grawix.com/demo/slabb/blog.html">
  <meta property="og:locale" content="en_US">
  <meta property="og:image" content="http://themes.grawix.com/demo/slabb/images/og-image.jpg">
  <meta property="og:image:width" content="968">
  <meta property="og:image:height" content="504">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Slabb — Creative Portfolio HTML5 Template">
	<meta name="twitter:description" content="Slabb HTML — is a unique creative solution for your personal website. Crafted with the modern design tendencies in mind Slabb allows to showcase your portfolio in a very nice and spectacular way.">
	<meta name="twitter:image:src" content="http://themes.grawix.com/demo/slabb/images/og-image.jpg">
	<meta name="twitter:url" content="http://themes.grawix.com/demo/slabb/blog.html">
	<meta name="twitter:domain" content="themes.grawix.com">
	<meta name="twitter:site" content="Slabb">
	<meta name="twitter:creator" content="GrawixThemes">

	<?php if (get_field('favicon', 'options')): ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<body class="body_bordered" <?php body_class(); ?>>
	<div id="page-wrap" class="page-wrap">
		<div id="page-shift" class="page-shift">
			<!-- Header -->
			<header class="header">
				<div class="header-wrap">
					<div class="header__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php 
							$logo = get_field('logo', 'options');

							if($logo): ?>
							<img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
						<?php else: ?>
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
						<?php endif; ?>
						</a>

					</div>
					<div class="header__item header__menu textright">
						<div class="header__menu-btn">
							<button class="icon icon_circle icon_black">
								<span></span>
							</button>
						</div>
						<div class="menu-overlay"></div>
						<div class="header__menu-wrap">
							<div class="header__menu-content"> 

								<?php wp_nav_menu(array(
									'theme_lcoation'	=> 'main-menu',
									'fallback_cb'		=> 'default_menu',
									'menu_class'		=> 'header__menu-nav'
								)); ?>
								
								<div class="header__social social">
									<?php
									$social_media = get_field('social_media','options');
									 if($social_media): 

									 	

									 foreach($social_media as $social):  ?>
									<a class="fa <?php echo $social['icon']; ?> icon" href="<?php echo $social['url']['url']; ?>" title="<?php echo $social['url']['title']; ?>" target="<?php echo $social['url']['target']; ?>"></a>
								<?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Header end -->
			<!-- Intro -->
