<?php
// Add options page stylesheet
function add_nomnom_admin_scripts(){
	wp_register_style('theme-options-custom.css', get_stylesheet_directory_uri().'/includes/css/theme-options-custom.css');
	wp_enqueue_style('theme-options-custom.css');
}
add_action('init','add_nomnom_admin_scripts');

// Load the options page js
	wp_enqueue_script('jquery-ui-tabs');
	
// Add a class to the body element for all custom layouts (saves alot of time in the stylesheet)
function my_body_classes( $classes ) {
    $options = twentyeleven_get_theme_options();
    $current_layout = $options['theme_layout'];
	if ( in_array( $current_layout, array( 'narrow-content-left-sidebar', 'narrow-content-right-sidebar', 'sidebar-content-sidebar',
	'sidebar-sidebar-content', 'content-sidebar-sidebar', 'content-no-sidebar') ) )
    $classes[] = 'custom-layouts';
    $classes[] = $current_layout;
    return $classes;
}

add_filter( 'body_class', 'my_body_classes' );

/*----------------------------------------------------------------------
	Add the new Layouts to Twenty Eleven theme options
-----------------------------------------------------------------------*/
add_filter( 'twentyeleven_layouts', 'nomnom_twentyeleven_layouts' );
add_filter( 'twentyeleven_layout_classes', 'my_twentyeleven_layout_classes', 10, 2 );

function nomnom_twentyeleven_layouts( $layouts ) {
// Wider one-column layout
	$layouts['content-no-sidebar'] = array(
		'value' => 'content-no-sidebar',
		'label' => __( 'One-column, 890px Wide', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/content-wide.png',
);
// Narrow layout with left sidebar
	$layouts['narrow-content-left-sidebar'] = array(
		'value' => 'narrow-content-left-sidebar',
		'label' => __( '875px, Left Sidebar', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/narrow-left-sidebar.png',
);
// Narrow layout with right sidebar
	$layouts['narrow-content-right-sidebar'] = array(
		'value' => 'narrow-content-right-sidebar',
		'label' => __( '875px, Right Sidebar', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/narrow-right-sidebar.png',
);
// Three Column Layout
	$layouts['sidebar-content-sidebar'] = array(
		'value' => 'sidebar-content-sidebar',
		'label' => __( '3 Column, Left Right Sidebars', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/3-column.png',
);
// Three Column Layout 2 left
	$layouts['sidebar-sidebar-content'] = array(
		'value' => 'sidebar-sidebar-content',
		'label' => __( '3 Column, 2 Left Sidebars', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/2-left.png',
);
// Three Column Layout
	$layouts['content-sidebar-sidebar'] = array(
		'value' => 'content-sidebar-sidebar',
		'label' => __( '3 Column, 2 Right Sidebars', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/layouts/2-right.png',
);
	return $layouts;
}

function my_twentyeleven_layout_classes( $classes, $current_layout ) {
	// Wider one-column layout
		if ( 'content-no-sidebar' == $current_layout )
		return array( 'wide-column', 'content-no-sidebar' );
	else
	// Narrow layout with left sidebar
		if ( 'narrow-content-left-sidebar' == $current_layout )
		return array( 'narrow-sidebar-left', 'narrow-content-left-sidebar' );
	else
	// Narrow layout with right sidebar
		if ( 'narrow-content-right-sidebar' == $current_layout )
		return array( 'narrow-sidebar-right', 'narrow-content-right-sidebar' );	
	else
	// Three Column layout with left and right sidebars
		if ( 'sidebar-content-sidebar' == $current_layout )
		return array( 'three-column', 'three-column' );
	else
	// 3 Column layout with two left sidebars
		if ( 'sidebar-sidebar-content' == $current_layout )
		return array( 'two-left', 'two-left' );
	else
	// 3 Column layout with two right sidebars
		if ( 'content-sidebar-sidebar' == $current_layout )
		return array( 'two-right', 'two-right' );
	return $classes;
}

/*---------------------------------------------------------------- 
	Add the color schemes to Twenty Eleven theme options 
------------------------------------------------------------------*/
add_filter( 'twentyeleven_color_schemes', 'nomnom_color_schemes' );
add_action( 'twentyeleven_enqueue_color_scheme', 'twentyeleven_enqueue_color_scheme_all' );

function nomnom_color_schemes( $color_schemes ) {
	// Orange
	$color_schemes['orange'] = array(
		'value' => 'orange',
		'label' => __( 'Orange', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/orange.png',
		'default_link_color' => '#FFA500',
	);
	// Sandstone
	$color_schemes['sandstone'] = array(
		'value' => 'sandstone',
		'label' => __( 'Sandstone', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/sandstone.png',
		'default_link_color' => '#dec5ad'
	);
	// Pink
	$color_schemes['pink'] = array(
		'value' => 'pink',
		'label' => __( 'pink', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/pink.png',
		'default_link_color' => '#A14875'
	);
	// Mauve
	$color_schemes['mauve'] = array(
		'value' => 'mauve',
		'label' => __( 'Mauve', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/mauve.png',
		'default_link_color' => '#ca97cc'
	);
	// lavender
	$color_schemes['lavender'] = array(
		'value' => 'lavender',
		'label' => __( 'Lavender', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/lavender.png',
		'default_link_color' => '#C7AFED'
	);
	// Light Blue
	$color_schemes['light-blue'] = array(
		'value' => 'light-blue',
		'label' => __( 'Light Blue', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/light-blue.png',
		'default_link_color' => '#5685c7'
	);
	// Blue
	$color_schemes['blue'] = array(
		'value' => 'blue',
		'label' => __( 'Blue', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/blue.png',
		'default_link_color' => '#4a6cc1'
	);
	// Custom
	$color_schemes['charcoal'] = array(
		'value' => 'charcoal',
		'label' => __( 'Charcoal', 'twentyeleven' ),
		'thumbnail' => get_stylesheet_directory_uri() . '/images/colors/charcoal.png',
		'default_link_color' => '#666'
	);
	return $color_schemes;
}

function twentyeleven_enqueue_color_scheme_all( $color_scheme ) {
	// Orange
	if ( 'orange' == $color_scheme )
		wp_enqueue_style( 'orange', get_stylesheet_directory_uri() . '/includes/css/orange.css', array(), null );
	// Sandstone
	elseif ( 'sandstone' == $color_scheme )
		wp_enqueue_style( 'sandstone', get_stylesheet_directory_uri() . '/includes/css/sandstone.css', array(), null );
	// Pink
	elseif ( 'pink' == $color_scheme )
		wp_enqueue_style( 'pink', get_stylesheet_directory_uri() . '/includes/css/pink.css', array(), null );
	// Mauve
	elseif ( 'mauve' == $color_scheme )
		wp_enqueue_style( 'mauve', get_stylesheet_directory_uri() . '/includes/css/mauve.css', array(), null );
	// Lavender
	elseif ( 'lavender' == $color_scheme )
		wp_enqueue_style( 'lavender', get_stylesheet_directory_uri() . '/includes/css/lavender.css', array(), null );
	// Light Blue
	elseif ( 'light-blue' == $color_scheme )
		wp_enqueue_style( 'light-blue', get_stylesheet_directory_uri() . '/includes/css/light-blue.css', array(), null );
	// Blue
	elseif ( 'blue' == $color_scheme )
		wp_enqueue_style( 'blue', get_stylesheet_directory_uri() . '/includes/css/blue.css', array(), null );
	// Custom
	elseif ( 'charcoal' == $color_scheme )
		wp_enqueue_style( 'charcoal', get_stylesheet_directory_uri() . '/includes/css/charcoal.css', array(), null );


	$color_font_option = get_option ("nomnom_color_font_option");
//	if (!is_admin() && !$color_font_option['default'])
		wp_enqueue_style('color_options.css');

}


/* Create the theme options page
----------------------------------------------- */
add_action( 'admin_menu', 'nomnom_admin_menu' );
function nomnom_admin_menu() {
    add_theme_page( 'NomNom Options', 'NomNom Options', 'edit_theme_options', 'nomnom-theme-options', 'nomnom_theme_options' );
}
function nomnom_theme_options() {
?>
<script>
			
(function($) {
	$(function() {
		$( "#tabs" ).tabs();
	});
})(jQuery);
</script>
<script type="text/javascript">
      (function(){
        var twitterWidgets = document.createElement('script');
        twitterWidgets.type = 'text/javascript';
        twitterWidgets.async = true;
        twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
        document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
      })();
</script>
<!-- Begin the html for the theme options section -->
    <div id="theme-admin" class="wrap">
	    <?php     //Shows the page's name and an icon if one has been provided
	screen_icon(); echo "<h2>" . get_current_theme() . __( ' - Theme Options' ) . "</h2>";
	?>
<br>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Theme Info</a></li>
		<li><a href="#tabs-2">General Options</a></li>
		<li><a href="#tabs-3">Font & Color Options</a></li>
		<li><a href="#tabs-4">Slider Options</a></li>
		<li><a href="#tabs-5">Custom CSS</a></li>
		<li><a href="#tabs-6">Help & Tips</a></li>
		<li><a href="#tabs-7">Site Preview</a></li>
	</ul>
	<div id="tabs-1">		
		<?php fetch_template ("general_info_options", $data); ?>
	</div> <!-- end tab 1 -->
	
	<div id="tabs-2">
		<?php fetch_template ("general_options", $data); ?>
		
	</div><!-- end tab 2 -->

	<div id="tabs-3">
		<?php
			/* default color options */
			$color_font_option = array(
				"default" => 1
			);
			
			$color_option = array (
				/* top nav menu */
				"top_nav_bg" 			=> "#121212",
				"top_nav_color"			=> "#ffffff",			
				"top_nav_hover_bg"		=> "#E8E8E8",
				"top_nav_hover_color"	=> "#373737",
				"top_nav_secondary"		=> "#000000",
				
				/* bottom nav menu */
				"bottom_nav_bg"			=> "#121212",
				"bottom_nav_color"		=> "#ffffff",			
				"bottom_nav_hover_bg"	=> "#E8E8E8",
				"bottom_nav_hover_color"=> "#373737",
				"bottom_nav_secondary"	=> "#000000",
				
				/* text */
				"text"					=> "#373737",
				"headers_text"			=> "#222222",
				"links"					=> "#1982D1",
				"link_hover"			=> "#1982D1",				
			);
			
							/* fonts */
			$fonts = array(
				"main_font" 			=> "Verdana",
				"widget_font" 			=> "Verdana",
				"widget_title_font" 	=> "Verdana",
				"blog_title_font"		=> "Verdana",
				"index_post_title_font"	=> "Verdana",
				"single_post_title_font"=> "Verdana",
				"widget_body_font"		=> "Verdana",				
				"main_font_size"		=> "14",
				"widget_font_size"		=> "14",
				"blog_title_font_size"	=> "28", 
				"index_title_font_size"	=> "24",	
				"widget_title_font_size"=> "14", 
				"widget_body_font_size"	=> "12"
			);

			
			
			add_option ("nomnom_color_options", $color_option );
			add_option ("nomnom_font_options", $fonts );
			add_option ("nomnom_color_font_option", $color_font_option );

			
			add_filter( 'my_available_fonts', "add_fonts", 21 ,1 );			
			$data['fonts'] = get_nomnom_available_fonts ();
			
			$data['options'] = get_option ("nomnom_color_options");
			$data['font_options'] = get_option ("nomnom_font_options");
			$data['color_font_options'] = get_option ("nomnom_color_font_option");
			
			fetch_template ("color_options", $data);
		?>
	</div><!-- end tab 3 -->
	
	<div id="tabs-4">
		<?php fetch_template ("slider_options", $data); ?>
	</div><!-- end tab 4 -->

	<div id="tabs-5">
		<?php fetch_template ("customcss_options", $data); ?>
	</div><!-- end tab 5 -->
	
<!-- Theme Help -->
	<div id="tabs-6">
		<?php fetch_template ("help_options", $data); ?>		
	</div><!-- end tab 6 -->
	
<!-- site preview -->
	<div id="tabs-7">
		<?php fetch_template ("preview_options", $data); ?>		
	</div><!-- end tab 7 -->

	</div> <!-- #tabs -->
</div><!-- wrap -->

<script language="javascript">
	jQuery(document).ready(function (){	
		

		jQuery("#nomnom_update_nomnom_default_menu").click(function(e){
				
	
				var data = {
					display					: jQuery("#nomnom_default_menu").val(),
					action					: 'nomnom_update_nomnom_default_menu',
					whatever				: Math.random()
					
				};
	
					
				var bodyContent = jQuery.ajax({
					  url: ajaxurl,
					  global: false,
					  type: "POST",
					  data: data,
					  dataType: "html",
					  async: false,	
					  success: function(result){
					  	alert (result);
					  }
				}).responseText;
			});									 


		jQuery("#nomnom_update_css_options").click(function(e){
			$("#css_options_msg").hide("slow");
				
	
				var data = {
					custom_css				: jQuery("#nomnom_custom_css").val(),
					action					: 'nomnom_update_css_options',
					whatever				: Math.random()
					
				};
	
					
				var bodyContent = jQuery.ajax({
					  url: ajaxurl,
					  global: false,
					  type: "POST",
					  data: data,
					  dataType: "html",
					  async: false,	
					  success: function(result){
					  	 $("#css_options_msg").html("Custom CSS Saved");
						 $("#css_options_msg").show("normal");
					  }
				}).responseText;
			});

			
		jQuery("#nomnom_resize_header").click(function(e){
				
				$("#header_options_msg").hide("slow");
				
				var data = {
					width					: jQuery("#resize_header_options_width").val(),
					height 					: jQuery("#resize_header_options_height").val(),
					action					: 'nomnom_resize_header',
					whatever				: Math.random()
					
				};
	
					
				var bodyContent = jQuery.ajax({
					  url: ajaxurl,
					  global: false,
					  type: "POST",
					  data: data,
					  dataType: "html",
					  async: false,	
					  success: function(result){
					  	$("#header_options_msg").html(result);
					  	$("#header_options_msg").show("normal");
					  }
				}).responseText;
			});		
		
		jQuery("#nomnom_update_options").click(function(e){
				
				 $("#theme_options_msg").hide("normal");


				var data = {
					display					: jQuery("#nomnom_default_menu").val(),
					width					: jQuery("#resize_header_options_width").val(),
					height 					: jQuery("#resize_header_options_height").val(),
					post_thumb				: jQuery("#nomnom_post_thumbnail").val(),
					post_avatar				: jQuery("#nomnom_post_avatar").val(),
					post_related			: jQuery("#nomnom_post_related").val(),
					show_bubble				: jQuery("#nomnom_show_bubble").val(),
					comment_form			: jQuery("#nomnom_comment_form").val(),
					custom_css				: jQuery("#nomnom_custom_css").val(),
					show_search				: jQuery("#nomnom_show_search").val(),
					
					
					action					: 'nomnom_update_options',
					whatever				: Math.random()
					
				};
	
					
				var bodyContent = jQuery.ajax({
					  url: ajaxurl,
					  global: false,
					  type: "POST",
					  data: data,
					  dataType: "html",
					  async: false,	
					  success: function(result){
					  	 $("#theme_options_msg").html("Options Saved");
						 $("#theme_options_msg").show("normal");
					  }
				}).responseText;
			});	
			
		jQuery("#nomnom_update_slider").click(function(e){
				$("#slider_options_msg").hide ("normal");
				
				var data = {
					slider					: jQuery("#nomnom_has_slider").val(),
					max_count 				: jQuery("#nomnom_slider_max_post").val(),
					cat 					: jQuery("#nomnom_slider_category").val(),
					slider_effects			: jQuery("#slider_effects").val(),
					trans_speed 			: jQuery("#trans_speed").val(),
					image_pause				: jQuery("#image_pause").val(),
					
					
					action					: 'nomnom_update_slider',
					whatever				: Math.random()
					
				};
	
					
				var bodyContent = jQuery.ajax({
					  url: ajaxurl,
					  global: false,
					  type: "POST",
					  data: data,
					  dataType: "html",
					  async: false,	
					  success: function(result){
					  	$("#slider_options_msg").html ("Options saved");
					  	$("#slider_options_msg").show ("normal");
					  }
				}).responseText;
			});									 
									 
	});

</script>
<!-- End nomnom options page -->
<?php
}

add_action( 'wp_ajax_nomnom_resize_header', "nomnom_resize_header" );
add_action( 'wp_ajax_nomnom_update_nomnom_default_menu', "nomnom_update_nomnom_default_menu" );
add_action( 'wp_ajax_nomnom_update_slider', "nomnom_update_slider" );
add_action( 'wp_ajax_nomnom_update_options', "nomnom_update_options" );
add_action( 'wp_ajax_nomnom_update_css_options', "nomnom_update_css_options" );
add_action( 'wp_ajax_nomnom_update_color_options', "nomnom_update_color_options" );
add_action( 'wp_ajax_nomnom_load_default_color_font_options', "nomnom_load_default_color_font_options" );

add_filter('twentyeleven_header_image_height','nomnom_resize_header_height');
add_filter('twentyeleven_header_image_width','nomnom_resize_header_width');

// Default Options
	add_option ('nomnom_default_menu', 1);
	add_option ('nomnom_display_related', 1);
	add_option ('nomnom_display_bubble', 1);
	add_option ('nomnom_comment_form', 1);
	add_option ('nomnom_display_search', 1);

function nomnom_load_default_color_font_options ()
{
	$color_font_option = get_option ("nomnom_color_font_option");
	$font_options = get_option ("nomnom_font_options");

	$color_font_option['default'] = 1;	
	
	$color_option = get_option ("nomnom_color_options");
	
	$default_scheme = twentyeleven_get_default_link_color();

	$color_option['bottom_nav_bg'] = "#242424";
	$color_option['bottom_nav_secondary'] = "#0A0A0A";
	$color_option['bottom_nav_color'] = $default_scheme;
	$color_option['bottom_nav_hover_bg'] = $default_scheme;
	$color_option['bottom_nav_hover_color'] = "#333333";
	

	
	$default_fonts = array(
		"main_font" 			=> "Helvetica Neue",
		"widget_font" 			=> "Helvetica Neue",
		"widget_title_font" 	=> "Helvetica Neue",
		"blog_title_font"		=> "Helvetica Neue",
		"index_post_title_font"	=> "Helvetica Neue",
		"single_post_title_font"=> "Helvetica Neue",
		"widget_body_font"		=> "Helvetica Neue",		
		"main_font_size"		=> "15",
		"widget_font_size"		=> "13",
		"blog_title_font_size"	=> "28", 
		"index_title_font_size"	=> "24",	
		"widget_title_font_size"=> "10",
		"widget_body_font_size" => "13" 
	);
	
	update_option ("nomnom_color_options", $color_option);
	update_option ("nomnom_font_options", $default_fonts);
	update_option ("nomnom_color_font_option", $color_font_option);
	
	echo "<bottom_nav_hover_bg>{$color_option['bottom_nav_hover_bg']}</bottom_nav_hover_bg>";
	
	die ();
}

function nomnom_update_color_options ()
{
	$option = get_option ("nomnom_color_options");
	$font_option = get_option ("nomnom_font_options");
	$color_font_option = get_option ("nomnom_color_font_option");
	
	
	if ($_POST['top_nav_bg'])				$option['top_nav_bg'] 				= $_POST['top_nav_bg'];	
	if ($_POST['top_nav_color']) 			$option['top_nav_color'] 			= $_POST['top_nav_color'];	
	if ($_POST['top_nav_hover_bg'])			$option['top_nav_hover_bg'] 		= $_POST['top_nav_hover_bg'];	
	if ($_POST['top_nav_hover_color'])		$option['top_nav_hover_color'] 		= $_POST['top_nav_hover_color'];	
	if ($_POST['bottom_nav_bg'])			$option['bottom_nav_bg'] 			= $_POST['bottom_nav_bg'];	
	if ($_POST['bottom_nav_color'])			$option['bottom_nav_color'] 		= $_POST['bottom_nav_color'];	
	if ($_POST['bottom_nav_hover_bg'])		$option['bottom_nav_hover_bg'] 		= $_POST['bottom_nav_hover_bg'];	
	if ($_POST['bottom_nav_hover_color'])	$option['bottom_nav_hover_color'] 	= $_POST['bottom_nav_hover_color'];	
	if ($_POST['top_nav_secondary'])		$option['top_nav_secondary'] 		= $_POST['top_nav_secondary'];	
	if ($_POST['bottom_nav_secondary'])		$option['bottom_nav_secondary'] 	= $_POST['bottom_nav_secondary'];	

	/* font */	
	$temp_fonts = array(
				"main_font" 			=> ($_POST['main_font'])? 				($_POST['main_font']):$font_option['main_font'],
				"blog_title_font"		=> ($_POST['blog_title_font'])? 		($_POST['blog_title_font']):$font_option['blog_title_font'],
				"index_post_title_font"	=> ($_POST['index_post_title_font'])? 	($_POST['index_post_title_font']):$font_option['index_post_title_font'],
				"single_post_title_font"=> ($_POST['single_post_title_font'])? 	($_POST['single_post_title_font']):$font_option['single_post_title_font'],
				"widget_body_font"		=> ($_POST['widget_body_font'])? 		($_POST['widget_body_font']):$font_option['widget_body_font'],
				"widget_title_font"		=> ($_POST['widget_title_font'])? 		($_POST['widget_title_font']):$font_option['widget_title_font'],
				
				"main_font_size"		=> ($_POST['main_font_size'])? 			($_POST['main_font_size']):$font_option['main_font_size'],
    			"widget_font_size"		=> ($_POST['widget_font_size'])? 		($_POST['widget_font_size']):$font_option['widget_font_size'],
				"blog_title_font_size"	=> ($_POST['blog_title_font_size'])? 	($_POST['blog_title_font_size']):$font_option['blog_title_font_size'],
				"index_title_font_size"	=> ($_POST['index_title_font_size'])? 	($_POST['index_title_font_size']):$font_option['index_title_font_size'],
				"widget_title_font_size"=> ($_POST['widget_title_font_size'])? 	($_POST['widget_title_font_size']):$font_option['widget_title_font_size'],
				"widget_body_font_size" => ($_POST['widget_body_font_size'])? 	($_POST['widget_body_font_size']):$font_option['widget_body_font_size'],
			);
	
	$color_font_option['default'] = 0;
	
	update_option ("nomnom_color_font_option", $color_font_option);
	update_option ("nomnom_color_options", $option);
	update_option ("nomnom_font_options", $temp_fonts);
	
	echo "Done";
	die ();
}

function nomnom_update_options ()
{
	$resize_header_options = array('width'	=> $_POST['width'], 'height' => $_POST['height']);
	update_option( 'resize_header_options', $resize_header_options );
	update_option( 'nomnom_default_menu', $_POST['display'] );	
	update_option( 'nomnom_display_post_image', $_POST['post_thumb'] );
	update_option( 'nomnom_display_avatar_image', $_POST['post_avatar'] );
	update_option( 'nomnom_display_related', $_POST['post_related'] );
	update_option( 'nomnom_display_bubble', $_POST['show_bubble'] );
	update_option( 'nomnom_comment_form', $_POST['comment_form'] );
	update_option( 'nomnom_display_search', $_POST['show_search'] );


	echo "Nomnom Options updated...";
	die ();
}

function nomnom_update_css_options ()
{
	update_option( 'nomnom_custom_css', $_POST['custom_css'] );

	echo "Custom CSS updated...";
	die ();
}

function nomnom_update_slider ()
{
	update_option ("nomnom_has_slider", $_POST['slider']);
	update_option ("nomnom_slider_featured_category", $_POST['cat']);
	update_option ("nomnom_slider_count", $_POST['max_count']);	
	
	update_option ("nomnom_slider_effects", $_POST['slider_effects']);		
	update_option( 'nomnom_trans_speed', $_POST['trans_speed'] );	
	update_option( 'nomnom_image_pause', $_POST['image_pause'] );		
		
	echo "Nomnom slider updated...";
	die ();
}

function nomnom_update_nomnom_default_menu ()
{
	update_option( 'nomnom_default_menu', $_POST['display'] );	
	echo "Nomnom default menu updated...";
	die ();
}

function nomnom_resize_header_height($size) {
	$options = get_option( 'resize_header_options' );
   	return $options['height'];
}

function nomnom_resize_header_width($size) {
  $options = get_option( 'resize_header_options' );
   	return $options['width'];
}

function nomnom_resize_header ()
{
	$resize_header_options = array('width'	=> $_POST['width'], 'height' => $_POST['height']);
	update_option( 'resize_header_options', $resize_header_options );
	
	echo "Header resized, please upload a new image for changes to take effect...";
	die ();
}

// Add the custom CSS options
function nomnom_css(){
	echo '<style type="text/css">';
	echo get_option('nomnom_custom_css');
	echo '</style>';
}
	add_action('wp_head','nomnom_css');

function nomnom_admin() {
	add_action( 'admin_init', 'register_settings_nomnom' ); 	
}
// register settings
function register_settings_nomnom(){
	register_setting('nomnom_settings','nomnom_custom_css');
}
add_action('admin_menu', 'nomnom_admin');
// end custom CSS options

// Let WordPress know about our settings
add_action( 'admin_init', 'nomnom_register_admin_settings' );
	function nomnom_register_admin_settings() {
    register_setting( 'nomnom-options', 'nomnom-options' );

    // Settings fields and sections
    add_settings_section( 'section_typography', '', 'nomnom_section_typography', 'nomnom-options' );
    add_settings_field( 'primary-font', 'Select font to be used for titles.', 'nomnom_field_primary_font', 'nomnom-options', 'section_typography' );
}

function nomnom_section_typography() {
    echo '';
}
// Add the Google Fonts
function get_nomnom_available_fonts() {
    $fonts = array(
        'Arial' => array(
            'name' => 'Arial',
            'import' => '',
            'css' => "font-family: Arial, sans-serif;"
        ),
		'Helvetica Neue' => array(
		'name' => 'Helvetica Neue',
		'import' => '',
		'css' => "font-family: 'Helvetica Neue', sans-serif;"
        ),
        'Allan' => array(
            'name' => 'Allan',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Allan:700);',
            'css' => "font-family: 'Allan', cursive;"
        ),
        'Allerta' => array(
            'name' => 'Allerta',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Allerta);',
            'css' => "font-family: 'Allerta', sans-serif;"
        ),
        'Arimo' => array(
            'name' => 'Arimo',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Arimo);',
            'css' => "font-family: 'Arimo', sans-serif;"
        ),
'Droid Sans' => array(
	'name' => 'Droid Sans',
	'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Sans);',
	'css' => "font-family: 'Droid Sans', sans-serif;"
),
        'IM Fell Double Pica SC' => array(
            'name' => 'IM Fell Double Pica SC',
            'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC);',
            'css' => "font-family: 'IM Fell Double Pica SC', serif;"
        ),	
        'Josefin Sans' => array(
            'name' => 'Josefin Sans',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans);',
            'css' => "font-family: 'Josefin Sans', sans-serif;"
        ),
'Lato' => array(
	'name' => 'Lato',
	'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:400italic);',
	'css' => "font-family: 'Lato', sans-serif;"
),
        'Lobster' => array(
            'name' => 'Lobster',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Lobster);',
            'css' => "font-family: 'Lobster', cursive;"
        ),
		'Maiden Orange' => array(
			'name' => 'Maiden Orange',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maiden+Orange);',
			'css' => "font-family: 'Maiden Orange', serif;"
        ),
        'Molengo' => array(
            'name' => 'Molengo',
            'import' => '@import url(http://fonts.googleapis.com/css?family=Molengo);',
            'css' => "font-family: 'Molengo', sans-serif;"
        ),
'Playfair' => array(
	'name' => 'Playfair',
	'import' => '@import url(http://fonts.googleapis.com/css?family=Playfair+Display);',
	'css' => "font-family: 'Playfair Display', serif;"
),
		'PT Sans Narrow' => array(
			'name' => 'PT Sans Narrow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Narrow);',
			'css' => "font-family: 'PT Sans Narrow', sans-serif;"
        ),
        'Raleway' => array(
			'name' => 'Raleway',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Raleway:100);',
			'css' => "font-family: 'Raleway', sans-serif;"
        ),
'Rokkitt' => array(
	'name' => 'Rokkitt',
	'import' => '@import url(http://fonts.googleapis.com/css?family=Rokkitt);',
	'css' => "font-family: 'Rokkitt', serif;"
),
		'Smythe' => array(
			'name' => 'Smythe',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Smythe);',
			'css' => "font-family: 'Smythe', cursive;"
        ),
'Ubuntu' => array(
	'name' => 'Ubuntu',
	'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu);',
	'css' => "font-family: 'Ubuntu', sans-serif;"
),
		'Verdana' => array(
			'name' => 'Verdana',
			'import' => '',
			'css' => "font-family: Verdana,Arial,sans-serif;"
        ),

		'Vollkorn' => array(
			'name' => 'Vollkorn',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vollkorn);',
			'css' => "font-family: 'Vollkorn', sans-serif;"
        ),
		'Walter Turncoat' => array(
			'name' => 'Walter Turncoat',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Walter+Turncoat);',
			'css' => "font-family: 'Walter Turncoat', cursive;"
        ),
        'Yanone Kaffeesatz' => array(
			'name' => 'Yanone Kaffeesatz',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);',
			'css' => "font-family:'Yanone Kaffeesatz', sans-serif;"
        ),
    );

    return apply_filters( 'my_available_fonts', $fonts, $addfonts );
}

function add_fonts ($fonts)
{
	$additional_fonts = array (
		'Demonix' => array
			(
				"name" => "Demonix",
				"import" => "",
				"css" => "font-family: 'Lobster', cursive;"
			)
	);
	
	$fonts = array_merge($fonts, array());
	
	return $fonts;
}

// Set default font and use the options
function nomnom_field_primary_font() {
    $options = (array) get_option( 'nomnom-options' );
    $fonts = get_nomnom_available_fonts();
    $current_font = 'Arimo';

    if ( isset( $options['primary-font'] ) )
        $current_font = $options['primary-font'];

    ?>
        <select name="nomnom-options[primary-font]">
        <?php foreach( $fonts as $font_key => $font ): ?>
            <option <?php selected( $font_key == $current_font ); ?> value="<?php echo $font_key; ?>"><?php echo $font['name']; ?></option>
        <?php endforeach; ?>
        </select>
    <?php
}
// Apply the fonts
//add_action( 'wp_head', 'nomnom_wp_head' );
function nomnom_wp_head() {
    $options = (array) get_option( 'nomnom-options' );
    $fonts = get_nomnom_available_fonts();
    $current_font_key = 'Arimo';

    if ( isset( $options['primary-font'] ) )
        $current_font_key = $options['primary-font'];

    if ( isset( $fonts[ $current_font_key ] ) ) {
        $current_font = $fonts[ $current_font_key ];

        echo '<style>';
        echo $current_font['import'];
        echo 'h1,h1.entry-title,h2,h3,h4,h5,h6,h3.widget-title, #site-title a,#footer h3 { ' . $current_font['css'] . ' } ';
        echo '</style>';
    }
}
// The End
?>