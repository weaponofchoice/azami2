<?php get_header(); ?>

	<?php if( have_posts() ): ?> 
		<?php while( have_posts() ): the_post(); ?>
		
		<div class="post">			
			<!-- post image -->
				<?php
				if(has_post_thumbnail()) {
					echo '<div class="post-image small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns">';
						the_post_thumbnail();
					echo '</div>';
				} else {}
				?>
			
			<article class="small-20 small-offset-2 medium-20 medium-offset-2 large-9 large-offset-2 columns end">
				<!-- post title -->
				<h2 class="post-title"><?php the_title(); ?></h2>
				
				<!-- text/content -->
				<div class="post-content"><?php the_content(); ?></div>
			</article>
		</div>
		
	<?php endwhile; ?>

<?php else : ?>
	<h3 class="center">Not found</h3>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; wp_reset_postdata();  ?>

<?php get_footer(); ?>