<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davide
 */

get_header(); ?>

			<section class="intro intro_inner">
				<div class="container-fluid">
					<div class="row">
						<div class="intro-wrap col-xs-5 col-sm-4 col-sm-offset-1">
							<h1 class="intro__heading heading_marked-outside">Blog</h1>
							<div class="breadcrumbs">
								<div><a class="link_underline" href="<?php echo home_url(); ?>">Home</a></div>
								<div>Blog</div>
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
							<div class="masonry masonry_size-3 row">

								
								<div class="masonry__sizer"></div>

								   <?php while(have_posts()): the_post(); ?>
            

										<?php get_template_part('template-parts/content',get_post_format()); ?>


						            <?php endwhile; ?>
								
							</div>
							<!-- Pagination -->
							<?php the_posts_pagination(array(
								'screen_reader_text'	=> ' ',
								'prev_text'	=> '<span class="pagination-arrow pagination-arrow_prev arrow-prev"  ></span> ',
								'next_text'	=> '<span class="pagination-arrow pagination-arrow_next arrow-next"  ></span>',
							)); ?>
							
							
							<!-- Pagination end -->
						</main>
						<!-- Sidebar -->
						<aside class="sidebar col-xs-5 col-md-1"> 
							<?php get_sidebar(); ?>
						</aside>
						<!-- Sidebar end -->
					</div>
				</div>
			</div>
<?php get_footer(); ?>