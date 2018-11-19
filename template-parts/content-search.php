<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanuxil
 */

?>

<article class="col-xs-12 col-sm-6 col-md-6">
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('460-245'); ?>
		</a>
		<h3>
			<?php the_title() ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm pull-right" role="button">LEER MÁS.</a>
		</h3>
	</div>
</article>
