<?php if( have_rows('gallery_slide') ): ?> 
<div class="gallery gallery_clients">
	<?php while( have_rows('gallery_slide') ): the_row(); ?>
		<div class="royalSlider rsDefault">
			<li>
				<div class="rsContent">
					<?php if( have_rows('images') ): ?>
						<?php while( have_rows('images') ): the_row(); 
							$gclients_url = get_sub_field('client');
							?>
							<a 
								class="lightbox"
								href="<?php echo $gclients_url['sizes']['medium']; ?>" 
								data-imagelightbox="overlay"
								style="background:url('<?php echo $gclients_url['sizes']['small']; ?>');">
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</li>
		</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>