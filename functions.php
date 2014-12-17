<?php

	/*
		import the parent theme
	*/
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

    function enqueue_parent_theme_style() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }

	/*
		this should probably get its data from some config file
	*/
	function get_chain_id() {
		return 147;
	}
?>