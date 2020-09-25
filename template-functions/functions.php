<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package soapatrickeight
 */

/**
 * Allow only certain Gutenberg Blocks
 */
function soapatrickeight_allowed_block_types( $allowed_blocks ) {

  return array(
    'core/paragraph',
    'core/image',
    'core/heading',
    'core/gallery',
    'core/list',
    'core/quote',
    'core/video',
    'core/code',
    'core/columns',
    'core-embed/youtube',
  );
}
add_filter( 'allowed_block_types', 'soapatrickeight_allowed_block_types' );

/**
 * posted on functions for blog posts
 *
 */
if ( ! function_exists( 'soapatrickeight_posted_on' ) ) :
  function soapatrickeight_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    $time_string = sprintf( $time_string, esc_attr( get_the_date( DATE_W3C ) ), esc_html( get_the_date() ) );
    $posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

    echo  '<div class="posted-on">' . $posted_on .'</div>'; // WPCS: XSS OK.
  }
endif;


/**
 * tags function for blog posts and factory items
 *
 */
if ( ! function_exists( 'soapatrickeight_tags' ) ) :
  function soapatrickeight_tags() {

    if ( 'post' === get_post_type() ) {
      $tags_list = get_the_term_list( $post->ID , 'post_tag', '', '' );
    }

    if ( 'factory' === get_post_type() ) {
      $tags_list = get_the_term_list( $post->ID , 'factory_tags', '', '' );
    }

    if ( $tags_list ) {
      echo '<div class="tags">' . $tags_list . '</div>';
    }
  }
endif;


/**
 * Edit link for blog posts and factory items
 *
 */
if ( ! function_exists( 'soapatrickeight_edit_post' ) ) :
  function soapatrickeight_edit_post() {
    edit_post_link( __( 'Edit', 'soapatrickeight' ), '<div class="edit">', '</div>' );
  }
endif;


/**
 * function for single post navigation
 *
 */
if ( ! function_exists( 'soapatrickeight_post_navigation' ) ) :
  function soapatrickeight_post_navigation() {
    echo '<div class="grid"><nav class="post-navigation post-navigation--single">';
    next_post_link( '%link', __( 'Next Post', 'soapatrickeight' ) );
    previous_post_link('%link', __( 'Previous Post', 'soapatrickeight' ) );
    echo '</nav></div>';
  }
endif;


/**
 * function for posts navigation
 *
 */
if ( ! function_exists( 'soapatrickeight_posts_navigation' ) ) :
	function soapatrickeight_posts_navigation() {
    echo '<div class="grid"><nav class="post-navigation">';
    if ( 'post' === get_post_type() ) {
      posts_nav_link( ' ', __( 'Next Posts', 'soapatrickeight' ), __( 'Previous Posts', 'soapatrickeight' ) );
    }
    if ( 'factory' === get_post_type() ) {
      posts_nav_link( ' ', __( 'Next Items', 'soapatrickeight' ), __( 'Previous Items', 'soapatrickeight' ) );
    }
    if ( 'log' === get_post_type() ) {
      next_posts_link( __( 'Load More', 'soapatrickeight' ) );
    }
    echo '</nav></div>';
	}
endif;


/**
 * add classes to next and previous Posts
 *
 */
add_filter('next_posts_link_attributes', 'soapatrickeight_next_posts_link_class');
add_filter('previous_posts_link_attributes', 'soapatrickeight_previous_posts_link_class');
function soapatrickeight_next_posts_link_class() {
  return 'class="btn post-navigation__previous"';
}
function soapatrickeight_previous_posts_link_class() {
  return 'class="btn post-navigation__next"';
}

/**
 * add classes to next and previous Post
 *
 */
add_filter('next_post_link', 'soapatrickeight_next_post_link_class');
add_filter('previous_post_link', 'soapatrickeight_previous_post_link_class');
function soapatrickeight_next_post_link_class($format){
  $format = str_replace('href=', 'class="btn post-navigation__next" href=', $format);
  return $format;
}
function soapatrickeight_previous_post_link_class($format) {
  $format = str_replace('href=', 'class="btn post-navigation__previous" href=', $format);
  return $format;
}


/**
 * Remove default image sizes from generating
 *
 */
function soapatrickeight_remove_default_image_sizes( $sizes ) {
  unset( $sizes[ 'medium_large' ]);
  unset( $sizes[ '1536x1536' ]);
  unset( $sizes[ '2048x2048' ]);

  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'soapatrickeight_remove_default_image_sizes' );


/**
 * Attach a class to linked images' parent anchors
 * Works for existing content
 *
 */
function soapatrickeight_give_linked_images_class($content) {
  $classes = 'img-link'; // separate classes by spaces - 'img image-link'
  // check if there are already a class property assigned to the anchor
  if ( preg_match('/<a.*? class=".*?"><img/', $content) ) {
    // If there is, simply add the class
    $content = preg_replace('/(<a.*? class=".*?)(".*?><img)/', '$1 ' . $classes . '$2', $content);
  } else {
    // If there is not an existing class, create a class property
    $content = preg_replace('/(<a.*?)><img/', '$1 class="' . $classes . '" ><img', $content);
  }
  return $content;
}
add_filter('the_content','soapatrickeight_give_linked_images_class');


/**
 * wrap all iframes within content with a div and class
 *
 */
function soapatrickeight_iframe_wrapper($content) {
  $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
  preg_match_all($pattern, $content, $matches);

  foreach ($matches[0] as $match) {
    $wrappedframe = '<div class="responsive-container">' . $match . '</div>';
    $content = str_replace($match, $wrappedframe, $content);
  }

  return $content;
}
add_filter('the_content', 'soapatrickeight_iframe_wrapper');

/**
 * Replace Youtube Videos with Preview Image instead
 * of embeded iFrame, play video on click
 *
 */
function soapatrickeight_youtube_embeded($content){
  //youtube.com\^(?!href=)
  if (preg_match_all('#(?<!href\=\")https\:\/\/www.youtube.com\/watch\?([\\\&\;\=\w\d]+|)v\=[\w\d]{11}+([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)) {
    foreach ($youtube_match[0] as $youtube_url) {
      parse_str( parse_url( wp_specialchars_decode( $youtube_url ), PHP_URL_QUERY ), $youtube_video );
      if (isset($youtube_video['v'])){
        $content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video['v'].'"></div></div>', $content);
      }
    }
  }
  //youtu.be
  if (preg_match_all('#(?<!href\=\")https\:\/\/youtu.be/([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)){
    foreach ($youtube_match[0] as $youtube_url) {
      $youtube_video = str_replace('https://youtu.be/', '', $youtube_url);
      if (isset($youtube_video)){
        $content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video.'"></div></div>', $content);
      }
    }
  }
  return $content;
}
add_filter('the_content', 'soapatrickeight_youtube_embeded',1);


/**
 * Remove archive title prefixes.
 *
 */
function soapatrickeight_archive_title( $title ) {
  // Remove any HTML, words, digits, and spaces before the title.
  return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'soapatrickeight_archive_title' );


/**
 * Adding simple page title to home page
 *
 */
function soapatrickeight_home_page_title( $title ) {
  if ( is_home() ):
    return get_bloginfo('name');
  endif;
}
add_filter( 'pre_get_document_title', 'soapatrickeight_home_page_title' );


/**
 * Adding noindex to specific pages that shouldn't be indexed
 *
 */
function soapatrickeight_add_robots_noindes($output) {
  if($paged > 1 || is_author() || is_tag() || is_date() || is_attachment() || is_singular('log') || is_post_type_archive('log') || is_tax('factory_tags') || is_page('storage') || is_page('tags')) {
    echo '<meta name="robots" content="noindex">';
  }
}
add_action('wp_head', 'soapatrickeight_add_robots_noindes', 1);


/**
 * Adding the Open Graph in the Language Attributes
 *
 */
function soapatrickeight_add_opengraph_doctype($output) {
  return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_action('wp_head', 'soapatrickeight_add_opengraph_doctype', 1);


/**
 * add Open Graph Meta Info
 *
 */
function soapatrickeight_add_opengraph_infos() {

  global $post;
  $default_image = get_template_directory_uri().'/assets/favicon/android-chrome-512x512.png';

  // if page is not single
  if ( !is_singular() ) {
    echo '<meta name="description" content="' . get_bloginfo('description') . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:title" content="' . get_bloginfo('name') . '"/>';
    echo '<meta property="og:description" content="' . get_bloginfo('description') . '"/>';
    echo '<meta property="og:image" content="' . $default_image . '"/>';
    echo '<meta name="twitter:image" content="' . $default_image . '"/>';
    return;
  }

  // if post has excerpt or not
  if ($excerpt = $post->post_excerpt) {
    $excerpt = esc_html(strip_tags($post->post_excerpt));
  } else {
    $excerpt = esc_html(wp_trim_words($post->post_content,20));
  }

  // basic meta infos
  echo '<meta name="description" content="' . $excerpt . '"/>';
  echo '<meta property="og:type" content="article"/>';
  echo '<meta property="og:title" content="' . get_the_title() . '"/>';
  echo '<meta property="og:description" content="' . $excerpt . '"/>';
  echo '<meta property="og:url" content="' . get_permalink() . '"/>';
  echo '<meta property="og:site_name" content="' . get_bloginfo() . '"/>';

  // if post has featured image or not
  if ( !has_post_thumbnail($post->ID) ) {
    echo '<meta property="og:image" content="' . $default_image . '"/>';
  } else {
  $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
    echo '<meta property="og:image" content="' . esc_attr($thumbnail_src[0]) . '"/>';
  }

  echo '<meta name="twitter:title" content="' . get_the_title() . '"/>';
  echo '<meta name="twitter:card" content="summary" />';
  echo '<meta name="twitter:description" content="' . $excerpt . '" />';
  echo '<meta name="twitter:url" content="' . get_permalink() . '"/>';

  // if post has featured image or not
  if ( !has_post_thumbnail($post->ID) ) {
    echo '<meta name="twitter:image" content="' . $default_image . '"/>';
  } else {
    $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
    echo '<meta name="twitter:image" content="' . esc_attr($thumbnail_src[0]) . '"/>';
  }
}
add_action('wp_head', 'soapatrickeight_add_opengraph_infos', 1);


/**
 * Strip body of unwanted classes
 *
 */
function soapatrickeight_body_class( $wp_classes, $extra_classes ) {
  // List of the only WP generated classes allowed
  $whitelist = array( 'admin-bar', 'single' );

  // List of the only WP generated classes that are not allowed
  $blacklist = array( 'home', 'blog', 'archive', 'single', 'category', 'tag', 'error404', 'logged-in', 'admin-bar' );

  // Filter the body classes
  // Whitelist result: (comment if you want to blacklist classes)
  $wp_classes = array_intersect( $wp_classes, $whitelist );
  // Blacklist result: (uncomment if you want to blacklist classes)
  # $wp_classes = array_diff( $wp_classes, $blacklist );

  // Add the extra classes back untouched
  return array_merge( $wp_classes, (array) $extra_classes );
}
add_filter( 'body_class', 'soapatrickeight_body_class', 10, 2 );
