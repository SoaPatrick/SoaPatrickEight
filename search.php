<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package soapatrickeight
 */

get_header();

  if ( have_posts() ) :
    ?>
      <section>
        <header>
          <h1>
            <?php
              /* translators: %s: search query. */
              printf( esc_html_x( 'Search Results for: %s', 'search result title', 'soapatrickeight' ), '<span>' . get_search_query() . '</span>' );
            ?>
          </h1>
        </header>
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-partials/content/content', 'search' );
          endwhile;
          the_posts_navigation();
        ?>
      </section>
    <?php
  else :
    get_template_part( 'template-partials/content/content', 'none' );
  endif;

get_footer();
