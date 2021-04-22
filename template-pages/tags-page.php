<?php
/**
 * Template Name: Tags Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

get_header();
?>

  <div class="page">
    <div class="breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/box/"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs__item--last"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></span>
      </nav>
    </div>

    <header class="page__header">
      <h1 class="title-huge"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></h1>
    </header>
    <div class="page__content--wide">
      <div class="tags tags--cloud">
        <?php

          $args = array(
            'smallest'                  => .63,
            'largest'                   => 2.5,
            'unit'                      => 'rem'
          );

          wp_tag_cloud( $args );
        ?>
      </div>
    </div>
  </div>

<?php
get_footer();
