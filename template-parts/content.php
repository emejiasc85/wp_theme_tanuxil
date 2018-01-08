<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanuxil
 */

?>

<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-main-color">', '</h1>' );
			the_post_thumbnail($size = 'post-thumbnail', $attr = ' class=img-responsive');
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		
		<?php 
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tanuxil_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content margin-top-sub-nav">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tanuxil' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tanuxil' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<!--

		<footer class="entry-footer">
			<?php //tanuxil_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		
</article><!-- #post-<?php the_ID(); ?> -->
