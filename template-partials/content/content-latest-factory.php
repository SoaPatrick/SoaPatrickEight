<?php
/**
 * latest factory items
 *
 * @package soapatrickeight
 */
if ( have_posts() ) :
  $args = array(
    'post_type'       => 'factory',
    'post_status'     => 'publish',
    'posts_per_page'  => '4'
  );

  $factory = new WP_Query( $args );
  ?>
    <aside class="related related--factory highlight">
      <h1 class="title-large has-text-align-center"><?php esc_html_e( 'Factory Feed', 'soapatrickeight' ); ?></h1>
      <div class="grid">
        <div class="related__items related--factory__items">
          <?php
            if ($factory->have_posts()) :
              while ( $factory->have_posts() ) : $factory->the_post();
                get_template_part( 'template-partials/content/content', 'featured-full' );
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </aside>
  <?php
  wp_reset_postdata();
endif;

