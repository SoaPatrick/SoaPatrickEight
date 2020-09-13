<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class('article'); ?>>
	<header class="article__header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php soapatrickeight_post_thumbnail(); ?>

	<div class="content-grid article__content">
		<?php the_content(); ?>
	</div>
</article>
