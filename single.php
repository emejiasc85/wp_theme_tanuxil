<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tanuxil
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();
			
			include_once('_wptricks-sp-navigation.php');

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.

		if ( function_exists( 'sharing_display' ) ) {
			sharing_display( '', true );
		}
		comments_template( $file, $separate_comments ); 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php


	

get_template_part( 'template-parts/call', get_post_format() );
//get_sidebar();
get_footer();
