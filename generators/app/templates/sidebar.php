<?php
/**
 * The template for the sidebar containing the main widget area.
 *
 * @package <%= themeKey %>
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  <div id="bottom" class="widget-area">
    <div class="container">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div><!-- #bottom -->
<?php endif; ?>
