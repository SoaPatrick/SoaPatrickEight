<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themebox
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
              themebox_posted_on();
              themebox_posted_by();
            ?>
          </div>
        <?php
      endif;
    ?>
	</header>

	<?php themebox_post_thumbnail(); ?>

	<div>
		<?php the_content(); ?>
	</div>

	<footer>
		<?php themebox_entry_footer(); ?>
	</footer>
</article>
