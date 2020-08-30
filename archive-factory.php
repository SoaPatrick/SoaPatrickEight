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

    <header>
      <h1><?php esc_html_e( 'Factory', 'soapatrickeight' ) ?></h1>
    </header>

    <div class="grid">
      <div class="tag--list">
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
              '<a href="%s" class="btn btn-small">%s</a>',
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
              get_template_part( 'template-partials/content/content', get_post_type() );
            endwhile;
          endif;
        ?>
      </div>
    </div>

  </section>

<?php
get_footer();
