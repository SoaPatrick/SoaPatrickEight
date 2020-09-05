<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

get_header();

  if ( have_posts() ) :
    ?>
    <div class="grid breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <?php if( is_tag() ) : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tags/"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></a></span>
        <?php else : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/storage/"><?php esc_html_e( 'Storage', 'soapatrickeight' ) ?></a></span>
        <?php endif; ?>
        <span class="breadcrumbs__item--last"><?php the_archive_title();?></span>
      </nav>
    </div>
      <section>
        <header>
          <?php
            the_archive_title( '<h1>', '</h1>' );
            the_archive_description( '<div>', '</div>' );
          ?>
        </header>
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-partials/content/content', get_post_type() );
          endwhile;
        ?>
      </section>
    <?php

  soapatrickeight_posts_navigation();

  endif;

get_footer();
