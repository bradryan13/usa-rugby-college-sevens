<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package USA Rugby College Sevens
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function usa_rugby_college_sevens_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'usa_rugby_college_sevens_jetpack_setup' );
