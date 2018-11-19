<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanuxil
 */

?>

<?php
if ($count == 1) { ?>
	<article class="col-xs-12 col-sm-12">
<?php
}
else{ ?> 
<article class="col-xs-12 col-sm-6">
<?php

	
}
	?>
	<div class="thumbnail">
	<?php 
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tanuxil_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;
		?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('460-245'); ?>
		</a>
		<h3>
			<?php the_title() ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm pull-right" role="button">LEER MÁS.</a>
		</h3>
		
	</div>
</article>

