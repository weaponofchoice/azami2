<?php
/**
 * @package WordPress
 * @subpackage azami2
 */
?>
<!doctype html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azami</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
    
	<!-- Fonts -->
	<script type="text/javascript">
	WebFontConfig = { fontdeck: { id: '43303' } };

	(function() {
	  var wf = document.createElement('script');
	  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	  wf.type = 'text/javascript';
	  wf.async = 'true';
	  var s = document.getElementsByTagName('script')[0];
	  s.parentNode.insertBefore(wf, s);
	})();
	</script>
	
	<!-- WP_HEAD() -->
	<?php wp_head(); ?>
  </head>
	
  <body <?php body_class(); ?> id="<?php echo the_title(); ?>">
	  <div id="content">
	  	<!-- Sending all English pages to 'contruction.php' for now -->
	  	<?php
	  	$lang = get_locale();
	  	if($lang == 'en'){
	  		include('construction.php');
	  	}
	  	?>
		
		<?php if( have_rows('page_elements') ): ?>
			<?php while( have_rows('page_elements') ): the_row(); ?>
		
				<?php if ( get_row_layout() == 'intro'): ?>
					<?php include(locate_template('elements/other/intro.php')); ?>
				<?php endif; ?>
				
			<?php endwhile; ?>
		<?php endif; ?>
		  
  		<div id="menu" class="menu row">
			<li class="logo medium-4 columns"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/typelogo.png"></a></li>
			
			<?php wp_nav_menu( array( 
				'container' => '',
				'items_wrap' => '%3$s',
				'theme_location' => 'main_menu'
			) );
			?>
			<?php pll_the_languages(); ?>
  		</div>
		
		<div id="menu_small" class="menu row">
			<ul class="small-20 small-centered columns">
				<li class="logo columns"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/typelogo.png"></a></li>
				<li id="hamburger"><a></a></li>
			</ul>
			<ul id="menu_small_collapsed">
				<?php wp_nav_menu( array( 
					'container' => '',
					'items_wrap' => '%3$s',
					'theme_location' => 'main_menu'
				) );
				?>
				<?php pll_the_languages(); ?>
			</ul>
		</div>