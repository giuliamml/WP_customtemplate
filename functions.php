<?php
  //ADD SCRIPTS AND STYLES
  add_action('wp_enqueue_scripts', 'load_theme_scripts_styles');
  function load_theme_scripts_styles() {
    if(!is_admin()) {
      // wp_deregister_script('jquery');
      //remove prebuilt jquery

      wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/main.js', '', '', true );
      wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/style.css' );
      //parameters('name of the stylesheet', url .-concat- 'path to stylesheet')
    }
  }

  add_action('init', 'register_menus');
  function register_menus() {
    register_nav_menu('main-menu', 'Main Menu');
  }

  add_theme_support( 'post-thumbnails' );

  function custom_excerpt_length( $length ) {
    return 10;
    }
   add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

   // Post Type Key: project
add_action( 'init', 'create_project_cpt' );
function create_project_cpt() {
  $labels = array(
    'name' => 'Projects',
    'singular_name' => 'Projects',
    'menu_name' => 'Projects',
    'name_admin_bar' => 'Projects',
    'archives' => 'Projects Archive',
    'attributes' => 'Project Attributes',
    'parent_item_colon' => 'Parent Project',
    'all_items' => 'All Projects',
    'add_new_item' => 'Add new Project',
    'add_new' => 'Add new',
    'new_item' => 'New Project',
    'edit_item' => 'Edit Project',
    'update_item' => 'Update Project',
    'view_item' => 'View Project',
    'view_items' => 'View Projects',
    'search_items' => 'Search Projects',
    'not_found' => 'Not found',
    'not_found_in_trash' => 'Not found in trash',
    'featured_image' => 'Featured Image',
    'set_featured_image' => 'Set Featured Image',
    'remove_featured_image' => 'Remove Featured Image',
    'use_featured_image' => 'Use Featured Image',
    'insert_into_item' => 'Insert to Project',
    'uploaded_to_this_item' => 'Uploaded to this Project',
    'items_list' => 'Projects List',
    'items_list_navigation' => 'Projects List',
    'filter_items_list' => 'Filter Projects',
  );

  $args = array(
    'label' => 'Projects',
    'description' => '',
    'labels' => $labels,
    // 'menu_icon' => '',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'taxonomies' => array(''),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 0,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
  );
  register_post_type( 'project', $args );
  //function that registers the post type('slug post-type',$variable declared before-arguments )
}

// Taxonomy Key: project-type
add_action( 'init', 'create_project_type_tax' );
function create_project_type_tax() {
  $labels = array(
    'name'              => 'Project Types',
    'singular_name'     => 'Project Type',
    'search_items'      => 'Search Project Types',
    'all_items'         => 'All Project Types',
    'parent_item'       => 'Parent Project Type',
    'parent_item_colon' => 'Parent Project Type:',
    'edit_item'         => 'Edit Project Type',
    'update_item'       => 'Update Project Type',
    'add_new_item'      => 'Add Project Type',
    'new_item_name'     => 'New Project Type name',
    'menu_name'         => 'Project Types',
  );

  $args = array(
    'labels' => $labels,
    'description' => __( '', 'textdomain' ),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_rest' => false,
    'show_tagcloud' => true,
    'show_in_quick_edit' => false,
    'show_admin_column' => true,
    'meta_box_cb' => 'post_categories_meta_box',
  );

  register_taxonomy('project-type', array('project'), $args);
  //(slug of taxonomy, array of post types should accept that taxonomy,$variable declared previously )
}

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss (colours, buttons...)
	//unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout (woocommerce grid)
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
 //add support for functionalities desabled
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function new_excerpt_more( $more ) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>