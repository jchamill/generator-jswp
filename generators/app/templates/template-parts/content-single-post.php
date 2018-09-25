<?php
/**
 * The template used for displaying page content.
 *
 * @package <%= themeKey %>
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php the_content(); ?>

    <div id="share-post">
      <h4>Share</h4>
      <ul>
        <li><a class="facebook-share" href="http://www.facebook.com/sharer/sharer.php?u=<?php print urlencode(esc_url(get_the_permalink())); ?>&title=<?php print urlencode(get_the_title()); ?>"><span class="screen-reader-text">Share on Facebook</span></a></li>
        <li><a class="twitter-share" href="http://twitter.com/intent/tweet?status=<?php print urlencode(get_the_title()); ?>+<?php print urlencode(esc_url(get_the_permalink())); ?>"><span class="screen-reader-text">Share on Twitter</span></a></li>
      </ul>
    </div>
  </div><!-- .entry-content -->
</article><!-- #post-## -->

<?php if ( is_active_sidebar( 'single' )  ) : ?>
  <div id="single-bottom" class="widget-area">
    <div class="container">
      <?php dynamic_sidebar( 'single' ); ?>
    </div>
  </div><!-- #bottom -->
<?php endif; ?>
