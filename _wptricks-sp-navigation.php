<?php
	$prevPost = get_previous_post(true);
	$nextPost = get_next_post(true);
?>

    <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <h4 class="margin-top-sub-nav ">Tambien te puede Interesar</h4>
        <div class="divider"></div>
        <div class="post-previous  single-post-nav col-xs-6">
            <div class="row">
                <!-- ADD THE THUMBNIAL AND LINK IT TO THE POST -->
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('84-84'); ?></a>
                <!-- ALSO WITH THE TITLE -->
                
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <!-- SHOW THE CUTOM EXCERPT LENGTH -->
                <p><?php $content = get_the_content(); echo wp_trim_words( $content , '28' ); ?></p>
                <!-- FINALLY SHOW AN ACTUAL NAVIGATIONAL PROMPT -->            
                <a class="previous" href="<?php the_permalink(); ?>"><i class="fa fa-arrow-left"></i> Anterior Noticia </a>
            </div>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
         
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-next single-post-nav col-xs-6">
            <div class="row">
                <a href="<?php the_permalink(); ?>" class=""><?php the_post_thumbnail('84-84'); ?></a>
                <h4 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <br>
                <p class=""><?php $content = get_the_content(); echo wp_trim_words( $content , '28' ); ?></p>
                <a class="previous pull-right" href="<?php the_permalink(); ?>">Siguiente Noticia <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
