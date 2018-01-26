<?php
	function my_function() {
		echo "hi";
		wp_enqueue_style('base', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'my_function');
