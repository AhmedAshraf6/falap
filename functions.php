<?php 
 

  //  add Featured Image
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  require get_template_directory().'/inc/custom-post-type.php';
  require get_template_directory().'/inc/ajax.php';

  

/*
  ** Function to add Custom Scripts & styles
  ** 6/1/2024
*/
function ahmed_add_styles() {
  wp_enqueue_style('myTailwindSetup', get_template_directory_uri() . '/src/output.css',array(),'1.0.6');
}

function ahmed_add_scripts() {
  wp_enqueue_script('mainJs',get_template_directory_uri() . '/assets/js/main.js',array(),'1.2.6',true);
}
function initlize_swiper(){
  ?>

<?php }
add_action('wp_footer', 'initlize_swiper');

/*
  ** Add Custom Menu Support
  ** Added By Ahmed
  ** 7/1/2024
*/
// Number Pagination
function numbering_pagination(){
  global $wp_query;
  $all_pages = $wp_query->max_num_pages;
  $current_page = max(1,get_query_var('paged'));
  if($all_pages>1){
    return paginate_links(array(
        'base' => get_pagenum_link() . '%_%',
        'format' => 'page/%#%',
        'current'=> $current_page,
        'mid_size' =>1,
        'end_size' =>1
    ));
  }

}
function ahmed_custom_menu(){
      register_nav_menus(array(
        'bootstrap-menu' => ('الشريط العلوي'),
        'footer-menu'    => ('الشريط السفلي')
    ));
}

function ahmed_bootstrap_navbar(){
  wp_nav_menu(array(
     'theme_location' => 'bootstrap-menu',
     'menu_class' => 'navbar-menu flex gap-6',
     'container' => ''
  ));
}
function ahmed_bootstrap_navbar_mobile(){
  wp_nav_menu(array(
     'theme_location' => 'bootstrap-menu',
     'menu_class' => 'mobile-navbar-menu flex flex-col gap-5  items-center w-full mt-[40px]',
     'container' => ''
  ));
}

/*
** Added By Ahmed
** 8/1/2024
*/
function ahmed_extend_exceprt($length){
  if(is_author()){
    return 40;
  }else{
    return 50;
  }
}



add_filter('excerpt_length','ahmed_extend_exceprt');
function ahmed_extend_exceprt_change_dots($more){
  return '...';
}
add_filter('excerpt_more','ahmed_extend_exceprt_change_dots');

add_action('wp_enqueue_scripts','ahmed_add_styles');
add_action('wp_enqueue_scripts','ahmed_add_scripts');
add_action('init','ahmed_custom_menu');


  // add_action( 'phpmailer_init', 'my_phpmailer_smtp' );
  // function my_phpmailer_smtp( $phpmailer ) {
  //     $phpmailer->isSMTP();     
  //     $phpmailer->Host ='smtp.gmail.com' ;  
  //     $phpmailer->SMTPAuth =true ;
  //     $phpmailer->Port = 587;
  //     $phpmailer->Username = 'fghffgg767676@gmail.com';
  //     $phpmailer->Password = 'Ahmed767676';
  //     $phpmailer->SMTPSecure = 'tls';
  //     $phpmailer->From = 'fghffgg767676@gmail.com';
  //     $phpmailer->FromName = 'شركة عناقيد الرائدة';
  // }

// regsiter function
// function myMainSidebar(){
  
//   register_sidebar(array(
//     'name' => 'Main Sidebar',
//     'id' => 'main-sidebar',
//     'description' => 'in every where',
//     'class' =>'main-sidebar',
//     'before_widget' => '<div class="widget-content">',
//     'after_widget' => '</div>',
//     'before_title' => '<h3 class="widget-title"',
//     'after_title' =>'</h3>'
//   ));
// }
// add_action('widgets_init','myMainSidebar');

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'عملاء عناقيد',
		'singular_name' => 'anaqidClients',
		'add_new' => 'اضافة رأي',
		'all_items' => 'جميع الاراء',
		'add_new_item' => 'اضافة رأي',
		'edit_item' => 'تعديل رأي',
		'new_item' => 'اضافة رأي',
		'view_item' => 'مشاهدة رأي',
		'search_item' => 'البحث في الاراء',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('anaqidClients',$args);
}
add_action('init','awesome_custom_post_type');



function custom_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_image' => 'Image',
        'date' => 'Date'
     );
    return $columns;
}
add_filter('manage_posts_columns' , 'custom_columns');

function custom_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_image':
        the_post_thumbnail( 'thumbnail' );
        break;
    }
}
add_action( 'manage_posts_custom_column' , 'custom_columns_data', 10, 2 ); 