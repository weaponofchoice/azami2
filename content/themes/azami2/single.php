<?php get_header(); ?>

	<?php if( have_posts() ): ?> 
		<?php while( have_posts() ): the_post(); ?>
		
		<div class="post">			
			<!-- post image -->
				<?php
				if(has_post_thumbnail()) {
					echo '<div class="post-image medium-10 medium-offset-1 columns">';
						the_post_thumbnail();
					echo '</div>';
				} else {}
				?>
			
			<!-- post title -->
			<h2 class="post-title medium-10 medium-offset-1 columns"><?php the_title(); ?></h2>
			
			<!-- text/content -->
			<div class="post-content medium-10 medium-offset-1 end columns"><?php the_content(); ?></div>
		</div>
		
	<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>