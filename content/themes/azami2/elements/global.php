<?php if( have_rows('page_elements') ): ?>
	<?php while ( have_rows('page_elements') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'image'): ?>
			<?php include('global/image.php'); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>