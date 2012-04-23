<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			
			<h1 class="entry-title"><!-- Displays an author avatar next to the post title if selected -->			
		<?php if (get_option( 'nomnom_display_avatar_image' )): ?>
			<div class="gravatar"><?php echo get_avatar( get_the_author_meta('email'), '30' ); ?></div>
			<?php endif; ?>			
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>
			
		<?php if (get_option( 'nomnom_posted_on' )): ?><!-- switch for nomnom posted on -->
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php twentyeleven_posted_on(); ?>			
			</div><!-- .entry-meta -->
			<?php endif; ?>
		<?php endif; ?><!-- end nomnom posted on -->
			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<?php if (get_option( 'nomnom_display_bubble' )): ?><!-- switch for comment bubble on index -->		
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?><!-- end bubble switch -->
			<?php endif; ?>
			
		</header><!-- .entry-header -->
<?php // Remove what you don't want here, this is how excerpts are displayed, by default only is_search() is displayed  ?>
			<?php if (get_option( 'nomnom_display_post_image' )): ?><!-- Excerpt or full posts switch -->
		<?php if ( is_tag() || is_date() || is_search() || is_home() || is_archive() || is_category() ) :?>
			<?php endif; ?>
		<div class="entry-summary">
		<!-- This adds the post thumbnail/featured image -->
			<div class="excerpt-thumb"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'nomnom' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<?php the_post_thumbnail('excerpt-thumbnail', 'class=alignleft'); ?></a></div>			
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->	
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	
		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
				if ( $categories_list ):
			?>
		<?php if (get_option( 'nomnom_posted_in' )): ?><!-- switch for nomnom posted in -->
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
		<?php endif; ?><!-- end nomnom posted in -->
			<?php endif; // End if categories ?>
		<?php if (get_option( 'nomnom_post_tags' )): ?><!-- switch for nomnom post tags-->
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; ?><!-- end nomnom post tags -->
			<?php endif; // End if 'post' == get_post_type() ?>
			
		<?php if (get_option( 'nomnom_comment_form_post' )): ?><!-- switch for comment comment form posts -->
<?php if (get_option( 'nomnom_leave_reply' )): ?><!-- switch for nomnom leave reply-->			
			<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?></span>
			<?php endif; // End if comments_open() ?>
<?php endif; ?><!-- end nomnom leave reply -->
		<?php endif; ?><!-- end NomNom comment_form_post -->

			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->