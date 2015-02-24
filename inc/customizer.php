<?php

/* Add customizer panels, sections, settings, and controls */
add_action( 'customize_register', 'backlink_sentry_add_customizer_content' );

function backlink_sentry_add_customizer_content( $wp_customize ) {

	/***** Add PostMessage Support *****/
	
	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	/***** Add Custom Controls *****/

	// create url input control
	class backlink_sentry_url_input_control extends WP_Customize_Control {
		// create new type called 'url'
		public $type = 'url';
		// the content to be output in the Customizer
		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<input type="url" <?php $this->link(); ?> value="<?php echo esc_url_raw( $this->value() ); ?>" />
			</label>
		<?php
		}
	}

	/***** Logo Upload *****/

	// section
	$wp_customize->add_section( 'backlink_sentry_logo_upload', array(
		'title'      => __( 'Logo Upload', 'backlink-sentry' ),
		'priority'   => 30,
		'capability' => 'edit_theme_options'
	) );
	// setting
	$wp_customize->add_setting( 'logo_upload', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage'
	) );
	// control
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'logo_image', array(
			'label'    => __( 'Upload custom logo.', 'backlink-sentry' ),
			'section'  => 'backlink_sentry_logo_upload',
			'settings' => 'logo_upload',
		)
	) );

	/***** Social Media Icons *****/

	// get the social sites array
	$social_sites = backlink_sentry_social_site_list();

	// set a priority used to order the social sites
	$priority = 5;

	// section
	$wp_customize->add_section( 'backlink_sentry_social_media_icons', array(
		'title'          => __('Social Media Icons', 'backlink-sentry'),
		'priority'       => 35,
	) );

	// create a setting and control for each social site
	foreach( $social_sites as $social_site ) {
		// if email icon
		if( $social_site == 'email' ) {
			// setting
			$wp_customize->add_setting( "$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'backlink_sentry_sanitize_email',
				'transport'         => 'postMessage'
			) );
			// control
			$wp_customize->add_control( $social_site, array(
				'label'   => $social_site . " " . __("address:", 'backlink-sentry' ),
				'section' => 'backlink_sentry_social_media_icons',
				'priority'=> $priority,
			) );
		} else {
			// setting
			$wp_customize->add_setting( "$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
				'transport'         => 'postMessage'
			) );
			// control
			$wp_customize->add_control( new backlink_sentry_url_input_control(
				$wp_customize, $social_site, array(
					'label'   => $social_site . " " . __("url:", 'backlink-sentry' ),
					'section' => 'backlink_sentry_social_media_icons',
					'priority'=> $priority,
				)
			) );
		}
		// increment the priority for next site
		$priority = $priority + 5;
	}

	/***** Search Bar *****/

	// section
	$wp_customize->add_section( 'backlink_sentry_search_bar', array(
		'title'      => __( 'Search Bar', 'backlink-sentry' ),
		'priority'   => 40,
		'capability' => 'edit_theme_options'
	) );
	// setting
	$wp_customize->add_setting( 'search_bar', array(
		'default'           => 'show',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'backlink_sentry_sanitize_all_show_hide_settings'
	) );
	// control
	$wp_customize->add_control( 'search_bar', array(
		'type' => 'radio',
		'label' => __('Show search bar at top of site?', 'backlink-sentry'),
		'section' => 'backlink_sentry_search_bar',
		'setting' => 'search_bar',
		'choices' => array(
			'show' => __('Show', 'backlink-sentry'),
			'hide' => __('Hide', 'backlink-sentry')
		),
	) );
}

/***** Custom Sanitization Functions *****/

/*
 * Sanitize settings with show/hide as options
 * Used in: search bar
 */
function backlink_sentry_sanitize_all_show_hide_settings($input){
	// create array of valid values
	$valid = array(
		'show' => __('Show', 'backlink-sentry'),
		'hide' => __('Hide', 'backlink-sentry')
	);
	// if returned data is in array use it, else return nothing
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/*
 * sanitize email address
 * Used in: Social Media Icons
 */
function backlink_sentry_sanitize_email( $input ) {

	return sanitize_email( $input );
}