<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package soapatrickeight
 */

get_header();

  if ( have_posts() ) : ?>

    <header>
		  <h1 class="title-huge">
        <?php printf( esc_html__( 'Search: %s', 'soapatrickeight' ), get_search_query() ); ?>
      </h1>
    </header>

    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-partials/content/content', 'list' );
    endwhile;

    soapatrickeight_posts_navigation();

  else :

    get_template_part( 'template-partials/content/content', 'none' );

  endif;

get_footer();
