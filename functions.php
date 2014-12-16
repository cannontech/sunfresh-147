<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

    function enqueue_parent_theme_style() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }

    // Custom Function to Include
    function favicon_link() {
        echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
    }

    add_action( 'wp_head', 'favicon_link' );
	
	// split content at the more tag and return an array
	// https://wordpress.org/support/topic/split-the-content-of-the_content
	// function split_content() {
	
		// global $more;
		// $more = true;
		// $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
		
		// // first content section in column1
		// $ret = '<div id="column1" class="column1">'. array_shift($content). '</div>';
		
		// // remaining content sections in column2
		// if (!empty($content)) {
			// $ret .= '<div id="column2" class="column2">'. implode($content). '</div>';
		// }
		
		// return apply_filters('the_content', $ret);
	// }
	
	// split content at the more tag and return an array
	// http://www.sitepoint.com/split-wordpress-content-into-multiple-sections/
	function split_content() {

		global $more;
		$more = true;
		$content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
		
		for($c = 0, $csize = count($content); $c < $csize; $c++) {
			$content[$c] = apply_filters('the_content', $content[$c]);
		}
		return $content;
	}	
	
	function get_data() {
		return 5150;
	}
?>