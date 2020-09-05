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
    'core/audio',
    'core/cover',
    'core/file',
    'core/video',
    'core/table',
    'core/verse',
    'core/code',
    'core/button',
    'core/columns',
    'core/block',
    'core/template',
    'core/media-text',
    'core/separator',
    'core/shortcode',
    'core/archives',
    'core/categories',
    'core/latest-comments',
    'core/latest-posts',
    'core/calendar',
    'core/rss',
    'core/search',
    'core/tag-cloud',
    'core/embed',
    'core-embed/twitter',
    'core-embed/youtube',
    'core-embed/facebook',
    'core-embed/instagram',
    'core-embed/wordpress',
    'core-embed/soundcloud',
    'core-embed/spotify',
    'core-embed/flickr',
    'core-embed/vimeo',
    'core-embed/animoto',
    'core-embed/cloudup',
    'core-embed/collegehumor',
    'core-embed/dailymotion',
    'core-embed/funnyordie',
    'core-embed/hulu',
    'core-embed/imgur',
    'core-embed/issuu',
    'core-embed/kickstarter',
    'core-embed/meetup-com',
    'core-embed/mixcloud',
    'core-embed/photobucket',
    'core-embed/polldaddy',
    'core-embed/reddit',
    'core-embed/reverbnation',
    'core-embed/screencast',
    'core-embed/scribd',
    'core-embed/slideshare',
    'core-embed/smugmug',
    'core-embed/speaker',
    'core-embed/ted',
    'core-embed/tumblr',
    'core-embed/videopress',
    'core-embed/wordpress-tv'
	);
}
//add_filter( 'allowed_block_types', 'soapatrickeight_allowed_block_types' );


/**
 * Adds custom classes to the array of body classes.
 */
function soapatrickeight_one_body_classes( $classes ) {

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar' ) ) {
		$classes[] = 'no-sidebar';
  }

	return $classes;
}
add_filter( 'body_class', 'soapatrickeight_one_body_classes' );


/**
 * Prints HTML with meta information for the current post-date/time.
 */
if ( ! function_exists( 'soapatrickeight_posted_on' ) ) :
	function soapatrickeight_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'soapatrickeight' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;


/**
 * Prints HTML with meta information for the current author.
 */
if ( ! function_exists( 'soapatrickeight_posted_by' ) ) :
	function soapatrickeight_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'soapatrickeight' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;


/**
 * Prints HTML with meta information for the tags.
 */
if ( ! function_exists( 'soapatrickeight_tags' ) ) :
	function soapatrickeight_tags() {
		// Hide  tag text for pages.
    if ( 'post' === get_post_type() ) {
      $tags_list = get_the_term_list( $post->ID , 'post_tag', '', ', ' );
    }

    if ( 'factory' === get_post_type() ) {
      $tags_list = get_the_term_list( $post->ID , 'factory_tags', '', ', ' );
    }

    if ( $tags_list ) {
      /* translators: 1: list of tags. */
      printf( '<span class="tags-links">' . esc_html_x( ' in %1$s', 'tags prefix ', 'soapatrickeight' ) . '</span>', $tags_list ); // WPCS: XSS OK.
    }
	}
endif;



/**
 * function for single post navigation
 *
 */
if ( ! function_exists( 'soapatrickeight_post_navigation' ) ) :
  function soapatrickeight_post_navigation() {
    echo '<div class="grid"><nav class="post-navigation post-navigation--single">';
    if ( 'post' === get_post_type() ) {
      next_post_link( '%link', __( 'Newer Post', 'soapatrickeight' ) );
      previous_post_link('%link', __( 'Older Post', 'soapatrickeight' ) );
    }
    if ( 'factory' === get_post_type() ) {
      next_post_link( '%link', __( 'Newer Item', 'soapatrickeight' ) );
      previous_post_link('%link', __( 'Older Item', 'soapatrickeight' ) );
    }
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
      posts_nav_link( ' ', __( 'Newer Posts', 'soapatrickeight' ), __( 'Older Posts', 'soapatrickeight' ) );
    }
    if ( 'factory' === get_post_type() ) {
      posts_nav_link( ' ', __( 'Newer Items', 'soapatrickeight' ), __( 'Older Items', 'soapatrickeight' ) );
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
add_filter('next_posts_link_attributes', 'soapatrickseven_next_posts_link_class');
add_filter('previous_posts_link_attributes', 'soapatrickseven_previous_posts_link_class');
function soapatrickseven_next_posts_link_class() {
  return 'class="btn post-navigation__previous"';
}
function soapatrickseven_previous_posts_link_class() {
  return 'class="btn post-navigation__next"';
}

/**
 * add classes to next and previous Post
 *
 */
add_filter('next_post_link', 'soapatrickseven_next_post_link_class');
add_filter('previous_post_link', 'soapatrickseven_previous_post_link_class');
function soapatrickseven_next_post_link_class($format){
  $format = str_replace('href=', 'class="btn post-navigation__next" href=', $format);
  return $format;
}
function soapatrickseven_previous_post_link_class($format) {
  $format = str_replace('href=', 'class="btn post-navigation__previous" href=', $format);
  return $format;
}




/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
if ( ! function_exists( 'soapatrickeight_post_thumbnail' ) ) :
	function soapatrickeight_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div>
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;


/**
 * Remove Emojiscript
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Deregister Embed script
 */
function soapatrickeight_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'soapatrickeight_deregister_scripts' );


/**
 * Remove default image sizes from generating
 */
function soapatrickeight_remove_default_image_sizes( $sizes ) {
  unset( $sizes[ 'medium_large' ]);
  unset( $sizes[ '1536x1536' ]);
  unset( $sizes[ '2048x2048' ]);

  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'soapatrickeight_remove_default_image_sizes' );


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
 * Replace Bracket with 'more' link in exceprt
 *
 */
function soapatrickeight_excerpt_more( $more ) {
  return ' ... <a href="'.get_the_permalink().'" rel="nofollow">more &rarr;</a>';
}
add_filter( 'excerpt_more', 'soapatrickeight_excerpt_more' );


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
 * Remove archive title prefixes.
 *
 */
function soapatrickeight_archive_title( $title ) {
  // Remove any HTML, words, digits, and spaces before the title.
  return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'soapatrickeight_archive_title' );
