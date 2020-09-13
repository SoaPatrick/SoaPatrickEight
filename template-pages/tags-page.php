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

  <section>
    <div class="grid breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
        <span class="breadcrumbs__item--last"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></span>
      </nav>
    </div>

    <header class="grid">
      <h1 class="title-large"><?php esc_html_e( 'Tags', 'soapatrickeight' ) ?></h1>
      <hr>
    </header>

    <div class="grid">
      <div class="tag--list">
        <?php
          $tags = get_tags('post_tag');
          if ( $tags ) :
              foreach ( $tags as $tag ) : ?>
                <a class="btn btn-small" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
              <?php
            endforeach;
          endif;
        ?>
      </div>
    </div>
  </section>

<?php
get_footer();
