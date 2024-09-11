<?php

require_once get_stylesheet_directory() . '/includes/acf_img_srscets.php';

// Get ACF fields
$text = get_field( 'text' );
$img = get_field( 'image' );

$img_alt = get_post_meta($img , '_wp_attachment_image_alt', true);
$img_src = ZB_ACF_Img_Srscet::zb_responsive_images($img, 'large', '1200');

?>

<section id="intro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="intro-text-outer">
                    <div class="intro-text">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="intro-image">
                    <div class="intro-image-bg" style="background-image: url('<?php echo( $img_src['src'] ); ?>);" aria-label="<?php echo($img_alt); ?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>