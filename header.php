<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickeight
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php
    wp_head();
    get_template_part( 'template-partials/head/favicon');
  ?>
</head>

<body <?php body_class(); ?>>
<div class="site">

  <?php get_template_part( 'template-partials/layout/navigation'); ?>

  <div class="site-wrapper">
    <main class="site-main">
