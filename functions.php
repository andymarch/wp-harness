<?php

	function wpbootstrap_scripts_with_jquery()
	{
		// Register the script like this for a theme:
		wp_register_script( 'ajm_bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'ajm_bootstrap' );
	} 
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
	add_filter( 'show_admin_bar', '__return_false' );
 ?>