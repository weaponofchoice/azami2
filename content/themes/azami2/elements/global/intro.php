<div id="intro" class="row" style="background:url('<?php the_sub_field('intro_image'); ?>');">
	
	<?php if( have_rows('gallery_left') ):
		
		$images = get_field('gallery');
		print $images;
	?>
	<div class="gallery gallery_intro gallery_left">
		<div class="royalSlider rsDefault">
			<?php while( have_rows('gallery_left') ): the_row(); ?>

				<li>
					<div class="rsContent">
						<img class="rsImg" src="<?php the_sub_field('image'); ?>" />
					</div>
				</li>

			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if( have_rows('gallery_right') ): ?>
	<div class="gallery gallery_intro gallery_right">
		<div class="royalSlider rsDefault">
			<?php while( have_rows('gallery_right') ): the_row(); ?>

				<li>
					<div class="rsContent">
						<img class="rsImg" src="<?php the_sub_field('image'); ?>" />
					</div>
				</li>

			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div id="logo_type" class="medium-10 medium-centered large-8 large-centered columns"><img src="<?php the_sub_field('intro_typelogo'); ?>" alt="" /></div>
	<div id="arrow_scroll"></div>
</div>