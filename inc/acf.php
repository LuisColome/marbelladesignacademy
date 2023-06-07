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

        // Register Team members grid archive custom block
		acf_register_block_type(array(
			'name'              => 'mda-team-members',
			'title'             => __('Team Members'),
			'description'       => __('Team members grid page layout.'),
			'render_template'   => 'partials/blocks/team/team.php',
			'category'          => 'formatting',
			'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M0-240v-53q0-38.567 41.5-62.784Q83-380 150.376-380q12.165 0 23.395.5Q185-379 196-377.348q-8 17.348-12 35.165T180-305v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773-360 765-377.273q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960-293v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480-390q-79 0-129.5 23.5T300-305v5ZM149.567-410Q121-410 100.5-430.562 80-451.125 80-480q0-29 20.562-49.5Q121.125-550 150-550q29 0 49.5 20.5t20.5 49.933Q220-451 199.5-430.5T149.567-410Zm660 0Q781-410 760.5-430.562 740-451.125 740-480q0-29 20.562-49.5Q781.125-550 810-550q29 0 49.5 20.5t20.5 49.933Q880-451 859.5-430.5T809.567-410ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.351-60Q506-540 523-557.351t17-43Q540-626 522.851-643t-42.5-17Q455-660 437.5-642.851t-17.5 42.5Q420-575 437.351-557.5t43 17.5ZM480-300Zm0-300Z"/></svg>',
			'keywords'          => array( 'team', 'grid', 'layout', 'member', 'people' ),
		));

        // Register Team members by choice
		acf_register_block_type(array(
			'name'              => 'mda-team-members-by-choice',
			'title'             => __('Team Members by choice'),
			'description'       => __('Team members (by choice( grid page layout.'),
			'render_template'   => 'partials/blocks/team-by-choice/team-by-choice.php',
			'category'          => 'formatting',
			'icon'              => '<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M0-240v-53q0-38.567 41.5-62.784Q83-380 150.376-380q12.165 0 23.395.5Q185-379 196-377.348q-8 17.348-12 35.165T180-305v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773-360 765-377.273q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960-293v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480-390q-79 0-129.5 23.5T300-305v5ZM149.567-410Q121-410 100.5-430.562 80-451.125 80-480q0-29 20.562-49.5Q121.125-550 150-550q29 0 49.5 20.5t20.5 49.933Q220-451 199.5-430.5T149.567-410Zm660 0Q781-410 760.5-430.562 740-451.125 740-480q0-29 20.562-49.5Q781.125-550 810-550q29 0 49.5 20.5t20.5 49.933Q880-451 859.5-430.5T809.567-410ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.351-60Q506-540 523-557.351t17-43Q540-626 522.851-643t-42.5-17Q455-660 437.5-642.851t-17.5 42.5Q420-575 437.351-557.5t43 17.5ZM480-300Zm0-300Z"/></svg>',
			'keywords'          => array( 'team', 'grid', 'layout', 'member', 'people', 'choice', 'choose' ),
		));

	}
}
new BE_ACF_Customizations();