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

    $colours = array(
        'purple' =>        '#7C008C',
        'black' =>         '#000',
        'white' =>         '#FFF',
    );
    
    $colour_map = array();
    
    foreach($colours as $colour => $hex) {
        $colour_map[] = array(
            'name'  => $colour,
            'slug'  => strtolower(str_replace(' ', '-', $colour)),
            'color' => $hex,
        );
    }

    // Theme colours: Adds support for editor color palette.
    if(! empty($colour_map) ) {
        add_theme_support( 'editor-color-palette', $colour_map );
    }

    // add_theme_support(
    //     'editor-gradient-presets',
    //     array(
    //         array(
    //             'name'     => __( 'Green to mauve', 'understrap_child' ),
    //             'gradient' => 'linear-gradient(175deg,rgba(80,178,115,.8) 0%,rgba(119, 84, 114, .8) 100%)',
    //             'slug'     => 'green-to-mauve'
    //         ),
    //     )
    // );


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
        "Open Sans" => [300, 500, 700]
    );

    $font_string = "";

    foreach($fonts as $font => $weights) {
        $font_string .= !empty($font_string) ? "|". urlencode($font) : urlencode($font);
        if(is_array($weights) && count($weights) > 0) $font_string .= ":" . implode(",", $weights);
    }
    
    if(!empty($font_string))
        cf_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family='.$font_string.'&display=swap');

}

add_action( 'wp_enqueue_scripts', 'understap_child_load_google_fonts' );
add_action( 'admin_enqueue_scripts', 'understap_child_load_google_fonts' );
