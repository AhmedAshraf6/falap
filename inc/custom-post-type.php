<?php

/*
	
@package sunsettheme
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/

	
	add_action( 'init', 'sunset_contact_custom_post_type' );
	
	add_filter( 'manage_sunset-contact_posts_columns', 'sunset_set_contact_columns' );
	add_action( 'manage_sunset-contact_posts_custom_column', 'sunset_contact_custom_column', 10, 2 );
	
  // email
	add_action( 'add_meta_boxes', 'sunset_contact_add_meta_box' );
	add_action( 'save_post', 'sunset_save_contact_email_data' );

  // phone
	add_action( 'add_meta_boxes', 'sunset_contact_add_meta_box' );
	add_action( 'save_post', 'sunset_save_contact_email_data' );
	

/* CONTACT CPT */
function sunset_contact_custom_post_type() {
	$labels = array(
		'name' 				=> 'رسائل فيلاب',
		'singular_name' 	=> 'رسالة',
		'menu_name'			=> 'رسائل فيلاب',
		'name_admin_bar'	=> 'رسالة'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-phone',
		'supports'			=> array( 'title', 'editor', 'author' )
	);
	
	register_post_type( 'sunset-contact', $args );
	
}

function sunset_set_contact_columns($columns) {
    $newColumns = array();
    
    // Add the bulk select checkbox column
    $newColumns['cb'] = '<input type="checkbox" />';
    
    // Add your custom columns
    $newColumns['title'] = 'الاسم كاملا';
    $newColumns['message'] = 'الرسالة';
    $newColumns['email'] = 'البريد الالكتروني';
    $newColumns['phone'] = 'رقم المحمول';
    $newColumns['date'] = 'التاريخ';
    
    return $newColumns;
}
function sunset_contact_custom_column( $column, $post_id ){
	
	switch( $column ){
		
		case 'message' :
			echo get_the_excerpt();
			break;

		case 'phone' :
			$phone=  get_post_meta( $post_id, '_contact_phone_value_key', true );
      echo $phone;
			break;
			
		case 'email' :
			//email column
			$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
	
}

/* CONTACT META BOXES */

function sunset_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'البريد الالكتروني', 'sunset_contact_email_callback', 'sunset-contact', 'side' );
	add_meta_box( 'contact_phone', 'رقم المحمول', 'sunset_contact_phone_callback', 'sunset-contact', 'side' );
}

function sunset_contact_email_callback( $post ) {
	wp_nonce_field( 'sunset_save_contact_email_data', 'sunset_contact_email_meta_box_nonce' );
	
	$value = get_post_meta( $post->ID, '_contact_email_value_key', true );
	
	echo '<label for="sunset_contact_email_field"> البريد الالكتروني للعميل</label>';
	echo '<input type="email" id="sunset_contact_email_field" name="sunset_contact_email_field" value="' . esc_attr( $value ) . '" size="25" />';
}
// phone
function sunset_contact_phone_callback( $post ) {
	wp_nonce_field( 'sunset_save_contact_phone_data', 'sunset_contact_phone_meta_box_nonce' );
	
	$value = get_post_meta( $post->ID, '_contact_phone_value_key', true );
	
	echo '<label for="sunset_contact_phone_field"> الهاتف المحمول للعميل</label>';
	echo '<input type="text" id="sunset_contact_phone_field" name="sunset_contact_phone_field" value="' . esc_attr( $value ) . '" size="25" />';
}
// phone
function sunset_save_contact_phone_data( $post_id ) {
	
	if( ! isset( $_POST['sunset_contact_phone_meta_box_nonce'] ) ){
		return;
	}
	
	if( ! wp_verify_nonce( $_POST['sunset_contact_phone_meta_box_nonce'], 'sunset_save_contact_phone_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['sunset_contact_phone_field'] ) ) {
		return;
	}
	
	$my_data = sanitize_text_field( $_POST['sunset_contact_phone_field'] );
	
	update_post_meta( $post_id, '_contact_phone_value_key', $my_data );
	
}
function sunset_save_contact_email_data( $post_id ) {
	
	if( ! isset( $_POST['sunset_contact_email_meta_box_nonce'] ) ){
		return;
	}
	
	if( ! wp_verify_nonce( $_POST['sunset_contact_email_meta_box_nonce'], 'sunset_save_contact_email_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['sunset_contact_email_field'] ) ) {
		return;
	}
	
	$my_data = sanitize_text_field( $_POST['sunset_contact_email_field'] );
	
	update_post_meta( $post_id, '_contact_email_value_key', $my_data );
	
}
// Mark the message as "read" when the admin views it
// Mark message as "read" when an admin opens it
add_action('add_meta_boxes', function () {
    global $post;
    if ($post->post_type === 'sunset-contact') {
        if (get_post_meta($post->ID, 'message_status', true) !== 'read') {
            update_post_meta($post->ID, 'message_status', 'read');
        }
    }
});

function sunset_contact_notification_bubble() {
    global $menu, $pagenow;

    // Get the current user ID
    $user_id = get_current_user_id();

    // Check if we are on the edit screen for the 'sunset-contact' post type
    $is_edit_page = ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'sunset-contact');

    // If the user is on the "All Messages" page, update the last visited timestamp
    if ($is_edit_page) {
        update_user_meta($user_id, 'sunset_contact_last_visited', time());
    }

    // Get the user's last visited timestamp
    $last_visited = get_user_meta($user_id, 'sunset_contact_last_visited', true);

    // If the user has never visited the page, set the last visited timestamp to the earliest possible time
    if (!$last_visited) {
        $last_visited = 0; // Unix timestamp for "beginning of time"
    }

    // Get all published messages for the custom post type 'sunset-contact'
    $args = array(
        'post_type'      => 'sunset-contact',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'date_query'     => array(
            array(
                'after'  => date('Y-m-d H:i:s', $last_visited), // Only count messages published after the last visit
                'column' => 'post_date',
            ),
        ),
    );

    $query = new WP_Query($args);
    $new_message_count = $query->found_posts; // Count of new messages

    // Only add the bubble if there are new messages
    if ($new_message_count > 0) {
        // Loop through the menu to find the 'sunset-contact' post type menu item
        foreach ($menu as $key => $value) {
            if ($menu[$key][2] == 'edit.php?post_type=sunset-contact') {
                // Add the bubble with the count of new messages
                $menu[$key][0] .= " <span class='update-plugins count-$new_message_count'><span class='plugin-count'>" . number_format_i18n($new_message_count) . '</span></span>';
                break;
            }
        }
    }
}
add_action('admin_menu', 'sunset_contact_notification_bubble');