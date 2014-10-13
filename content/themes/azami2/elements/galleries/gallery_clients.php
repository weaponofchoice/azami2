

<?php echo do_shortcode('[alpine-phototile-for-tumblr src="user" uid="newyork.tumblr.com" imgl="tumblr" style="vertical" size="500" num="8" align="center" max="100"]'); ?>



<?php if( have_rows('gallery_slide') ): ?> 
<div class="gallery gallery_clients">
	<div class="royalSlider rsDefault">
		<?php while( have_rows('gallery_slide') ): the_row(); ?>
			<li>
				<div class="rsContent">
					<?php if( have_rows('images') ): ?>
						<?php while( have_rows('images') ): the_row();
						
							// scaled images module
							$gclients_url = get_sub_field('client');
              
              if( is_mobile()){
							?>
							<a 
								class="lightbox"
								style="background:url('<?php echo $gclients_url['sizes']['small']; ?>');">
							</a>
              <?php
            } else {
              ?>
							<a 
								class="lightbox"
								href="<?php echo $gclients_url['sizes']['medium']; ?>" 
								data-imagelightbox="overlay"
								style="background:url('<?php echo $gclients_url['sizes']['small']; ?>');">
							</a>
              <?php
            }
              ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</li>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>