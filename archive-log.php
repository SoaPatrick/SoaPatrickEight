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
                  <?php
                    if($value == 'added'):
                      echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z"></path></svg>';
                    elseif($value == 'removed'):
                      echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M140 274c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h232c6.6 0 12 5.4 12 12v12c0 6.6-5.4 12-12 12H140zm364-18c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z"></path></svg>';
                    elseif($value == 'changed'):
                      echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M507.42 114.49c-2.34-9.47-9.66-16.98-19.06-19.61-9.47-2.61-19.65 0-26.65 6.98l-63.87 63.87-44.25-7.36-7.38-44.24 63.87-63.87c6.94-6.92 9.62-17.09 7-26.54-2.62-9.47-10.19-16.83-19.75-19.2C345.6-8.31 291.95 6.54 254.14 44.3c-37.84 37.87-52.21 92.52-38.62 144.7L22.19 382.29c-29.59 29.63-29.59 77.83 0 107.45C36.54 504.09 55.63 512 75.94 512s39.37-7.91 53.71-22.26l193.14-193.11c52.03 13.73 106.8-.72 144.89-38.82 37.81-37.81 52.68-91.39 39.74-143.32zm-62.36 120.7c-31.87 31.81-78.43 42.63-121.77 28.23l-9.38-3.14-206.88 206.84c-16.62 16.62-45.59 16.62-62.21 0-17.12-17.14-17.12-45.06 0-62.21l207.01-206.98-3.09-9.34c-14.31-43.45-3.56-90.06 28.03-121.67C299.48 44.2 329.44 32 360.56 32c6.87 0 13.81.59 20.72 1.81l-69.31 69.35 13.81 83.02L408.84 200l69.3-69.35c6.72 38.25-5.34 76.79-33.08 104.54zM80 416c-8.84 0-16 7.16-16 16s7.16 16 16 16 16-7.16 16-16-7.16-16-16-16z"></path></svg>';
                    elseif($value == 'fixed'):
                      echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M544 272h-64V150.627l35.313-35.313c6.249-6.248 6.249-16.379 0-22.627-6.248-6.248-16.379-6.248-22.627 0L457.373 128H417C417 57.26 359.751 0 289 0c-70.74 0-128 57.249-128 128h-42.373L75.314 84.687c-6.249-6.248-16.379-6.248-22.628 0-6.248 6.248-6.248 16.379 0 22.627L96 150.627V272H32c-8.836 0-16 7.163-16 16s7.164 16 16 16h64v24c0 36.634 11.256 70.686 30.484 98.889l-57.797 57.797c-6.249 6.248-6.249 16.379 0 22.627 6.249 6.249 16.379 6.248 22.627 0l55.616-55.616C178.851 483.971 223.128 504 272 504h32c48.872 0 93.149-20.029 125.071-52.302l55.616 55.616c6.249 6.249 16.379 6.248 22.627 0 6.249-6.248 6.249-16.379 0-22.627l-57.797-57.797C468.744 398.686 480 364.634 480 328v-24h64c8.837 0 16-7.163 16-16s-7.163-16-16-16zM289 32c53.019 0 96 42.981 96 96H193c0-53.019 42.981-96 96-96zm15 440V236c0-6.627-5.373-12-12-12h-8c-6.627 0-12 5.373-12 12v236c-79.402 0-144-64.599-144-144V160h320v168c0 79.401-64.599 144-144 144z"></path></svg>';
                    endif;
                  ?>
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
