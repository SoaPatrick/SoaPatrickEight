<?php
/**
 * Layout part for displaying the navigation
 *
 * @package soapatrickeight
 */

?>

<nav class="site-navigation">
  <ul>
    <li>
      <a class="site-navigation__link site-navigation__link--home" href="<?php echo esc_url( home_url() ); ?>" aria-label="Home">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 894.28 1024" class="site-navigation__icon site-navigation__icon--home">
          <path d="M323.6,1023.67,572.31,197.44h177.1c51.76,0,89.85,6.51,112.64,19.54,21.81,12.37,32.23,34.83,32.23,68.36,0,27-6.19,60.23-18.23,99L828.52,542.52c-11.4,37.11-23.77,68.36-37.11,92.78-13,23.76-28.65,43-46.88,57-17.91,14-39.72,24.09-64.46,30-25.07,6.19-56,9.12-91.8,9.12H553.11L465.21,1024h0l-141.61-.33ZM636.45,582.89A51.51,51.51,0,0,0,658.91,578c7.16-3.25,13.35-9.44,19.21-18.23,5.2-8.13,10.74-19.2,16.27-33.2q8.31-20.51,17.58-53.72c8.47-26.69,14.65-48.83,18.56-65.43,3.91-16.93,5.86-29.63,5.86-38.74,0-11.07-3.58-17.91-10.42-20.84-4.88-1.95-11.39-2.93-20.18-2.93l-38.09.33-66.41,221-4.89,16.28Z"/>
          <path d="M130.56,856.83c-6.84,0-15.63-.32-16.28-.32-33.21-1.63-59.9-9.12-79.43-22.47C12.06,818.42.67,792.7,0,754.94c-.32-25.39,4.89-57.3,15.63-94.41L34.2,596.07H170.27l-12.69,41.67c-4.56,17.58-6.84,30.28-6.84,39.72.33,19.86,11.4,31.25,30.28,31.25h1a73.18,73.18,0,0,0,15.3-1.63l.66-.32a50.68,50.68,0,0,0,22.13-15c9.12-11.07,17.26-27.67,24.74-51.43,4.89-17.91,7.17-33.54,7.17-47.53,0-24.42-5.86-45.91-17.58-63.16-11.07-16.28-23.12-32.88-36.46-49.16-8.47-9.76-16.93-20.51-25.4-31.57a206.37,206.37,0,0,1-21.81-35.81,213.32,213.32,0,0,1-15.62-42.65,207.61,207.61,0,0,1-6.19-52.09c0-30.92,6.19-67.06,18.23-108.08,11.39-37.11,24.42-69.66,38.74-96.68,14.32-26.37,31.25-48.51,50.46-65.11a185.79,185.79,0,0,1,67.39-36.79C329.47,3.91,359.74,0,393.92,0,440.15,0,475,8.14,498.1,24.09c22.46,15.63,33.53,41.67,33.53,79.76,0,25.39-5.86,57-16.93,94.08l-19.53,64.13H357.79l14.65-43.62c4.88-17.25,7.48-30.28,7.48-39.39,0-20.18-11.06-31.58-30.6-31.58-15.3,0-28.32,5.86-38.09,17.58-9.44,11.07-16.92,28-23.43,52.41A155.66,155.66,0,0,0,282.91,237a100.72,100.72,0,0,0-1.3,17.25c0,21.49,5.53,40.37,16.28,56.32,10.09,15,22.13,30.28,35.16,45.9,8.13,9.77,16.6,20.51,25.39,31.58a246.34,246.34,0,0,1,22.46,36.46c6.84,13.35,12.37,28.65,16.93,44.93s6.84,34.83,6.84,55a347.36,347.36,0,0,1-3.91,49.48c-2.6,17.91-7.16,37.12-13,57.63-13,43.62-27,80.08-41.67,109.05C331.42,768.94,314.16,792.38,295,810a167.1,167.1,0,0,1-67.06,36.79c-26.05,7.16-56.65,10.74-91.48,10.74A18.09,18.09,0,0,0,130.56,856.83Z"/>
        </svg>
      </a>
    </li>
    <!-- <li><a class="site-navigation__link" href="<?php echo esc_url( home_url( '/' ) ); ?>box"><?php esc_html_e( 'Box', 'soapatrickeight' ); ?></a></li> -->
    <li>
      <a class="site-navigation__link site-navigation__link--animation" href="<?php echo esc_url( home_url( '/' ) ); ?>storage" aria-label="<?php esc_html_e( 'Storage', 'soapatrickeight' ); ?>">
        <span><?php esc_html_e( 'Storage', 'soapatrickeight' ); ?></span>
        <svg aria-hidden="true" focusable="false" class="site-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" class="secondary" d="M32 160v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V160zm288 84a12 12 0 0 1-12 12H204a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h104a12 12 0 0 1 12 12z"></path>
          <path fill="currentColor" class="primary" d="M512 64v48a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16V64a32 32 0 0 1 32-32h448a32 32 0 0 1 32 32z"></path>
        </svg>
      </a>
    </li>
    <li>
      <a class="site-navigation__link site-navigation__link--animation" href="<?php echo esc_url( home_url( '/' ) ); ?>factory" aria-label="<?php esc_html_e( 'Factory', 'soapatrickeight' ); ?>">
        <span><?php esc_html_e( 'Factory', 'soapatrickeight' ); ?></span>
        <svg aria-hidden="true" focusable="false" class="site-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" class="secondary" d="M512 184v272a24 24 0 0 1-24 24H136a24 24 0 0 0 24-24V252.31l139.12-88.53A24 24 0 0 1 336 184v68.28l139.12-88.53A24 24 0 0 1 512 184z"></path>
          <path fill="currentColor" class="primary" d="M136 480H24a24 24 0 0 1-24-24V56a24 24 0 0 1 24-24h112a24 24 0 0 1 24 24v400a24 24 0 0 1-24 24z"></path>
        </svg>
      </a>
    </li>
    <li>
      <a class="site-navigation__link site-navigation__link--animation site-navigation__link--patrick" href="<?php echo esc_url( home_url( '/' ) ); ?>patrick" aria-label="<?php esc_html_e( 'Patrick', 'soapatrickeight' ); ?>">
        <span><?php esc_html_e( 'Patrick', 'soapatrickeight' ); ?></span>
        <svg aria-hidden="true" focusable="false" class="site-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" class="primary" d="M144 0a48 48 0 1 0 48 48 48.08 48.08 0 0 0-48-48zm357.5 66.6L321.08 1a16 16 0 0 0-20.5 9.6l-43.8 120.3a16 16 0 0 0 9.6 20.5l180.5 65.6a16 16 0 0 0 20.5-9.6L511 87.1a15.93 15.93 0 0 0-9.52-20.5z"></path>
          <path fill="currentColor" class="secondary" d="M321 212l-47.8-16-49.3-49.3a63.47 63.47 0 0 0-45.2-18.8h-62.9a63.63 63.63 0 0 0-57.2 35.4L3.38 273.7a32 32 0 1 0 57.2 28.6L80 263.6v54.8L64.08 476.8a32 32 0 0 0 28.6 35c1.1.1 2.2.2 3.2.2a32.05 32.05 0 0 0 31.8-28.8l13.2-131.2h15.3L192 423.5V480a32 32 0 0 0 64 0v-56.5a64.27 64.27 0 0 0-6.7-28.6l-41.2-82.5v-91.2l20 20a65 65 0 0 0 25 15.5l46.1 15.4-11.2 30.8a16 16 0 0 0 9.6 20.5l15 5.5a16 16 0 0 0 20.5-9.6l46.19-126.87L334 176zM429.68 6.5l-15-5.5a16 16 0 0 0-20.5 9.6l-5.49 15 45.1 16.4 5.49-15a16 16 0 0 0-9.6-20.5z"></path>
        </svg>
      </a>
    </li>
    <li>
      <button type="button" class="site-navigation__link site-navigation__link--animation" id="toggle-settings" aria-label="<?php esc_html_e( 'Settings', 'soapatrickeight' ); ?>">
        <span><?php esc_html_e( 'Settings', 'soapatrickeight' ); ?></span>
        <svg aria-hidden="true" focusable="false" class="site-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" class="secondary" d="M80 0H48a16 16 0 0 0-16 16v80h64V16A16 16 0 0 0 80 0zm112 496a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-48h-64zm-160 0a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V192H32zM240 0h-32a16 16 0 0 0-16 16v336h64V16a16 16 0 0 0-16-16zm112 496a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V320h-64zM400 0h-32a16 16 0 0 0-16 16v208h64V16a16 16 0 0 0-16-16z"></path>
          <path fill="currentColor" class="primary" d="M112 96H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm320 128h-96a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zM272 352h-96a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
        </svg>
      </button>
    </li>
    <li>
      <button type="button" class="site-navigation__link site-navigation__link--animation" id="toggle-search-collapse" aria-label="<?php esc_html_e( 'Search', 'soapatrickeight' ); ?>">
        <span><?php esc_html_e( 'Search', 'soapatrickeight' ); ?></span>
        <svg aria-hidden="true" focusable="false" class="site-navigation__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" class="primary" d="M208 80a128 128 0 1 1-90.51 37.49A127.15 127.15 0 0 1 208 80m0-80C93.12 0 0 93.12 0 208s93.12 208 208 208 208-93.12 208-208S322.88 0 208 0z"></path>
          <path fill="currentColor" class="secondary" d="M504.9 476.7L476.6 505a23.9 23.9 0 0 1-33.9 0L343 405.3a24 24 0 0 1-7-17V372l36-36h16.3a24 24 0 0 1 17 7l99.7 99.7a24.11 24.11 0 0 1-.1 34z"></path>
        </svg>
      </button>
    </li>
  </ul>
</nav>
