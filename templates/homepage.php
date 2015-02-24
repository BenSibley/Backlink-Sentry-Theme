<?php
/*
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<section id="intro" class="intro">
	<div class="max-width">
		<h1>An Alarm System for Your Links</h1>
		<p>Monitor pages with your guest posts, ads, and important links. Receive daily reports on the status of those links and pages.</p>
		<div class="signup-form">
			<a class="button" href="https://app.backlinksentry.com/#/signup">Create Free Account</a>
		</div>
		<img class="primary-image" src="<?php echo trailingslashit(get_template_directory_uri()) . 'assets/images/screenshot.png'; ?>" />
	</div>
</section>
<section id="benefits" class="benefits">
	<div class="max-width">
		<h1>Let us watch your links while you earn more</h1>
		<ul>
			<li>
				<?php echo backlink_sentry_output_svg('upwards-arrow'); ?>
				<h2>Highly Actionable</h2>
				<p>Email reports notify you of lost links, so you can quickly get them back.</p>
			</li>
			<li>
				<?php echo backlink_sentry_output_svg('calendar'); ?>
				<h2>Up-to-date</h2>
				<p>Frequent link checking ensures you don't miss out on traffic and rankings.</p>
			</li>
			<li>
				<?php echo backlink_sentry_output_svg('clock'); ?>
				<h2>Time-saving</h2>
				<p>No more time spent checking links means more time for other tasks.</p>
			</li>
		</ul>
	</div>
</section>
<section id="features" class="features">
	<div class="max-width">
		<h1>Professional link monitoring</h1>
		<ul>
			<li>
				<h2>Easy Importing</h2>
				<p>Simply copy & paste your links in, or upload a csv file.</p>
			</li>
			<li>
				<h2>Actionable Data</h2>
				<p>Know at a glance which links are missing, so you can get them back.</p>
			</li>
			<li>
				<h2>Simple Filtering</h2>
				<p>View your links by status and/or "nofollow" state.</p>
			</li>
			<li>
				<h2>Email Reports</h2>
				<p>Daily email reports notify you of newly broken links.</p>
			</li>
			<li>
				<h2>Nofollow Alerts</h2>
				<p>Get notified if the "nofollow" attribute is added to any of your links.</p>
			</li>
			<li>
				<h2>Error Reporting</h2>
				<p>Find out if the link was removed, or if there was a page error (404, 503, etc.).</p>
			</li>
		</ul>
	</div>
</section>
<?php get_footer(); ?>