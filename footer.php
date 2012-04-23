<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div><!-- #main -->	


<!-- Begin secondary menu #access3 -->
<nav id="access3" role="navigation">
    <?php // This is where the menu is added
        wp_nav_menu( array('container_class' => 'menu-bottom',
        'theme_location' => 'third', 'fallback_cb' => '') ); ?>
</nav><!-- end of #access3 -->
	
	
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<span class="wpcredits"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven'  ) ); ?>" target="_blank" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a></span> :: <span class="credits"><a href="http://zeaks.org/nomnom-twenty-eleven-child-theme/" title="NomNom 1.8" target="_blank">NomNom by Zeaks</a></span>
				<br><?php echo nomnom_copyright(); ?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>