<div <?php post_class(); ?>>
	<article>
		<?php backlink_sentry_featured_image(); ?>
		<div class='post-header'>
			<h1 class='post-title'>
				<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<div class="post-content">
			<?php backlink_sentry_excerpt(); ?>
		</div>
	</article>
</div>