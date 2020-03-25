<?php
/**
 * Pagination layout.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function understrap_child_theme_setup() {

    // Register support for Gutenberg wide images in your theme
    add_theme_support( 'align-wide' );

    // Theme colours: Adds support for editor color palette.
    
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Red' ),
            'slug'  => 'red',
            'color' => '#FF0000',
        ),
        array(
            'name'  => __( 'Green' ),
            'slug'  => 'green',
            'color' => '#00FF00',
        ),
        array(
            'name'  => __( 'Blue' ),
            'slug'  => 'blue',
            'color' => '#0000FF',
        ),

    ) );

    // Editor stylesheet
    add_theme_support('editor-styles');
    add_editor_style( 'css/editor.css' );

}

add_action( 'after_setup_theme', 'understrap_child_theme_setup' );


