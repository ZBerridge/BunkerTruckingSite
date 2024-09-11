<?php 

// Simple Block to render out shortcodes

$content = get_field( 'content' );

?>

<section id="contact-us" class="container-fluid py-5 px-0">
    <div class="container px-5">
        <div class="px-md-5">
        <?php echo( $content ); ?>
        </div>
    </div>
</section>