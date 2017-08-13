<?php
/**
 * davide functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package davide
 */

if ( ! function_exists( 'davide_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function davide_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on davide, use a find and replace
		 * to change 'davide' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'davide', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => __( 'Main Menu', 'davide' ),
		) );


		function default_menu(){
			echo "<ul class='header__menu-nav'>";
			echo "<li><a href=".home_url().">Home</a></li>";
			echo "</ul>";
		}
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'davide_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		add_theme_support( 'post-formats', array( 'video', 'image' ) );




		$labels = array(
		'name'               => __( 'Service', 'davide' ),
		'singular_name'      => __( 'Service', 'davide'  ),
		'menu_name'          => __( 'Services', 'davide' ),
		'name_admin_bar'     => __( 'Service', 'davide' ),
		'add_new'            => __( 'Add New', 'davide' ),
		'add_new_item'       => __( 'Add New Service', 'davide' ),
		'new_item'           => __( 'New Service', 'davide' ),
		'edit_item'          => __( 'Edit Service', 'davide' ),
		'view_item'          => __( 'View Service', 'davide' ),
		'all_items'          => __( 'All Services', 'davide' ),
		'search_items'       => __( 'Search Services', 'davide' ),
		'parent_item_colon'  => __( 'Parent Services:', 'davide' ),
		'not_found'          => __( 'No Services found.', 'davide' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'davide' )
	);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'davide'  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'services' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'      	=> 'dashicons-smiley',
			'supports'           => array( 'title' )
		);

		register_post_type( 'devide_services', $args );




		$labels = array(
		'name'               => __( 'Portfolio', 'davide' ),
		'singular_name'      => __( 'Portfolio', 'davide'  ),
		'menu_name'          => __( 'Portfolios', 'davide' ),
		'name_admin_bar'     => __( 'Portfolio', 'davide' ),
		'add_new'            => __( 'Add New', 'davide' ),
		'add_new_item'       => __( 'Add New Portfolio', 'davide' ),
		'new_item'           => __( 'New Portfolio', 'davide' ),
		'edit_item'          => __( 'Edit Portfolio', 'davide' ),
		'view_item'          => __( 'View Portfolio', 'davide' ),
		'all_items'          => __( 'All Portfolios', 'davide' ),
		'search_items'       => __( 'Search Portfolios', 'davide' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'davide' ),
		'not_found'          => __( 'No Portfolios found.', 'davide' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'davide' )
	);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'davide'  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'portfolio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'      	=> 'dashicons-carrot',
			'supports'           => array( 'title' ,'editor','thumbnail')
		);

		register_post_type( 'devide_portfolios', $args );



		$labels = array(
		'name'               => __( 'Type', 'davide' ),
		'singular_name'      => __( 'Type', 'davide'  ),
		'menu_name'          => __( 'Type', 'davide' ),
		'name_admin_bar'     => __( 'Type', 'davide' ),
		'add_new'            => __( 'Add New', 'davide' ),
		'add_new_item'       => __( 'Add New Type', 'davide' ),
		'new_item'           => __( 'New Type', 'davide' ),
		'edit_item'          => __( 'Edit Type', 'davide' ),
		'view_item'          => __( 'View Type', 'davide' ),
		'all_items'          => __( 'All Types', 'davide' ),
		'search_items'       => __( 'Search Types', 'davide' ),
		'parent_item_colon'  => __( 'Parent Types:', 'davide' ),
		'not_found'          => __( 'No Types found.', 'davide' ),
		'not_found_in_trash' => __( 'No Types found in Trash.', 'davide' )
	);

	$args = array(
		'labels'          => $labels,
        'description'     => __( 'Description.', 'davide'  ),
		'public'          => true,
		'hierarchical' 	  => true,
	);

	register_taxonomy( 'devide_type','devide_portfolios', $args );



		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'davide_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function davide_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'davide_content_width', 640 );
}
add_action( 'after_setup_theme', 'davide_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devide_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Devide Sidebar', 'davide' ),
		'id'            => 'devide-widget',
		'description'   => __( 'Add Devide Sidebar here.', 'davide' ),
		'before_widget' => '<div class="sidebar__item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="sidebar__heading heading_marked">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'devide_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function davide_scripts() {

	wp_enqueue_style( 'davide-bootstrap', get_template_directory_uri().'/libs/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'davide-awesome', get_template_directory_uri().'/libs/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'davide-magnific', get_template_directory_uri().'/libs/magnific-popup/dist/magnific-popup.css' );
	wp_enqueue_style( 'davide-animate', get_template_directory_uri().'/libs/animate.css/animate.min.css' );
	wp_enqueue_style( 'davide-css', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'davide-style', get_stylesheet_uri() );


	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'davide-imagesloaded', get_template_directory_uri() . '/libs/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-masonry', get_template_directory_uri() . '/libs/masonry/dist/masonry.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-magnific', get_template_directory_uri() . '/libs/magnific-popup/dist/jquery.magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-validation', get_template_directory_uri() . '/libs/jquery-validation-1.16.0/dist/jquery.validate.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-bigtext', get_template_directory_uri() . '/libs/BigText/dist/bigtext.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-jarallax', get_template_directory_uri() . '/libs/jarallax/dist/jarallax.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-waypoints', get_template_directory_uri() . '/libs/waypoints/lib/jquery.waypoints.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'davide-smoothscroll', get_template_directory_uri() . '/libs/smoothscroll/smoothscroll.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-common', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

  


	wp_enqueue_script( 'davide-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'davide_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * cmb2 required file */
require get_template_directory() . '/inc/cmb2/init.php';
require get_template_directory() . '/inc/cmb2/functions.php';
require get_template_directory() . '/inc/cmb2/cmb2-fontawesome-picker.php';
/**
 * custom widget development */
require get_template_directory() . '/inc/custom-widget.php';
/**
 * Visual Composer Shortcode */
require get_template_directory() . '/inc/vc-shortcode.php';

/**
 * ACF */
require get_template_directory() . '/inc/options.php';


/**
 * ACF */
require get_template_directory() . '/inc/plugin-activation/init.php';




/*Comment form redesign*/ 



add_filter('comment_form_default_fields', 'comet_comment_form');

function comet_comment_form( $default ){
	
	$default['author'] = '<div class="form-double">
                  <div class="form__item">
                    <input name="author" type="text" placeholder="Name" class="name required input input_placeholder">
                  </div>';

    $default['email'] = '<div class="form__item">
                    <input name="email" type="text" placeholder="Email" class="email required input input_placeholder">
                  </div>';

    $default['sujan'] = '<div class="form__item">
                  <textarea placeholder="Comment" class="message input input_placeholder" name="comment"></textarea>
                </div>';

    $default['url'] = '';

    $default['address'] = '';

	return $default;

}


add_filter('comment_form_defaults', 'comet_default_comment_form');

function comet_default_comment_form( $default_info ){


	if( !is_user_logged_in() ){
		$default_info['comment_field'] = '';
	}else {
		$default_info['comment_field'] = '<div class="comment-form__item form__item">
                  <textarea placeholder="Comment" class="message input input_placeholder" name="comment"></textarea>
                </div>';
	}
	

	$default_info['submit_button'] = '<button class="btn btn_cta btn_wide" type="submit">Add comment</button>';

	$default_info['submit_field'] = '<div class="form-submit text-right">%1$s %2$s</div>';

	$default_info['comment_notes_before'] = '';

	$default_info['title_reply'] = 'leave a comment';

	$default_info['title_reply_before'] = '<h5 class="upper">';
	$default_info['title_reply_after'] = '</h5>';

	return $default_info;
}




add_action('comment_post', 'address_save_korbo');

function address_save_korbo( $id ){

	add_comment_meta($id, 'address_field', $_POST['address']);

}


add_action('add_meta_boxes_comment', 'address_field_add');

function address_field_add(){
	add_meta_box('address', 'Address', 'address_callback', 'comment', 'normal', 'high');
}


function address_callback( $comment ){
	?>
	<table class="form-table editcomment">
		<tbody>
			<tr>
				<td class="first"><label for="name">Address:</label></td>
				<td><input name="newcomment_address" size="30" value="<?php echo get_comment_meta($comment->comment_ID, 'address_field', true); ?>" id="name" type="text"></td>
			</tr>
		</tbody>
	</table>
	<?php 
}



function test_something_show_korabo($comment, $arg, $depth){

	$GLOBALS['comment'] = $comment;


	?>

	
    <li class="comment">
		<div class="comment__body">
			<header class="comment__header">
				<?php 
	          		echo get_avatar( $comment, 80, '', '', array(
	          			'class' => 'author-photo photo_circle'
	          		) ); 

	          	?>
				<div class="comment__info">
					<a class="comment__author" href="#"><?php echo get_comment_author(); ?></a>
					<a class="comment__reply" href="#"><?php 
					comment_reply_link(
						array_merge($arg, array(
							'depth' => $depth, 
							'max_depth' => $arg['max_depth']
						))
					);
				?></a>
					<div class="comment__date date"><?php comment_date('d, F Y'); ?> @ <?php comment_time('g:i a'); ?></div>
				</div>
			</header>
			<div class="comment__content">
				<?php comment_text(); ?>
			</div>
		</div>
	</li>

	<?php 
}
