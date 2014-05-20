<?php 
/*
 *
 * This redirects to the three main element categories.
 * From there, redirects will run to the individual element php files where the markup is build.
 *
 *
 */
get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): the_post(); ?>

		<?php include(locate_template('elements/global.php')); ?>
		<?php include(locate_template('elements/gallery.php')); ?>
		<?php include(locate_template('elements/text.php')); ?>

	<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>