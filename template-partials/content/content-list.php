<?php
/**
 * Template part for displaying posts in list form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid article post-list' ); ?>>
  <div class="post-list__wrapper">
    <div class="post-list__icon<?php if (has_post_thumbnail()): echo ' post-list__icon--image'; endif; ?>">
      <?php
        $format = get_post_format();
        if ($format === 'quote') :
          soapatrickeight_svg_icons('quote');
        elseif ($format === 'link') :
          soapatrickeight_svg_icons('link');
        elseif ($format === 'image') :
          if (has_post_thumbnail()) :
            the_post_thumbnail( 'thumbnail' );
          else :
            soapatrickeight_svg_icons('image');
          endif;
        elseif ($format === 'video') :
            if (has_post_thumbnail()) :
              the_post_thumbnail( 'thumbnail' );
            else :
              soapatrickeight_svg_icons('video');
            endif;
        elseif ($format === 'status') :
          soapatrickeight_svg_icons('status');
        else :
          if (has_post_thumbnail()) :
            the_post_thumbnail( 'thumbnail' );
          else :
            soapatrickeight_svg_icons('pencil');
          endif;
        endif;
      ?>
    </div>

    <header class="article__header post-list__header">
      <?php the_title( '<h1 class="title-list"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
    </header>
    <footer class="article__meta post-list__meta">
      <?php
        soapatrickeight_posted_on();
        soapatrickeight_tags();
        soapatrickeight_edit_post();
      ?>
    </footer>

  </div>
</article>
