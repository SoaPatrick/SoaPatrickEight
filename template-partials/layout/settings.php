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
      <?php soapatrickeight_svg_icons('close') ?>
    </button>
    <h2><?php esc_html_e( 'Settings', 'soapatrickeight' ); ?></h2>
    <div class="theme-switch-wrapper">
      <?php soapatrickeight_svg_icons('light-off') ?>
      <label class="theme-switch" for="light-dark-switch">
        <input type="checkbox" id="light-dark-switch">
        <div class="slider round"></div>
      </label>
      <?php soapatrickeight_svg_icons('light-on') ?>
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
    <div class="nav-switch-wrapper">
      <?php soapatrickeight_svg_icons('hand-left-arrow') ?>
      <label class="nav-switch" for="nav-switch">
        <input type="checkbox" id="nav-switch">
        <div class="slider round"></div>
      </label>
      <?php soapatrickeight_svg_icons('hand-right-arrow') ?>
    </div>
  </div>
</div>
