<?php
/**
 * Team member Archive partial 
 *
 * @package       RiftValley
 * @author        Luis Colomé
 * @link          https://www.billerickson.net/using-template-parts-with-genesis/
 * @since         0.9.5.1
 * @license       GPL-2.0+
**/



$position = get_field('mds_team_member_position', $post->ID);
?>

<article class="team-member entry listing-item" itemtype="https://schema.org/CreativeWork">
    <div class="team-member__inner">
        <a href="<?php the_permalink(); ?>" class="team-member__readmore" rel="nofollow">
            <figure class="team-member__img aligncenter">
                <?php $image_id = get_post_thumbnail_id(); // get the ID of the post thumbnail image
                echo wp_get_attachment_image( $image_id, 'medium', false, array( 'class' => 'lazyload' ) );?>
            </figure>
        </a>
        <h4 class="team-member__title">
            <a href="<?php the_permalink(); ?>" class="team-member__readmore"><?php the_title(); ?></a>
        </h4>
        
        <p class="team-member__position"><?php echo $position; ?></p>
        <p class="team-member__intro"><?php echo get_the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="team-member__readmore" rel="nofollow"><svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 9.5L13.575 8.1L15.675 6H0.5V4H15.675L13.6 1.9L15.025 0.5L19.5 5L15 9.5Z" fill="#CB257D"/>
</svg>
View more</a>
    </div>
</article>
