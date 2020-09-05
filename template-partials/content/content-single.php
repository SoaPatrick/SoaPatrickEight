<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="article-<?php the_ID(); ?>" <?php post_class('article article--single'); ?>>

<div class="grid breadcrumbs-wrapper">
    <nav class="breadcrumbs">
      <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
      <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/box/"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></a></span>
      <span class="breadcrumbs__item--last"><?php the_title() ?></span>
    </nav>
  </div>

	<header class="article__header">
		<?php
      the_title( '<h1>', '</h1>' );

        ?>
          <div class="article__meta">
            <?php
              soapatrickeight_posted_on();
              soapatrickeight_tags();
            ?>
          </div>
        <?php
    ?>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
	</div>

</article>
