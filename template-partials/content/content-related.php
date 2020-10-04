<?php
/**
 * related post items
 *
 * @package soapatrickeight
 */

$terms = wp_get_object_terms( $post->ID, 'post_tag', array('fields' => 'ids') );

if( $terms ):
  $args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'orderby'             => 'rand',
    'tax_query'           => array(
      array(
        'taxonomy'          => 'post_tag',
        'field'             => 'id',
        'terms'             => $terms
      )
    ),
    'post__not_in' => array ($post->ID),
  );

  $related_items = new WP_Query( $args );
  ?>
    <aside class="related related--post highlight">
      <h1><?php esc_html_e( 'Related Blog Posts', 'soapatrickeight' ); ?></h1>
      <div class="related__items related--post__items">
        <?php
          if ($related_items->have_posts()) :
            while ( $related_items->have_posts() ) : $related_items->the_post();
              get_template_part( 'template-partials/content/content', 'list' );
            endwhile;
          endif;
        ?>
      </div>
    </aside>
  <?php
  wp_reset_query();
endif;
