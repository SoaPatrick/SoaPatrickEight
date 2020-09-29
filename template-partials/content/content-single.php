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
  <?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>

    <header class="grid article__header">
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

    <header class="grid article__header">
      <?php the_title( '<h1 class="title-large">', '</h1>' ); ?>

      <div class="article__meta">
        <?php
          soapatrickeight_posted_on();
          soapatrickeight_tags();
          soapatrickeight_edit_post();
        ?>
      </div>
    </header>

    <div class="grid article__content">
      <?php the_content(); ?>
    </div>

  <?php endif; ?>
</article>
