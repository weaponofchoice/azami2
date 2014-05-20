<div class="block_text">
	<div class="row">
		<div class="quote medium-6 medium-offset-2 large-5 large-offset-3 xlarge-4 xlarge-offset-4 xxlarge-3 xxlarge-offset-5 columns">
			<h3><?php the_sub_field('text_quote'); ?></h3>
		</div>
		
		<article class="small-20 small-offset-2 medium-20 medium-offset-2 large-12 large-offset-1 xlarge-10 columns">
			<h2><?php the_sub_field('text_title'); ?></h2>
			<?php the_sub_field('text_content'); ?>
			<a class="bold" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
		</article>
	</div>
</div>
