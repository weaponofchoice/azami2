<div class="gallery_content">
	
	<p class="uppercase"><?php the_sub_field('collection_title')?></p>
	
	<?php if(have_rows('gallery_slide')): ?>
    <div class="royalSlider rsDefault contentSlider rsAutoHeight rsHor">
		<?php
			while(have_rows('gallery_slide')): the_row();
			
			// scaled images module
			$gcontent = get_sub_field('image');
			$gcontent_url = $gcontent['sizes']['medium'];
			
			if (is_tablet()){
				$gcontent_url = $gcontent['sizes']['small'];
			}
			
			if (is_mobile()){
				$gcontent_url = $gcontent['sizes']['small'];
			}
		?>
			<div>
            	<img class="image" src="<?php echo $gcontent_url; ?>" />
				<figure class="rsCaption"><h2><?php the_sub_field('title'); ?></h2></figure>
				<figure class="rsCaption"><?php the_sub_field('text'); ?></figure>
			</div>
		<?php endwhile; ?>		
	</div>
</div>
<?php endif; ?>