<div class="masonry__item masonry__item_wide">
	<div class="blog-post video os-animation" data-os-animation="fadeInUp">
		<div class="blog__date responsive-text">
			<span><?php the_time('d'); ?></span>
			<span><?php the_time('M'); ?></span>

		</div>

		 <?php $prefix = "_extra"; ?>
		<a href="<?php echo get_post_meta(get_the_id(),$prefix.'vid-postsss', true); ?>" class="video-preview video-popup">
			<div class="overlay"></div>
			<?php the_post_thumbnail(); ?>
			<div class="video-play-btn"></div>
		</a>
		<div class="blog-post__title"><a class="link_underline" href="<?php the_permalink();  ?>"><?php the_title(); ?></a></div>
	</div>
</div>