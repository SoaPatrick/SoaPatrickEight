<?php
/**
 * Searchform
 *
 * @package soapatrickeight
 */

?>

<form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
  <label for="search-collapse--input">
    <input type="text" name="s" id="search-collapse--input" value="<?php the_search_query(); ?>" placeholder="<?php esc_html_e( 'Find Stuff...', 'soapatrickeight' ); ?>" aria-label="<?php esc_html_e( 'Find Stuff...', 'soapatrickeight' ); ?>" tabindex="-1">
  </label>
</form>
