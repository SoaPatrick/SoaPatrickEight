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

<article id="post-<?php the_ID(); ?>" <?php post_class('article post'); ?>>
  <?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>

    <header class="grid article__header">
      <div class="inner-wrapper inner-wrapper__<?php echo $format ?>">
        <?php
          if($format === 'status') :
            if (get_field( "font-awesome_icon" )) :
              echo '<i class="' . get_field( "font-awesome_icon" ) . '"></i>';
            else :
              echo '<i class="fal fa-pencil"></i>';
            endif;
          endif;
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
