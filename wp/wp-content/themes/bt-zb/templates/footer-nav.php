<?php

// ACF fields (from Theme Settings -> Footer)
$column_one = get_field( 'column_one', 'option' );
$column_two = get_field( 'column_two', 'option' );
$column_three = get_field( 'column_three', 'option' );

?>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-heading col-12 footer-flex">
                <h2>Brookfield Well Repair</h2>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="location footer-flex">
                    <div class="footer-link-container">
                    <a class="fa-icon-link" target="_blank" href="<?php echo($column_one['gps_link']); ?>">Google maps link
                        <i class="fa-solid fa-location-dot"></i>
                    </a>
                    </div>
                    <div class="footer-colum-content">
                        <div class="d-flex justify-content-center flex-column">
                            <a class="footer-link" href="<?php echo($column_one['gps_link']); ?>" target="_blank">
                                <span><?php echo($column_one['street_address']); ?></span>
                                <span><?php echo($column_one['city_state_and_zip']); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="phone footer-flex">
                    <div class="footer-link-container">
                    <a class="fa-icon-link" target="_blank" href="tel:<?php echo($column_two['phone_number']); ?>">508-867-5309 Call now!
                        <i class="fa-solid fa-phone-flip"></i>
                    </a>
                    </div>
                    <div class="footer-colum-content">
                        <div class="d-flex justify-content-center flex-column">
                            <a class="footer-link" href="tel:<?php echo($column_two['phone_number']); ?>" target="_blank">
                                <span><?php echo($column_two['call_text']); ?></span>
                                <span><?php echo($column_two['phone_number']); ?></span>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="email footer-flex">
                    <div class="footer-link-container">
                    <a class="fa-icon-link" href="mailto:<?php echo($column_three['email']); ?>"><?php echo($column_three['email']); ?>
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    </div>
                    <div class="footer-colum-content">
                        <div class="d-flex justify-content-center flex-column">
                            <a class="footer-link"  href="mailto:<?php echo($column_three['email']); ?>">
                                <?php echo($column_three['button_text']); ?>
                                <button class="btn"><?php echo($column_three['button_text']); ?></button>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>