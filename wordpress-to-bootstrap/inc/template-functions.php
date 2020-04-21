<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Wordpress_to_Bootstrap
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wordpress_to_bootstrap_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wordpress_to_bootstrap_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wordpress_to_bootstrap_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'wordpress_to_bootstrap_pingback_header' );
