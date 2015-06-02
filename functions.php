<?php
function custom_post_type_product() {
  $labels = array(
    'name'               => __( 'Product', 'H-M' ),
    'singular_name'      => __( 'Product', 'H-M' ),
    'add_new'            => __( 'Add New Product', 'H-M' ),
    'add_new_item'       => __( 'Add New Product', 'H-M' ),
    'edit_item'          => __( 'Edit Product', 'H-M' ),
    'new_item'           => __( 'New Product', 'H-M' ),
    'all_items'          => __( 'All Products', 'H-M' ),
    'view_item'          => __( 'View Product', 'H-M' ),
    'search_items'       => __( 'Search Products', 'H-M' ),
    'not_found'          => __( 'No products found', 'H-M' ),
    'not_found_in_trash' => __( 'No products found in the Trash', 'H-M' ), 
    'parent_item_colon'  => '',
    'menu_name'          => __('New product', 'H-M')
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'product', $args ); 
}
add_action( 'init', 'custom_post_type_product' );
?>