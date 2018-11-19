<?php
    /** 
    * Displays a navigation menu
    * @param array $args Arguments
    */
    $args = array(
        'theme_location' => 'menu-2',
        'menu' => '',
        'container' => 'nav',
        'container_class' => 'sub-nav hidden-xs',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'depth' => 0,
        'walker' => ''
    );

    wp_nav_menu( $args );
?>