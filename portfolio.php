<?php 
/*
Template Name: Portfolio Page
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
<!-- Portfolio -->
<div class="portfolio-list section">
	<div id="filter" class="filter">
		<div class="filter__toggle"></div>
		<div class="filter__wrap container-fluid">
			<div class="filter__item opened" data-filter="*">All</div>

			<?php $categorys =  get_terms('devide_type'); 

			foreach( $categorys as $category){ ?>
			<div class="filter__item "  data-filter=".<?php echo $category->slug; ?>" ><?php echo $category->name; ?></div>

			<?php } ?>



		</div>
	</div>
	<div class="container-fluid">
		<div class="portfolio-list__wrap masonry row" data-horizontal="true">
			<div class="masonry__sizer"></div>

			<div class="portfolio-content">

				


				<?php 
				$portfoliopost = new WP_Query(array(
					'post_type'			=> 'devide_portfolios',
					'posts_per_page'	=> 12,
				));
				while($portfoliopost->have_posts()): $portfoliopost->the_post();  ?>
					<div class="mix <?php $categorys =  get_the_terms(get_the_id(),'devide_type'); 

						foreach($categorys as $category ){

							echo $category->slug.' ';

						}
						 ?>">
						<a class="preview" href="<?php the_permalink(); ?>">
							<div class="cover">
								<div class="cover__item cover__item_main">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
							<div class="border">
								<span class="top"></span>
								<span class="right"></span>
								<span class="bottom"></span>
								<span class="left"></span>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				


			</div>

			

			


		</div>
	</div>
</div>
<!-- Portfolio end -->
<!-- CTA -->
<section class="cta section-border-top section-border-bottom">
	<div class="container-fluid">
		<div class="cta-wrap row">
			<div class="cta__item col-xs-5 col-sm-2">
				<div class="cta__heading">
					<h2 class="cta__heading-wrap">
						<span class="cta__heading-text responsive-text">
							<?php 

							$call_to_action = get_field('call_to_action','options');



							if($call_to_action): 
								echo $call_to_action;
							 endif; ?>

						</span>
						<span class="cta__heading-icon">?</span>
					</h2>
				</div>
			</div>
			<div class="cta__item col-xs-5 col-sm-3">
				<?php 

				$action_button = get_field('action_button','options');



				if($action_button): ?>
				<a class="btn btn_cta btn_big btn_wide popup-with-anim" href="#popup-message"><?php echo $action_button; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
			
<?php get_footer(); ?>