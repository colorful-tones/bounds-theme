<?php
/**
 * Bounds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bounds
 * @since Bounds 0.0.2
 */

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
