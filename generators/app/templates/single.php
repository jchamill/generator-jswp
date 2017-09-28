<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package <%= themeKey %>
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php	while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'single-' . get_post_type() ); ?>
      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
      ?>
    <?php endwhile; ?>
  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
