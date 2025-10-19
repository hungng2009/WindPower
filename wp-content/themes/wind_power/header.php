<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wind_power
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Green Energy Solutions</title>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/base/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wind_power'); ?></a>

    <header id="masthead" class="site-header">
      <nav id="site-navigation" class="navbar">
        <div class="nav-container">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" id="company-name">
            Green Energy Solutions
          </a>
          <ul class="nav-menu">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php if (is_front_page() || is_home())
                   echo 'active'; ?>">
                Home
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('/about-us'); ?>" class="nav-link <?php if (is_page('about-us'))
                   echo 'active'; ?>">
                About Us
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('/services'); ?>" class="nav-link <?php if (is_page('services'))
                   echo 'active'; ?>">
                Services
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('/blogs'); ?>" class="nav-link <?php if (is_page('blogs'))
                   echo 'active'; ?>">
                Blogs
              </a>
            </li>
            <li>
              <a href="<?php echo get_post_type_archive_link('news'); ?>"
                class="nav-link <?php if (is_post_type_archive('news') || (is_singular('news')))
                  echo 'active'; ?>">
                News
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('/contact'); ?>" class="nav-link <?php if (is_page('contact'))
                   echo 'active'; ?>">
                Contact
              </a>
            </li>
          </ul>
          <button class="mobile-menu-btn">☰</button>
        </div>

      </nav>
    </header><!-- #masthead -->