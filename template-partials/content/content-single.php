<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class('article article--single'); ?>>
	<header class="article__header">
		<?php
      the_title( '<h1>', '</h1>' );

      if ( 'post' === get_post_type() ) :
        ?>
          <div class="article__meta">
            <?php
              soapatrickeight_posted_on();
              soapatrickeight_tags();
            ?>
          </div>
        <?php
      endif;
    ?>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
	</div>

</article>
