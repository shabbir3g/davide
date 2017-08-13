<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davide
 */

?>

	<!-- Footer -->

			<?php $copyright =  get_field('copyright','options');

			if($copyright):  ?>
				<footer id="footer" class="footer">
					<div class="container-fluid">
						<p class="copyright"><?php echo $copyright; ?></p>
					</div>
				</footer>
			<?php endif; ?>
			<!-- Footer end -->
			<!-- Popups -->
      <div id="popup-message" class="popup mfp-with-anim mfp-hide">
	      <div class="popup__title h1 popup-container">Get a FREE quote</div>
	      <div class="popup-container">
					<?php


						$contact_form = get_field('contact_form','options');
						
						if($contact_form){
							echo do_shortcode('[contact-form-7 id="'.$contact_form.'" ]');
						}

					?>
	      </div>
      </div>
      
      <!-- Popups end -->
			<div id="page-loader" class="page-loader"></div>
		</div>
	</div>
	<!-- JS links -->
	
	<!-- Yandex.Metrika counter -->
	
	<noscript><div><img src="https://mc.yandex.ru/watch/45362778" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php wp_footer(); ?>
</body>
</html>