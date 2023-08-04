<?php
/**
 * Enqueue scripts and styles.
 */
function playground_scripts() {

	wp_enqueue_style( 'playground-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'playground-style', 'rtl', 'replace' );

	// Main css
	wp_enqueue_style( 'playground-main-style', get_template_directory_uri() . '/dist/main.css', array(), _S_VERSION );

	// Main js to /body
	wp_enqueue_script( 'playground-main-script', get_template_directory_uri() . '/dist/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'playground_scripts' );