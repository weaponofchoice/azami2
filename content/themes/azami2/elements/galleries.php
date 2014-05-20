<?php if( have_rows('galleries') ): ?>
	<?php while ( have_rows('galleries') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'gallery'): ?>
			<?php include(locate_template('elements/galleries/gallery.php')); ?>
		<?php elseif( get_row_layout() == 'image'): ?>
			<?php include(locate_template('elements/galleries/gallery_clients.php')); ?>
		<?php elseif( get_row_layout() == 'employee'): ?>
			<?php include(locate_template('elements/galleries/gallery_content.php')); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>