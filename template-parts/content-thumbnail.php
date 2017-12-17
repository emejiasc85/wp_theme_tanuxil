	<!-- Single News -->
	<?php rewind_posts(); ?>
	<?php
		query_posts([
			//'cat'       => 4,
			'order'     =>'DESC',
			'showposts' => 4
		]);
	?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="col-xs-12 col-sm-4 col-md-6">
		<div class="thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('460-245'); ?>
			</a>
			<h3>
				<?php the_title() ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm pull-right" role="button">LEER MÁS.</a>
			</h3>
		</div>
	</div>
	
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<h3 class="text-center">No se encontraron Noticias</h3>
	<?php endif; ?>
	<!-- /.End Of Single News -->


