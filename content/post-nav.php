<?php

global $post;

// gets the previous post if it exists
$previous_post = get_adjacent_post(false,'',true);

// if there is a previous post
if( $previous_post ) {
	// text above the link
	$previous_text = __('Previous Post', 'backlink-sentry');
	// if there is a title use it, else call it "The Previous Post"
	$previous_title = get_the_title( $previous_post ) ? get_the_title( $previous_post ) : __("The Previous Post", 'backlink-sentry');
	// get the post link
	$previous_link = get_permalink( $previous_post );
}
// if there isn't a previous post
else {
	// text above the link
	$previous_text = __('No Older Posts', 'backlink-sentry');
	// set the title to return to the blog
	$previous_title = __('Return to Blog', 'backlink-sentry');
	// link to blog
	$previous_link = home_url();
}

// gets the next post if it exists
$next_post = get_adjacent_post(false,'',false);

// if there is a next post
if( $next_post ) {
	// text above the link
	$next_text = __('Next Post', 'backlink-sentry');
	// if there is a title use it, else call it "The next Post"
	$next_title = get_the_title( $next_post ) ? get_the_title( $next_post ) : __("The Next Post", 'backlink-sentry');
	// get the post link
	$next_link = get_permalink( $next_post );
}
// if there isn't a next post
else {
	// text above the link
	$next_text = __('No Newer Posts', 'backlink-sentry');
	// set the title to return to the blog
	$next_title = __('Return to Blog', 'backlink-sentry');
	// link to blog
	$next_link = home_url();
}

?>
<nav class="further-reading">
	<div class="previous">
		<span><?php echo esc_html( $previous_text ); ?></span>
		<a href="<?php echo esc_url( $previous_link ); ?>"><?php echo esc_html( $previous_title ); ?></a>
	</div>
	<div class="next">
		<span><?php echo esc_html( $next_text ); ?></span>
		<a href="<?php echo esc_url( $next_link ); ?>"><?php echo esc_html( $next_title ); ?></a>
	</div>
</nav>