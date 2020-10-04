<?php
/**
 * related factory items
 *
 * @package soapatrickeight
 */

$terms = wp_get_object_terms( $post->ID, 'factory_tags', array('fields' => 'ids') );

if( $terms ):
  $args = array(
    'post_type'           => 'factory',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'orderby'             => 'rand',
    'tax_query'           => array(
      array(
        'taxonomy'          => 'factory_tags',
        'field'             => 'id',
        'terms'             => $terms
      )
    ),
    'post__not_in' => array ($post->ID),
  );

  $related_items = new WP_Query( $args );
  ?>
    <aside class="related related--factory highlight">
      <h1><?php esc_html_e( 'Related Factory Items', 'soapatrickeight' ); ?></h1>
      <div class="related__items related--factory__items">
        <?php
          if ($related_items->have_posts()) :
            while ( $related_items->have_posts() ) : $related_items->the_post();
              get_template_part( 'template-partials/content/content', 'featured-full' );
            endwhile;
          endif;
        ?>
      </div>
    </aside>
  <?php
endif;
wp_reset_postdata();
