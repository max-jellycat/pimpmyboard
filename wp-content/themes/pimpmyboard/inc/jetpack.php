<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Pimp my Board
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pimpmyboard_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'pimpmyboard_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function pimpmyboard_jetpack_setup
add_action( 'after_setup_theme', 'pimpmyboard_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function pimpmyboard_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function pimpmyboard_infinite_scroll_render
