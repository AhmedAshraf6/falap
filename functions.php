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
  wp_enqueue_style('myTailwindSetup', get_template_directory_uri() . '/src/output.css',array(),'1.0.8');
}

function ahmed_add_scripts() {
  wp_enqueue_script('mainJs',get_template_directory_uri() . '/assets/js/main.js',array(),'1.2.8',true);
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
function ahmed_bootstrap_footer(){
  wp_nav_menu(array(
     'theme_location' => 'footer-menu',
     'menu_class' => 'flex flex-wrap items-center gap-3 mb-6 text-sm font-medium text-primary sm:mb-0',
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

function awesome_custom_post_type() {
  	$labels = array(
		'name' => 'التجارب العملية',
		'singular_name' => 'falapExperiments',
		'add_new' => 'اضافة تجربة',
		'all_items' => 'جميع التجارب',
		'add_new_item' => 'اضافة تجربة',
		'edit_item' => 'تعديل تجربة',
		'new_item' => 'اضافة تجربة',
		'view_item' => 'مشاهدة تجربة',
		'search_item' => 'البحث في االتجارب',
		'not_found' => 'لم يتم ايجاد تجارب',
		'not_found_in_trash' => 'لم يتم ايجاد شئ ف السلة',
		'parent_item_colon' => 'Parent Item'
	);
    register_post_type('experiment',
        array(
            'labels'      => $labels,
            'public'      => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-lightbulb',
            'supports'    => array('title', 'editor', 'thumbnail'),
            'rewrite'     => array('slug' => 'experiments'),
        )
    );
}

add_action('init', 'awesome_custom_post_type');
function add_experiment_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb']; // Checkbox
    $new_columns['title'] = 'Experiment Name'; // Title column

    return $new_columns;
}
add_filter('manage_experiment_posts_columns', 'add_experiment_columns');





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


// new functions
function pageBanner($args = NULL) {
  
 if (!isset($args['title'])) {
    $args['title'] = get_the_title();
  }


  if (!isset($args['photo'])) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home()) {
      $args['photo'] = get_field('page_banner_background_image')['url'];
    } else {
      $args['photo'] = get_theme_file_uri('/assets/images/banner.jpg');
    }
  }

  ?>

<section class='h-[50vh] bg-cover bg-no-repeat relative bg-fixed bg-center'
  style="background-image: url(<?php echo $args['photo']; ?>);">
  <div class='overlay absolute w-full h-full top-0 left-0 bg-primary opacity-90'></div>
  <div class='layout absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-[50%] text-base-100'>
    <h3 class='text-2xl sm:text-5xl font-bold capitalize z-20' data-aos='fade-up' data-aos-duration='1000'>
      <?php echo $args['title'] ?>
    </h3>

  </div>
</section>
<?php }

function falab_adjust_queries($query) {
if (!is_admin() AND is_post_type_archive('experiment') AND $query->is_main_query()) {
$query->set('orderby', 'title');
$query->set('order', 'ASC');
$query->set('posts_per_page', 6);
}


}

add_action('pre_get_posts','falab_adjust_queries');