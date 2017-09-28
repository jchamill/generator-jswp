<?php
/**
 * The template part for displaying results in search pages.
 *
 * @package <%= themeKey %>
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  </header><!-- .entry-header -->

  <?php <%= themeKey %>_post_thumbnail(); ?>

  <?php <%= themeKey %>_excerpt(); ?>

  <?php if ( 'post' === get_post_type() ) : ?>

    <footer class="entry-footer">
      <?php <%= themeKey %>_entry_meta(); ?>
    </footer><!-- .entry-footer -->

  <?php endif; ?>
</article><!-- #post-## -->

