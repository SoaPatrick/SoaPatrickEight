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
              // get_template_part( 'template-partials/content/content', 'featured-full' );
              the_post_thumbnail('medium');
              // if (get_post(get_post_thumbnail_id())->post_excerpt): // search for if the image has caption added on it
              //   echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); // displays the image caption
              // endif;
            endif;
          endwhile;
        endif;
      ?>
    </div>

  </div>

  <?php soapatrickeight_posts_navigation(); ?>

<?php
get_footer();
