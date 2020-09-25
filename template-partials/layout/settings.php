<?php
/**
 * Layout part for displaying the settings window
 *
 * @package soapatrickeight
 */

?>

<div id="settings">
  <div class="container">
    <div id="settings__header"></div>
    <button type="button" id="settings__close" aria-label="<?php esc_html_e( 'Close Settings', 'soapatrickeight' ); ?>">
    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
    </button>
    <h2><?php esc_html_e( 'Settings', 'soapatrickeight' ); ?></h2>
    <div class="theme-switch-wrapper">
    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline"><path fill="currentColor" d="M224 119.3l25.4 20C262.7 113.7 289.2 96 320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-41 0-76.5 22.4-96 55.3zM320 32c79.4 0 144 64.6 144 144 0 59.1-35.3 94.4-40.3 100.5l25 19.7c2.9-3.5 47.3-47.1 47.3-120.3C496 78.8 417.2 0 320 0c-75.1 0-123.2 43.4-146.9 79.2L198.3 99c19.2-30.3 58.8-67 121.7-67zm317 453.2L23 1.8C19.6-1 14.5-.5 11.8 3l-10 12.5C-1 19-.4 24 3 26.7l614 483.5c3.4 2.8 8.5 2.2 11.2-1.2l10-12.5c2.8-3.5 2.3-8.5-1.2-11.3zM262.2 352c-14.3-33.2-36.6-65.4-50.6-81.3-16.2-18.5-27-40.6-32.1-64.2l-35.3-27.8c.7 43.3 16.8 82.8 43.3 113.1 25.7 29.3 50.3 76.9 52.4 92.2l.1 75.2c0 3.1.9 6.2 2.7 8.8l24.5 36.8c3 4.5 8 7.1 13.3 7.1h78.9c5.4 0 10.4-2.7 13.3-7.1l24.5-36.8c1.7-2.6 2.7-5.7 2.7-8.8l.1-75.2c.1-.4.9-2.6 1-3.1L364.3 352zm105.7 102.3l-17 25.7h-61.7l-17.1-25.7V448H368v6.3zm.1-38.3h-96l-.1-32H368z" class=""></path></svg>
      <label class="theme-switch" for="light-dark-switch">
        <input type="checkbox" id="light-dark-switch">
        <div class="slider round"></div>
      </label>
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline"><path fill="currentColor" d="M320,64A112.14,112.14,0,0,0,208,176a16,16,0,0,0,32,0,80.09,80.09,0,0,1,80-80,16,16,0,0,0,0-32Zm0-64C217.06,0,143.88,83.55,144,176.23a175,175,0,0,0,43.56,115.55C213.22,321,237.84,368.69,240,384l.06,75.19a15.88,15.88,0,0,0,2.69,8.83l24.5,36.84A16,16,0,0,0,280.56,512h78.85a16,16,0,0,0,13.34-7.14L397.25,468a16.17,16.17,0,0,0,2.69-8.83L400,384c2.25-15.72,27-63.19,52.44-92.22A175.9,175.9,0,0,0,320,0Zm47.94,454.31L350.84,480H289.12l-17.06-25.69,0-6.31h95.91ZM368,416H272l-.06-32H368Zm60.41-145.31c-14,15.95-36.32,48.09-50.57,81.29H262.22c-14.28-33.21-36.6-65.34-50.6-81.29A143.47,143.47,0,0,1,176.06,176C175.88,99,236.44,32,320,32c79.41,0,144,64.59,144,144A143.69,143.69,0,0,1,428.38,270.69ZM96,176a16,16,0,0,0-16-16H16a16,16,0,0,0,0,32H80A16,16,0,0,0,96,176ZM528,64a16.17,16.17,0,0,0,7.16-1.69l64-32A16,16,0,0,0,584.84,1.69l-64,32A16,16,0,0,0,528,64Zm96,96H560a16,16,0,0,0,0,32h64a16,16,0,0,0,0-32ZM119.16,33.69l-64-32A16,16,0,0,0,40.84,30.31l64,32A16.17,16.17,0,0,0,112,64a16,16,0,0,0,7.16-30.31Zm480,288-64-32a16,16,0,0,0-14.32,28.63l64,32a16,16,0,0,0,14.32-28.63ZM112,288a16.17,16.17,0,0,0-7.16,1.69l-64,32a16,16,0,0,0,14.32,28.63l64-32A16,16,0,0,0,112,288Z" class=""></path></svg>
    </div>
    <div class="color-switch-wrapper">
      <label id="color-switch" for="radio">
        <input type="radio" name="color" id="switch--amber" value="amber">
        <input type="radio" name="color" id="switch--red" value="red">
        <input type="radio" name="color" id="switch--pink" value="pink">
        <input type="radio" name="color" id="switch--purple" value="purple">
        <input type="radio" name="color" id="switch--blue" value="blue">
        <input type="radio" name="color" id="switch--green" value="green">
      </label>
    </div>
  </div>
</div>
