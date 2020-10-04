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
    while ( have_posts() ) : the_post();
      if (is_single() || is_page() || is_home() || is_paged() ):
        get_template_part( 'template-partials/content/content-single', get_post_type() );
      else:
        get_template_part( 'template-partials/content/content-list', get_post_type() );
      endif;

    endwhile;

    if (is_single()):

      if ( 'post' === get_post_type() ):
        soapatrickeight_post_navigation();
      endif;

    endif;
    soapatrickeight_posts_navigation();
    ?>
  <?php else :

    get_template_part( 'template-partials/content/content', 'none' );

  endif;

get_footer();
