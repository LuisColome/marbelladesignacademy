<?php
/**
 * Setup Child Theme Styles
 */
function marbelladesignacademy_enqueue_styles() {
    
    // javascript
	wp_enqueue_script( 'ea-global', get_stylesheet_directory_uri() . '/assets/js/global-min.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/global-min.js' ), true );

	wp_enqueue_style( 'marbelladesignacademy-style', get_stylesheet_directory_uri() . '/assets/css/main.css', false, '0.1.0' );
    
}
add_action( 'wp_enqueue_scripts', 'marbelladesignacademy_enqueue_styles', 20 );


function lcm_child_theme_setup() {

	define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );

	// Theme
    include_once( get_stylesheet_directory() . '/inc/navigation.php' );

    // Plugin Support
	include_once( get_stylesheet_directory() . '/inc/acf.php' );

}
add_action( 'after_setup_theme', 'lcm_child_theme_setup', 15 );


/**
 * Setup Child Theme Palettes
 *
 * @param string $palettes registered palette json.
 * @return string
 */
function marbelladesignacademy_change_palette_defaults( $palettes ) {
	$palettes = '{"palette":[{"color":"#d9328a","slug":"palette1","name":"Palette Color 1"},{"color":"#f1b2d3","slug":"palette2","name":"Palette Color 2"},{"color":"#4f86db","slug":"palette3","name":"Palette Color 3"},{"color":"#008110","slug":"palette4","name":"Palette Color 4"},{"color":"#ff0501","slug":"palette5","name":"Palette Color 5"},{"color":"#ff9922","slug":"palette6","name":"Palette Color 6"},{"color":"#555355","slug":"palette7","name":"Palette Color 7"},{"color":"#f2f2f2","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"second-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"third-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"active":"palette"}';
	return $palettes;
}
add_filter( 'kadence_global_palette_defaults', 'marbelladesignacademy_change_palette_defaults', 20 );

/**
 * Setup Child Theme Defaults
 *
 * @param array $defaults registered option defaults with kadence theme.
 * @return array
 */
function marbelladesignacademy_change_option_defaults( $defaults ) {
	$new_defaults = '{"site_background":{"desktop":{"color":"palette9"},"flag":true},"link_color":{"highlight":"palette1","highlight-alt":"palette7","highlight-alt2":"palette9","style":"standard"},"buttons_background":{"color":"palette1","hover":"palette7"},"buttons_border_radius":{"size":{"mobile":"","tablet":"","desktop":0},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false},"base_font":{"size":{"desktop":17},"lineHeight":{"desktop":1.6},"family":"-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,Oxygen-Sans,Ubuntu,Cantarell,\"Helvetica Neue\",sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"","google":false,"weight":"400","variant":"regular","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"h1_font":{"size":{"desktop":32},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette1","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"h2_font":{"size":{"desktop":28},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"h3_font":{"size":{"desktop":24},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"h4_font":{"size":{"desktop":22},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"h6_font":{"size":{"desktop":18},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"title_above_font":{"size":{"desktop":""},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"","variant":"","color":"palette1","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"h5_font":{"size":{"desktop":20},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette7","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"transparent_header_enable":true,"header_desktop_items":{"top":{"top_left":[],"top_left_center":[],"top_center":[],"top_right_center":[],"top_right":[]},"main":{"main_left":["logo"],"main_left_center":[],"main_center":[],"main_right_center":[],"main_right":["button","toggle-widget"]},"bottom":{"bottom_left":[],"bottom_left_center":[],"bottom_center":[],"bottom_right_center":[],"bottom_right":[]},"flag":true},"header_mobile_items":{"popup":{"popup_content":["mobile-navigation"]},"top":{"top_left":[],"top_center":[],"top_right":[]},"main":{"main_left":[],"main_center":[],"main_right":["mobile-button","popup-toggle"]},"bottom":{"bottom_left":[],"bottom_center":[],"bottom_right":[]},"flag":false},"header_toggle_widget_label":"Menu","header_toggle_widget_icon":"menu","header_toggle_widget_style":"default","header_toggle_widget_icon_size":{"size":1.25,"unit":"rem"},"header_toggle_widget_color":{"color":"palette1","hover":"palette1"},"header_toggle_widget_background":{"color":"palette9","hover":"palette8"},"header_button_label":"More Info","header_button_size":"small","header_button_color":{"color":"palette9","hover":"palette9"},"header_button_background":{"color":"palette1","hover":"#ca4389"},"header_button_style":"filled","header_button_visibility":"all","mobile_button_size":"small"}';
	$new_defaults = json_decode( $new_defaults, true );
	return wp_parse_args( $new_defaults, $defaults );
}
add_filter( 'kadence_theme_options_defaults', 'marbelladesignacademy_change_option_defaults', 20 );