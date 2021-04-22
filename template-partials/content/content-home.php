<?php
/**
 * Content home
 *
 * @package soapatrickeight
 */


$args = array(
  'post_type'           => array('post', 'factory', 'lab'),
  'post_status'         => 'publish',
  'posts_per_page'      => 20,
);

$home_items = new WP_Query( $args );

if ($home_items->have_posts()) :
  while ( $home_items->have_posts() ) : $home_items->the_post();
    get_template_part( 'template-partials/content/content-list', get_post_type() );
  endwhile;
endif;

wp_reset_postdata();
