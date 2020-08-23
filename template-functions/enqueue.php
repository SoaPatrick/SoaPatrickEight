<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package themebox
 */

function themebox_scripts() {
  // deregister Gutenberg Block Styling Library
  wp_dequeue_style( 'wp-block-library' );

  wp_enqueue_style( 'themebox-style', get_stylesheet_uri() );
  wp_enqueue_script( 'soapatrickseven-scripts', get_template_directory_uri() . '/assets/js/scripts.js', '','' , true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themebox_scripts' );
