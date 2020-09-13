<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
  <label for="search-collapse--input">
    <input type="text" name="s" id="search-collapse--input" value="<?php the_search_query(); ?>" placeholder="<?php esc_html_e( 'Find Stuff...', 'soapatrickseven' ); ?>" aria-label="<?php esc_html_e( 'Find Stuff...', 'soapatrickseven' ); ?>"">
  </label>
</form>
