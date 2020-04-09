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
            'name'  => __( 'Red', 'understrap_child' ),
            'slug'  => 'red',
            'color' => '#FF0000',
        ),
        array(
            'name'  => __( 'Green', 'understrap_child' ),
            'slug'  => 'green',
            'color' => '#00FF00',
        ),
        array(
            'name'  => __( 'Blue', 'understrap_child' ),
            'slug'  => 'blue',
            'color' => '#0000FF',
        ),

    ) );

    // Theme font sizes
    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'understrap_child' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Regular', 'understrap_child' ),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => __( 'Large', 'understrap_child' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'Huge', 'understrap_child' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );

    // Editor stylesheet
    add_theme_support('editor-styles');
    add_editor_style( 'css/editor.css' );

}

add_action( 'after_setup_theme', 'understrap_child_theme_setup' );


// Enqueue Google Fonts
function understap_child_load_google_fonts() {

    $fonts = array(
        "Bebas Neue" => [],
        "Open Sans" => [600,700]
    );

    $font_string = "";

    foreach($fonts as $font => $weights) {
        $font_string .= !empty($font_string) ? "|". urlencode($font) : urlencode($font);
        if(is_array($weights) && count($weights) > 0) $font_string .= ":" . implode(",", $weights);
    }
    
    if(!empty($font_string))
        wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family='.$font_string.'&display=swap');

}

add_action( 'wp_enqueue_scripts', 'understap_child_load_google_fonts' );
add_action( 'admin_enqueue_scripts', 'understap_child_load_google_fonts' );
