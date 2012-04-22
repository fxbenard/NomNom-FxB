<?php
ob_start();

/* Localization. */
	add_action('after_setup_theme', 'fxb_setup');

function fxb_setup() {
load_child_theme_textdomain('nomnom', STYLESHEETPATH . '/languages');}
		

// Load the extra layout and styles from their own file
require_once(STYLESHEETPATH . '/includes/theme-options.php');
require_once(STYLESHEETPATH . '/adsense-options.php');

// Redirect to Theme FAQ on Activation
if ( is_admin() && isset($_GET['activated'] ) && $pagenow =="themes.php" )
	wp_redirect( 'themes.php?page=nomnom-theme-options' );

// Include the custom widgets
	include('includes/helper.php');
	include('includes/widget-func.php');
	include('includes/twitter.php');
	include('includes/blog-author.php');
	include('includes/flickr.php');
	include('includes/nomnom-slider/slider.php');
	include('custom-functions.php');
	

// Call the various .js files and shortcode css
function add_nomnom_scripts(){
	wp_register_style('color_options.css', get_stylesheet_directory_uri().'/includes/color_options_css.php');
}
function color_options_script ()
{
	wp_register_style('colorpicker.css', get_stylesheet_directory_uri().'/colorpicker/css/colorpicker.css');
	wp_register_script('color_options_minified.js', get_stylesheet_directory_uri().'/includes/js/color_options_minified.js', array('jquery'));
	wp_register_script('color-picker-js-files-minified.js', get_stylesheet_directory_uri().'/colorpicker/js/color-picker-js-files-minified.js', array('jquery'));	
	wp_enqueue_style('colorpicker.css');
	wp_enqueue_script('color_options_minified.js');
	wp_enqueue_script('color-picker-js-files-minified.js');
}
if (is_admin())
	add_action('init','color_options_script');
	add_action('init','add_nomnom_scripts');


// Add a second menu
register_nav_menus( array(
	'secondary' => __( 'Top Menu (Above the Header)', 'nomnom'),
	'primary' => __( 'Primary Menu', 'nomnom' ),
	'third' => __( 'Footer Menu', 'nomnom' ),
 ) );

// Add a sidebar to single posts view - http://transformationpowertools.com
add_filter('body_class', 'blacklist_body_class', 20, 2);
	function blacklist_body_class($wp_classes, $extra_classes) {
	if( is_single() ) :
// List of the classes to remove from the WP generated classes
$blacklist = array('singular');
// Filter the body classes
  foreach( $blacklist as $val ) {
    if (!in_array($val, $wp_classes)) : continue;
    else:
      foreach($wp_classes as $key => $value) {
      if ($value == $val) unset($wp_classes[$key]);
      }
    endif;
  }
endif;   // Add the extra classes back untouched
return array_merge($wp_classes, (array) $extra_classes);
}

// Excerpt Length - Adding this because of the different layouts, change 40 to what you like
function change_excerpt_length()
{
  function new_excerpt_length($length){return 40;}
  add_filter('excerpt_length', 'new_excerpt_length');
}
add_action('after_setup_theme', 'change_excerpt_length');

// Set the dimensions for the thumbnails displayed on the homepage
	add_theme_support( 'post-thumbnails' );
    add_image_size('excerpt-thumbnail', 120, 120, true);

// Show Wp-PageNavi when it's active - changed twentyeleven_content_nav in index.php to twentyeleven_child_content_nav
function twentyeleven_child_content_nav( $nav_id ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
				<?php /* add wp-pagenavi support for posts */ ?>
		<?php if(function_exists('wp_pagenavi') ) : ?>
			<?php wp_pagenavi(); ?>
			<br />
		<?php else: ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif; ?>
	<?php endif;
}

// Add a Theme Options link to Admin Bar
function theme_options_link()
{
  global $wp_admin_bar, $wpdb;
  if (!is_super_admin() || !is_admin_bar_showing())
	  return;
  $wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Theme Options', 'Theme Options'), 'href' => home_url() . '/wp-admin/themes.php?page=theme_options'));
  $wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('NomNom Options', 'NomNom Options'), 'href' => home_url() . '/wp-admin/themes.php?page=nomnom-theme-options'));
}
add_action('admin_bar_menu', 'theme_options_link', 1000);

// Register our extra sidebar for the three column layouts
register_sidebar( array(
	'name' => __( 'Extra Sidebar', 'twentyeleven' ),
	'id' => 'extra-sidebar',
	'description' => __( 'The sidebar for three column layouts only', 'twentyeleven' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Copywrite date based on first and last published post
function nomnom_copyright() {
	global $wpdb;
$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
$output = '';
if($copyright_dates) {
	$copyright = "&copy; " . $copyright_dates[0]->firstdate;
	if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
	$copyright .= '-' . $copyright_dates[0]->lastdate;
}
	$output = $copyright;
}
return $output;
}

// Allows us to edit the dark default color scheme http://transformationpowertools.com
function twentyelevenchild_enqueue_color_scheme() {
    $options = twentyeleven_get_theme_options();
    $color_scheme = $options['color_scheme'];
    if ( 'dark' == $color_scheme )
        wp_enqueue_style( 'dark_child', get_stylesheet_directory_uri() . '/includes/css/dark-default.css', array(), null );
    do_action( 'twentyelevenchild_enqueue_color_scheme', 'dark_child' );
}
add_action( 'wp_enqueue_scripts', 'twentyelevenchild_enqueue_color_scheme', 11);

