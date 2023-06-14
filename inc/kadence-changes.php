<?php
/**
 * Kadence changes
 *
 * @package     MarbellaDesignAcademy
 * @author      Luis Colomé
 * @since       0.8.0
 * @license     GPL-2.0+
**/

/* Comments
------------------------------------------------------------------------------ */

/**
 * Remove "Says" from comments.
 * @link https://mundogenesis.com/tutoriales-genesis/elminar-el-dicede-los-comentarios-en-genesis/
 */
function lcm_remove_comment_says_text() {
    return ' ';
}
add_filter( 'comment_author_says_text', 'lcm_remove_comment_says_text' );