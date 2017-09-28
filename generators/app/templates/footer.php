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
      <nav id="footer-navigation" role="navigation" aria-label="Footer Menu">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_class'     => 'footer-menu'
        ) );
        ?>
      </nav><!-- .footer-navigation -->
    <?php endif; ?>
    <p id="copyright">&copy; <?php print date('Y'); ?> <%= themeName %></p>
  </div>
</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
