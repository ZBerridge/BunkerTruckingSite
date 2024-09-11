<?php
/*
 * Copyright (c) 2022. Designed and built by Zachary Berridge.
 */


if ( !class_exists( 'ZB_ACF_Img_Srscet' )):

	class ZB_ACF_Img_Srscet {

		public static function zb_add_image_sizes(){

			add_image_size( 'header-large', 2048, 1152, true );
			add_image_size( 'header-medium', 1024, 576, true );
			add_image_size( 'header-small', 640, 360, true );

			// Just some additions for larger than 1024, but less than full image size
			add_image_size( 'xx-large', 1600, 900, true );
			add_image_size( 'x-large', 1366, 768, true );
			add_image_size( 'medium-square', 300, 300, array( 'center', 'center' ) );

		}

		public static function zb_responsive_images( $image_id, $image_size, $max_width ) {

			// Check if the image ID is not blank
			if ( $image_id != '' ) {

				// Set the default src image size
				$image_src = wp_get_attachment_image_url( $image_id, $image_size );
				
				// Set the srcset with various image sizes
				$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

				// Generate the markup for the responsive image
				$return_arr = [];
				$return_arr['src'] = $image_src;
				$return_arr['srcset'] = $image_srcset;
				$return_arr['sizes'] = '(max-width: ' . $max_width . 'px) 100vw, ' . $max_width . 'px';
				
				return $return_arr;

			}

		}

	}

endif;

add_action( 'after_setup_theme', [ 'ZB_ACF_Img_Srscet', 'zb_add_image_sizes' ] );