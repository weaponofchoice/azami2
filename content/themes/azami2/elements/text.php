<?php if( have_rows('text') ): ?>
	<?php while ( have_rows('text') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'text'): ?>
			<?php include(locate_template('elements/text/text.php')); ?>
		<?php elseif( get_row_layout() == 'text'): ?>
			<?php include(locate_template('elements/text/text_centered.php')); ?>
		<?php elseif( get_row_layout() == 'image'): ?>
			<?php include(locate_template('elements/text/text_quote.php')); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>