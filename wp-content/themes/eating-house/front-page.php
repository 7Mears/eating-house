<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package Eating House
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<section id="hero">

  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'eating-house' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div class="home-hero">

    <div class="home-hero--welcome">
      <h2>Welcome</h2>
      <h1>Eating House</h1>
      <p>404 112th St. Saskatoon Saskatchewan
      <br />Phone: (306) 241-6474</p>
    </div>

  </div>
</section><!-- /hero -->

<section id="about">
  <div class="home-about">
    <div class="home-about--content">
      <h2>Discover</h2>
      <h3>Our Story</h3>
      <p>Eating House is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon’s Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling London intersection.</p>
      <a href="#" class="more-link">About Us</a>
    </div>
    <img src="/images/" class="home-about--img">
  </div>
</section><!-- /about -->

<section id="reservations">
  <div class="home-reservations">
    <div class="home-reservations--content">
      <h2>Culinary</h2>
      <h3>Delight</h3>
      <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p>
      <a href="#" class="more-link">Make a reservation</a>
    </div>
    <img src="/images/" class="home-reservations--img">
  </div>
</section><!-- /reservations -->

<section id="menu">
  <div class="home-menu">
    <div class="home-menu--content">
      <h2>Discover</h2>
      <h3>Menu</h3>
      <p>For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.</p>
      <a href="#" class="more-link">View the full menu</a>
    </div>

    <div class ="home-menu--img">
      <img src="/images/">
      <img src="/images/">
      <img src="/images/">
      <img src="/images/">
    </div>
  </div>
</section><!-- /menu -->

<?php get_footer(); ?>
