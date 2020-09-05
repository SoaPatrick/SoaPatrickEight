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
    </main>
    <div class="site-bubbles">
      <svg xmlns="http://www.w3.org/2000/svg" width="1159.61" height="1379.56" viewBox="0 0 1159.61 1379.56">
        <circle class="cls-1" cx="413" cy="66" r="28"/>
        <circle class="cls-1" cx="628.5" cy="124.5" r="86.5"/>
        <circle class="cls-1" cx="498.75" cy="185.75" r="37.75"/>
        <circle class="cls-1" cx="345.5" cy="175.5" r="32.5"/>
        <circle class="cls-1" cx="279.5" cy="248.5" r="18.5"/>
        <circle class="cls-1" cx="555.62" cy="309.88" r="24.88"/>
        <circle class="cls-1" cx="732" cy="307" r="30"/>
        <circle class="cls-1" cx="375.75" cy="389.25" r="96.25"/>
        <circle class="cls-1" cx="684.75" cy="452.25" r="104.25"/>
        <circle class="cls-1" cx="500" cy="749.75" r="202"/>
        <circle class="cls-1" cx="298" cy="969.25" r="42.25"/>
        <circle class="cls-1" cx="274.13" cy="1081.13" r="29.13"/>
        <g>
          <path class="cls-1" d="M217,934c20.93-94.93,21.07-176.18,21-193-.5-113.55-23.55-192.16-33-234-37.83-167.47-4.16-393.35,81-507H0V1379.56H.29C11,1293.51,161.11,1187.46,217,934Z"/>
          <path class="cls-1" d="M1159.59,1379.56h0Z"/>
        </g>
      </svg>
    </div>
    <footer class="site-footer">

      <div class="site-footer__related">
        <?php
          if( is_singular('post')):
            get_template_part( 'template-partials/content/content', 'related-posts' );
          elseif( is_singular('factory') ):
            get_template_part( 'template-partials/content/content', 'related-factory' );
          else:
            get_template_part( 'template-partials/content/content', 'latest-factory' );
          endif;
        ?>
      </div>

      <div class="site-footer__search">
        <?php get_search_form(); ?>
      </div>

      <p class="site-footer__copyright">
        <?php echo sprintf( __( 'Stuff from 2000 to %s by SoaPatrick/<a href="%s">Eight</a>', 'soapatrickeight' ), date('Y'), esc_url( home_url( '/log' )) ); ?>
      </p>

    </footer>
  </div> <!-- site-wrapper -->
</div> <!-- site -->

<?php wp_footer(); ?>

</body>
</html>
