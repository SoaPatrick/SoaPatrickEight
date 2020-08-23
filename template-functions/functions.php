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
add_filter( 'allowed_block_types', 'soapatrickeight_allowed_block_types' );


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
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
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
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( 'soapatrickeight_entry_footer' ) ) :
	function soapatrickeight_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html_x( ', ', 'category list item separator', 'soapatrickeight' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html_x( 'Posted in %1$s', 'categories prefix', 'soapatrickeight' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'tag list item separator', 'soapatrickeight' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html_x( 'Tagged %1$s', 'tags prefix ', 'soapatrickeight' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}
endif;


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

