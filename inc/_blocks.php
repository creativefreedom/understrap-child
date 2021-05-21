<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// List block variations
// editor scripts
function understrap_child_block_editor($hook) {
    cf_enqueue_script( 'understrap_child_block_variants_js', get_stylesheet_directory_uri() .  '/inc/assets/understrap_child_block_variants.js' );
}
add_action('enqueue_block_editor_assets', 'understrap_child_block_editor');

// frontend and editor scripts
function understrap_child_frontend_editor($hook) {
    cf_enqueue_style( 'understrap_child_block_variants_css', get_stylesheet_directory_uri() . '/inc/assets/understrap_child_block_variants.css' );
}
add_action('enqueue_block_assets', 'understrap_child_frontend_editor');
