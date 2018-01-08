<?php /* template Name: service*/ ?>
<?php
/**
 * The about template file
 */

get_header(); ?>
	<?php include TEMPLATEPATH."/template-parts/sub_nav.php"; ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="section-services">
			<div class="<?php echo $post->class ?>">
					<div class="jumbotron" style="background-image: url(<?php echo the_post_thumbnail_url()?>); background-position: left; height:40em;">
						<div class="container">
							<div class="margin-top-sub-nav col-xs-12 col-md-6 bg-gray-color">
								<h1 class="text-white"><?php  the_title(); ?></h1>
								<p class="text-white "><?php echo $post->description ?></p>
								<p>
									<a href="<?php echo get_page_link($post->form_id) ?>" class="btn-custom"><span>Cotizar Servicio.</span></a>
								</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="page-title-content">
							<h3 class="text-capitalize text-center">
								Contenido
							</h3>
						</div>
						<div class="container">
							<?php the_content()?>
						</div>
						<div class="text-center">
							<a href="<?php echo get_page_link($post->form_id) ?>" class="btn-custom"><span>Cotizar Servicio.</span></a>
						</div>
					</div>	
			</div>
		</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>

	<?php get_template_part( 'template-parts/call', get_post_format() );?>
	<?php get_template_part( 'template-parts/certificate', get_post_format() );?>



	<?php
	//get_sidebar();
	get_footer();
