<?php
/**
 * Template Name: Storage Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickseven
 */

get_header();
?>

  <article>
    <div class="grid breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickseven' ) ?></a></span>
        <span class="breadcrumbs__item--last"><?php esc_html_e( 'Storage', 'soapatrickseven' ) ?></span>
      </nav>
    </div>

    <header class="grid">
      <h1 class="title-large"><?php esc_html_e( 'Storage', 'soapatrickseven' ) ?></h1>
      <hr>
    </header>

    <div class="grid">
      <div class="storage">
        <?php
          while ( have_posts() ) : the_post();

            $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
              FROM $wpdb->posts WHERE post_status = 'publish'
              AND post_type = 'post' ORDER BY post_date DESC");

            foreach($years as $year):
              ?>
                <div class="storage__year">
                  <h2><?php echo $year; ?></h2>
                  <ul>
                    <?php
                      $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
                        FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'
                        AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");

                      foreach($months as $month):
                        ?>
                          <li><a href="<?php echo get_month_link($year, $month); ?>">
                              <?php echo date('F', strtotime("2012-$month-01"));?></a>
                          </li>
                        <?php
                      endforeach;
                    ?>
                  </ul>
                </div>
              <?php
            endforeach;
          endwhile;
        ?>
      </div>
    </div>
  </article>

<?php
get_footer();
