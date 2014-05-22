<?php
$images = get_sub_field('images');
if( $images ): ?>
<div class="gallery">
	<div class="royalSlider rsDefault">
		<?php
			foreach( $images as $image ):
			$g_url = $image['sizes']['large']; ?>
			<li>
				<div class="rsContent">
					<img class="rsImg" src="<?php echo $g_url; ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>
