<div class="text text_quote">
	<div class="row">
		<div class="quote medium-6 medium-offset-2 large-5 large-offset-3 xlarge-4 xlarge-offset-4 xxlarge-3 xxlarge-offset-5 columns">
			<h3><?php the_sub_field('quote'); ?></h3>
		</div>
		
		<article class="small-24 small-offset-0 medium-24 medium-offset-0 large-12 large-offset-1 xlarge-10 columns">
			<h2><?php the_sub_field('title'); ?></h2>
			<?php the_sub_field('text'); ?>
			<a class="bold" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
		</article>
	</div>
</div>
