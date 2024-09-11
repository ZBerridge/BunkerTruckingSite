<?php
/**
 *  
 */
get_header();
?>
<div id="nav-wrap" class="container-fluid px-0">
<?php

get_template_part( 'templates/nav-bar' );
?>
</div>
<div class="container-fluid" id="primary-nav-pusher">
</div>

<div class="four-oh-four-content container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <div class="msg">Testing single page</div>
            </div>
        </div>
    </div>
</div>

<?php
get_template_part( 'templates/footer-author' );
get_footer();