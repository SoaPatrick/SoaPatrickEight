<?php
/**
 * The template for displaying factory archive items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

get_header(); ?>
  <section class="factory-list">

    <div class="grid breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs--item__last"><?php esc_html_e( 'Factory', 'soapatrickeight' ) ?></span>
      </nav>
    </div>

    <header class="grid">
      <h1 class="title-large"><?php esc_html_e( 'Factory', 'soapatrickeight' ) ?></h1>
      <hr>
    </header>

    <div class="grid">
      <div class="tags">
        <?php
          $args = array(
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => TRUE,
            'fields'     => 'all',
          );
          $terms = get_terms( 'factory_tags', $args);
          foreach ( $terms as $term ) {
            $url = get_term_link( $term );
            if ( is_wp_error( $url ) ) {
              continue;
            }
            printf(
              '<a href="%s">%s</a>',
              $url,
              $term->name
            );
          }
        ?>
      </div>
    </div>

    <div class="grid">
      <div class="factory-list__list">
        <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
              get_template_part( 'template-partials/content/content', 'featured-full' );
            endwhile;
          endif;
        ?>
      </div>
    </div>

  </section>

  <?php soapatrickeight_posts_navigation(); ?>

<?php
get_footer();
