<?php
/**
 * WordPress cleanup
 *
 * @package     MarbellaDesignAcademy
 * @author      Luis Colomé
 * @since       0.8.0
 * @license     GPL-2.0+
**/


/**
* Dont Update the Theme
*
* If there is a theme in the repo with the same name, this prevents WP from prompting an update.
*
* @since  1.0.0
* @author Bill Erickson
* @link   http://www.billerickson.net/excluding-theme-from-updates
* @param  array $r Existing request arguments
* @param  string $url Request URL
* @return array Amended request arguments
*/
function ea_dont_update_theme( $r, $url ) {
if ( 0 !== strpos( $url, 'https://api.wordpress.org/themes/update-check/1.1/' ) )
    return $r; // Not a theme update request. Bail immediately.
  $themes = json_decode( $r['body']['themes'] );
  $child = get_option( 'stylesheet' );
unset( $themes->themes->$child );
  $r['body']['themes'] = json_encode( $themes );
  return $r;
}
add_filter( 'http_request_args', 'ea_dont_update_theme', 5, 2 );