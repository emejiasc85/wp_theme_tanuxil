<?php /* template Name: service-form*/ ?>
<?php
/**
 * The about template file
 */

get_header(); ?>
	<div class="row">
		<?php include TEMPLATEPATH."/template-parts/sub_nav.php"; ?>
	</div>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row section-services margin-top-sub-nav ">
			<div class="<?php echo $post->class ?>">
					
					<div class="container margin-top-sub-nav">
						<div class="page-title-content">
							<h3 class="text-capitalize text-center">
								<?php the_title( )?>
							</h3>
						</div>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<?php the_content()?>
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
