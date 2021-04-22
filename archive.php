<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

get_header();

  if ( have_posts() ) : ?>

    <div class="breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <?php if( is_tag() ) : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/box/"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></a></span>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tags/"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></a></span>
        <?php else : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/box/"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></a></span>
        <?php endif; ?>
        <span class="breadcrumbs__item--last"><?php the_archive_title();?></span>
      </nav>
    </div>

    <header class="page__header">
      <?php the_archive_title( '<h1 class="title-huge">', '</h1>' ); ?>
    </header>

    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-partials/content/content', 'list' );

    endwhile;

    soapatrickeight_posts_navigation();

  endif;

get_footer();
