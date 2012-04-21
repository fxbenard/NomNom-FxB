<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->
	<div class="adsense-top-content">
			<!-- begin adsense -->			
			<!-- paste adsense below this line -->
			
			<!-- end adsense -->
	</div> <!-- .adsense-top-content -->
						
					<?php get_template_part( 'content', 'single' ); ?>
				<?php if (get_option( 'nomnom_display_related' )): ?><!-- Recent Related posts switch -->
			<?php get_template_part('related'); ?>
				<?php endif; ?>
				<br clear="all">
					
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	<?php get_sidebar(); ?><!-- This is the sidebar call for single post pages-->
<?php get_footer(); ?>