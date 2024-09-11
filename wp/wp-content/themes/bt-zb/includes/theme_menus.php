<?php
/*
*
*  Registers Header and Footer menus
*
*/

if ( ! class_exists('ZB_Menus')):

    class ZB_Menus {

        public static function zb_register_menus() {
            register_nav_menus(
                array(
                    'main-menu' => __( 'Header Menu' )
                )
            );
        }
    }
endif;

add_action( 'init', [ 'ZB_Menus', 'zb_register_menus' ] );

?>