<div class='search-form-container'>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
        <input type="search" class="search-field" placeholder="<?php _e('Search...', 'backlink-sentry'); ?>" value="" name="s" title="<?php _e('Search for:', 'backlink-sentry'); ?>" />
        <input type="submit" class="search-submit" value='<?php _e('Go', 'backlink-sentry'); ?>' />
    </form>
</div>