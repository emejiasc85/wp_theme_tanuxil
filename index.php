<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanuxil
 */

get_header(); ?>

	<?php 
		//slider
		echo do_shortcode('[slick-slider category="3" design="design-1" sliderheight="800" show_content="true"]'); 
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="section-notices">
			<div class="container">
				<div class="row">
					<h2>Noticias</h2>
					<?php
					if ( have_posts() ) :
						
						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>		
						<?php
						endif;
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content-thumbnail', get_post_format() );
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</div>
			</div>
		</section>
		<section class="section-services">
			<div class="container">
				<div class="row">
					<h2>Servicios</h2>
					<?php
					if ( have_posts() ) :
						
						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>		
						<?php
						endif;

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/service-thumbnail', get_post_format() );
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</div>
			</div>
		</section>

		<?php get_template_part( 'template-parts/call', get_post_format() );?>
		
		<section class="section-opinions">
			<div class="container">
				<h2>Lo que opinan de nosotros</h2>
				<div class="col-xs-12 col-md-6 col-md-offset-3 opinion">
					<div class="col-xs-3">
						<img width="100" height="100" i src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/enrique.jpg" alt="">
					</div>
					<div class="col-xs-9">
						<div class="opinion-box-right">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus quam porro eveniet ullam iste optio inventore saepe corrupti. 
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-3 opinion">
					<div class="col-xs-9">
						<div class="opinion-box-left">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus quam porro eveniet ullam iste optio inventore saepe corrupti. 
							</p>
						</div>
					</div>
					<div class="col-xs-3">
						<img width="100" height="100"   src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/enrique.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<?php echo do_shortcode("[smls id='129']"); ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
