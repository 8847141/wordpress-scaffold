<?php

namespace YunluPlugin\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register widgets and sidebars.
 */
class ContentTypesServiceProvider implements ServiceProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		// Nothing to register.
	}

	/**
	 * {@inheritDoc}
	 */
	public function bootstrap( $container ) {
		add_action( 'init', [$this, 'registerPostTypes'] );
		add_action( 'init', [$this, 'registerTaxonomies'] );
	}

	/**
	 * Register post types.
	 *
	 * @return void
	 */
	public function registerPostTypes() {
		// phpcs:disable
		/*
		register_post_type(
			'yunlu_plugin_custom_post_type',
			array(
				'labels'              => array(
					'name'               => __( 'Custom Types', 'yunlu_plugin' ),
					'singular_name'      => __( 'Custom Type', 'yunlu_plugin' ),
					'add_new'            => __( 'Add New', 'yunlu_plugin' ),
					'add_new_item'       => __( 'Add new Custom Type', 'yunlu_plugin' ),
					'view_item'          => __( 'View Custom Type', 'yunlu_plugin' ),
					'edit_item'          => __( 'Edit Custom Type', 'yunlu_plugin' ),
					'new_item'           => __( 'New Custom Type', 'yunlu_plugin' ),
					'search_items'       => __( 'Search Custom Types', 'yunlu_plugin' ),
					'not_found'          => __( 'No custom types found', 'yunlu_plugin' ),
					'not_found_in_trash' => __( 'No custom types found in trash', 'yunlu_plugin' ),
				),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-admin-post',
				'supports'            => array( 'title', 'editor', 'page-attributes' ),
				'rewrite'             => array(
					'slug'       => 'custom-post-type',
					'with_front' => false,
				),
			)
		);
		*/
		// phpcs:enable
	}

	/**
	 * Register taxonomies.
	 *
	 * @return void
	 */
	public function registerTaxonomies() {
		// phpcs:disable
		/*
		register_taxonomy(
			'yunlu_plugin_custom_taxonomy',
			array( 'post_type' ),
			array(
				'labels'            => array(
					'name'              => __( 'Custom Taxonomies', 'yunlu_plugin' ),
					'singular_name'     => __( 'Custom Taxonomy', 'yunlu_plugin' ),
					'search_items'      => __( 'Search Custom Taxonomies', 'yunlu_plugin' ),
					'all_items'         => __( 'All Custom Taxonomies', 'yunlu_plugin' ),
					'parent_item'       => __( 'Parent Custom Taxonomy', 'yunlu_plugin' ),
					'parent_item_colon' => __( 'Parent Custom Taxonomy:', 'yunlu_plugin' ),
					'view_item'         => __( 'View Custom Taxonomy', 'yunlu_plugin' ),
					'edit_item'         => __( 'Edit Custom Taxonomy', 'yunlu_plugin' ),
					'update_item'       => __( 'Update Custom Taxonomy', 'yunlu_plugin' ),
					'add_new_item'      => __( 'Add New Custom Taxonomy', 'yunlu_plugin' ),
					'new_item_name'     => __( 'New Custom Taxonomy Name', 'yunlu_plugin' ),
					'menu_name'         => __( 'Custom Taxonomies', 'yunlu_plugin' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'custom-taxonomy' ),
			)
		);
		*/
		// phpcs:enable
	}
}
