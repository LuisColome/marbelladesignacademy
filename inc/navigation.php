<?php
/**
 * Navigation
 *
 * @package     MarbellaDesignAcademy
 * @author      Luis Colomé
 * @since       0.3.0
 * @license     GPL-2.0+
**/

/**
 * Mobile Menu
 *
 */
function prueba_de_hook(){
    echo ea_mobile_menu_toggle();
	// echo ea_search_toggle();

    echo '<div class="lcm-dark-overlay"></div>';
    echo '<div class="lcm-aside">';
        echo '<div class="lcm-aside__close"><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 96 960 960" width="40"><path d="m251.333 851.333-46.666-46.666L433.334 576 204.667 347.333l46.666-46.666L480 529.334l228.667-228.667 46.666 46.666L526.666 576l228.667 228.667-46.666 46.666L480 622.666 251.333 851.333Z"/></svg></div>';
        echo '<div class="lcm-aside__rounded-div"><div class="rounded-div-wrap"><div class="rounded-div"></div></div></div>';
        echo '<div class="lcm-aside__inner">';
            echo '<nav class="nav-menu lcm-aside__menu" role="navigation">';
            if( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'nav-primary', 'link_before'    => '<span>', 'link_after'     => '</span>' ) );
            }
            // if( has_nav_menu( 'secondary' ) ) {
            // 	wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'nav-secondary' ) );
            // }
            echo '</nav>';
        echo '</div>';
    echo '</div>';
}
add_action( 'kadence_after_header', 'prueba_de_hook', 20 );


/**
 * Mobile menu toggle
 *
 */
function ea_mobile_menu_toggle() {

    $moreinfolink= get_field('mda_more_info_button_url', 'options');

	?>

    <div class="mdabuttons">
        
        <?php if( $moreinfolink ): ?>
        <a href="<?php echo $moreinfolink ?>" class="mdabutton mdabutton__info">
            <div class="mdabutton__icon">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="24"
                    viewBox="0 96 960 960"
                    width="24"
                >
                    <path
                        d="M172.309 875.999q-30.308 0-51.308-21t-21-51.308V348.309q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v455.382q0 30.308-21 51.308t-51.308 21H172.309ZM480 598.306 160 393.691v410q0 5.385 3.462 8.847 3.462 3.462 8.847 3.462h615.382q5.385 0 8.847-3.462 3.462-3.462 3.462-8.847v-410L480 598.306ZM480 536l313.846-200H166.154L480 536ZM160 393.691V336 803.691q0 5.385 3.462 8.847 3.462 3.462 8.847 3.462H160V393.691Z"
                    />
                </svg>
            </div>
            <span class="mdabutton__text">More info</span>
            <span class="screen-reader-text">More info</span>
        </a>
        <?php endif; ?>

        <button class="mdabutton mdabutton__menu">
            <div class="mdabutton__icon">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="24"
                    viewBox="0 96 960 960"
                    width="24"
                >
                    <path
                        d="M130.001 801.384v-59.999h699.998v59.999H130.001Zm0-195.385v-59.998h699.998v59.998H130.001Zm0-195.384v-59.999h699.998v59.999H130.001Z"
                    />
                </svg>
            </div>
            <span class="mdabutton__text">Menu</span>
            <span class="screen-reader-text">Menu</span>
        </button>
    </div>

    <?php
}