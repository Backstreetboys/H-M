<?php
/*Adds support for thumbnails*/
add_theme_support('post-thumbnails');


function load_javascript_files() {
  wp_enqueue_script('jquery');
  wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'),'',true  );
  wp_enqueue_script( 'main-js' );
}

add_action( 'wp_enqueue_scripts', 'load_javascript_files' );
?>