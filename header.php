<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themebox
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

  <header class="site-header">
    <div>
      <?php if ( is_front_page() && is_home() ) : ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php else : ?>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
      <?php endif; ?>
      <p><?php bloginfo( 'description' ); ?></p>
    </div>

    <nav>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_id'        => '',
        ) );
      ?>
    </nav>
  </header>

  <main class="site-content">
