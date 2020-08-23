<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package soapatrickeight
 */

function soapatrickeight_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html_x( 'Sidebar', 'sidebar widget name', 'soapatrickeight' ),
		'id'            => 'sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'soapatrickeight_widgets_init' );
