<?php if( have_rows('gallery_slide') ): ?> 
<div class="gallery gallery_clients">
	<?php while( have_rows('gallery_slide') ): the_row(); ?>
		<div class="royalSlider rsDefault">
			<li>
				<div class="rsContent">
					<?php if( have_rows('images') ): ?>
						<?php while( have_rows('images') ): the_row(); ?>
							<a 
								class="lightbox"
								href="<?php the_sub_field('client'); ?>" 
								data-imagelightbox="overlay"
								style="background:url('<?php the_sub_field('client'); ?>');">
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</li>
		</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>