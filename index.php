<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

get_header();

  if ( have_posts() ) :

    if ( is_home() && ! is_front_page() ) :
      ?>
        <header>
          <h1><?php single_post_title(); ?></h1>
        </header>
      <?php
    endif;

    while ( have_posts() ) :
      the_post();
      if (is_single()):
        get_template_part( 'template-partials/content/content-single', get_post_type() );
      else:
        get_template_part( 'template-partials/content/content', get_post_type() );
      endif;
    endwhile;

    if (is_single()):

      if ( 'post' === get_post_type() || 'factory' === get_post_type() ):
        soapatrickeight_post_navigation();
      endif;

    else :

      soapatrickeight_posts_navigation();

    endif;

  else :

    get_template_part( 'template-partials/content/content', 'none' );

  endif;

get_footer();
