<?php if( have_rows('page_elements') ): ?>
	<?php while ( have_rows('page_elements') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'intro'): ?>
			<?php include('other/intro.php'); ?>
		<?php elseif( get_row_layout() == 'employee'): ?>
			<?php include('other/employee.php'); ?>
		<?php elseif( get_row_layout() == 'construction'): ?>
			<?php include('other/construction.php'); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>