<?php 
/*
Template Name: Home Page
*/
get_header(); ?>

<?php if(get_field('banner_enable')):  ?>
	<section class="intro intro_main section_fixed">
		<div class="intro-wrap container-fluid">
			<div class="row">
				<div class="intro__text col-xs-5 col-sm-3 col-md-2 col-md-offset-1">
					<?php if (get_field('banner_title')): ?>
						<h1 class="intro__heading"><?php the_field('banner_title'); ?></h1>
					<?php endif; ?>

					<?php if (get_field('banner_subtitle')): ?>
						<h2 class="intro__subheading horizontal-line"><span class="horizontal-line__text text_spacing"><?php the_field('banner_subtitle'); ?></span></h2>
					<?php endif; ?>

					
					<?php
						$banner_button = get_field('banner_button');

						
						if ($banner_button): ?>
						
					
					<div class="intro__btns">
						<div class="intro__btns-item">
							
							<a class="btn btn_cta popup-with-anim" href="#popup-message">Hire me</a>

						</div>
						<div class="intro__btns-item">
							<?php 
							$button_2 = $banner_button['button_2'];

							if($banner_button['button_2']): ?>
							
								<a href="<?php echo $banner_button['button_2']['url']; ?>" class="btn" ><?php echo $banner_button['button_2']['title']; ?></a>
							<?php endif; ?>
						
						</div>
					</div>

					<?php endif; ?>

				</div>
				<div class="intro__img col-xs-3">
					<?php 

					$banner_background = get_field('banner_background');
					 if($banner_background): ?>
						<img src="<?php the_field('banner_background'); ?>" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- Intro end -->


<!-- Projects -->
<section class="projects section-border-top section-border-top_outer">
	<div class="container-fluid">
		<h2 class="heading_double h1">
			<?php if(get_field('design_passion_title')):  ?>
				<span class="heading_double__duplicate"><?php the_field('design_passion_title'); ?></span>
				<span class="heading_double__main"><?php the_field('design_passion_title'); ?></span>
			<?php endif; ?>
		</h2>
		<div class="projects__wrap masonry masonry_size-2 row">
			<div class="masonry__sizer"></div>
			<div class="masonry__item masonry__item_big projects__subtitle col-xs-3 text_gray">
				<?php if(get_field('passion_description')):  ?>
					<em><?php the_field('passion_description'); ?></em>
				<?php endif; ?>
			</div>
			<div class="masonry__item col-xs-3">
				<div class="project project_type-3 os-animation" data-os-animation="fadeInUp">
					<div class="project__wrap block-square">
						<div class="project__content bg_yellow">
							<div class="project__margin">
								<?php 
									$title_1 = get_field('portfolio_list');

									if($title_1):  ?>
								<div class="project__category category-text"><span><?php echo $title_1['category_1'];   ?></span></div>
								<h2 class="project__title horizontal-line"><span class="horizontal-line__text">
										
									
									<a class="link_underline" href="<?php echo $title_1['title_1']['url']; ?>"><?php echo $title_1['title_1']['title'];; ?>
									
									</a></span></h2>
								<div><?php echo $title_1['description_1'];   ?></div>

								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $portfolio_2 = get_field('portfolio_list');

			if($portfolio_2):  ?>
				<div class="masonry__item col-xs-2">
					<div class="project project_type-1 os-animation" data-os-animation="fadeInUp">
						<div class="project__wrap">
							<div class="project__content">
								<div class="project__img">
									<div class="project__category horizontal-line category-text"><span class="horizontal-line__text"><?php echo $portfolio_2['category_2']; ?></span></div>
									<a class="project__img-link img-zoom" href="portfolio-details-v1.html">
										<div class="img-mask os-animation" data-os-animation="imageLoad">
											<img src="<?php  $pp =  $portfolio_2['image_1']['id']; $tttt =  wp_get_attachment_image_src($pp,'full'); echo  $tttt[0]; ?>" alt="">

										
											<div class="mask"></div>
										</div>
									</a>
								</div>
							</div>
							<h2 class="project__title">
									
								<a class="link_underline" href="<?php echo $portfolio_2['title_2']['url']; ?>"><?php echo $portfolio_2['title_2']['title'];; ?>

							</h2>
						</div>
					</div>
				</div>
			<?php endif;  

			$portfolio_3 = get_field('portfolio_list');

			if($portfolio_3):  ?>
				<div class="masonry__item masonry__item_big col-xs-3">
					<div class="project project_type-6 os-animation" data-os-animation="fadeInUp">
						<div class="project__wrap">
							<div class="project__content">
								<div class="project__img">
									<a class="project__img-link img-zoom" href="portfolio-details-v1.html">
										<div class="img-mask os-animation" data-os-animation="imageLoad">

											<img src="<?php  $pp =  $portfolio_3['image_2']['id']; $tttt =  wp_get_attachment_image_src($pp,'full'); echo  $tttt[0]; ?>" alt="">

											<div class="mask"></div>
										</div>
									</a>
									<div class="project__category category-text text_black"><span><?php echo $portfolio_3['category_3']; ?></span></div>
									<h2 class="project__title text_yellow"><span><a href="<?php echo $portfolio_3['title_4']['url']; ?>"><?php echo $portfolio_3['title_4']['title']; ?></a></span></h2>
								</div>
								<div class="project__desc">
									<div class="project__desc-text"><?php echo $portfolio_3['description_2']; ?></div>
									
									<a class="project__desc-link link_underline" href="<?php echo $portfolio_3['title_3']['url']; ?>"><?php echo $portfolio_3['title_3']['title']; ?> >></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;  

			$portfolio_4 = get_field('portfolio_list');

			if($portfolio_4):  ?>
				<div class="masonry__item col-xs-2">
					<div class="project project_type-4 os-animation" data-os-animation="fadeInUp">
						<div class="project__wrap">
							<div class="project__content bg_blue">
								<div class="project__img">
									<div class="project__category category-text horizontal-line text_white"><span class="horizontal-line__text"><?php echo $portfolio_4['category_4']; ?></span></div>
									<a class="project__img-link img-zoom" href="portfolio-details-v3.html">
										<div class="img-mask os-animation" data-os-animation="imageLoad">
											<img src="<?php  $pp =  $portfolio_4['image_3']['id']; $tttt =  wp_get_attachment_image_src($pp,'full'); echo  $tttt[0]; ?>" alt="">
											<div class="mask"></div>
										</div>
									</a>
								</div>
							</div>
							<h2 class="project__title">
								<a class="link_underline" href="<?php echo $portfolio_4['title_5']['url']; ?>"><?php echo $portfolio_4['title_5']['title']; ?></a>
							</h2>
						</div>
					</div>
				</div>
			<?php endif;  

			$portfolio_5 = get_field('portfolio_list');

			if($portfolio_5):  ?>
			<div class="masonry__item col-xs-2">
				<div class="projects__blockquote blockquote os-animation" data-os-animation="fadeInUp">
					<blockquote class="blockquote__text_big">
						<?php echo $portfolio_5['quite']; ?>
						<cite class="blockquote__author"><?php echo $portfolio_5['author']; ?></cite>
					</blockquote>
				</div>
			</div>
			<div class="masonry__item col-xs-2">
				<div class="project project_type-2 os-animation" data-os-animation="fadeInUp">
					<div class="project__wrap">
						<div class="project__content">
							<div class="project__img">
								<div class="project__category category-text horizontal-line"><span class="horizontal-line__text"><?php echo $portfolio_5['category_5']; ?></span></div>
								<a class="project__img-link img-zoom" href="portfolio-details-v1.html">
									<div class="img-mask os-animation" data-os-animation="imageLoad">
										<img src="<?php  $pp =  $portfolio_5['image_4']['id']; $tttt =  wp_get_attachment_image_src($pp,'full'); echo  $tttt[0]; ?>" alt="">
										<div class="mask"></div>
									</div>
								</a>
							</div>
						</div>
						<h2 class="project__title">
							<a class="link_underline" href="<?php echo $portfolio_5['title_6']['url']; ?>"><?php echo $portfolio_5['title_6']['title']; ?></a>
						</h2>
					</div>
				</div>
			</div>
			<div class="masonry__item col-xs-2">
				<div class="project project_type-5 os-animation" data-os-animation="fadeInUp">
					<div class="project__wrap block-square">
						<div class="project__content">
							<div class="project__category category-text"><span><?php echo $portfolio_5['category_6']; ?></span></div>
							<h2 class="project__title"><span>

								<a class="link_underline" href="<?php echo $portfolio_5['title_7']['url']; ?>"><?php echo $portfolio_5['title_7']['title']; ?></a>

							</span></h2>
							<div><?php echo $portfolio_5['description_3']; ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endif;  

			 ?>
			<div class="masonry__item col-xs-1">
				<div class="projects__fact fact os-animation" data-os-animation="bounceIn">
					<div class="fact__text responsive-text">
						<?php
						$portfolio_bottom = get_field('experience');

						if($portfolio_bottom): 

						 echo $portfolio_bottom; 

						 endif;  ?>
						
					</div>
					<div class="fact__link">
						<?php
						$portfolio_b = get_field('project_button');

						if($portfolio_b):  ?>
						<a href="<?php echo $portfolio_b['url']; ?>" class="btn"><?php echo $portfolio_b['title']; ?></a>

						<?php endif; ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- Projects end -->
<!-- Services -->
<div class="section-bg">
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

						foreach($all_projects  as $projects){


						
							

						?>
						<figure class="services__item staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
							<div class="services__item-img services__item-img_bordered" ><i class="fa <?php echo  $projects['single_project_icon']; ?>"></i></div>
							<figcaption class="services__item-caption"><?php echo  $projects['single_project_title']; ?></figcaption>
						</figure>
						
						<?php  } ?>



					</div>
				</div>
				<div class="col-xs-5 col-md-1">
					<div class="fact os-animation" data-os-animation="bounceIn">
						<div class="fact__text responsive-text">
						
						<?php echo get_field('project_mor'); ?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="remove-section-margin"></div>
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
		<?php 

		$pricing = get_field('pricing');
		if($pricing): ?>
			<h2 class="heading_rotated heading_rotated-right"><?php echo $pricing; ?></h2>
		<?php endif; ?>
		<h3 class="heading_marked-part h1">
		<?php 
		$price_packages = get_field('price_packages');
		if($price_packages): ?>
			<span class="heading_marked-part__text"><?php echo $price_packages; ?></span>
		<?php endif; ?>
		</h3>
		<div class="row">
			<div class="col-xs-5 col-md-3 col-md-push-1 before-price">


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
			<div class="col-xs-5 col-md-1 col-md-pull-3">
				<div class="fact os-animation" data-os-animation="bounceIn">
					<div class="fact__text responsive-text">
						<?php 
							$custom_quote = get_field('custom_quote');
							if($custom_quote): 

								echo $custom_quote;

							 endif; ?>
					</div>
					<div class="fact__link">
						<a class="link_underline" href="#">Here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Pricing end -->
<!-- Testimonials -->
<div class="section-bg">
	<section class="testimonials">
		<div class="container-fluid">
			<div class="row">
				<div class="testimonials__heading col-xs-5 col-lg-2">
					<div class="heading_compact horizontal-line">
						<h2 class="testimonials__heading-text responsive-text horizontal-line__text">
							<?php 
							$clients_review_title = get_field('clients_review_title');
							if($clients_review_title): 

								echo $clients_review_title;

							 endif; ?>
						</h2>
					</div>
				</div>
				<div class="testimonials__wrap col-xs-5 col-lg-4">
					<div class="testimonials__items row">

						<?php 
						$all_reviews = get_field('all_reviews');
						if($all_reviews):
						foreach($all_reviews as $reviews):  ?>
						<div class="testimonial testimonial_big">
							<div class="blockquote os-animation" data-os-animation="fadeInUp">
								<blockquote>
									<?php echo $reviews['clients_reviews']; ?>
									<cite class="blockquote__author"><?php echo $reviews['clients_name']; ?></cite>
								</blockquote>
							</div>
						</div>
						<?php endforeach; endif; ?>





					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Testimonials end -->
<!-- Contacts -->
<section class="contacts">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-5 col-md-2 pull-right">
				<div class="contacts__title heading_compact horizontal-line">
					<h2 class="horizontal-line__text responsive-text">
						<?php
						$send_me_title = get_field('send_me_title');
						if($send_me_title): 

						echo $send_me_title;

						endif; ?>
						
					</h2>
				</div>
			</div>
			<div class="col-xs-5 col-sm-3 col-lg-2 col-lg-offset-1">
				<div class="contacts__form os-animation" data-os-animation="fadeInUp">

					<?php


						$contact_form = get_field('contact_form','options');
						
						if($contact_form){
							echo do_shortcode('[contact-form-7 id="'.$contact_form.'" ]');
						}

					?>
				</div>
			</div>
			<div class="col-xs-5 col-sm-2">
				<?php
						$send_me_sub_title = get_field('send_me_sub_title');
						if($send_me_sub_title): ?>

					<p><?php 	echo $send_me_sub_title; ?></p>

					<?php	endif; ?>
				
				<ul class="contacts__list">


					<?php 
					$contact_us_information = get_field('contact_us_information');
					if($contact_us_information):
					foreach($contact_us_information as $information):  ?>
					<li><?php echo $information['contact_label']; ?>: <a class="link_underline" href="#"><?php echo $information['contact_info']; ?></a></li>
					<?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>