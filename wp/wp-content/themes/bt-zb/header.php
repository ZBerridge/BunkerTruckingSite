<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "yb-page-wrapper" div.


 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#0e2654" /><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="description" content="<?php bloginfo('description'); ?>"
    <meta http-equiv="Content-Language" content="en">
    <title><?php bloginfo( 'name' ) ?></title>
    <?php wp_head(); ?>
	<?php wp_enqueue_script("jquery"); ?>
</head>
<body>