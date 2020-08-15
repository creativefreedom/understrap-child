<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function understrap_child_spinner_url( $image_src, $form ) {
    return get_stylesheet_directory_uri() . "/img/clear-spinner.png";
}
add_filter( 'gform_ajax_spinner_url', 'understrap_child_spinner_url', 10, 2 );
