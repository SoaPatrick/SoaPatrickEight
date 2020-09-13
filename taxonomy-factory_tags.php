<?php
/**
 * The template for displaying factory tag items
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
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/factory/"><?php esc_html_e( 'Factory', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs--item__last"><?php echo single_term_title(); ?></span>
      </nav>
    </div>

    <header class="grid">
      <h1 class="title-large"><?php echo single_term_title(); ?></h1>
      <hr>
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
          $currentTerm = $wp_query->get_queried_object();
            foreach ( $terms as $term ) {
              if ($currentTerm->term_id === $term->term_id)
                echo '<a href="'. get_term_link( $term ) .'" class="btn btn-small btn-active">'. $term->name .'</a>';
              else {
                echo '<a href="'. get_term_link( $term ) .'" class="btn btn-small">'. $term->name .'</a>';
              }
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


