<?php

if ( ! function_exists( '<%= themeKey %>_get_post_type_nicename' ) ) :
  function <%= themeKey %>_get_post_type_nicename() {
    $map = array(
      'post_type_key' => 'Post Type',
      'post' => 'Blog',
    );

    $post_type = get_post_type();

    return isset($map[$post_type]) ? $map[$post_type] : '';
  }
endif;

if ( ! function_exists( '<%= themeKey %>_style_attrs' ) ) :
  function <%= themeKey %>_style_attrs($attrs) {
    $style = '';
    foreach ($attrs as $attr => $value) {
      $style .= $attr . ':' . $value . ';';
    }
    return $style;
  }
endif;

if ( ! function_exists( '<%= themeKey %>_get_field' ) ) :
  function <%= themeKey %>_get_field($name, $type = false) {
    if (function_exists('carbon_get_post_meta')) {
      if ($type) {
        return carbon_get_post_meta( get_the_ID(), $name, $type );
      }
      return carbon_get_post_meta( get_the_ID(), $name );
    }
    return false;
  }
endif;

if ( ! function_exists( '<%= themeKey %>_entry_meta' ) ) :
  /**
   * Prints HTML with meta information for the categories, tags.
   */
  function <%= themeKey %>_entry_meta() {
    if ( 'post' === get_post_type() ) {
      $author = false;
      $author_link = ($author) ? get_the_permalink($author->ID) : false;
      $author_thumb = ($author) ? get_the_post_thumbnail($author->ID) : '<span class="default-author"></span>';
      $author_name = ($author) ? $author->post_title : '<%= themeName %>';
      ?>
      <div class="post-meta">
        <div class="author-pic">
          <?php if ($author_link): ?>
          <a href="<?php print $author_link; ?>">
            <?php endif; ?>
            <?php print $author_thumb; ?>
            <?php if ($author_link): ?>
          </a>
        <?php endif; ?>
        </div>
        <?php if ($author_link): ?>
        <a href="<?php print $author_link; ?>" class="post-author">
          <?php endif; ?>
          by <?php print $author_name; ?>
          <?php if ($author_link): ?>
        </a>
      <?php endif; ?>
        <div class="post-date">
          <time class="entry-date published updated" datetime="<?php print esc_attr( get_the_date( 'c' ) ); ?>"><?php print get_the_date(); ?></time>
        </div>
      </div>
      <?php
    }

    if ( in_array( get_post_type(), array( 'attachment' ) ) ) {
      <%= themeKey %>_entry_date();
    }

    $format = get_post_format();
    if ( current_theme_supports( 'post-formats', $format ) ) {
      printf( '<div class="entry-format">%1$s<a href="%2$s">%3$s</a></div>',
        sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', '<%= themeKey %>' ) ),
        esc_url( get_post_format_link( $format ) ),
        get_post_format_string( $format )
      );
    }

    if ( false && ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
      echo '<div class="comments-link">';
      comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', '<%= themeKey %>' ), get_the_title() ) );
      echo '</div>';
    }
  }
endif;

if ( ! function_exists( '<%= themeKey %>_entry_date' ) ) :
  /**
   * Prints HTML with date information for current post.
   */
  function <%= themeKey %>_entry_date() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    //if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    //	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    //}

    $time_string = sprintf( $time_string,
      esc_attr( get_the_date( 'c' ) ),
      get_the_date(),
      esc_attr( get_the_modified_date( 'c' ) ),
      get_the_modified_date()
    );

    printf( '<div class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></div>',
      _x( 'Posted on', 'Used before publish date.', '<%= themeKey %>' ),
      esc_url( get_permalink() ),
      $time_string
    );
  }
endif;

if ( ! function_exists( '<%= themeKey %>_post_thumbnail' ) ) :
  /**
   * Displays an optional post thumbnail.
   *
   * Wraps the post thumbnail in an anchor element on index views, or a div
   * element when on single views.
   */
  function <%= themeKey %>_post_thumbnail( $size = 'post-thumbnail', $linked = TRUE ) {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
      return;
    }

    if ( !$linked ) :
      ?>

      <div class="post-thumbnail">
        <?php the_post_thumbnail( $size ); ?>
      </div><!-- .post-thumbnail -->

    <?php else : ?>

      <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
        <?php the_post_thumbnail( $size, array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
      </a>

    <?php endif; // End is_singular()
  }
endif;

if ( ! function_exists( '<%= themeKey %>_excerpt' ) ) :
  /**
   * Displays the optional excerpt.
   *
   * Wraps the excerpt in a div element.
   *
   * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
   */
  function <%= themeKey %>_excerpt( $class = 'entry-summary' ) {
    $class = esc_attr( $class );
    ?>
    <div class="<?php echo $class; ?>">
      <?php the_excerpt(); ?>
    </div><!-- .<?php echo $class; ?> -->
    <?php
  }
endif;

if ( ! function_exists( '<%= themeKey %>_entry_taxonomies' ) ) :
  /**
   * Prints HTML with category and tags for current post.
   */
  function <%= themeKey %>_entry_taxonomies() {
    $show_comma = false;
    $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', '<%= themeKey %>' ) );
    if ( $categories_list && <%= themeKey %>_categorized_blog() ) {
      printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
        _x( 'Categories', 'Used before category names.', '<%= themeKey %>' ),
        $categories_list
      );
      $show_comma = true;
    }

    $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', '<%= themeKey %>' ) );
    if ( $tags_list ) {
      print $show_comma ? ', ' : '';
      printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
        _x( 'Tags', 'Used before tag names.', '<%= themeKey %>' ),
        $tags_list
      );
    }
  }
endif;

/**
 * Determines whether blog/site has more than one category.
 *
 * @return bool True if there is more than one category, false otherwise.
 */
function <%= themeKey %>_categorized_blog() {
  if ( false === ( $all_the_cool_cats = get_transient( '<%= themeKey %>_categories' ) ) ) {
    // Create an array of all the categories that are attached to posts.
    $all_the_cool_cats = get_categories( array(
      'fields'     => 'ids',
      // We only need to know if there is more than one category.
      'number'     => 2,
    ) );

    // Count the number of categories that are attached to the posts.
    $all_the_cool_cats = count( $all_the_cool_cats );

    set_transient( '<%= themeKey %>_categories', $all_the_cool_cats );
  }

  if ( $all_the_cool_cats > 1 ) {
    // This blog has more than 1 category so <%= themeKey %>_categorized_blog should return true.
    return true;
  } else {
    // This blog has only 1 category so <%= themeKey %>_categorized_blog should return false.
    return false;
  }
}

/**
 * Flushes out the transients used in <%= themeKey %>_categorized_blog().
 */
function <%= themeKey %>_category_transient_flusher() {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }
  // Like, beat it. Dig?
  delete_transient( '<%= themeKey %>_categories' );
}
add_action( 'edit_category', '<%= themeKey %>_category_transient_flusher' );
add_action( 'save_post',     '<%= themeKey %>_category_transient_flusher' );
