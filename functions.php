<?php
/**
 * Bounds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bounds
 * @since Bounds 0.0.2
 */

// Register Presentations post type.
require_once get_template_directory() . '/inc/presentation-post-type.php';

if ( ! function_exists( 'bounds_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 * @since Bounds 0.0.2
	 */
	function bounds_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Remove Core patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;

add_action( 'after_setup_theme', 'bounds_support' );

if ( ! function_exists( 'bounds_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 * @since Bounds 0.0.2
	 */
	function bounds_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'bounds-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bounds-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'bounds_styles' );

/**
 * Register block Styles
 */

if ( ! function_exists( 'bounds_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @return void
	 * @since Bounds 0.0.2
	 */
	function bounds_block_styles() {
		register_block_style(
			'core/cover',
			array(
				'label' => __( 'Slide', 'bounds' ),
				'name'  => 'slide',
			)
		);
	}
endif;

add_action( 'init', 'bounds_block_styles' );

/**
 * Register block pattern category.
 */

if ( ! function_exists( 'bounds_block_pattery_category' ) ) :
	/**
	 * Register custom block pattern category.
	 *
	 * @return void
	 * @since Bounds 0.0.2
	 */
	function bounds_block_pattery_category() {
		register_block_pattern_category(
			'slides',
			array(
				'label'       => __( 'Slides', 'bounds' ),
				'description' => __( 'For slideshow patterns', 'bounds' ),
			)
		);
	}
endif;

add_action( 'init', 'bounds_block_pattery_category' );

/**
 * Modify body classes.
 */

if ( ! function_exists( 'bounds_body_classes' ) ) :
	/**
	 * Add body class for custom theme.json entry.
	 *
	 * @param array $classes Incoming body classes.
	 * @return array $classes Outgoing body classes.
	 * @since Bounds 0.0.2
	 */
	function bounds_body_classes( $classes ) {
		$variation_class = wp_get_global_settings(
			array(
				'custom',
				'variation',
			)
		);

		$classes[] = 'uses-style-variation';
		$classes[] = _wp_to_kebab_case( 'is style variation ' . $variation_class );

		return $classes;
	}
endif;

add_filter( 'body_class', 'bounds_body_classes' );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function bounds_register_block_types() {
	register_block_type( get_stylesheet_directory() . '/build/presentation' );
}
add_action( 'init', 'bounds_register_block_types' );

/**
 * Filter the render_block to add the needed directives to the inner cover blocks.
 *
 * @param string $block_content The content being rendered by the block.
 */
function bounds_add_directives_to_inner_blocks( $block_content, $block ) {
	$allowed_blocks = array( 'wp-block-bounds-slide' );
	$slides         = new \WP_HTML_Tag_Processor( $block_content );
	$total_slides   = 0;

	// Get the main element.
	$slides->next_tag( array( 'class_name' => 'wp-block-bounds-presentation' ) );
	// Set a bookmark so we can go back and update the context after counting the slides.
	$slides->set_bookmark( 'main' );

	while ( $slides->next_tag() ) {
		// Retrieve and iterate over the classes assigned.

		foreach ( $slides->class_list() as $class_name ) {
			if ( in_array( $class_name, $allowed_blocks, true ) ) {
				$slides->set_attribute( 'data-wp-interactive', 'presentation' );
				$slides->set_attribute( 'data-wp-init', 'callbacks.initSlide' );
				$slides->set_attribute( 'data-wp-class--is-presenting', 'state.isPresenting' );
				$total_slides++;
				// If we find a class, we can move on - this is still not very performant as the worst case is that we loop all classes against all allowed classes.
				// Not an issue with the tag processor, rather the code I wrote with it.
				continue;
			}
		}
	}

	// Go to the bookmark and release it.
	$slides->seek( 'main' );
	$slides->release_bookmark( 'main' );

	// Generate the context for the slider block.
	$context = array_merge(
		array(
			'autoplay'   => $block['attrs']['autoplay'] ?? false,
			'continuous' => $block['attrs']['continuous'] ?? false,
			'speed'      => $block['attrs']['speed'] ?? '3',
		),
		array(
			'slides'       => array(),
			'currentSlide' => 1,
			'totalSlides'  => $total_slides,
		)
	);

	// Define some global state for all instances based on attributes.
	// These will be updated by the appropriate getters but this will avoid the content flash in the client
	wp_interactivity_state(
		'presentation',
		array(
			'noPrevSlide' => ! $context['continuous'],
			'imageIndex'  => "{$context['currentSlide']}/{$context['totalSlides']}",
			'presenting'  => false,
		)
	);

	$slides->set_attribute( 'data-wp-context', wp_json_encode( $context, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ) );
	// Update the HTML.
	$block_content = $slides->get_updated_html();
	return $block_content;
}
add_filter( 'render_block_bounds/presentation', 'bounds_add_directives_to_inner_blocks', 10, 2 );
