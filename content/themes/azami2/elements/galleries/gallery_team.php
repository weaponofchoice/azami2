<?php

$images = get_sub_field('gallery');

?>

<?php if( $images ): ?> 
<div class="content-slider-bg">
	<div class="royalSlider rsDefault contentSlider rsAutoHeight rsHor">
		<?php foreach( $images as $image ): ?>

			<li>
				<div class="rsContent">
					<img class="rsImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				</div>
			</li>

		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>