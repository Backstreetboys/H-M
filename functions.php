<?php
/*
* Hides the admin bar
*/
add_filter('show_admin_bar', '__return_false');

/*Adds support for thumbnails*/
add_theme_support('post-thumbnails');

/*Loads javascript/jQuery*/
function load_javascript_files() {
  wp_enqueue_script('jquery');
  wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'),'',true  );
  wp_register_script( 'basket-json', get_template_directory_uri() . 'basket.json');
  wp_register_script( 'carousel-js', get_template_directory_uri() . '/js/jquery.carouFredSel-6.0.4-packed.js', array('jquery'),'',true  );
  wp_register_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'),'',true  );
  wp_enqueue_script( 'main-js' );
  wp_enqueue_script( 'carousel-js' );
  wp_enqueue_script( 'isotope-js' );
}

add_action( 'wp_enqueue_scripts', 'load_javascript_files' );
/*Widget*/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="widget_area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function myplugin_add_meta_box() {

	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'myplugin_sectionid',
			__( 'Add a product price', 'myplugin_textdomain' ),
			'myplugin_meta_box_callback',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function myplugin_meta_box_callback( $post ) {

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'myplugin_save_meta_box_data', 'myplugin_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, 'product_price', true );

	echo '<label for="myplugin_new_field">';
	_e( 'Pris', 'myplugin_textdomain' );
	echo '</label> ';
	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="' . esc_attr( $value ) . '" size="25" />' . ' kr';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function myplugin_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['myplugin_meta_box_nonce'], 'myplugin_save_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['myplugin_new_field'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'product_price', $my_data );
}
add_action( 'save_post', 'myplugin_save_meta_box_data' );
//------Start SESSION------//
if(!session_id()){
	session_start();
}
add_filter('wp_list_categories', 'add_slug_class_wp_list_categories');
function add_slug_class_wp_list_categories($list) {

$cats = get_categories('hide_empty=0');
	foreach($cats as $cat) {
	$find = 'cat-item-' . $cat->term_id . '"';
	$replace = 'item-' . $cat->slug . ' item-' . $cat->term_id . '"';
	$list = str_replace( $find, $replace, $list );
	$find = 'cat-item-' . $cat->term_id . ' ';
	$replace = 'item-' . $cat->slug . ' item-' . $cat->term_id . ' ';
	$list = str_replace( $find, $replace, $list );
	}

return $list;
}
?>