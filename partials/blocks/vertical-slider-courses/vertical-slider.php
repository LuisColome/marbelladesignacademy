<?php
/**
 * MDA Vertcial Slider for Courses
 *
 * @package       MarbelllaDesignAcademy
 * @author        Luis Colomé
 * @link          https://designschool.com/
 * @since         0.2.0
 * @license       GPL-2.0+
**/

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'mda-vertical-slider-courses vertical-slider-courses';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>
<div <?php echo $anchor; ?> class="mdaswiper mda-vertical-slider <?php echo esc_attr( $class_name ); ?>">
    <?php if( have_rows('mda_vertical_slider') ): ?>

    <!-- Swiper -->
    <div class="swiper mdaSwiperCourses mdaslider">
        <div class="swiper-wrapper  mdaslider__inner">

        <?php while( has_sub_field('mda_vertical_slider') ) : $i++; 

        $image = get_sub_field('mda_vertical_slider_image');
        $title = get_sub_field('mda_vertical_slider_title');
        $content = get_sub_field('mda_vertical_slider_content');
        $link = get_sub_field('mda_vertical_slider_link');
        
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
        endif;

        // Odd columns code.
        if( get_row_index() % 2 == 1 ){ ?>
    
            <div class="swiper-slide mdaslide mdaslide__columns mdaslide__columns-odd">
                <div class="mdaslide__column img-column">

                    <?php if( !empty( $image ) ): ?>
                    <div class="mdaslide__column__inner" style="background-image:url(<?php echo esc_url($image['url']); ?>);">

                    </div>
                    <?php endif; ?>

                </div>
                <div class="mdaslide__column info-column">
                    <div class="mdaslide__content__wrapper">
                        <a class="mdaslide__title" href="<?php echo esc_url( $link_url ); ?>">
                            <h2 class="mdaslide__titlee mda-huge-heading"><?php echo $title; ?></h2>
                        </a>
                        <?php echo $content; ?>
                        <hr class="mdaslide__hr">
                        <a class="mdaslide__link" href="<?php echo esc_url( $link_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m696.413-288.521-64.892-63.892 82.087-82.087H114.5v-91h599.108l-81.326-82.087 64.892-63.892L887.652-480 696.413-288.521Z"/></svg>
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>
                </div>
            </div>

        <?php }

        // Even columns code.
        if( get_row_index() % 2 == 0 ){ ?>

            <div class="swiper-slide mdaslide mdaslide__columns mdaslide__columns-even">
                <div class="mdaslide__column info-column">
                    <div class="mdaslide__content__wrapper">
                        <a class="mdaslide__title" href="<?php echo esc_url( $link_url ); ?>">
                            <h2 class="mdaslide__titlee mda-huge-heading"><?php echo $title; ?></h2>
                        </a>
                        <?php echo $content; ?>
                        <hr class="mdaslide__hr">
                        <a class="mdaslide__link" href="<?php echo esc_url( $link_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m696.413-288.521-64.892-63.892 82.087-82.087H114.5v-91h599.108l-81.326-82.087 64.892-63.892L887.652-480 696.413-288.521Z"/></svg>
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>
                </div>
                <div class="mdaslide__column img-column">
                    
                    <?php if( !empty( $image ) ): ?>
                    <div class="mdaslide__column__inner" style="background-image:url(<?php echo esc_url($image['url']); ?>);">

                    </div>
                    <?php endif; ?>

                </div>
            </div>

        <?php } 
        
        // End loop.
        endwhile; 
        
        $extra_title = get_field('mda_extra_slide_title');
        $extra_link = get_field('mda_extra_slide_link');
        if( $extra_link ): 
            $extra_link_url = $extra_link['url'];
            $extra_link_title = $extra_link['title'];
        endif;
        
        ?>

            <div class="swiper-slide mdaslide mdaslide__extra">
                <div class="mdaslide__rows">
                    <div class="mdaslide__row">
                        <div class="mdaslide__overlay"></div>
                    </div>
                    <div class="mdaslide__row mdaslide__row__pink-content">
                        <h2 class="mdaslide__extra__title  mda-large-heading"><?php echo $extra_title ?></h2>
                        <a class="mdaslide__extra__link" href="<?php echo esc_url( $extra_link_url ); ?>">
                            <?php echo esc_html( $extra_link_title ); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m696.413-288.521-64.892-63.892 82.087-82.087H114.5v-91h599.108l-81.326-82.087 64.892-63.892L887.652-480 696.413-288.521Z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        
        </div>

        
        <!-- pagination -->
        <div class="swiper-pagination"></div>
    
    </div>

    <?php endif; ?>
</div>
  
<?php