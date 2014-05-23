testing
<?php
/*
 *
 * This redirects to the individual element php files where the markup is build.
 *
 *
 */
get_header();

if( have_rows('page_elements') ): 
	while ( have_rows('page_elements') ) : the_row();
		
		require('includes/scaled-images.php');
		
		// Global elements
		if( get_row_layout() == 'image'): 
			include('elements/global/image.php');
		elseif( get_row_layout() == 'image_promo'):
			include('elements/global/image_promo.php');
			
		// Text elements
		elseif( get_row_layout() == 'text'): 
			 include('elements/text/text.php'); 
		elseif( get_row_layout() == 'text_centered'): 
			 include('elements/text/text_centered.php'); 
		elseif( get_row_layout() == 'text_quote'): 
			 include('elements/text/text_quote.php');
			 
		 // Galleries
		elseif( get_row_layout() == 'gallery'):
			 include('elements/galleries/gallery.php'); 
		elseif( get_row_layout() == 'gallery_clients'): 
			 include('elements/galleries/gallery_clients.php'); 
		elseif( get_row_layout() == 'gallery_content'): 
			 include('elements/galleries/gallery_content.php');
			 
		 // Other elements
		elseif( get_row_layout() == 'employee'): 
			 include('elements/other/employee.php'); 
		elseif( get_row_layout() == 'construction'): 
			 include('elements/other/construction.php');
		elseif( get_row_layout() == 'map'):
			include('elements/other/map.php');
		endif; 
			
	endwhile; 
endif; 

get_footer();
?>