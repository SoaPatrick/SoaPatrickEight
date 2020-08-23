<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themebox
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php themebox_post_thumbnail(); ?>

	<div>
		<?php the_content(); ?>
	</div>
</article>
