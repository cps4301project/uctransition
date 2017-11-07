<?
// Enable Thumbnail Support
add_theme_support( 'post-thumbnails' );

// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS
	add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
	function twbs_load_styles() {
		// Bootstrap
		wp_register_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
		wp_enqueue_style('bootstrap-styles');
		// Font Awesome
		wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');
		// Animate.css
		wp_register_style('animate-styles', get_template_directory_uri() . '/css/animate.css', array(), null, 'all');
		wp_enqueue_style('animate-styles');
		// Theme Styles
		wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
		wp_enqueue_style('theme-styles');
	}

	// Load Javascript
	add_action('wp_enqueue_scripts', 'twbs_load_scripts', 12);
	function twbs_load_scripts() {
		// jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, false);
		wp_enqueue_script('jquery');
		// Popper.js
		wp_register_script('popper-scripts', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'), null, true);
		wp_enqueue_script('popper-scripts');
		// Parallax Scrolling
		wp_register_script('parallax-scroll', get_template_directory_uri() . '/js/parallax.min.js', array(), null, 'all');
		wp_enqueue_script('parallax-scroll');
		// Bootstrap
		wp_register_script('bootstrap-scripts', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('bootstrap-scripts');
		// Aniview jQuery
		wp_register_script('aniview-scripts', get_template_directory_uri() . '/js/jquery.aniview.js', array(), null, 'all');
		wp_enqueue_script('aniview-scripts');
		// Custom Scripts
		wp_register_script('my-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, 'all');
		wp_enqueue_script('my-scripts');
	}

} // end if !is_admin

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Register the Navigation Menu
function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

// Build the Bootstrap nav menu
function bootstrap_nav() {
	wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'header-menu',
        'depth'             => 2,
        'container'         => 'div',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );
}

// Change the styling of the automaic read-more in excerpt
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Change the Excerpt Length
function wpse_filter_excerpt_length( $length ) {
    if ( is_front_page() ) {
        return 80; // change this to number of words you want on homepage.
    } else {
        return $length;
    } 
}
add_filter( 'excerpt_length', 'wpse_filter_excerpt_length', 999 );

?>