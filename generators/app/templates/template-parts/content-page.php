<?php
/**
 * The template used for displaying page content.
 *
 * @package <%= themeKey %>
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php
    the_content();

    wp_link_pages( array(
      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', '<%= themeKey %>' ) . '</span>',
      'after'       => '</div>',
      'link_before' => '<span>',
      'link_after'  => '</span>',
      'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', '<%= themeKey %>' ) . ' </span>%',
      'separator'   => '<span class="screen-reader-text">, </span>',
    ) );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
