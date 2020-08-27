<?php
/**
 * Custom taxonomy Post Projects
 *
 * @link https://generatewp.com/taxonomy/
 *
 * @package soapatrickeight
 */

function soapatrickeight_add_tax_post_projects() {

  $labels = [
    'name'                       => _x( 'Project', 'Taxonomy General Name', 'soapatrickeight' ),
    'singular_name'              => _x( 'Project', 'Taxonomy Singular Name', 'soapatrickeight' ),
    'menu_name'                  => __( 'Projects', 'soapatrickeight' ),
    'all_items'                  => __( 'All Projects', 'soapatrickeight' ),
    'parent_item'                => __( 'Parent Project', 'soapatrickeight' ),
    'parent_item_colon'          => __( 'Parent Project:', 'soapatrickeight' ),
    'new_item_name'              => __( 'New Project Name', 'soapatrickeight' ),
    'add_new_item'               => __( 'Add New Project', 'soapatrickeight' ),
    'edit_item'                  => __( 'Edit Project', 'soapatrickeight' ),
    'update_item'                => __( 'Update Project', 'soapatrickeight' ),
    'view_item'                  => __( 'View Project', 'soapatrickeight' ),
    'separate_items_with_commas' => __( 'Separate Projects with commas', 'soapatrickeight' ),
    'add_or_remove_items'        => __( 'Add or remove Projects', 'soapatrickeight' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'soapatrickeight' ),
    'popular_items'              => __( 'Popular Projects', 'soapatrickeight' ),
    'search_items'               => __( 'Search Projects', 'soapatrickeight' ),
    'not_found'                  => __( 'Not Found', 'soapatrickeight' ),
    'no_terms'                   => __( 'No Projects', 'soapatrickeight' ),
    'items_list'                 => __( 'Projects list', 'soapatrickeight' ),
    'items_list_navigation'      => __( 'Projects list navigation', 'soapatrickeight' ),
  ];
  $args = [
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    "rewrite"                     => array( 'slug' => 'projects', 'with_front' => false, ),
    'show_in_rest'               => true,
    'publicly_queryable'         => false,
  ];
  register_taxonomy( "projects", [ "post" ], $args );

}
add_action( 'init', 'soapatrickeight_add_tax_post_projects' );
