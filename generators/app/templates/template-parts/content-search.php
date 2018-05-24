<?php
/**
 * The template part for displaying results in search pages.
 *
 * @package <%= themeKey %>
 */
?>
<article class="search-result-row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    $post_type_nice = <%= themeKey %>_get_post_type_nicename();
    $prepend_str = (!empty($post_type_nice)) ? $post_type_nice . ' <span class="separator">&gt</span> ' : '';
    ?>
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">%s', esc_url( get_permalink() ), $prepend_str ), '</a></h2>' ); ?>
  </header>

  <?php $excerpt = get_the_excerpt(); ?>
  <?php if (!empty($excerpt)): ?>
    <div class="search-excerpt"><?php <%= themeKey %>_excerpt(); ?></div>
  <?php endif; ?>

</article>