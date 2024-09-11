<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 */
get_header();
?>
<div id="nav-wrap" class="container-fluid px-0">
<?php
get_template_part( 'templates/utility-nav' );

get_template_part( 'templates/nav-bar' );
?>
</div>
<div class="container-fluid" id="primary-nav-pusher">
</div>

<div class="four-oh-four-content container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h1>404</h1>
                <div class="msg">Page not found.</div>
            </div>
        </div>
    </div>
</div>

<?php
get_template_part( 'templates/footer-author' );
get_footer();