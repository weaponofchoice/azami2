<?php if( have_rows('page_elements') ): ?>
	<?php while ( have_rows('page_elements') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'text'): ?>
			<?php include('text/text.php'); ?>
		<?php elseif( get_row_layout() == 'text_centered'): ?>
			<?php include('text/text_centered.php'); ?>
		<?php elseif( get_row_layout() == 'text_quote'): ?>
			<?php include('text/text_quote.php'); ?>
		<?php endif; ?>
		
	<?php endwhile; ?>
<?php endif; ?>