<div class="employee row">
	<!-- Picture of employee -->
	<img class="picture small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns" src="<?php echo $emp_url; ?>" />
	
	<!-- Description of employee -->
	<article class="small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns">
		<h2><?php the_sub_field('name'); ?></h2>
		<?php the_sub_field('description'); ?>
	</article>
</div>