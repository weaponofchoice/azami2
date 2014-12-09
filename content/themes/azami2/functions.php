<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
register_nav_menus(
    array(
        'select-menu' => 'Select Menu',
    )
);

function wp_nav_menu_select( $args = array() ) {
 
    $defaults = array(
        'theme_location' => 'sub_menu',
        'menu_class' => 'select-menu',
    );
 
    $args = wp_parse_args( $args, $defaults );
 
    if ( ( $menu_locations = get_nav_menu_locations() ) && isset( $menu_locations[ $args['theme_location'] ] ) ) {
        $menu = wp_get_nav_menu_object( $menu_locations[ $args['theme_location'] ] );
 
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
        ?>
            <select id="menu-<?php echo $args['theme_location'] ?>" class="<?php echo $args['menu_class'] ?>">
                <option value=""><?php _e( 'Select collection' ); ?></option>
                <?php foreach( (array) $menu_items as $key => $menu_item ) : ?>
                    <option value="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></option>
                <?php endforeach; ?>
            </select>
        <?php
    }
 
    else {
        ?>
            <select class="menu-not-found">
                <option value=""><?php _e( 'Menu Not Found' ); ?></option>
            </select>
        <?php
    }
 
}

// Needed to check for parent page at collection pages
function has_parent() {
	global $post;
	if ( $post->post_parent ) {
		return true;
	} else {
		return false;
	}
}
// Removing upgrade message
add_action('admin_menu','wphidenag');
function wphidenag() {
remove_action( 'admin_notices', 'update_nag', 3 );
}

add_filter('show_admin_bar', '__return_false');

/*
 * General theme configuration settings
 */

// Add support for post-thumbnails
add_theme_support( 'post-thumbnails' );

// Add support for automatic RSS feed links
add_theme_support( 'automatic-feed-links' );

/**
 * Includes
 */
require_once('includes/enqueue-scripts.php');
require_once('includes/image-sizes.php');
require_once('includes/scaled-images.php');

/**
 * Remove unused items from Admin
 * Add as many items as you like to hide to the $restriced array
 */

function remove_menus () {
global $menu;
	$restricted = array( __('Links') );
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

/**
 * Purge Custom Post-types from cache after update
 */
add_action( 'edit_post', 'w3_flush_page_custom', 10, 1 );

function w3_flush_page_custom( $post_id ) {
	if ( function_exists('w3tc_pgcache_flush' ) ):
		w3tc_pgcache_flush();
	endif;
}

/** 
 * Cleaner image captions
 */
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';

	/* Open the caption <div>. */
	$output = '<div' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

	/* Close the caption </div>. */
	$output .= '</div>';

	/* Return the formatted, clean caption. */
	return $output;
}

/**
 *	Remove nasty p's around img tags
 */

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Enable custom menu support
 * Customize to your needs
 */

if( function_exists('register_nav_menus') ):
  register_nav_menus( array(
		'main_menu' => 'The main menu',
		'sub_menu' => 'A submenu'
		));
endif;

/*
 * Hide password protected posts everywhere
 */

 // Filter to hide protected posts
function exclude_protected($where) {
	global $wpdb;
	return $where .= " AND {$wpdb->posts}.post_password = '' ";
}

// Decide where to display them
function exclude_protected_action($query) {
	if( !is_single() && !is_page() && !is_admin() ) {
		add_filter( 'posts_where', 'exclude_protected' );
	}
}

// Action to queue the filter at the right time
add_action('pre_get_posts', 'exclude_protected_action');
?>