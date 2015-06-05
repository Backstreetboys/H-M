<?php
/*Adds support for thumbnails*/
add_theme_support('post-thumbnails');

/*Loads javascript/jQuery*/
function load_javascript_files() {
  wp_enqueue_script('jquery');
  wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'),'',true  );
  wp_enqueue_script( 'main-js' );
}

add_action( 'wp_enqueue_scripts', 'load_javascript_files' );
/*Widget*/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>