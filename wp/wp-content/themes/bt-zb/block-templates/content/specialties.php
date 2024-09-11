<?php 
// Block to render content of 'specialties' post type

// ACF Fields:
$title = get_field( 'title' );

// Specialties query:
$args = array(
	'post_type' => 'specialty',
	'posts_per_page' => -1
);
$specialty_query = new WP_Query( $args );

$has_cards = $specialty_query->have_posts();

?>

<section id="specialties">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2><?php echo( $title ); ?></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row cards-row">
        <?php
            if( $has_cards ):
                // Loop through the Testimonial Posts
                $count = 0;
                while( $specialty_query->have_posts() ) :
                    $specialty_query->the_post();
                    $post_id = get_the_ID();
                    $active_class = ( $count == 0 ) ? 'active' : '';
                    $specialty_title = get_field( 'title', $post_id ) ?: '';
                    $specialty_description = get_field( 'description', $post_id ) ?: '';
                    $specialty_image = get_field( 'image', $post_id ) ?: '';
                    $img_alt = get_post_meta($specialty_image , '_wp_attachment_image_alt', true);
                    $img_src = ZB_ACF_Img_Srscet::zb_responsive_images($specialty_image, 'large', '800');
                    ?>
                    <div class="card col-12 col-md-4">
                        <div class="card-outer">
                            <div class="card-content" style="background-image: url('<?php echo( $img_src['src'] ); ?>);" aria-label="<?php echo($img_alt); ?>">
                            </div>
                            <div class="card-content-inner">
                                <div class="card-title">
                                    <h3><?php echo( $specialty_title ); ?></h3>
                                </div>
                                <div class="card-text"><?php echo( $specialty_description ); ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                        $count++;
                    endwhile;

                endif;
                ?>
        </div>
    </div>
</section>