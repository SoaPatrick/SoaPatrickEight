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

    $postCount = 0;
    while ( have_posts() ) : the_post();
      $postCount++;
      if ( $postCount == 2  && is_home() && !is_paged() ) :

        get_template_part( 'template-partials/content/content', 'factory_feed' );

      endif;

      get_template_part( 'template-partials/content/content-single', get_post_type() );

    endwhile;

    if (is_single()):

      if ( 'post' === get_post_type() ) {
        soapatrickeight_post_navigation();
      }

      get_template_part( 'template-partials/content/content-related', get_post_type() );

    else:

      soapatrickeight_posts_navigation();

    endif;
    ?>
  <?php else :

    get_template_part( 'template-partials/content/content', 'none' );

  endif;

get_footer();
