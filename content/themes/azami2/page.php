<?php 
/*
 *
 * This redirects to the three main element categories.
 * From there, redirects will run to the individual element php files where the markup is build.
 *
 *
 */
include(locate_template('elements/global.php'));
include(locate_template('elements/galleries.php'));
include(locate_template('elements/text.php'));
?>