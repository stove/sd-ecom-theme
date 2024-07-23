<?php
function boilerplate_add_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'boilerplate_add_support');