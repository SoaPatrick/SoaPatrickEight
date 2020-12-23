<?php
/**
 * Template part for displaying factory feed on main page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

?>

<section class="factory-list factory-list--feed highlight">
  <h1><?php esc_html_e( 'Factory Feed', 'soapatrickeight' ); ?></h1>
  <div class="factory-list__items">
    <?php
      $args = array(
        'post_type'       => 'factory',
        'post_status'     => 'publish',
        'posts_per_page'  => '6'
      );
      $factory = new WP_Query( $args );
      if( $factory->have_posts() ) :
        while( $factory->have_posts() ) : $factory->the_post();
          get_template_part( 'template-partials/content/content', 'featured-full' );
        endwhile;
        wp_reset_postdata();
      endif;
    ?>
  </div>
</section>
