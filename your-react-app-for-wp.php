<?php
/**
 * Plugin Name:     Your React App for WP
 * Text Domain:     your-react-app-for-wp
 *
 * @package Your React App for WP
 */

function your_react_app_for_wp_register_script() {

	wp_register_script( 'your-react-app-for-wp-script', plugins_url( 'app/dist/index.js', __FILE__ ) );

}

add_action( 'wp_enqueue_scripts', 'your_react_app_for_wp_register_script' );

function your_react_app_for_wp() {

	wp_enqueue_script( 'your-react-app-for-wp-script' );

	return "<div id='your-react-app-for-wp'></div>";
}

add_action(
	'init',
	function() {
		add_shortcode( 'your_react_app_for_wp', 'your_react_app_for_wp' );
	}
);

