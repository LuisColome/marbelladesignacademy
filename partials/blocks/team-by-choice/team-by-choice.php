<?php
/**
 * Team by choice grid layout custom block
 *
 * @package       MarbelllaDesignAcademy
 * @author        Luis Colomé
 * @link          https://designschool.com/
 * @since         0.8.0
 * @license       GPL-2.0+
**/


global $post;

$selected_posts = get_field('mda_team_members_by_choice' );

$args = array(
    'post_type'         => 'page',
    'post__in'          => $selected_posts,
    
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

    <div class="team-members grid mda">        
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        
        // we use the partial archive.php to create the archive loops
        get_template_part( 'partials/' . 'archive', 'team-member' );

        endwhile; ?>
    </div>

<?php endif;
wp_reset_query(); // Restore global post data stomped by the_post().
