<?php
var_dump( get_sub_field('images') );

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
<?php endif; ?>