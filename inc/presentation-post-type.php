<?php
/**
 * Register Presentation Post Type
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @package Bounds
 * @since Bounds 0.0.2
 */

add_action( 'init', 'bounds_register_presentation_post_type' );
function bounds_register_presentation_post_type() {
	$args = array(
		'label'               => esc_html__( 'Presentations', 'text-domain' ),
		'labels'              => array(
			'menu_name'          => esc_html__( 'Presentations', 'bounds' ),
			'name_admin_bar'     => esc_html__( 'Presentation', 'bounds' ),
			'add_new'            => esc_html__( 'Add Presentation', 'bounds' ),
			'add_new_item'       => esc_html__( 'Add new Presentation', 'bounds' ),
			'new_item'           => esc_html__( 'New Presentation', 'bounds' ),
			'edit_item'          => esc_html__( 'Edit Presentation', 'bounds' ),
			'view_item'          => esc_html__( 'View Presentation', 'bounds' ),
			'update_item'        => esc_html__( 'View Presentation', 'bounds' ),
			'all_items'          => esc_html__( 'All Presentations', 'bounds' ),
			'search_items'       => esc_html__( 'Search Presentations', 'bounds' ),
			'parent_item_colon'  => esc_html__( 'Parent Presentation', 'bounds' ),
			'not_found'          => esc_html__( 'No Presentations found', 'bounds' ),
			'not_found_in_trash' => esc_html__( 'No Presentations found in Trash', 'bounds' ),
			'name'               => esc_html__( 'Presentations', 'bounds' ),
			'singular_name'      => esc_html__( 'Presentation', 'bounds' ),
		),
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_positions'      => 25,
		'menu_icon'           => 'dashicons-slides',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite'             => true,
		'template'            => array(
			array(
				'bounds/presentation',
				array(),
				array(
					array(
						'bounds/slide',
						array(),
						array(
							array(
								'core/image',
								array(),
							),
						)
					),
					array(
						'bounds/slide',
						array(),
						array(
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Add some slide text',
								),
							),
						),
					),
				),
			),
		),
	);

	register_post_type( 'presentation', $args );
}
