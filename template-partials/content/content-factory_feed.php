<?php
/**
 * Template part for displaying factory feed on main page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

?>

<section class="factory-feed highlight">
  <div class="grid">
    <h1 class="title-large has-text-align-center"><i class="fal fa-industry-alt fa-fw"></i><?php esc_html_e( 'Factory Feed', 'soapatrickeight' ); ?></h1>
    <div class="factory-feed__items">
      <?php
        $args = array(
          'post_type'       => 'factory',
          'post_status'     => 'publish',
          'posts_per_page'  => '4'
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
    <p class="lead">
      <?php echo sprintf( __( 'The rest can be seen <a href="%s">in the Factory</a>.', 'soapatrickeight' ), esc_url( home_url( '/factory' ) )); ?>
    </p>
  </div>
</section>
