<?php


function geekhub_setup() {
	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'geekhub' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div class="menu_header">',
		'after_widget' => "</div>",
		'before_title' => '<h6 style="display:none;">',
		'after_title' => '</h6>',
	) );
}
add_action( 'after_setup_theme', 'geekhub_setup' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


?>