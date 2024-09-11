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
get_template_part( 'templates/nav-bar' );
?>
</div>

<?php
the_content();

get_template_part( 'templates/footer-nav' );
get_template_part( 'templates/footer-author' );
get_footer();