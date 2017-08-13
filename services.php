<?php 
/*
Template Name: Services Page
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
<!-- Services -->
<section class="services">
	<div class="container-fluid">
		<?php 
		$title_services = get_field('title_services');
		if ($title_services): ?>
			<h2 class="heading_rotated"><?php echo $title_services; ?></h2>
		<?php endif; ?>
		<h3 class="heading_marked-part heading_marked-part-right h1">
			<?php 
			$title_services_sub = get_field('title_services_sub');
			if ($title_services_sub): ?>
				<span class="heading_marked-part__text"><?php echo $title_services_sub; ?></span>
			<?php endif; ?>
		</h3>
		<div class="row">
			<div class="col-xs-5 col-md-3 col-md-offset-1">
				<div class="services-wrap staggered-animation-container">
					<?php 

						$all_projects =   get_field('all_projects');

						//$fff =  $all_projects['single_project']['post_title'];
						if($all_projects):
						foreach($all_projects  as $projects){
						?>
						<figure class="services__item staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
							<div class="services__item-img services__item-img_bordered" ><i class="fa <?php echo  $projects['single_project_icon']; ?>"></i></div>
							<figcaption class="services__item-caption"><?php echo  $projects['single_project_title']; ?></figcaption>
						</figure>
						
						<?php  }  endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services end -->
<!-- CTA -->
<section class="cta section-border-top section-border-bottom">
	<div class="container-fluid">
		<div class="cta-wrap row">


		<?php 

			$call_to_action = get_field('call_to_action','options');



			if($call_to_action):  ?>
			<div class="cta__item col-xs-5 col-sm-2">
				<div class="cta__heading">
					<h2 class="cta__heading-wrap">
						<span class="cta__heading-text responsive-text">
							
								<?php echo $call_to_action; ?>
							 

						</span>
						<span class="cta__heading-icon">?</span>
					</h2>
				</div>
			</div>
			<?php 	endif; ?>



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
<!-- CTA end -->
<!-- Pricing -->
<section class="pricing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-5 col-md-3 col-md-offset-1 before-price">
				<?php 

				$pricing = get_field('pricing');
				if($pricing): ?>
				<h2 class="heading_bordered"><?php echo $pricing; ?></h2>
				<?php endif; ?>
				<?php 

			$service_packages = get_field('service_packages');

		

			if($service_packages):  

				foreach($service_packages as $service): ?>
				<div class="pricing-tables table os-animation" data-os-animation="fadeInUp">
					<table class="pricing-table">
						<tr>
							<th><?php echo $service['package_title']; ?></th>
							<th><span class="pricing-table__price"><?php echo $service['package_price_d']; ?></span></th>
						</tr>
						<tr>
							<td>
								<ul class="pricing-table__list list_yellow">

									<?php $services_list = $service['services_list'];
									if( $services_list): 
									foreach( $services_list as $list):  ?>

									<li><?php echo $list['single_service']; ?></li>

								<?php endforeach; endif; ?>
								</ul>
							</td>
							<td>
								<button class="btn btn_cta btn_wide">Select</button>
							</td>
						</tr>
					</table>
				</div>
			<?php endforeach; endif; ?>
				
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>