<?php /* template Name: services*/ ?>
<?php
/**
 * The about template file
 */

get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="jumbotron" style="background-image: url(<?php echo the_post_thumbnail_url()?>); background-position: left; height:40em;">
			<div class="container">
				<div class="margin-top-sub-nav col-xs-12 col-md-6 bg-gray-color">
					<h2 class="text-white "><?php echo $post->description ?></h2>
					<p>
						<a href="" class="btn btn-lg  btn-purple">Cotizar</a>
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="page-title-content">
				<div class="text-center">
					<h1 class="text-second-color">
						<?php  the_title(); ?>
					</h1>
				</div>
			</div>
		</div>
	
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>

	<div class="container">
		<div class="section-services">
			<?php get_template_part( 'template-parts/service-thumbnail', get_post_format() ); ?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/call', get_post_format() );?>
	<?php get_template_part( 'template-parts/certificate', get_post_format() );?>
	


	<?php
	//get_sidebar();
	get_footer();
