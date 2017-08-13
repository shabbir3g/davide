<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davide
 */

?>

<div class="masonry__item">
	<div class="blog-post blog-post_text block-square os-animation" data-os-animation="fadeInUp">
		<div class="blog__date responsive-text">
		<span><?php the_time('d'); ?></span>
			<span><?php the_time('M'); ?></span>
		</div>
		<div class="blog-post__title"><a class="link_underline link_underline-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	</div>
</div>