<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickeight
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> data-color="pink" data-theme="dark" data-nav="left">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php
    wp_head();
    get_template_part( 'template-partials/head/favicon');
    get_template_part( 'template-partials/head/theme-script');

    if(is_post_type_archive('lab')):
      ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
      <?php
    endif;
  ?>
</head>

<body <?php body_class(); ?>>

  <?php
    get_template_part( 'template-partials/layout/settings');
    get_template_part( 'template-partials/layout/search');
  ?>

  <div class="site-wrapper">
    <?php
      get_template_part( 'template-partials/layout/navigation');
      get_template_part( 'template-partials/layout/header');
    ?>
    <div class="site-content">

