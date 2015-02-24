<?php
/*
 * Template Name: Keyword Multiplier
 */
?>

<?php get_header(); ?>

<h1>Keyword Multiplier</h1>
<span>Free Keyword Research Tool</span>
<div class="tool-container">
	<div class="max-width">
		<h2 class="tagline">Find hundreds of high-converting, low-competition keywords.</h2>
		<div class="controls">
			<div class="step">
				<label><span>Step 1:</span> Add your keywords here:
					<textarea id="user-keywords" class="user-keywords" rows="7"></textarea>
				</label>
			</div>
			<div class="step">
				<label><span>Step 2:</span> Add/edit the modifiers here:
					<textarea id="keyword-modifiers" class="keyword-modifiers" rows="7"><?php return_keyword_modifiers(false); ?></textarea>
				</label>
			</div>
			<div class="step">
				<label><span>Step 3:</span> Behold your new keyword list:
					<textarea id="keyword-output" class="keyword-output" rows="7"></textarea>
				</label>
			</div>
			<button id="generate-keywords" class="generate-keywords">Generate Keywords</button>
			<div class="share-buttons"></div>
		</div>
		<p class="ad">Signup for the <a href="http://www.backlinksentry.com">Backlink Sentry</a> beta, and never manually check your links again. </p>
	</div>
</div>

<?php get_footer(); ?>