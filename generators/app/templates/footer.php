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
      </nav><!-- .footer-navigation -->
    <?php endif; ?>

    <?php
    $<%= themeKey %>_instagram = get_theme_mod('<%= themeKey %>_instagram', '');
    $<%= themeKey %>_facebook = get_theme_mod('<%= themeKey %>_facebook', '');
    $<%= themeKey %>_twitter = get_theme_mod('<%= themeKey %>_twitter', '');
    $<%= themeKey %>_linkedin = get_theme_mod('<%= themeKey %>_linkedin', '');

    $has_social = ( !empty( $<%= themeKey %>_instagram ) || !empty( $<%= themeKey %>_facebook ) || !empty( $<%= themeKey %>_twitter ) || !empty( $<%= themeKey %>_linkedin ) );
    ?>
    <?php if ( $has_social ): ?>
      <ul id="social" class="menu">
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
</footer><!-- .site-footer -->
</div><!-- .site -->

<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="mobile-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', '<%= themeKey %>' ); ?>">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="mobile-logo">
      <!-- Insert Mobile Logo SVG -->
    </a>
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
    <span id="mobile-close"></span>
  </nav>
<?php endif; ?>

<div id="breakpoint"></div>

<?php wp_footer(); ?>

</body>
</html>
