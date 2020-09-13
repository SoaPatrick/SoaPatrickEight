<?php
/**
 * Custom taxonomy Factory Tag
 *
 * @link https://generatewp.com/taxonomy/
 *
 * @package soapatrickeight
 */

function soapatrickeight_add_tax_factory_tags() {

  $labels = [
    'name'                       => _x( 'Factory Tag', 'Taxonomy General Name', 'soapatrickeight' ),
    'singular_name'              => _x( 'Factory Tag', 'Taxonomy Singular Name', 'soapatrickeight' ),
    'menu_name'                  => __( 'Factory Tag', 'soapatrickeight' ),
    'all_items'                  => __( 'All Factory Tags', 'soapatrickeight' ),
    'parent_item'                => __( 'Parent Factory Tag', 'soapatrickeight' ),
    'parent_item_colon'          => __( 'Parent Factory Tag:', 'soapatrickeight' ),
    'new_item_name'              => __( 'New Factory Tag Name', 'soapatrickeight' ),
    'add_new_item'               => __( 'Add New Factory Tag', 'soapatrickeight' ),
    'edit_item'                  => __( 'Edit Factory Tag', 'soapatrickeight' ),
    'update_item'                => __( 'Update Factory Tag', 'soapatrickeight' ),
    'view_item'                  => __( 'View Factory Tag', 'soapatrickeight' ),
    'separate_items_with_commas' => __( 'Separate Factory Tags with commas', 'soapatrickeight' ),
    'add_or_remove_items'        => __( 'Add or remove Factory Tags', 'soapatrickeight' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'soapatrickeight' ),
    'popular_items'              => __( 'Popular Factory Tags', 'soapatrickeight' ),
    'search_items'               => __( 'Search Factory Tags', 'soapatrickeight' ),
    'not_found'                  => __( 'Not Found', 'soapatrickeight' ),
    'no_terms'                   => __( 'No Factory Tags', 'soapatrickeight' ),
    'items_list'                 => __( 'Factory Tags list', 'soapatrickeight' ),
    'items_list_navigation'      => __( 'Factory Tags list navigation', 'soapatrickeight' ),
  ];
  $args = [
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    "rewrite"                     => array( 'slug' => 'factory-tag', 'with_front' => false, ),
    'show_in_rest'               => true,
    'publicly_queryable'         => true,
  ];
  register_taxonomy( "factory_tags", [ "factory" ], $args );

}
add_action( 'init', 'soapatrickeight_add_tax_factory_tags' );
