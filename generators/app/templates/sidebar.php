<?php
/**
 * The template for the sidebar containing the main widget area.
 *
 * @package <%= themeKey %>
 */
?>

<?php if ( is_active_sidebar( 'bottom' )  ) : ?>
  <div id="bottom" class="so-light-text widget-area">
    <div class="container">
      <?php dynamic_sidebar( 'bottom' ); ?>
    </div>
  </div><!-- #bottom -->
<?php endif; ?>
