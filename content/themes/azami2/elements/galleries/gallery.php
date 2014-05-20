<?php
$images = get_sub_field('images');
if( $images ): ?>
<div class="gallery">
	<div class="royalSlider rsDefault">
		<?php foreach( $images as $image ): ?>
			<li>
				<div class="rsContent">
					<img class="rsImg" src="<?php echo $image['url']; ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>