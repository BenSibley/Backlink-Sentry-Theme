<div <?php post_class(); ?>>
	<article>
		<?php backlink_sentry_featured_image(); ?>
		<div class='post-header'>
			<h1 class='post-title'><?php the_title(); ?></h1>
		</div>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','backlink-sentry'), 'after' => '</p>', ) ); ?>
		</div>
	</article>
	<?php comments_template(); ?>
</div>