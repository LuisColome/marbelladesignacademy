<?php
/**
 * Team grid layout custom block
 *
 * @package       MarbelllaDesignAcademy
 * @author        Luis Colomé
 * @link          https://designschool.com/
 * @since         0.2.0
 * @license       GPL-2.0+
**/


$team_args = array(
    'post_type'         => 'page',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'tag' => 'team-member',
    
);

$loop = new WP_Query($team_args);

if ( $loop->have_posts() ) : ?>

    <div class="team-members grid mda">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php 
        // we use the partial archive.php to create the archive loops
        get_template_part( 'partials/' . 'archive', 'team-member' ); ?>
    
    <?php endwhile; ?>
    </div>

<?php endif;
wp_reset_query();