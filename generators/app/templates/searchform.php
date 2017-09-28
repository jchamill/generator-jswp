<?php
/**
 * Template for displaying search forms.
 *
 * @package <%= themeKey %>
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
    <span class="screen-reader-text">Search for:</span>
    <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
  </label>
  <button type="submit" class="search-submit"><span class="screen-reader-text-uncomment">Search</span></button>
</form>
