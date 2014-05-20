<div class="content-slider-bg">
	
	<p class="uppercase"><?php the_sub_field('collection_title')?></p>
	
	<?php if(have_rows('gallery')): ?>
    <div class="royalSlider rsDefault contentSlider rsAutoHeight rsHor">
		<?php while(have_rows('gallery')): the_row(); ?>
			<div>
            	<img class="rsImg" src="<?php the_sub_field('gallery_image'); ?>" />
				<figure class="rsCaption"><h2><?php the_sub_field('product_title'); ?></h2></figure>
				<figure class="rsCaption"><?php the_sub_field('product_text'); ?></figure>
			</div>
		<?php endwhile; ?>		
	</div>
</div>
<?php endif; ?>