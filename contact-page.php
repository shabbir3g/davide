<?php 
/*
Template Name: Contact Page
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
  <section class="contacts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-5 col-lg-3 col-lg-offset-1">
        	<?php 
        	$contact_title = get_field('contact_title');
        	if ($contact_title): ?>
        	<h2 class="heading_bordered"><?php echo $contact_title; ?></h2>

        	<?php endif; ?>
        </div>
        <div class="col-xs-5 col-sm-3 col-lg-2 col-lg-offset-1">
          <div class="contacts__form">
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
			$contact_subtitle_2 = get_field('contact_subtitle_2');
			if($contact_subtitle_2): ?>

		<p><?php 	echo $contact_subtitle_2; ?></p>

		<?php	endif; ?>


          <ul class="contacts__list">
           <?php 
			$contact_information = get_field('contact_information');
			if($contact_information):
			foreach($contact_information as $information):  ?>
			<li><?php echo $information['contact_label_2']; ?>: <a class="link_underline" href="#"><?php echo $information['contact_info_2']; ?></a></li>
			<?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>