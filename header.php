<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!--[if IE]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styleIE.css" media="screen" type="text/css" />
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	 
	 if (is_home())
		 wp_enqueue_script('slider.js'); 
	 wp_head();
?>

	<script language="javascript">
	 	var slider_effect = '<?php echo get_option('nomnom_slider_effects'); ?>';
	 	var slider_speed = <?php echo get_option('nomnom_trans_speed'); ?>;
	 	var slider_pause = <?php echo get_option('nomnom_image_pause'); ?>;
	</script>
	

</head>

<body <?php body_class(); ?>>
<?php if (get_option( 'nomnom_advanced_style' )): ?><!-- switch for CSS3 effects -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css3.css" media="screen" type="text/css" />
<?php endif; ?><!-- end nomnom_advanced_style -->
<div id="page" class="hfeed">
	<header id="branding" role="banner">

			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>	
			<!-- Begin secondary menu #access2 -->
			<nav id="access2" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Secondary menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
			<?php // This is where the menu is added
				 wp_nav_menu( array('container_class' => 'menu-top',
				 'theme_location' => 'secondary', 'fallback_cb' => '') ); ?>				
			</nav><!-- end of #access2 -->

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
				<div id="nomnom-header">

				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[10] >= HEADER_IMAGE_WIDTH ) :
						// Change the above number 10 to 0 if you want featured image displayed in the header when viewing posts
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					elseif (is_home() && get_option("nomnom_has_slider")) : 						
						if (!nomnom_slider ()): ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
							</a>
						<?php endif;
					else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					</a>
				<?php endif; // end check for featured image or standard header ?>
				</div>

			<?php endif; // end check for removed header image ?>
	
			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>		
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
			<?php if (get_option( 'nomnom_display_search' )): ?><!-- search no text on/off switch -->
				<?php get_search_form(); ?>
			<?php endif; ?><!-- end search no text on/off -->
				</div>
			<?php
				else :
			?>
			<?php if (get_option( 'nomnom_display_search' )): ?><!-- search  with text on/off switch -->
				<?php get_search_form(); ?>
			<?php endif; ?>
			<?php endif; ?><!-- end search with text on/off -->
	
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php if (get_option( 'nomnom_default_menu' )) wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				
			</nav><!-- #access -->

	</header><!-- #branding -->

	<div id="main">