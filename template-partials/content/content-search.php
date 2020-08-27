<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div
			<?php
			soapatrickeight_posted_on();
			soapatrickeight_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php soapatrickeight_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div><

	<footer>
		<?php soapatrickeight_entry_footer(); ?>
	</footer>
</article>
