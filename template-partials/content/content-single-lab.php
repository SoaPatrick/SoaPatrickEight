<?php
/**
 * Template part for displaying single lab item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 *
 *
 * bidirectional relationships: https://www.advancedcustomfields.com/resources/querying-relationship-fields/
 *
 * display featured image plus caption
 * ------
 * if (has_post_thumbnail()) :
 *   the_post_thumbnail();
 *   if (get_post(get_post_thumbnail_id())->post_excerpt): // search for if the image has caption added on it
 *     echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); // displays the image caption
 *   endif;
 * endif;
 *
 */

?>
