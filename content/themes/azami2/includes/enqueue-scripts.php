<?php
function enqueue_theme_scripts() {
  // Unregister standard jQuery and reregister as google code.
  wp_deregister_script('jquery');
  wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.min.js', null, false, true );
	wp_enqueue_script( 'jquery' );
	
	if( WP_DEBUG ):
		// Plugins
		// For example:
		wp_enqueue_script( 'height', get_template_directory_uri() . '/js/height.js', 'jquery', false, true );
		
		wp_enqueue_script( 'royalslider', get_template_directory_uri() . '/js/vendor/royalslider.js', 'jquery', false, true );
		wp_enqueue_script( 'imagelightbox', get_template_directory_uri() . '/js/vendor/imagelightbox.js', 'jquery', false, true );
		wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/vendor/gmaps.js', 'jquery', false, true );
		wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/vendor/stickykit.js', 'jquery', false, true );
		wp_enqueue_script( 'scrollto', get_template_directory_uri() . '/js/vendor/scrollto.js', 'jquery', false, true );
		
		wp_enqueue_script( 'intro', get_template_directory_uri() . '/js/intro.js', 'royalslider', false, true );
		wp_enqueue_script( 'init-royalslider', get_template_directory_uri() . '/js/init-royalslider.js', 'royalslider', false, true );
		wp_enqueue_script( 'init-imagelightbox', get_template_directory_uri() . '/js/init-imagelightbox.js', 'imagelightbox', false, true );
		wp_enqueue_script( 'init-gmaps', get_template_directory_uri() . '/js/init-gmaps.js', 'gmaps', false, true );
		wp_enqueue_script( 'init-stickykit', get_template_directory_uri() . '/js/init-stickykit.js', 'stickykit', false, true );
		
		wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', 'jquery', false, true );
		wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', 'scrollto', false, true );
		wp_enqueue_script( 'menu_small', get_template_directory_uri() . '/js/menu_small.js', 'jquery', false, true );
 	else:
		// All concatenated and compressed JS in one file:
		wp_enqueue_script( 'height', get_template_directory_uri() . '/js/height.js', 'jquery', false, true );
		
		wp_enqueue_script( 'royalslider', get_template_directory_uri() . '/js/vendor/royalslider.js', 'jquery', false, true );
		wp_enqueue_script( 'imagelightbox', get_template_directory_uri() . '/js/vendor/imagelightbox.js', 'jquery', false, true );
		wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/vendor/gmaps.js', 'jquery', false, true );
		wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/vendor/stickykit.js', 'jquery', false, true );
		wp_enqueue_script( 'scrollto', get_template_directory_uri() . '/js/vendor/scrollto.js', 'jquery', false, true );
		
		wp_enqueue_script( 'intro', get_template_directory_uri() . '/js/intro.js', 'royalslider', false, true );
		wp_enqueue_script( 'init-royalslider', get_template_directory_uri() . '/js/init-royalslider.js', 'royalslider', false, true );
		wp_enqueue_script( 'init-imagelightbox', get_template_directory_uri() . '/js/init-imagelightbox.js', 'imagelightbox', false, true );
		wp_enqueue_script( 'init-gmaps', get_template_directory_uri() . '/js/init-gmaps.js', 'gmaps', false, true );
		wp_enqueue_script( 'init-stickykit', get_template_directory_uri() . '/js/init-stickykit.js', 'stickykit', false, true );
		
		wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', 'jquery', false, true );
		wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', 'scrollto', false, true );
		wp_enqueue_script( 'menu_small', get_template_directory_uri() . '/js/menu_small.js', 'jquery', false, true );
 	endif;
}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
?>