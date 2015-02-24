<?php

/*
 * Front-end scripts
 */
function backlink_sentry_load_scripts_styles() {

	wp_register_style( 'ct-backlink-sentry-google-fonts', '//fonts.googleapis.com/css?family=Exo+2:300,400,600,700');

	// enqueue on front-end only
	if( ! is_admin() ) {

		// sharing buttons
		if( is_page('Keyword Multiplier') ) {
			wp_enqueue_script('backlink-sentry-share-buttons', get_template_directory_uri() . '/js/share.min.js', array('jquery'),'', true);
		}

		// main JS file
		wp_enqueue_script('ct-backlink-sentry-js', get_template_directory_uri() . '/js/build/production.min.js', array('jquery'),'', true);

		// Google Fonts
		wp_enqueue_style('ct-backlink-sentry-google-fonts');

		// Font Awesome
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');

		// Stylesheet
		wp_enqueue_style('style', get_template_directory_uri() . 'style.min.css');
	}
	// enqueue comment-reply script only on posts & pages with comments open ( included in WP core )
	if( is_singular() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'backlink_sentry_load_scripts_styles' );

/*
 * Back-end scripts
 */
function backlink_sentry_enqueue_admin_styles($hook){

	// if is user profile page
	if('profile.php' == $hook || 'user-edit.php' == $hook ){

		// Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
		wp_enqueue_media();

		// enqueue the JS needed to utilize media uploader on profile image upload
		wp_enqueue_script('ct-backlink-sentry-profile-image-uploader', get_template_directory_uri() . '/js/build/profile-image-uploader.min.js');
	}
}
add_action('admin_enqueue_scripts',	'backlink_sentry_enqueue_admin_styles' );

/*
 * Customizer scripts
 */
function backlink_sentry_enqueue_customizer_scripts(){

	// JS for hiding/showing Customizer options
	wp_enqueue_script('ct-backlink-sentry-customizer-js', get_template_directory_uri() . '/js/build/customizer.min.js',array('jquery'),'',true);

}
add_action('customize_preview_init','backlink_sentry_enqueue_customizer_scripts');

// load scripts asynchronously
function backlink_sentry_add_async_script($url) {

	// if async parameter not present, do nothing
	if (strpos($url, '#backlink_sentry_asyncload') === false){
		return $url;
	}
	// if async parameter present, add async attribute
	return str_replace('#backlink_sentry_asyncload', '', $url)."' async='async";
}
add_filter('clean_url', 'backlink_sentry_add_async_script', 11, 1);