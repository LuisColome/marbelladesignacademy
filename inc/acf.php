<?php
/**
 * ACF Customizations
 *
 * @package      MarbellaDesignAcademy
 * @author       Bill Erickson & Luis Colomé
 * @since        0.2.0
 * @license      GPL-2.0+
**/

class BE_ACF_Customizations {

	public function __construct() {

		// Only allow fields to be edited on development
		if ( ! defined( 'WP_LOCAL_DEV' ) || ! WP_LOCAL_DEV ) {
			//add_filter( 'acf/settings/show_admin', '__return_false' );
		}

		// Register options page
		add_action( 'init', array( $this, 'register_options_page' ) );

		// Register Blocks
		add_action('acf/init', array( $this, 'register_blocks' ) );
	}

	/**
	 * Register Options Page
	 *
	 */
	function register_options_page() {
	    if ( function_exists( 'acf_add_options_page' ) ) {
	        acf_add_options_page( array(
	        	'title'      => __( 'MDA Options', 'mda' ),
	        	'capability' => 'manage_options',
	        ) );
	    }
	}

	/**
	 * Register Blocks
	 * @link https://www.billerickson.net/building-gutenberg-block-acf/#register-block
	 *
	 * Categories: common, formatting, layout, widgets, embed
	 * Dashicons: https://developer.wordpress.org/resource/dashicons/
	 * ACF Settings: https://www.advancedcustomfields.com/resources/acf_register_block/
	 */
	function register_blocks() {

		if( ! function_exists('acf_register_block_type') )
			return;

        // Register Full Width Courses block.
		acf_register_block_type(array(
			'name'              => 'mda-courses',
			'title'             => __('Full Width Courses'),
			'description'       => __('Full width block to include he couses in the Homepage.'),
			'render_template'   => 'partials/blocks/courses/courses.php',
			'category'          => 'formatting',
			'icon'              => 'list-view',
			'keywords'          => array( 'listas', 'listados', 'incluye', 'no', 'riftvalley' ),
		));

	}
}
new BE_ACF_Customizations();