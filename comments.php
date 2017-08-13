<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davide
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */



?>
<section class="comments blog__item">
<h2 class="heading_bordered"><?php comments_number(); ?></h2>
<ol class="comment-list">

<?php 
wp_list_comments(array(
	'callback' => 'test_something_show_korabo'
));
?>
	</ol>
	<?php comment_form();  ?>
</section>
