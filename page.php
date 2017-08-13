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
				<?php while(have_posts()): the_post(); ?>
					<h1 class="intro__heading heading_marked-outside"><?php the_title(); ?></h1>
				<?php endwhile; ?>
				<div class="breadcrumbs">
					<div><a class="link_underline" href="<?php echo home_url(); ?>">Home</a></div>
					<?php while(have_posts()): the_post(); ?>
						<div><?php the_title(); ?></div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Intro end -->
<section class="content-page">
	<div class="container-fluid">
		
			   <?php while(have_posts()): the_post(); ?>


					<?php the_content(); ?>


	            <?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>