<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package <%= themeKey %>
 */
?>
</div><!-- .site-content -->

<?php get_sidebar(); ?>

<footer id="site-footer" role="contentinfo">
  <div class="container top-bottom-padding">
    <?php if ( has_nav_menu( 'footer' ) ) : ?>
      <nav id="menu-footer" role="navigation" aria-label="Footer Menu">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_class'     => 'menu'
        ) );
        ?>
      </nav>
    <?php endif; ?>

    <?php
    $<%= themeKey %>_instagram = get_theme_mod('<%= themeKey %>_instagram', '');
    $<%= themeKey %>_facebook = get_theme_mod('<%= themeKey %>_facebook', '');
    $<%= themeKey %>_twitter = get_theme_mod('<%= themeKey %>_twitter', '');
    $<%= themeKey %>_linkedin = get_theme_mod('<%= themeKey %>_linkedin', '');

    $has_social = ( !empty( $<%= themeKey %>_instagram ) || !empty( $<%= themeKey %>_facebook ) || !empty( $<%= themeKey %>_twitter ) || !empty( $<%= themeKey %>_linkedin ) );
    ?>
    <?php if ( $has_social ): ?>
      <ul id="social" class="icon-menu menu">
        <?php if ( !empty($<%= themeKey %>_instagram) ): ?>
          <li><a href="<?php print esc_url($<%= themeKey %>_instagram); ?>" class="icon-instagram"><span class="screen-reader-text">Instagram</span></a></li>
        <?php endif; ?>

        <?php if ( !empty($<%= themeKey %>_facebook) ): ?>
          <li><a href="<?php print esc_url($<%= themeKey %>_facebook); ?>" class="icon-facebook"><span class="screen-reader-text">Facebook</span></a></li>
        <?php endif; ?>

        <?php if ( !empty($<%= themeKey %>_twitter) ): ?>
          <li><a href="<?php print esc_url($<%= themeKey %>_twitter); ?>" class="icon-twitter"><span class="screen-reader-text">Twitter</span></a></li>
        <?php endif; ?>

        <?php if ( !empty($<%= themeKey %>_linkedin) ): ?>
          <li><a href="<?php print esc_url($<%= themeKey %>_linkedin); ?>" class="icon-linkedin"><span class="screen-reader-text">LinkedIn</span></a></li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>
    
    <p id="copyright">&copy; <?php print date('Y'); ?> <%= themeName %></p>
  </div>
</footer>
</div>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="mobile-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', '<%= themeKey %>' ); ?>">
    <div id="mobile-overflow">
      <div id="mobile-top">
        <div id="mobile-logo" class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
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
      </div>

      <div id="mobile-middle">
        <div id="mobile-search">
          <span id="search-close"></span>
          <?php get_search_form(); ?>
        </div>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav',
          'container' => '',
        ) );
        ?>
      </div>

      <div id="mobile-bottom">
        <?php if ( $has_social ): ?>
          <ul id="mobile-social" class="icon-menu menu">
            <?php if ( !empty($<%= themeKey %>_instagram) ): ?>
              <li><a href="<?php print esc_url($<%= themeKey %>_instagram); ?>" class="icon-instagram"><span class="screen-reader-text">Instagram</span></a></li>
            <?php endif; ?>

            <?php if ( !empty($<%= themeKey %>_facebook) ): ?>
              <li><a href="<?php print esc_url($<%= themeKey %>_facebook); ?>" class="icon-facebook"><span class="screen-reader-text">Facebook</span></a></li>
            <?php endif; ?>

            <?php if ( !empty($<%= themeKey %>_twitter) ): ?>
              <li><a href="<?php print esc_url($<%= themeKey %>_twitter); ?>" class="icon-twitter"><span class="screen-reader-text">Twitter</span></a></li>
            <?php endif; ?>

            <?php if ( !empty($<%= themeKey %>_linkedin) ): ?>
              <li><a href="<?php print esc_url($<%= themeKey %>_linkedin); ?>" class="icon-linkedin"><span class="screen-reader-text">LinkedIn</span></a></li>
            <?php endif; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <span id="mobile-close"></span>
  </nav>
<?php endif; ?>

<div id="breakpoint"></div>

<?php wp_footer(); ?>

</body>
</html>
