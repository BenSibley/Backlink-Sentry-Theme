<?php
/*
 * Template Name: Free Tools
 */
?>

<?php get_header(); ?>

	<div class="entry">
		<article>
			<div class='featured-image' style='background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/keyword-multiplier.jpg")'>
				<a href='<?php echo get_permalink(); ?>'><?php echo get_the_title(); ?></a>
			</div>
			<div class='post-header'>
				<h1 class='post-title'>
					<a href="<?php echo trailingslashit( site_url() ) . 'keyword-multiplier/'; ?>">Keyword Multiplier</a>
				</h1>
				<span>Keyword Research Tool</span>
			</div>
			<div class="post-content">
				<p>Find hundreds of low-competition, high-converting keywords</p>
				<a class="more-link" href="<?php echo trailingslashit( site_url() ) . 'keyword-multiplier/'; ?>">Try it Now</a>
			</div>
		</article>
	</div>

<?php get_footer(); ?>