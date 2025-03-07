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
    // Enqueue Axios
    wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array(), null, true);

    // Enqueue your main.js script
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('axios'), null, true);

    // Pass AJAX URL to JavaScript
    wp_localize_script('main-js', 'experimentAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'ahmed_add_scripts');

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
class Ahmed_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='submenu hidden absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2 transition-opacity  duration-300 opacity-0'>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $class_names = !empty( $item->classes ) ? implode(' ', $item->classes) : '';
        $has_children = in_array('menu-item-has-children', $item->classes);
        $output .= '<li class="menu-item relative group' . $class_names . '">';
        
        $output .= '<a href="' . $item->url . '" class="menu-link block  ">' . $item->title . '</a>';
        
        if ($has_children) {
            $output .= '<button class="dropdown-arrow absolute -left-6 top-1/2 transform -translate-y-1/2">                         <svg class="stroke-primary" width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6002 7.95831L11.1668 13.3917C10.5252 14.0334 9.47516 14.0334 8.8335 13.3917L3.40015 7.95831" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></button>';
        }
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>\n";
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
     'container' => '',
          'walker' => new Ahmed_Walker_Nav_Menu() // Custom Walker

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
     'container' => '',
     'walker' => new Ahmed_Walker_Nav_Menu() // Custom Walker

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
add_action('init','ahmed_custom_menu');

function awesome_custom_post_type() {
    // experiment 
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
            'supports'    => array('title', 'editor', 'thumbnail','excerpt'),
            'rewrite'     => array('slug' => 'experiments'),
        )
    );
    // library 
  	$labels2 = array(
		'name' => 'المكتبة العلمية',
		'singular_name' => 'falapLibrary',
		'add_new' => 'اضافة عنصر',
		'all_items' => 'جميع العناصر',
		'add_new_item' => 'اضافة عنصر',
		'edit_item' => 'تعديل عنصر',
		'new_item' => 'اضافة عنصر',
		'view_item' => 'مشاهدة عنصر',
		'search_item' => 'البحث في المكتبة',
		'not_found' => 'لم يتم ايجاد عنصر',
		'not_found_in_trash' => 'لم يتم ايجاد شئ ف السلة',
		'parent_item_colon' => 'Parent Item'
	);
    register_post_type('library',
        array(
            'labels'      => $labels2,
            'public'      => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-book',
            'supports'    => array('title', 'editor', 'thumbnail','excerpt'),
            'rewrite'     => array('slug' => 'libraries'),

        )
    );
    // preparation library 
  	$labels2 = array(
		'name' => 'مكتبة محضرة المختبر',
		'singular_name' => 'falapPrepartionLibrary',
		'add_new' => 'اضافة عنصر',
		'all_items' => 'جميع العناصر',
		'add_new_item' => 'اضافة عنصر',
		'edit_item' => 'تعديل عنصر',
		'new_item' => 'اضافة عنصر',
		'view_item' => 'مشاهدة عنصر',
		'search_item' => 'البحث في المكتبة',
		'not_found' => 'لم يتم ايجاد عنصر',
		'not_found_in_trash' => 'لم يتم ايجاد شئ ف السلة',
		'parent_item_colon' => 'Parent Item'
	);
    register_post_type('preparation_library',
        array(
            'labels'      => $labels2,
            'public'      => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-text-page',
            'supports'    => array('title', 'editor', 'thumbnail','excerpt'),
            'rewrite'     => array('slug' => 'preparation-libraries'),
        )
    );
}

add_action('init', 'awesome_custom_post_type');






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

<section class='h-[50vh] bg-cover bg-no-repeat relative bg-fixed bg-center mt-24 '
  style="background-image: url(<?php echo $args['photo']; ?>);">
  <div class='overlay absolute w-full h-full top-0 left-0 bg-primary opacity-90'></div>
  <div class='layout absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-[50%] text-base-100'>
    <h3 class='text-2xl sm:text-5xl font-bold capitalize z-20' data-aos='fade-up' data-aos-duration='1000'>
      <?php echo $args['title'] ?>
    </h3>

  </div>
</section>
<?php }







function handle_experiment_submission() {
    if (!isset($_POST['experiment_nonce']) || !wp_verify_nonce($_POST['experiment_nonce'], 'experiment_nonce')) {
        wp_send_json_error(['message' => 'Security check failed!']);
        return;
    }

    $title = sanitize_text_field($_POST['title']);
    $category = sanitize_text_field($_POST['experiment_category']);
    $purpose = sanitize_textarea_field($_POST['experiment_purpose']);
    $tools = sanitize_textarea_field($_POST['experiment_tool']);
    $steps = sanitize_textarea_field($_POST['experiment_steps']);
    $reports = sanitize_textarea_field($_POST['experiment_reports']);

    $experiment_id = wp_insert_post([
        'post_title'  => $title,
        'post_type'   => 'experiment',
        'post_status' => 'pending'
    ]);

    if ($experiment_id) {
        update_field('experiment_category', $category, $experiment_id);
        update_field('experiment_purpose', $purpose, $experiment_id);
        update_field('experiment_tool', $tools, $experiment_id);
        update_field('experiment_steps', $steps, $experiment_id);
        update_field('experiment_reports', $reports, $experiment_id);

        // Handle Image Upload
        if (!empty($_FILES['experiment_image']['name'])) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $image_id = media_handle_upload('experiment_image', $experiment_id);
            if (!is_wp_error($image_id)) {
                set_post_thumbnail($experiment_id, $image_id);
            }
        }

       
        if (!empty($_FILES['experiment_video']['name'])) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $video_id = media_handle_upload('experiment_video', $experiment_id);
            
            if (!is_wp_error($video_id)) {
                update_field('experiment_video', $video_id, $experiment_id); // Store Attachment ID
            } else {
                error_log('Video Upload Error: ' . $video_id->get_error_message());
            }
        }
        if (!empty($_FILES['experiment_reports']['name'])) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $report_id = media_handle_upload('experiment_reports', $experiment_id);
            
            if (!is_wp_error($report_id)) {
                update_field('experiment_reports', $report_id, $experiment_id); // Store Attachment ID
            } else {
                error_log('file Upload Error: ' . $report_id->get_error_message());
            }
        }

        wp_send_json_success(['message' => 'تمت الاضافة بنجاح سيتم مراجعتها والموافقة عليها قريبا']);
    } else {
        wp_send_json_error(['message' => 'حدث خطا ما الارسال حاول مرة أخري']);
    }
}
add_action('wp_ajax_handle_experiment_submission', 'handle_experiment_submission');
add_action('wp_ajax_nopriv_handle_experiment_submission', 'handle_experiment_submission'); 


function falab_adjust_queries($query) {
    if (!is_admin() && $query->is_main_query()) {
        

        // ✅ Filtering "experiment" by "experiment_cat"
        if (is_post_type_archive('experiment')) {
           $query->set('orderby', 'title');
          $query->set('order', 'ASC');
          $query->set('posts_per_page', 6);
        }
    }
      if (!is_admin() && $query->is_main_query() && is_post_type_archive('preparation_library')) {
        if (isset($_GET['filter']) && !empty($_GET['filter'])) {
            $query->set('meta_query', array(
                array(
                    'key'     => 'library_select', // ACF field name
                    'value'   => sanitize_text_field($_GET['filter']),
                    'compare' => '=',
                ),
            ));
        }
    }
}
add_action('pre_get_posts', 'falab_adjust_queries');