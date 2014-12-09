<div id="intro" class="row">
	
	<!-- Left gallery -->
	<div class="gallery_intro gallery_left">
	
		<?php if(have_rows('gallery_left')): ?>
	    <div class="royalSlider rsDefault rsAutoHeight rsHor">
			<?php
				while(have_rows('gallery_left')): the_row();
			
				// scaled images module
				$gLintro = get_sub_field('image');
				$gLintro_url = $gLintro['sizes']['large'];
			
				if (is_tablet()){
					$gLintro_url = $gLintro['sizes']['medium'];
				}
			
				if (is_mobile()){
					$gLintro_url = $gLintro['sizes']['small'];
				}
			?>
				<div>
	            	<img class="rsImg" src="<?php echo $gLintro_url; ?>" />
				</div>
			<?php endwhile; ?>		
		</div>
	</div>
	<?php endif; ?>
	
	<!-- Right gallery -->
	<div class="gallery_intro gallery_right">
	
		<?php if(have_rows('gallery_right')): ?>
	    <div class="royalSlider rsDefault rsAutoHeight rsHor">
			<?php
				while(have_rows('gallery_right')): the_row();
			
				// scaled images module
				$gRintro = get_sub_field('image');
				$gRintro_url = $gRintro['sizes']['large'];
			
				if (is_tablet()){
					$gRintro_url = $gRintro['sizes']['medium'];
				}
			
				if (is_mobile()){
					$gRintro_url = $gRintro['sizes']['small'];
				}
			?>
				<div>
	            	<img class="rsImg" src="<?php echo $gRintro_url; ?>" />
				</div>
			<?php endwhile; ?>		
		</div>
	</div>
	<?php endif; ?>
	
	<!-- Typelogo -->
	<?php
	$logo = get_sub_field('logo_type');
	?>
	<div id="logo_type" class="medium-10 medium-centered large-8 large-centered columns"><img src="<?php echo $logo['url']; ?>" alt="" /></div>
	
	<!-- Scroll arrow -->
	<div id="arrow_scroll"></div>
</div>