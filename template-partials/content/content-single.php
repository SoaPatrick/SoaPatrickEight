<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */


$format = get_post_format();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article post-single'); ?>>

    <div class="breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <?php if(is_front_page()): ?>
        <?php elseif(is_page()): ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
          <span class="breadcrumbs__item--last"><?php the_title() ?></span>
        <?php else: ?>
          <?php if (is_single() ): ?>
            <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
            <span class="breadcrumbs__item"><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></a></span>
            <span class="breadcrumbs__item"><a href="<?php echo get_post_type_archive_link('post'); ?>/storage/"><?php esc_html_e( 'Storage', 'soapatrickeight' ) ?></a></span>
            <span class="breadcrumbs__item"><a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>"><?php echo get_the_date('F Y'); ?></a></span>
            <span class="breadcrumbs__item--last"><?php the_title() ?></span>
          <?php else: ?>
            <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickeight' ) ?></a></span>
            <span class="breadcrumbs__item--last"><?php esc_html_e( 'Box', 'soapatrickeight' ) ?></span>
          <?php endif; ?>
        <?php endif; ?>
      </nav>
    </div>

  <?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>

    <header class="article__header">
      <div class="inner-wrapper inner-wrapper__<?php echo $format ?>">
        <?php
          if($format === 'status') :
            soapatrickeight_svg_icons('status');
          elseif ($format === 'quote') :
            soapatrickeight_svg_icons('quote');
          elseif ($format === 'link') :
            soapatrickeight_svg_icons('link');
          endif ;
          the_content();
        ?>
      </div>
      <div class="article__meta">
        <?php
          soapatrickeight_posted_on();
          soapatrickeight_tags();
          soapatrickeight_edit_post();
        ?>
      </div>
    </header>

  <?php else : ?>

    <header class="article__header">
      <?php the_title( '<h1 class="title-huge">', '</h1>' ); ?>

      <div class="article__meta">
        <?php
          soapatrickeight_posted_on();
          soapatrickeight_tags();
          soapatrickeight_edit_post();
        ?>
      </div>
    </header>

    <div class="article__content">
      <?php the_content(); ?>
    </div>

  <?php endif; ?>
</article>
