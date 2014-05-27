<!-- <?php
$images = get_sub_field('images');
if( $images ): ?>
<div class="gallery">
	<div class="royalSlider rsDefault">
		<?php
			foreach( $images as $image ):
			
			// scaled images module
			$g_url = $image['sizes']['large']; 
			if (is_tablet()){
				$g_url = $image['sizes']['medium'];
			}
			
			if (is_mobile()){
				$g_url = $image['sizes']['small'];
			}
			?>
			<li>
				<div class="rsContent">
					<img class="rsImg" src="<?php echo $g_url; ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?> -->
	
<div class="gallery">
	
	<?php if(have_rows('images')): ?>
    <div class="royalSlider rsDefault contentSlider rsAutoHeight rsHor">
		<?php
			while(have_rows('images')): the_row();
			
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
			</div>
		<?php endwhile; ?>		
	</div>
<?php endif; ?>
</div>