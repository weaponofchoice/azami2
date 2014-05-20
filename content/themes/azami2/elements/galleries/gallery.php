<?php if( have_rows('gallery_repeater') ): ?> 
<div class="gallery">
	<div class="royalSlider rsDefault">
		<?php while( have_rows('gallery_repeater') ): the_row(); 

			// vars
			$image = get_sub_field('gallery_image');

			?>

			<li>
				<div class="rsContent">
					<img class="rsImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<a class="small-22 small-offset-1 xlarge-20 xlarge-offset-2 columns" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('gallery_title'); ?></a>
				</div>
			</li>

		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>