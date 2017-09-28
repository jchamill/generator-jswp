<?php
/**
 * Theme functions and definitions.
 *
 * @package <%= themeKey %>
 */

if ( ! function_exists( '<%= themeKey %>_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function <%= themeKey %>_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    //load_theme_textdomain( '<%= themeKey %>', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    // add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1500, 9999 );

    // Additional image sizes.
    add_image_size( 'large-teaser', 800, 640, true );
    //add_image_size( 'fullscreen', 1500, 3000 );
    //add_image_size( 'icon', 150, 150, array('center', 'top') );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', '<%= themeKey %>' ),
      'footer' => __( 'Footer Menu', '<%= themeKey %>' ),
    ) );


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    //add_theme_support( 'post-formats', array(
    //  'aside',
    //  'image',
    //  'video',
    //  'quote',
    //  'link',
    //  'gallery',
    //  'status',
    //  'audio',
    //  'chat',
    //) );

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    //add_editor_style( array( 'css/editor-style.css', <%= themeKey %>_fonts_url() ) );
  }
endif;
add_action( 'after_setup_theme', '<%= themeKey %>_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function <%= themeKey %>_content_width() {
  $GLOBALS['content_width'] = apply_filters( '<%= themeKey %>_content_width', 1120 );
}
add_action( 'after_setup_theme', '<%= themeKey %>_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function <%= themeKey %>_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Bottom', '<%= themeKey %>' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear below content.', '<%= themeKey %>' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
//add_action( 'widgets_init', '<%= themeKey %>_widgets_init' );

if ( ! function_exists( '<%= themeKey %>_fonts_url' ) ) :
  /**
   * Register Google fonts.
   *
   * @return string Google fonts URL for the theme.
   */
  function <%= themeKey %>_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    //$subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Open Sans font: on or off', '<%= themeKey %>' ) ) {
      $fonts[] = 'Open Sans:300,400,600,700';
    }

    if ( $fonts ) {
      $fonts_url = add_query_arg( array(
        'family' => urlencode( implode( '|', $fonts ) ),
        //'subset' => urlencode( $subsets ),
      ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
  }
endif;

/**
 * Remove emoji scripts and styles.
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Enqueues scripts and styles.
 */
function <%= themeKey %>_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( '<%= themeKey %>-fonts', <%= themeKey %>_fonts_url(), array(), null );

  // Add Font Icons, used in the main stylesheet.
  // wp_enqueue_style( 'fonticons', get_template_directory_uri() . '/fonticons/fonticons.css', array(), '3.4.1' );

  // AOS for animations on scroll.
  //wp_enqueue_style( '<%= themeKey %>-aos', get_template_directory_uri() . '/js/libs/aos/aos.css' );
  //wp_enqueue_script( '<%= themeKey %>-aos', get_template_directory_uri() . '/js/libs/aos/aos.js', array( 'jquery' ), '2.1.1' );

  // Magnific Popup for modal boxes.
  wp_enqueue_style( '<%= themeKey %>-magnific', get_template_directory_uri() . '/js/libs/magnific-popup/magnific-popup.css' );
  wp_enqueue_script( '<%= themeKey %>-magnific', get_template_directory_uri() . '/js/libs/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1' );

  // Slick Slider for slideshows and carousels.
  //wp_enqueue_style( '<%= themeKey %>-slick', get_template_directory_uri() . '/js/libs/slick-carousel/slick.css' );
  //wp_enqueue_script( '<%= themeKey %>-slick', get_template_directory_uri() . '/js/libs/slick-carousel/slick.min.js', array( 'jquery' ), '1.7' );

  // Fitvids for responsive videos.
  //wp_enqueue_script( '<%= themeKey %>-fitvids', get_template_directory_uri() . '/js/libs/fitvids/fitvids.min.js', array( 'jquery' ), '1.2' );

  // Lazy loading for images.
  //wp_enqueue_script( '<%= themeKey %>-lazy', get_template_directory_uri() . '/js/libs/jquery-lazy/jquery.lazy.min.js', array( 'jquery' ), '1.7.4' );

  // Theme stylesheet.
  wp_enqueue_style( '<%= themeKey %>-style', get_template_directory_uri() . '/css/style.css' );

  // Load the html5 shiv.
  wp_enqueue_script( '<%= themeKey %>-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
  wp_script_add_data( '<%= themeKey %>-html5', 'conditional', 'lt IE 9' );

  wp_enqueue_script( '<%= themeKey %>-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151112', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  if ( is_singular() && wp_attachment_is_image() ) {
    wp_enqueue_script( '<%= themeKey %>-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20151104' );
  }

  wp_enqueue_script( '<%= themeKey %>-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '20151204', true );

  wp_localize_script( '<%= themeKey %>-script', 'screenReaderText', array(
    'expand'   => __( 'expand child menu', '<%= themeKey %>' ),
    'collapse' => __( 'collapse child menu', '<%= themeKey %>' ),
  ) );
}
add_action( 'wp_enqueue_scripts', '<%= themeKey %>_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function <%= themeKey %>_body_classes( $classes ) {
  // Adds a class of custom-background-image to sites with a custom background image.
  if ( get_background_image() ) {
    $classes[] = 'custom-background-image';
  }

  // Adds a class of no-sidebar to sites without active sidebar.
  //if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  //  $classes[] = 'no-sidebar';
  //}

  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}
add_filter( 'body_class', '<%= themeKey %>_body_classes' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function <%= themeKey %>_content_image_sizes_attr( $sizes, $size ) {
  // $width = $size[0];
  //
  // 840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
  //
  // if ( 'page' === get_post_type() ) {
  //   840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  // } else {
  //   840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
  //   600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  // }

  return '';
}
add_filter( 'wp_calculate_image_sizes', '<%= themeKey %>_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function <%= themeKey %>_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
  if ( 'post-thumbnail' === $size ) {
    $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
  }
  unset($attr['sizes']);
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', '<%= themeKey %>_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function <%= themeKey %>_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', '<%= themeKey %>_excerpt_length', 999 );

function <%= themeKey %>_post_redirect($url, $post) {

  //if ( get_post_type( $post ) == '<%= themeKey %>_news' ) {
  //  $link = get_post_meta($post->ID, 'external_link', true);
  //  if (!empty($link)) {
  //    return $link;
  //  }
  //}

  return $url;
}
//add_filter('post_type_link', '<%= themeKey %>_post_redirect', 10, 3);
