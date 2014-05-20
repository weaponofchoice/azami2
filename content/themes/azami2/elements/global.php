<?php if( have_rows('page_elements') ): ?>
	<?php while ( have_rows('page_elements') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'intro'): ?>
			<?php include(locate_template('elements/global/intro.php')); ?>
		<?php elseif( get_row_layout() == 'image'): ?>
			<?php include(locate_template('elements/global/image.php')); ?>
		<?php elseif( get_row_layout() == 'employee'): ?>
			<?php include(locate_template('elements/global/employee.php')); ?>
		<?php elseif( get_row_layout() == 'construction'): ?>
			<?php include(locate_template('elements/global/construction.php')); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>