<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
 

//fonts
/**
 * Enqueue a script with jQuery as a dependency.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script( 'customs', get_stylesheet_directory_uri() . 'customs.js', array( ), true, true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );

function add_local_fonts() {
    wp_enqueue_style('local_web_fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css');
}
add_action('enqueue_block_assests', 'add_local_fonts');