<?php
/**
 * The template for displaying search results pages.
 *
 * @package <%= themeKey %>
 */

get_header(); ?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>

<section id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php $mobile_search_class = empty($search_query) ? 'search-empty' : ''; ?>
    <div id="mobile-search" class="<?php print $mobile_search_class; ?>">
      <?php get_search_form(); ?>
    </div>

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <h4><?php printf( $total_results . ' results found for: &ldquo;<span class="search-highlight">%s</span>&rdquo;', esc_html( $search_query ) ); ?></h4>
      </header><!-- .page-header -->

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /**
         * Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called content-search.php and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'search' );

        // End the loop.
      endwhile;

      // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => 'Previous page',
        'next_text'          => 'Next page',
        'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
      ) );

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

  </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
