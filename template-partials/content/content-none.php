<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<section>
	<header>
		<h1><?php esc_html(_ex( 'Nothing Found', 'nothing found title', 'soapatrickeight' )); ?></h1>
	</header>

	<div>
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'soapatrickeight' ); ?></p>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'soapatrickeight' ); ?></p>
    <?php endif; ?>
    <?php get_search_form(); ?>
	</div>
</section>
