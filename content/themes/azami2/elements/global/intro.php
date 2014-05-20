<div id="intro" class="row">
	
	<?php
	$images = get_sub_field('gallery_left');
	
	if( $images ): ?>
	<div class="gallery gallery_intro gallery_left">
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
	
	<?php
	$images = get_sub_field('gallery_right');
	
	if( $images ): ?>
	<div class="gallery gallery_intro gallery_right">
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
	
	<?php
	$logo = get_sub_field('logo_type');
	?>
	<div id="logo_type" class="medium-10 medium-centered large-8 large-centered columns"><img src="<?php echo $logo['url']; ?>" alt="" /></div>
	<div id="arrow_scroll"></div>
</div>