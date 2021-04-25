<?php
/**
 * The template for displaying lab archive items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

get_header(); ?>
  <div class="lab-list">

    <div class="breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs--item__last"><?php esc_html_e( 'Lab', 'soapatrickeight' ) ?></span>
      </nav>
    </div>

    <header>
      <h1 class="title-huge"><?php esc_html_e( 'Lab', 'soapatrickeight' ) ?></h1>
    </header>

    <div class="lab-list__items">
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
            if (has_post_thumbnail()) :
              if(get_field('is_video')) :
                ?>
                  <a href="<?php the_field('video'); ?>" aria-label="<?php the_title() ?>" class="glightbox img-link video-link"<?php if(get_the_post_thumbnail_caption()): ?> data-glightbox="title:<?php the_post_thumbnail_caption() ?>"<?php endif; ?>>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="video-link__icon"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
                <?php
              else:
                ?>
                  <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>" aria-label="<?php the_title() ?>" class="glightbox img-link"<?php if(get_the_post_thumbnail_caption()): ?> data-glightbox="title:<?php the_post_thumbnail_caption() ?>"<?php endif; ?>>
                <?php
              endif;
              the_post_thumbnail( 'medium');
              ?>
                </a>
              <?php
            endif;
          endwhile;
        endif;
      ?>
    </div>

  </div>

  <?php soapatrickeight_posts_navigation(); ?>

<?php
get_footer();
