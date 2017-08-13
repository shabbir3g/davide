<?php 
/*
Template Name: About Page
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
<!-- About -->
<section class="about">
	<div class="container-fluid">
		<div class="about__wrap staggered-animation-container row">
			<div class="about__item col-xs-2 col-sm-2 col-md-offset-1">
				<div class="about__photo img_underlayer">
					<div class="img-mask staggered-animation" data-os-animation="imageLoad">
						<?php 
						$img = get_field('photo');
						if($img): ?>
						<img src="<?php echo $img; ?>" alt="">
						<?php endif; ?>
						<div class="mask"></div>
					</div>
				</div>
			</div>
			<div class="about__item col-xs-3 col-sm-3 col-md-2">
				<?php 
				$designation = get_field('designation');
				if($designation): ?>
				<div class="category-text staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s"><span><?php echo $designation; ?></span></div>
				<?php endif; ?>
				<?php 
				$name = get_field('name_your');
				if($name): ?>
					<h2 class="about__heading horizontal-line horizontal-line_left staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s"><span class="horizontal-line__text"><?php echo $name; ?></span></h2>
				<?php endif; ?>

				<div class="staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">
					<?php 
					$details = get_field('details');
					if($details): ?>
						<p><?php echo $details; ?></p>
					<?php endif; ?>
					<?php 
					$read_my_blog = get_field('read_my_blog');




					if($read_my_blog): ?>
					<a class="link_underline" href="<?php echo $read_my_blog['url']; ?>"><?php echo $read_my_blog['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>