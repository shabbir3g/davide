<?php 




	function devide_about($attr, $content){ 

		$abt_atts = shortcode_atts( array( 
				'dvname'			=> 'David Henderson',
				'dvdesignation'		=> 'Front-end developer',
				'dblogutext'		=> 'Read my blog',
				'dblogurl'			=> '',
				'dppicture'			=> 'David Henderson',
				'descript'			=> 'ffered say visited elderly and. Waited period are played family man formed. He ye body or made on pain part meet. You one delay nor begin our folly abode. By disposed replying mr me unpacked no. As moonlight of my resolving unwilling.',
			), $attr);


		ob_start();

		?>
		<div class="about__wrap staggered-animation-container row">
		<div class="about__item col-xs-2 col-sm-2 col-md-offset-1">
			<div class="about__photo img_underlayer">
				<div class="img-mask staggered-animation" data-os-animation="imageLoad">

					<?php

					$imageid = $abt_atts['dppicture'];

					$imageurl =  wp_get_attachment_image_src($imageid,'full'); ?>
					<img src="<?php echo $imageurl[0]; ?>" alt="">
					<div class="mask"></div>
				</div>
			</div>
		</div>
		<div class="about__item col-xs-3 col-sm-3 col-md-2">
			<div class="category-text staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s"><span><?php echo $abt_atts['dvdesignation']; ?></span></div>
			<h2 class="about__heading horizontal-line horizontal-line_left staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s"><span class="horizontal-line__text"><?php echo $abt_atts['dvname']; ?></span></h2>
			<div class="staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">
				<p><?php echo $abt_atts['descript']; ?></p>
				<?php  

				$tta =  $abt_atts['dblogurl'];

				  $tumiamikk = vc_parse_multi_attribute( $tta, array( 'url' => '', 'title' => '', 'target' => '' ));

				  		;




				?>
				<a class="link_underline" href="<?php echo $tumiamikk['url']; ?>"><?php echo $tumiamikk['title']; ?></a>


				
			</div>
		</div>
		</div>
	<?php 

	return ob_get_clean();


}
	add_shortcode('aboutdev','devide_about');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'About Us',
			'base'				=> 'aboutdev',
			'icon'				=> get_template_directory_uri().'/images/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'dvname',
							'type'					=> 'textfield',
							'heading'				=> 'Name'
						),
					array( 
							'param_name'			=> 'dvdesignation',
							'type'					=> 'textfield',
							'heading'				=> 'Designation '
						),
					array( 
							'param_name'			=> 'dblogurl',
							'type'					=> 'vc_link',
							'heading'				=> 'Read my blog Text and URL '
						),
					array( 
							'param_name'			=> 'dppicture',
							'type'					=> 'attach_image',
							'heading'				=> 'Profile Picture'
						),
					array( 
							'param_name'			=> 'descript',
							'type'					=> 'textarea',
							'heading'				=> 'About US Description'
						)
				)
		));


	}



	// service page top shortcode


	function devide_services_top($attr, $content){ 

		$srvice_top = shortcode_atts( array( 
				'subtitle'			=> 'I do a lot of wonderful things'
			), $attr);


		ob_start();

		?>
		<h2 class="heading_rotated"><?php the_title(); ?></h2>
		<h3 class="heading_marked-part heading_marked-part-right h1">
			<span class="heading_marked-part__text"><?php echo $srvice_top['subtitle']; ?></span>
		</h3>
		<div class="row">
			<div class="col-xs-5 col-md-3 col-md-offset-1">
				<div class="services-wrap staggered-animation-container">


					<?php $services = new WP_Query(array(
						'post_type'			=> 'devide_services',
						'posts_per_page'	=> 6,
					)); 
					while($services->have_posts()): $services->the_post(); ?>
					<figure class="services__item staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
						<div class="services__item-img services__item-img_bordered" ><i class="fa <?php $prefix = "_extra"; echo get_post_meta(get_the_id(), $prefix.'prefix_icon',true); ?>"></i></div>
						<figcaption class="services__item-caption"><?php the_title(); ?></figcaption>
					</figure>
					<?php endwhile; ?>



					
				</div>
			</div>
		</div>
	<?php 

	return ob_get_clean();


}
	add_shortcode('servicestop','devide_services_top');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'Services Top',
			'base'				=> 'servicestop',
			'icon'				=> get_template_directory_uri().'/images/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'subtitle',
							'type'					=> 'textfield',
							'heading'				=> 'Sub Title'
						),
					
				)
		));


	}





	// Have A Project  shortcode


	function have_a_project($attr, $content){ 

		$have_prject_top = shortcode_atts( array( 
				'title'				=> 'Do you have',
				'subtitle'			=> 'a project',
				'action'			=> 'Get a free quote',
			), $attr);


		ob_start();

		?>
		<section class="cta section-border-top section-border-bottom">
		<div class="container-fluid">
		<div class="cta-wrap row">
			<div class="cta__item col-xs-5 col-sm-2">
				<div class="cta__heading">
					<h2 class="cta__heading-wrap">
						<span class="cta__heading-text responsive-text">
							<span><?php echo $have_prject_top['title']; ?></span>
							<span><?php echo $have_prject_top['subtitle']; ?></span>
						</span>
						<span class="cta__heading-icon">?</span>
					</h2>
				</div>
			</div>
			<div class="cta__item col-xs-5 col-sm-3">
				<a class="btn btn_cta btn_big btn_wide popup-with-anim" href="#popup-message"><?php echo $have_prject_top['action']; ?></a>
			</div>
		</div>
		</div>
		</section>
	<?php 

	return ob_get_clean();


}
	add_shortcode('have_project','have_a_project');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'Have Project',
			'base'				=> 'have_project',
			'icon'				=> get_template_directory_uri().'/images/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title',
							'type'					=> 'textfield',
							'heading'				=> 'Left Text 1'
						),
					array( 
							'param_name'			=> 'subtitle',
							'type'					=> 'textfield',
							'heading'				=> 'Left Text 2'
						),
					array( 
							'param_name'			=> 'action',
							'type'					=> 'textfield',
							'heading'				=> 'Action Button Text'
						),
					
				)
		));


	}
	


function my_pricing($acc1 , $acc2){  

			$accordion = shortcode_atts(array(
					'main_title'				=> 'My pricing',
					'title'				 => '',
					'titleprice'		 => '',
					'accordion_jakhosi'	 => '',
					'accordion_jakhosii' => '',
					'serviceslist'		 => '',
					'title_color'				=> 'transparent',
					'desc_color'				=> 'transparent',
					'title_text'				=> '#000',
					'desc_text'					=> '#000'
				), $acc1);
			ob_start();
		?>

			<section class="pricing">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-5 col-md-3 col-md-offset-1">
							<h2 class="heading_bordered"><?php echo $accordion['main_title']; ?></h2>
			

					<?php 

						$towkir =  vc_param_group_parse_atts($accordion['accordion_jakhosi']); 

					 	

						foreach($towkir as $samsol) :
					?>

					<div class="table os-animation" data-os-animation="fadeInUp">
						<table class="pricing-table" style="color: <?php echo $samsol['tt_color']; ?>;">
							<tr style="background-color: <?php echo $samsol['box_heading']; ?>;">
								<th><?php echo $samsol['title']; ?></th>
								<th><span class="pricing-table__price"><?php echo $samsol['titleprice']; ?></span></th>
							</tr>
							<tr style="background-color: <?php echo $samsol['box_bg']; ?>;">
								<td>
									<ul class="pricing-table__list list_yellow">

										<?php  $towkirss =  vc_param_group_parse_atts($samsol['accordion_jakhosii']);

										foreach($towkirss as $tumiami): 

										?>
										<li><?php echo  $tumiami['serviceslist']; ?></li>

									<?php endforeach; ?>



									</ul>
									
								</td>
								<td>
									<button class="btn btn_cta btn_wide">Select</button>
								</td>
							</tr>
						</table>
					</div>

					<?php endforeach; ?>
				
					</div>
					</div>
				</div>
			</section>


			<?php 
		 
				return ob_get_clean();
			 }
			add_shortcode('mmmy_pricing','my_pricing');

			if(function_exists('vc_map')){
				vc_map(array( 
						'name'				=> 'My pricing',
						'base'				=> 'mmmy_pricing',
						'icon'				=> get_template_directory_uri().'/images/fav.png',
						'params'			=> array( 
							array(

							'param_name'			=> 'main_title',
							'type'					=> 'textfield',
							'heading'				=> 'Pricing Box Heading Color'
							
							),
							array( 
									'param_name'			=> 'accordion_jakhosi',
									'type'					=> 'param_group',
									'heading'				=> 'All Services',
									'params'				=> array( 
											array( 
												'param_name'			=> 'tt_color',
												'type'					=> 'colorpicker',
												'heading'				=> 'Text Color'
											),
											array( 
												'param_name'			=> 'box_heading',
												'type'					=> 'colorpicker',
												'heading'				=> 'Pricing Box Heading Color'
											),
											array( 
												'param_name'			=> 'box_bg',
												'type'					=> 'colorpicker',
												'heading'				=> 'Pricing Box background Color'
											),
											array( 
													'param_name'		=> 'title',
													'type'				=> 'textfield',
													'heading'			=> 'Service Title',
												),
												array( 
													'param_name'		=> 'titleprice',
													'type'				=> 'textfield',
													'heading'			=> 'Service Price',
												),
											array( 
													'param_name'		=> 'accordion_jakhosii',
													'type'				=> 'param_group',
													'heading'			=> 'All Services List',
													'params'			=> array(
														array( 
															'param_name'		=> 'serviceslist',
															'type'				=> 'textfield',
															'heading'			=> 'Services List',
															),
														),
												),


										)
								),
								
								
							)

					));
			}






	function portfolio_all_section($attr, $content){

				$accordion = shortcode_atts(array(
					'main_title'				=> 'My pricing',
					'title'				 => '',
					'titleprice'		 => '',
					'accordion_jakhosi'	 => '',
					'accordion_jakhosii' => '',
					'serviceslist'		 => '',
					'title_color'				=> 'transparent',
					'desc_color'				=> 'transparent',
					'title_text'				=> '#000',
					'desc_text'					=> '#000'
				), $attr);
			ob_start();


				?>
		<div class="portfolio-list section">
				<div id="filter" class="filter">
					<div class="filter__toggle"></div>
					<div class="filter__wrap container-fluid">
						<div class="filter__item" data-target="all">All</div>
						<div class="filter__item opened" data-target="#filter-1">Web Design</div>
						<div class="filter__item" data-target="#filter-2">Graphic Design</div>
						<div class="filter__item" data-target="#filter-3">Mobile Development</div>
						<div class="filter__item" data-target="#filter-4">Branding & Identity</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="portfolio-list__wrap masonry row" data-horizontal="true">
						<div class="masonry__sizer"></div>

						
						<div id="filter-1" class="filter-content">


							<div class="masonry__item col-xs-2">
								<a class="preview" href="portfolio-details-v1.html">
									<div class="cover">
										<div class="cover__item cover__item_main">
											<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio1.png" alt="">
										</div>
										<div class="cover__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.png');"></div>
										<div class="cover__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.png');"></div>
										<div class="cover__item" style="background-image: url('images/portfolio/portfolio8.png');"></div>
									</div>
									<div class="border">
										<span class="top"></span>
										<span class="right"></span>
										<span class="bottom"></span>
										<span class="left"></span>
									</div>
								</a>
							</div>
							<div class="masonry__item col-xs-3">
								<a class="preview" href="portfolio-details-v1.html">
									<div class="cover">
										<div class="cover__item cover__item_main">
										<div class="cover__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.png');"></div>
											<img src="images/portfolio/portfolio2.png" alt="">
										</div>
										<div class="cover__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.png');"></div>
										<div class="cover__item" style="background-image: url('images/portfolio/portfolio3.png');"></div>
										<div class="cover__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.png');"></div>
										<div class="cover__item" style="background-image: url('images/portfolio/portfolio7.png');"></div>
									</div>
									<div class="border">
										<span class="top"></span>
										<span class="right"></span>
										<span class="bottom"></span>
										<span class="left"></span>
									</div>
								</a>
							</div>
							<div class="masonry__item col-xs-3">
								<a class="preview" href="portfolio-details-v1.html">
									<div class="cover">
										<div class="cover__item cover__item_main">
											<img src="images/portfolio/portfolio3.png" alt="">
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
						



						</div>
					</div>
				</div>
			</div>



				<?php 


				return ob_get_clean();



			}


	add_shortcode('portfolio_short','portfolio_all_section');

			if(function_exists('vc_map')){
				vc_map(array( 
						'name'				=> 'Portfoio Section',
						'base'				=> 'portfolio_short',
						'icon'				=> get_template_directory_uri().'/images/fav.png',
						'params'			=> array( 
								array(
									'param_name'			=> 'main_title',
									'type'					=> 'textfield',
									'heading'				=> 'Pricing Box Heading Color'
								),
							)

					));
			}

