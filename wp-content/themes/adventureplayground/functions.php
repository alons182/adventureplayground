<?php 

add_theme_support('post-thumbnails');

add_image_size( 'projects-thumb', 256, 160, true );

function register_my_menus(){
	//register_nav_menu('header-nav', __('Header Navigation'));
	register_nav_menus(
		array(
			'menu-header' => __('Header Menu') ,
			'menu-footer' => __('Footer Menu')	
			 )
	 );
}
add_action('init','register_my_menus');

function register_my_widgets(){
	register_sidebar(
		array(
			'id' => 'sidebar-blog',
			'name' => 'Sidebar Blog',
			'description' => 'Sidebar Blog'
			)

	 );
  
}

add_action('widgets_init', 'register_my_widgets');

function site_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico" />';
}
add_action('wp_head', 'site_favicon');

//excerprt for pages

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

/*add_filter( 'rwmb_meta_boxes', 'showdreams_register_meta_boxes' );

function showdreams_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'gallery',
        'title'    => 'Gallery',
        'pages'    => array( 'post', 'page','services' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Images',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'gallery',
                'type'  => 'image',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );
    


    return $meta_boxes;
}*/


//custom post type services
function my_custom_post_projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our projects and project specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'projects', $args ); 
}
add_action( 'init', 'my_custom_post_projects' );

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['projects'] = array(
    0 => '', 
    1 => sprintf( __('Project updated. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Project updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Project published. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Project saved.'),
    8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

function my_taxonomies_projects() {
  $labels = array(
    'name'              => _x( 'Countries', 'taxonomy general name' ),
    'singular_name'     => _x( 'Country', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Countries' ),
    'all_items'         => __( 'All Countries' ),
    'parent_item'       => __( 'Parent Country' ),
    'parent_item_colon' => __( 'Parent Country:' ),
    'edit_item'         => __( 'Edit Country' ), 
    'update_item'       => __( 'Update Country' ),
    'add_new_item'      => __( 'Add New Country' ),
    'new_item_name'     => __( 'New Country' ),
    'menu_name'         => __( 'Countries' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'country', 'projects', $args );
}
add_action( 'init', 'my_taxonomies_projects', 0 );

// Add a custom controller
add_filter('json_api_controllers', 'add_my_controller');
function add_my_controller($controllers) {
  $controllers[] = 'alo';
  return $controllers;
}

// Register the source file for our controller
add_filter('json_api_alo_controller_path', 'alo_controller_path');
function alo_controller_path($default_path) {
  return get_stylesheet_directory() . '/alo_controller.php';
}