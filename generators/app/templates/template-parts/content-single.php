<?php
/**
 * The template used for displaying a single post.
 *
 * @package <%= themeKey %>
 */
?>

<header id="page-header">
  <p class="post-date"><?php print get_the_date( 'M j, Y' ); ?></p>
  <h1><?php print get_the_title(); ?></h1>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php //<%= themeKey %>_entry_meta(); ?>
  <?php //<%= themeKey %>_entry_taxonomies(); ?>
  <?php <%= themeKey %>_post_thumbnail( 'post-thumbnail', false ); ?>

  <div class="entry-content">
    <?php the_content(); ?>

    <div id="share-post">
      <h4>Share</h4>
      <ul class="icon-menu menu">
        <li><a class="icon-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php print urlencode(esc_url(get_the_permalink())); ?>&title=<?php print urlencode(get_the_title()); ?>"><span class="screen-reader-text">Share on Facebook</span></a></li>
        <li><a class="icon-twitter" href="http://twitter.com/intent/tweet?status=<?php print urlencode(get_the_title()); ?>+<?php print urlencode(esc_url(get_the_permalink())); ?>"><span class="screen-reader-text">Share on Twitter</span></a></li>
      </ul>
    </div>
  </div>
</article>
