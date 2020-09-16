<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickeight
 */

?>

    </div>

    <footer class="site-footer highlight">
      <p class="site-footer__copyright">
        <?php echo sprintf( __( 'Stuff from 2000 to %s by SoaPatrick<a href="%s">Eight</a>', 'soapatrickeight' ), date('Y'), esc_url( home_url( '/log' )) ); ?>
      </p>
      <p class="site-footer__data-protection">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>data-protection" aria-label="<?php esc_html_e( 'Data Protection', 'soapatrickeight' ); ?>"><?php esc_html_e( 'Data Protection', 'soapatrickeight' ); ?></a>
      </p>
    </footer>

  </div>

<?php wp_footer(); ?>

</body>
</html>
