<?php
/**
 * The template used for displaying page content.
 *
 * @package <%= themeKey %>
 */
?>
<?php $post_class = !is_single() ? 'post-teaser' : ''; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <?php if (!is_single()): ?>
    <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
    <?php <%= themeKey %>_excerpt(); ?>
  <?php else: ?>
    <div class="post-meta">
      <?php <%= themeKey %>_entry_meta(); ?>
    </div>

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

    <div class="post-categories">
      <?php <%= themeKey %>_entry_taxonomies(); ?>
    </div>
  <?php endif; ?>
</article><!-- #post-## -->
