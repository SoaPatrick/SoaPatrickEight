<?php
/**
 * The template for displaying change lot archive items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickeight
 */

get_header(); ?>

  <section>
    <header class="grid">
      <h1 class="title-large"><?php esc_html_e( 'Change Log', 'soapatrickeight' ) ?></h1>
      <hr>
    </header>
    <div class="grid">
      <div class="changelog" data-infinite-scroll='{ "path": ".post-navigation__previous", "append": ".logs", "history": false, "scrollThreshold": false, "button" : ".post-navigation__previous" }'>
        <?php
          if( have_posts() ) :
            $day_check = '';
            while( have_posts() ) : the_post();

              $day = get_the_date('j');
              if ($day != $day_check) {
                if ($day_check != '') {
                  echo '</ul></div>';
                }
                echo '<div class="logs"><h2>' . get_the_date() . '</h2><ul>';
              }
              $field = get_field_object('changelog_type');
              $value = $field['value'];
              $label = $field['choices'][ $value ];
              ?>
                <li>
                  <span>
                    <i class="<?php echo $value ?>"></i>
                  </span>
                  <strong><?php echo $label ?></strong>
                  <?php the_title(); ?>
                </li>
              <?php
              $day_check = $day;

            endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>

  <?php soapatrickeight_posts_navigation(); ?>

<?php
get_footer();
