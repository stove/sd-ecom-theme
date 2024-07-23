<?php
function boilerplate_load_assets() {
	wp_enqueue_script('nav-js', get_theme_file_uri('/assets/nav.js'), array('wp-element'), '1.0', true);
	wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

	wp_localize_script('ourmainjs', 'ourData', array(
		'root_url' => get_site_url()
	));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');
