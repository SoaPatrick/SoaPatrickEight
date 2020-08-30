<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package soapatrickeight
 */

get_header();

  while ( have_posts() ) :
    the_post();

    get_template_part( 'template-partials/content/content', 'single' );

    the_post_navigation();

  endwhile;

get_footer();
