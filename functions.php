<?php
/**
 * Bounds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bounds
 * @since Bounds 1.0
 */


if ( ! function_exists( 'bounds_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 * @since Bounds 1.0
	 *
	 */
	function bounds_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'bounds_support' );

if ( ! function_exists( 'bounds_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 * @since Bounds 1.0
	 *
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
	 * @since Bounds 1.0
	 *
	 */
	function bounds_block_styles() {
		$block_styles = array(
			'core/cover' => array(
				'slide'     => __( 'Slide', 'bounds' ),
				'slide-alt' => __( 'Slide Alt', 'bounds' ),
			)
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}
endif;

add_action( 'init', 'bounds_block_styles' );
