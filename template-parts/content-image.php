<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davide
 */

$prefix = "_extra";

?>

<div class="masonry__item">
	<div class="blog-post os-animation" data-os-animation="fadeInUp">
		<div class="blog__date responsive-text">
			<span><?php the_time('d'); ?></span>
			<span><?php the_time('M'); ?></span>
		</div>
		<?php  if(get_post_meta(get_the_id(),$prefix.'long-post',true)){ ?>
			<a href="blog-post.html" class="img-zoom long-image"><img src="<?php $prefix = "_extra"; echo get_post_meta(get_the_id(),$prefix.'long-post',true); ?>" alt="Long Image"></a>
		<?php   } elseif(get_post_meta(get_the_id(),$prefix.'short-post',true)){ ?>
			<a href="blog-post.html" class="img-zoom short-image"><img src="<?php echo get_post_meta(get_the_id(),$prefix.'short-post',true); ?>" alt="Short Image"></a>

	<?php	} ?>
		
		
		<div class="blog-post__title"><a class="link_underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	</div>
</div>