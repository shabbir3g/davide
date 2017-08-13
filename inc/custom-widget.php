<?php 


	class devide_custom_widget extends WP_Widget{
		
		
		
		public function __construct(){
			
			
			parent::__construct('devide_custom_widget','Davide Recent Post',array(
				'description'	=> 'You can add your details here'
			));
			
			
		}
		
		public function widget($first, $second){


		$title = $second['title'];
		
		
		?>
			
		<?php echo  $first['before_widget']; ?>
			<?php echo  $first['before_title']; ?><?php echo $title; ?><?php echo  $first['after_title']; ?>
			<div>
				


				<?php 

				$extrawidget = new WP_Query(array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 3,
				));


				while($extrawidget->have_posts()): $extrawidget->the_post();  ?>
				<div class="post-preview">
					<?php 
					the_post_thumbnail('thumbnail', array(
					'class' => 'post-preview__photo photo_circle'

					)); 
					?>
					<div class="post-preview__info">
						<span class="post-preview__link"><a class="link_underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
						<div class="date"><?php the_time('F, j, Y'); ?>December 24, 2016</div>
					</div>
				</div>
				<?php endwhile; ?>
				



			</div>
			<?php echo  $first['after_widget'];
			
			}
			
			
			
		public function form($second){
			
			
			$title = isset($second['title']) ? $second['title'] : '';
			
			?>
			
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
			</p>
			
			
			
			
			<?php 
			
		}
	}
	add_action('widgets_init',function(){
		register_widget('devide_custom_widget');
	});


?>