<?php if( have_rows('gallery_slide') ): ?> 
<div class="gallery gallery_clients">
	<div class="royalSlider rsDefault">
		<?php while( have_rows('gallery_slide') ): the_row(); ?>

			<li>
				<div class="rsContent">
					<?php if( have_rows('gallery_client_single') ): ?>
						<?php while( have_rows('gallery_client_single') ): the_row(); ?>
							<a 
								class="lightbox"
								href="<?php the_sub_field('client_image'); ?>" 
								data-imagelightbox="overlay"
								style="background:url('<?php the_sub_field('client_image'); ?>');">
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</li>

		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>