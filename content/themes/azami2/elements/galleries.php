<?php if( have_rows('page_elements') ): ?>
	<?php while ( have_rows('page_elements') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'gallery'): ?>	
			<?php include('galleries/gallery.php'); ?>
		<?php elseif( get_row_layout() == 'gallery_clients'): ?>
			<?php include('galleries/gallery_clients.php'); ?>
		<?php elseif( get_row_layout() == 'gallery_content'): ?>
			<?php include('galleries/gallery_content.php'); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>