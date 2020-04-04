<?php

function understrap_child_menus_setup() {

    register_nav_menus( array(
        'footer-links' => __( 'Footer menu', 'understrap_child' ),
    ) );

}
add_action( 'after_setup_theme', 'understrap_child_menus_setup' );