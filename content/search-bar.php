<?php if( get_theme_mod( 'search_bar' ) != 'hide' ) : ?>
	<div class='search-form-container'>
		<button id="search-icon" class="search-icon">
			<i class="fa fa-search"></i>
		</button>
		<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
			<label><?php _e('Search', 'backlink-sentry'); ?></label>
			<input type="search" class="search-field" placeholder="<?php _e('Search...', 'backlink-sentry'); ?>" value="" name="s" title="<?php _e('Search for:', 'backlink-sentry'); ?>" />
			<input type="submit" class="search-submit" value='<?php _e('Go', 'backlink-sentry'); ?>' />
		</form>
	</div>
<?php endif; ?>