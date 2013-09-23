<?php

	function wpbootstrap_scripts_with_jquery()
	{
		// Register the script like this for a theme:
		wp_register_script( 'ajm_bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'ajm_bootstrap' );
	} 
	
	function loginErrorMask(){
	  return 'Login unsuccessful.';
	}
	
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
	add_filter( 'show_admin_bar', '__return_false' );
	add_filter( 'pre_comment_content', 'wp_specialchars' );
	add_filter( 'login_errors', 'loginErrorMask' );
	remove_action( 'wp_head', 'wp_generator' ) ; 
	remove_action( 'wp_head', 'wlwmanifest_link' ) ; 
	remove_action( 'wp_head', 'rsd_link' ) ;
 ?>