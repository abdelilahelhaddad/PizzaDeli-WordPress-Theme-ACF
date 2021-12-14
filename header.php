<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PizzaDeli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url(); ?>"><span
          class="mr-1 flaticon-pizza-1"></span>Pizza<br><small>Delicous</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="ml-auto navbar-nav">
          <li class="nav-item <?php if(is_page( 'home' )) echo 'active'; ?>"><a href="<?php echo site_url(); ?>"
              class="nav-link">Home</a></li>
          <li class="nav-item <?php if(is_page( 'about' )) echo 'active'; ?>"><a
              href="<?php echo site_url('/about'); ?>" class="nav-link">About</a></li>
          <li class="nav-item <?php if(is_page( 'menu' )) echo 'active'; ?>"><a href="<?php echo site_url('/menu'); ?>"
              class="nav-link">Menu</a></li>
          <li class="nav-item <?php if(is_home() || get_post_type() == 'post') echo 'active'; ?>"><a
              href="<?php echo site_url('/blog'); ?>" class="nav-link">Blog</a></li>
          <li class="nav-item <?php if(is_page( 'contact' )) echo 'active'; ?>"><a
              href="<?php echo site_url('/contact'); ?>" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->