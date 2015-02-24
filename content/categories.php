<?php

// get the post categories
$categories = get_categories();

// comma-separate posts
$separator = '';

// create output variable
$output = '';

// if there are categories for the post
if($categories){

	echo '<div class="categories">';
		foreach($categories as $category) {
			// output category name linked to the archive
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'backlink-sentry' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		echo trim($output, $separator);
	echo "</div>";
}