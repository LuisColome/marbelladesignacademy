<?php
/**
 * Full Width Courses block
 *
 * @package       MarbelllaDesignAcademy
 * @author        Luis Colomé
 * @link          https://designschool.com/
 * @since         0.2.0
 * @license       GPL-2.0+
**/

// $course_bg_class = get_field('course_background_color');
// $course_bg_hover_class = get_field('course_background_color_hover');
// $course_link = get_field('course_link');
// $course_img = get_field('course_image');
// $course_title = get_field('course_title');
// $course_subtitle = get_field('course_subtitle');



// Check rows existexists.
if( have_rows('mda_courses') ):
?>
<div class="wp-block-courses courses courses__fullwidth alignfull">
    <div class="courses__inner">
        <?php
        // Loop through rows.
        while( have_rows('mda_courses') ) : the_row(); 

        $course_color_class = get_sub_field('course_background_color');
        $course_bg_hover_class = get_sub_field('course_background_color_hover');
        $course_link = get_sub_field('course_link');
        $course_img = get_sub_field('course_image');
        $course_img_alignment = get_sub_field('course_image_alignemnt');
        $course_title = get_sub_field('course_title');
        $course_subtitle = get_sub_field('course_subtitle');
        ?>

        <div class="course <?php echo $course_bg_hover_class; ?>" style="background-color:<?php echo $course_color_class; ?>;">
        <?php // Begin caption wrap.
            if( $course_link ): ?>
                <a href="<?php echo esc_url( $course_link ); ?>" alt="Marbella Design Academy Course link" class="course__link">
            <?php endif; ?>
                    <div class="couse__inner">
                        <?php 
                        if( $course_img ): ?>
                            <i class="course__img course__img__aligned__<?php echo $course_img_alignment; ?>" style="background-image:url(<?php echo esc_url($course_img['url']); ?>);"></i>
                        <?php endif; ?>
                        <div class="course__info">
                            <h4 class="course__subtitle"><?php echo $course_subtitle; ?></h4>
                            <h2 class="course__title"><?php echo $course_title; ?></h2>
                        </div>
                    </div><!-- End .course__inner -->

            <?php // End course link.
            if( $course_link ): ?>
                </a>
            <?php endif; ?> 
        </div><!-- End .course -->
        
        <?php endwhile; ?>
        </div> <!-- End .courses__inner -->
    </div>
<?php else :
    echo '<p>Sorry, there is no course setup yet.</p>';
?>
<?php endif; ?>