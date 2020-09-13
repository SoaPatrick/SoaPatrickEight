<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package soapatrickeight
 */

function soapatrickeight_scripts() {
  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style( 'soapatrickeight-style', get_template_directory_uri() . '/assets/css/app.css' );
  wp_enqueue_script( 'soapatrickeight-scripts', get_template_directory_uri() . '/assets/js/scripts.js', '','' , true );

  if( is_post_type_archive('log') ) {
    wp_enqueue_script( 'infinite-scroll', 'https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js', '','' , true );
  }
}
add_action( 'wp_enqueue_scripts', 'soapatrickeight_scripts' );


// Remove Emojiscript
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Deregister Embed script
 */
function soapatrickeight_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'soapatrickeight_deregister_scripts' );
