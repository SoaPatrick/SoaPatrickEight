<?php
/**
 * Custom post type Log
 *
 * @link https://generatewp.com/post-type/
 *
 * @package soapatrickeight
 */

function soapatrickeight_add_cpt_log() {

  $labels = array(
    'name'                  => _x( 'Log', 'Post Type General Name', 'soapatrickeight' ),
    'singular_name'         => _x( 'Log', 'Post Type Singular Name', 'soapatrickeight' ),
    'menu_name'             => __( 'Log', 'soapatrickeight' ),
  );
  $args = array(
    'label'                 => __( 'Log', 'soapatrickeight' ),
    'description'           => __( 'Changelogs', 'soapatrickeight' ),
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-hammer',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    "rewrite"               => array( "slug" => "log", "with_front" => false ),
    'capability_type'       => 'post',
    'show_in_rest'          => false,
  );
  register_post_type( 'log', $args );

}
add_action( 'init', 'soapatrickeight_add_cpt_log', 0 );
