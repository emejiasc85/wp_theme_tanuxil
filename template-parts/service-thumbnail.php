	<!-- Single News -->
	<?php rewind_posts(); ?>
	<?php 
		$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'ID',
			'hierarchical' => 1,
			'exclude' => '',
			'include' => '',
			'meta_key' => '',
			'meta_value' => '',
			'authors' => '',
			'child_of' => 25,
			'parent' => -1,
			'exclude_tree' => '',
			'number' => '',
			'offset' => 0,
			'post_type' => 'page',
			'post_status' => 'publish'
		);
		$pages = get_pages($args);
	
	//$pages = get_pages();
	foreach ($pages as $page) { ?>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="thumbnail <?php echo $page->class ?>">
				<?php echo get_the_post_thumbnail( $post = $page->ID, '460-245', $attr = '' ) ?>
				<h3 class="text-center"><?php echo $page->post_title ?></h3>
				<p class="text-left"><?php echo $page->description ?></p>
				<p class="text-center">
					<a href="<?php echo get_page_link( $page->ID ) ?>" class="btn-custom"><span>Ver más.</span></a>
				</p>
			</div>
		</div>
	<?php }?>


