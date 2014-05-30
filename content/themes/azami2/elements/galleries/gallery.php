<div class="gallery">
	
	<?php if(have_rows('gallery_slide')): ?>
    <div class="royalSlider rsDefault contentSlider rsAutoHeight rsHor">
		<?php
			while(have_rows('gallery_slide')): the_row();
			
			// scaled images module
			$g = get_sub_field('image');
			$g_url = $g['sizes']['large'];
			
			if (is_tablet()){
				$g_url = $g['sizes']['medium'];
			}
			
			if (is_mobile()){
				$g_url = $g['sizes']['small'];
			}
		?>
			<div>
            	<img class="rsImg" src="<?php echo $g_url; ?>" />
				<figure class="rsCaption"><h2><?php the_sub_field('title'); ?></h2></figure>
				<figure class="rsCaption"><?php the_sub_field('text'); ?></figure>
			</div>
		<?php endwhile; ?>		
	</div>
</div>
<?php endif; ?>