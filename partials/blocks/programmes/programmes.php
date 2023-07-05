<?php
/**
 * Our programmes full width custom block
 *
 * @package       MarbelllaDesignAcademy
 * @author        Luis Colomé
 * @link          https://designschool.com/
 * @since         0.2.0
 * @license       GPL-2.0+
**/


// Check rows existexists.
if( have_rows('mda_programmes') ):
?>
<div class="wp-block-programmes programmes programmes__fullwidth alignfull">
    <div class="programmes__inner">
        <?php
        // Loop through rows.
        while( have_rows('mda_programmes') ) : the_row(); 

        $programme_selector = get_sub_field('mda_programme_selector');
        $programme_img = get_sub_field('mda_programme_image');
        $programme_img_alignment = get_sub_field('mda_programme_image_alignemnt');
        $programme_title = get_sub_field('mda_programme_title');
        $programme_subtitle = get_sub_field('mda_programe_subtitle');
        $programme_content = get_sub_field('mda_programme_content');
        $programme_link = get_sub_field('mda_programme_link');

        if( $programme_link ): 
            $link_url = $programme_link['url'];
            $link_title = $programme_link['title'];
        endif;
        
        // Odd columns code.
        if( get_row_index() % 2 == 1 ){ ?>

        <div class="programme programme-odd <?php echo $programme_selector; ?>">

            <div class="programme__columns">

                <div class="programme__column programme__column-img">

                    <!-- <?php if( $programme_link ): ?>
                    <a href="<?php echo esc_url( $programme_link ); ?>" alt="Marbella Design Academy Course link" class="course__link">
                    <?php endif; ?> -->
                        <div class="programme__inner">
                            <?php 
                            if( $programme_img ): ?>
                                <i class="programme__img programme__img__aligned__<?php echo $programme_img_alignment; ?>" style="background-image:url(<?php echo esc_url($programme_img['url']); ?>);"></i>
                            <?php endif; ?>
                        
                        </div><!-- End .programme__inner -->
                    <!-- <?php if( $programme_link ): ?>
                    </a>
                    <?php endif; ?> -->

                </div><!-- End .programme-column -->

                <div class="programme__column  programme__column-info">
                    
                    <div class="programme__header">
                        <h4 class="programme__subtitle"><?php echo $programme_subtitle; ?></h4>
                        <h2 class="programme__title mda-huge-heading"><?php echo $programme_title; ?></h2>
                    </div>
                    <div class="programme__info">
                        <?php echo $programme_content; ?>
                        <hr class="programme__hr">
                        <a class="programme__link" href="<?php echo esc_url( $link_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m696.413-288.521-64.892-63.892 82.087-82.087H114.5v-91h599.108l-81.326-82.087 64.892-63.892L887.652-480 696.413-288.521Z"/></svg>
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>

                </div><!-- End .programme-column -->

            </div><!-- End .programme-columns -->

        </div><!-- End .programme -->

        <?php }

        // Even columns code.
        if( get_row_index() % 2 == 0 ){ ?>
        
        <div class="programme programme-even <?php echo $programme_selector; ?>">

            <div class="programme__columns">
                
                <div class="programme__column  programme__column-info">
                    
                    <div class="programme__header">
                        <h4 class="programme__subtitle"><?php echo $programme_subtitle; ?></h4>
                        <h2 class="programme__title mda-huge-heading"><?php echo $programme_title; ?></h2>
                    </div>
                    <div class="programme__info">
                        <?php echo $programme_content; ?>
                        <hr class="programme__hr">
                        <a class="programme__link" href="<?php echo esc_url( $link_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m696.413-288.521-64.892-63.892 82.087-82.087H114.5v-91h599.108l-81.326-82.087 64.892-63.892L887.652-480 696.413-288.521Z"/></svg>
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>

                </div><!-- End .programme-column -->

                <div class="programme__column programme__column-img">

                    <!-- <?php if( $programme_link ): ?>
                    <a href="<?php echo esc_url( $programme_link ); ?>" alt="Marbella Design Academy Course link" class="course__link">
                    <?php endif; ?> -->
                        <div class="programme__inner">
                            <?php 
                            if( $programme_img ): ?>
                                <i class="programme__img programme__img__aligned__<?php echo $programme_img_alignment; ?>" style="background-image:url(<?php echo esc_url($programme_img['url']); ?>);"></i>
                            <?php endif; ?>
                        
                        </div><!-- End .programme__inner -->
                    <!-- <?php if( $programme_link ): ?>
                    </a>
                    <?php endif; ?> -->

                </div><!-- End .programme-column -->

            </div><!-- End .programme-columns -->

        </div><!-- End .programme -->
        
        <?php } 
        
        endwhile; ?>
        </div> <!-- End .programmes__inner -->
    </div>
<?php else :
    echo '<p>Sorry, there is no programme setup yet.</p>';
?>
<?php endif; ?>