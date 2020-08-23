<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themebox
 */

?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span><?php _ex( 'Search for:', 'search label', 'themebox' );?></span>
		<input type="search" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'search placeholder', 'themebox' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'search submit button', 'themebox' ); ?>" />
</form>
