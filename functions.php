<?php
/**
 * USA Rugby College Sevens functions and definitions
 *
 * @package USA Rugby College Sevens
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'usa_rugby_college_sevens_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function usa_rugby_college_sevens_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on USA Rugby College Sevens, use a find and replace
	 * to change 'usa-rugby-college-sevens' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'usa-rugby-college-sevens', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'usa-rugby-college-sevens' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'usa_rugby_college_sevens_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // usa_rugby_college_sevens_setup
add_action( 'after_setup_theme', 'usa_rugby_college_sevens_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function usa_rugby_college_sevens_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar-Nav', 'usa-rugby-college-sevens' ),
		'id'            => 'sidebar-nav',
		'before_widget' => '<li class="nav-item">',
		'after_widget'  => '</li>',
		'before_title'  => '<span class="no-show widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home-Feature', 'usa-rugby-college-sevens' ),
		'id'            => 'home-feature',
		'before_widget' => '<div class="home-feature">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="no-show widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Feature', 'usa-rugby-college-sevens' ),
		'id'            => 'top-feature',
		'before_widget' => '<div id="top-feature">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="no-show widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'usa-rugby-college-sevens' ),
		'id'            => 'footer',
		'before_widget' => '<div id="footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="no-show widget-title">',
		'after_title'   => '</span>',
	) );
}
add_action( 'widgets_init', 'usa_rugby_college_sevens_widgets_init' );

add_theme_support( 'post-thumbnails' ); 

add_image_size( 'news', 980, 450, true ); 

add_image_size( 'team-logo', 100, 100, false ); 



/**
 * Enqueue scripts and styles
 */
function usa_rugby_college_sevens_scripts() {

	wp_enqueue_style( 'usa-rugby-college-sevens-style', get_stylesheet_uri() );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, '1.1', 'all' );

	wp_enqueue_script( 'usa-rugby-college-sevens-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'usa-rugby-college-sevens-functions', get_template_directory_uri() . '/js/jquery.funcs.js', array(), '1.0', true );

	wp_enqueue_script( 'usa-rugby-college-sevens-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true );

	wp_enqueue_script( 'usa-rugby-college-sevens-isotope', get_template_directory_uri() . '/js/isotope.js', array(), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'usa-rugby-college-sevens-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	if (is_home()) { 
		wp_enqueue_script( 'usa-rugby-college-sevens-big-vid', get_template_directory_uri() . '/js/jquery.videoBG.js', array(), '1.0', true );
		wp_enqueue_script( 'usa-rugby-college-home-js', get_template_directory_uri() . '/js/home.js', array(), '1.0', true );
	} 

}



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'usa_rugby_college_sevens_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// show characters in excerpt
function excerpt_count_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:0px;right:5px;color:#666;\"><small>Excerpt length should not exeed 270 characters. Current: </small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"excerpt_counter\" readonly=\"\" style=\"background:#fff;\"> <small>character(s).</small></div>");
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
     jQuery("#excerpt").keyup( function() {
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');



