<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package themebox
 */

get_header();
?>

  <section>
    <header>
      <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themebox' ); ?></h1>
    </header>

    <div>
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'themebox' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </section>

<?php
get_footer();
