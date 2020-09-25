<?php
/**
 * Template part for displaying featured image full
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article factory'); ?>>
  <?php if( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" class="img-link"><?php the_post_thumbnail(); ?></a>
    <h1><?php echo the_title() ?></h1>
  <?php endif; ?>
</article>
