<?php

add_filter( 'the_generator', '__return_null' );

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);

remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action('wp_head', 'rsd_link');

function comingsoon_styles_and_scripts() {
	wp_enqueue_style('comingsoon', get_stylesheet_uri() );
	wp_deregister_script('wp-embed');
    	wp_dequeue_style('wp-block-library');
    	wp_dequeue_style('classic-theme-styles');
}

add_action('wp_enqueue_scripts','comingsoon_styles_and_scripts');

