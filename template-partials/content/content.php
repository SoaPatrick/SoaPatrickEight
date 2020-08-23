<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
      if ( is_singular() ) :
        the_title( '<h1>', '</h1>' );
      else :
        the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;

      if ( 'post' === get_post_type() ) :
        ?>
          <div>
            <?php
              soapatrickeight_posted_on();
              soapatrickeight_posted_by();
            ?>
          </div>
        <?php
      endif;
    ?>
	</header>

	<?php soapatrickeight_post_thumbnail(); ?>

	<div>
		<?php the_content(); ?>
	</div>

	<footer>
		<?php soapatrickeight_entry_footer(); ?>
	</footer>
</article>
