<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package soapatrickeight
 */

function soapatrickeight_scripts() {
  // deregister Gutenberg Block Styling Library
  wp_dequeue_style( 'wp-block-library' );

  wp_enqueue_style( 'soapatrickseven-style', get_template_directory_uri() . '/assets/css/app.css' );
  wp_enqueue_script( 'soapatrickseven-scripts', get_template_directory_uri() . '/assets/js/scripts.js', '','' , true );

  if( is_post_type_archive('log') ) {
    wp_enqueue_script( 'infinite-scroll', 'https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js', '','' , true );
  }
}
add_action( 'wp_enqueue_scripts', 'soapatrickeight_scripts' );
