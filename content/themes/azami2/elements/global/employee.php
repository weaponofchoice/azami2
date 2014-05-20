<?php
$image = get_sub_field('picture');
?>
<div class="employee row">
	<img class="picture small-20 small-offset-2 medium-9 medium-offset-2 large-9 large-offset-2 columns" src="<?php echo $image['url']; ?>" />
	<article class="small-20 small-offset-2 medium-9 medium-offset-2 large-9 large-offset-2 columns">
		<h2><?php the_sub_field('name'); ?></h2>
		<?php the_sub_field('description'); ?>
	</article>
</div>