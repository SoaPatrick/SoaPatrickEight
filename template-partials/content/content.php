<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class('article article--list'); ?>>
	<header class="article__header">
		<?php
      the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

      if ( 'post' === get_post_type() ) :
        ?>
          <div class="article__meta">
            <?php
              soapatrickeight_posted_on();
              soapatrickeight_tags()
            ?>
          </div>
        <?php
      endif;
    ?>
  </header>

  <div class="article__excerpt">
    <?php the_excerpt(); ?>
  </div>

</article>
