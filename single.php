<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package davide
 */

get_header(); ?>
<section class="intro intro_inner">
	<div class="container-fluid">
		<div class="row">
			<div class="intro-wrap col-xs-5 col-sm-4 col-sm-offset-1">
				<h2 class="intro__heading heading_marked-outside h1">Blog</h2>
				<div class="breadcrumbs">
					<div><a class="link_underline" href="<?php echo home_url(); ?>">Home</a></div>
					<div><a class="link_underline" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ; ?>">Blog</a></div>
					<?php while(have_posts()): the_post(); ?>
						<div><?php the_title(); ?></div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Intro end -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<main class="blog col-xs-5">

				<?php while(have_posts()): the_post();  ?>
				<article class="blog__item blog__item_pt-0">
					<div class="blog__date responsive-text">
						<span><?php the_time('d'); ?></span>
						<span><?php the_time('M'); ?></span>
					</div>
					<div class="blog__block-wide">
						<?php the_post_thumbnail(); ?>
					</div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<div class="post-footer">
						<div class="post-footer__item tags">	
							
							<?php the_tags('<span>',', ','</span>'); ?>
						
							
						</div>
						<div class="post-footer__item social">
							<a class="fa fa-facebook icon icon_circle icon_black" href="#"></a>
							<a class="fa fa-twitter icon icon_circle icon_black" href="#"></a>
							<a class="fa fa-google icon icon_circle icon_black" href="#"></a>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
				


				
				<?php comments_template(); ?>
				<!-- Comments end -->
			</main>
			<!-- Sidebar -->
			<aside class="sidebar col-xs-5 col-md-1"> 
				<?php get_sidebar(); ?>
			</aside>
			<!-- Sidebar end -->
		</div>
	</div>
</div>

<?php
get_footer();

?>
