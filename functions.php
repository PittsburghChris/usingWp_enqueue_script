
// ADDING JAVASCRIPT

 function wcg_scripts()
 {
	// Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js', array( 'jquery', 'jquery-ui-core' ), '20131118', true );  
	// use the array to grab a library already included in WordPress, in this case 'jquery' and 'jquery-ui-core'

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
 }
 add_action( 'wp_enqueue_scripts', 'wcg_scripts' );



// ADDING STYLES

 function wcg_styles()
 {
	// Register the style like this for a theme:
	wp_register_style( 'custom-style', get_template_directory_uri() . '/css/custom-style.css', array(), '20131118', 'all' );

	// For either a plugin or a theme, you can then enqueue the style:
	wp_enqueue_style( 'custom-style' );
 }
 add_action( 'wp_enqueue_scripts', 'wcg_styles' );


// from http://wp.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins/
// Also - load scripts only on plugin pages http://codex.wordpress.org/Function_Reference/wp_enqueue_script#Load_scripts_only_on_plugin_pages
