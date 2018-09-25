<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package <%= themeKey %>
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php $page_title = <%= themeKey %>_get_field( 'crb_page_title' ); ?>
  <?php if ($page_title): ?>
    <title><?php print $page_title; ?></title>
    <meta name="title" content="<?php print esc_attr($page_title); ?>">
  <?php elseif ($page_title = get_the_title()): ?>
    <title><%= themeName %> | <?php print $page_title; ?></title>
    <meta name="title" content="<%= themeName %> | <?php print esc_attr($page_title); ?>">
  <?php else: ?>
    <title><%= themeName %></title>
    <meta name="title" content="<%= themeName %>">
  <?php endif; ?>

  <?php $meta_description = <%= themeKey %>_get_field( 'crb_meta_description' ); ?>
  <?php if ($meta_description || (has_excerpt() && $meta_description = get_the_excerpt())): ?>
    <meta name="description" content="<?php print esc_attr($meta_description); ?>">
    <meta name="og:description" content="<?php print esc_attr($meta_description); ?>">
  <?php endif; ?>

  <?php $og_image = <%= themeKey %>_get_field( 'crb_og_image' ); ?>
  <?php if ($og_image): ?>
    <meta name="og:image" content="<?php print $og_image; ?>">
  <?php elseif (has_post_thumbnail()): ?>
    <meta name="og:image" content="<?php print get_the_post_thumbnail_url(); ?>">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '<%= themeKey %>' ); ?></a>

  <header id="site-header">
    <div class="container clearfix">
      <div id="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
          <svg class="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="402.3px" height="98.6px" viewBox="0 0 402.3 98.6" enable-background="new 0 0 402.3 98.6" xml:space="preserve">
<path class="text" fill="#FFFFFF" d="M115.5,57c0.2,2.9,1.8,3.2,3.6,3.2c4.1,0,4.1-1.6,4.1-3.9V45.1h1.9V57c0,2.4-0.9,4.9-6.1,4.9
	c-2.5,0-5.1-0.6-5.4-4.6L115.5,57z"/>
            <path class="mark" fill="#FFFFFF" d="M94.7,8l-8.8,14.4l-19,31.2C54.3,74.3,30.3,85.2,0,70.8l1.6-2.5c22.2,9.6,36.4,0.5,48.4-17l17.7-29.1
  c5.8-9.5,6.5-10.7,0.3-11.4l-16.7-0.4L52.9,8H94.7z"/>
            <path class="mark" fill="#FFFFFF" d="M94.1,23.8L82.2,43.5l0,0L64.5,72.6c-12,17.5-26.2,26.6-48.4,17l-1.6,2.5c30.3,14.4,54.3,3.5,66.9-17.2
  l15.4-25.4l0,0L111,26c12-17.5,26.2-26.6,48.4-17l1.6-2.5C130.6-7.8,106.7,3,94.1,23.8z"/>
            <path class="text" fill="#FFFFFF" d="M132.3,61.4h-2.1L138,45h1.8l7.8,16.4h-2.1l-2-4.3h-9.2L132.3,61.4z M135,55.5h7.8l-3.9-8.6L135,55.5z"/>
            <path class="text" fill="#FFFFFF" d="M165.7,58.8c-1.1,1.7-3.5,3-6.4,3c-5.1,0-9-3.6-9-8.6c0-5,3.8-8.6,9-8.6c2.1,0,4.4,0.8,5.9,2.6l-1.5,1.1
	c-0.7-1.1-2.6-2.2-4.4-2.2c-4.4,0-7.1,3.3-7.1,7.1c0,3.8,2.6,7.1,7.1,7.1c1.8,0,3.6-0.6,4.9-2.5L165.7,58.8z"/>
            <path class="text" fill="#FFFFFF" d="M172.8,52.1L172.8,52.1h0.3l8.8-7.1h2.7l-9.4,7.4l10,9h-2.8l-9.2-8.5h-0.3h0v8.5h-1.9V45h1.9V52.1z"/>
            <path class="text" fill="#FFFFFF" d="M199.6,47.7c-0.8-1.1-2-1.6-3.6-1.6c-2,0-4,0.9-4,3c0,4.4,9.6,2.1,9.6,8c0,3-3.2,4.8-6.2,4.8
	c-2.3,0-4.5-0.7-5.9-2.4l1.7-1.1c0.8,1.2,2.3,2,4.3,2c1.9,0,4-1.1,4-3c0-4.6-9.6-2.1-9.6-8.1c0-3.2,3-4.7,6.1-4.7
	c2.1,0,3.8,0.5,5.3,2L199.6,47.7z"/>
            <path class="text" fill="#FFFFFF" d="M215.2,61.8c-5.1,0-8.9-3.6-8.9-8.6c0-5,3.8-8.6,8.9-8.6c5.1,0,8.9,3.6,8.9,8.6
	C224.2,58.2,220.4,61.8,215.2,61.8z M215.2,46.1c-4.4,0-7,3.3-7,7.1c0,3.8,2.6,7.1,7,7.1c4.4,0,7.1-3.3,7.1-7.1
	C222.3,49.4,219.7,46.1,215.2,46.1z"/>
            <path class="text" fill="#FFFFFF" d="M242.1,58.9L242.1,58.9l0.1-13.9h1.8v16.4h-2.3l-10.6-14.1H231v14.1h-1.8V45h2.3L242.1,58.9z"/>
            <path class="text" fill="#FFFFFF" d="M275.4,47.7c-0.8-1.1-2-1.6-3.6-1.6c-2,0-4,0.9-4,3c0,4.4,9.6,2.1,9.6,8c0,3-3.2,4.8-6.2,4.8
	c-2.3,0-4.5-0.7-5.9-2.4l1.7-1.1c0.8,1.2,2.3,2,4.3,2c1.9,0,4-1.1,4-3c0-4.6-9.6-2.1-9.6-8.1c0-3.2,3-4.7,6.1-4.7
	c2.1,0,3.8,0.5,5.3,2L275.4,47.7z"/>
            <path class="text" fill="#FFFFFF" d="M283.7,45h5.4c3.8,0,6.2,1.4,6.2,4.4s-2.4,4.4-6.2,4.4h-3.5v7.6h-1.9V45z M285.6,52.2h3.1
	c3.4,0,4.6-1.3,4.6-2.9c0-1.6-1.2-2.9-4.6-2.9h-3.1V52.2z"/>
            <path class="text" fill="#FFFFFF" d="M298.8,61.4h-2.2l8.1-16.4h1.9l8.1,16.4h-2.2l-2.1-4.3h-9.6L298.8,61.4z M301.6,55.5h8.1l-4-8.6L301.6,55.5z
	"/>
            <path class="text" fill="#FFFFFF" d="M321.7,59.8h8.7v1.5h-10.6V45h1.9V59.8z"/>
            <path class="text" fill="#FFFFFF" d="M336,45h5.6c4.2,0,8.9,2.7,8.9,8.2c0,5.5-4.7,8.2-8.9,8.2H336V45z M337.7,59.8h3.3c5.2,0,7.6-3.3,7.6-6.7
	c0-3.4-2.4-6.7-7.6-6.7h-3.3V59.8z"/>
            <path class="text" fill="#FFFFFF" d="M358.8,61.4h-1.9V45h1.9V61.4z"/>
            <path class="text" fill="#FFFFFF" d="M400.6,47.8c-1.2-1.2-2.9-1.9-5.1-1.9c-4.6,0-7.3,3.3-7.3,7.1c0,3.8,2.7,7.1,7.3,7.1c1.8,0,3.6-0.5,4.9-1.2
	v-5.1h-2.9v-1.5h4.7v7.7c-2,1.1-4.6,1.7-6.7,1.7c-5.3,0-9.3-3.6-9.3-8.6c0-5,4-8.6,9.3-8.6c2.8,0,4.9,0.7,6.4,2.2L400.6,47.8z"/>
            <line class="text" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="1.5261" x1="255.7" y1="39.4" x2="255.7" y2="66.8"/>
            <path class="text" fill="#FFFFFF" d="M379.2,58.9L379.2,58.9l0.1-13.9h1.8v16.4h-2.3l-10.6-14.1h-0.1v14.1h-1.8V45h2.3L379.2,58.9z"/>
            </svg>
        </a>
      </div>

      <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <div id="menu-toggle" class="menu-toggle">
          <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <nav id="site-navigation" class="clearfix" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', '<%= themeKey %>' ); ?>">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
            <!-- Insert Mobile SVG Logo Here -->
          </a>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'nav',
            'container' => '',
          ) );
          ?>
          <div id="search-drawer">
            <span id="search-close"></span>
            <?php get_search_form(); ?>
          </div>
        </nav><!-- .main-navigation -->
      <?php endif; ?>
    </div>
  </header><!-- .site-header -->

  <?php
    $header_styles = array();
    $header_classes = array();

    if (has_post_thumbnail()) {
      $header_styles['background-image'] = 'url(' . get_the_post_thumbnail_url() . ')';
    }
    $header_content = <%= themeKey %>_get_field( 'crb_header_content' );
    if ($header_content) {
      $header_classes[] = 'expanded-header';
    }
  ?>

  <div id="page-title" class="<?php print implode(' ', $header_classes); ?>" style="<?php print <%= themeKey %>_style_attrs($header_styles); ?>">
    <div class="container">
      <?php if ($header_content): ?>
        <div class="editor">
          <?php print do_shortcode(wpautop($header_content)); ?>
        </div>
      <?php else: ?>
        <h1 class="title">
          <?php if (is_404()): ?>
            404
          <?php elseif (is_search()): ?>
            Search Results
          <?php elseif (is_archive()): ?>
            <?php print get_the_archive_title(); ?>
          <?php else: ?>
            <?php print get_the_title(); ?>
          <?php endif; ?>
        </h1>
      <?php endif; ?>
    </div>
  </div>

  <div id="content" class="site-content">
