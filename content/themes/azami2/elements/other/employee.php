<div class="employee row">
	
	<!-- Picture of employee -->
	<div class="picture <?php if( is_mobile() ){ echo 'picture-mobile'; }; ?> small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns" style="background:url('<?php echo $emp_idol_url; ?>');">
		<img src="<?php echo $emp_url; ?>" />
	</div>
	
	<!-- Description of employee -->
	<article class="small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns">
		<h2><?php the_sub_field('name'); ?></h2>
		<?php the_sub_field('description'); ?>
	</article>
</div>