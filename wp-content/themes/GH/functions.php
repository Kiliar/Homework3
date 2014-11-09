<?php


function geekhub_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'geekhub_setup' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>