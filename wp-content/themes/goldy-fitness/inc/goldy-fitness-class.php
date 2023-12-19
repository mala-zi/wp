<?php 
function goldy_create_fintess_class_post_type() {
    $labels = array(
        'name'               => 'Fitness Class Schedule',
        'singular_name'      => 'Class',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Class',
        'edit_item'          => 'Edit Class',
        'new_item'           => 'New Class',
        'view_item'          => 'View Class',
        'search_items'       => 'Search Class',
        'not_found'          => 'No Class found',
        'not_found_in_trash' => 'No Class found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Fitness Class Schedule'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'fitness-class' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-list-view',
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'fitness-class', $args );
}
add_action( 'init', 'goldy_create_fintess_class_post_type' );

function goldy_create_custom_taxonomies() {
    $labels = array(
        'name'              => 'Class Categories',
        'singular_name'     => 'Custom Taxonomy',
        'search_items'      => 'Search Class Categories',
        'all_items'         => 'All Class Categories',
        'parent_item'       => 'Parent Class Categories',
        'parent_item_colon' => 'Parent Class Categories:',
        'edit_item'         => 'Edit Class Categories',
        'update_item'       => 'Update Class Categories',
        'add_new_item'      => 'Add New Class Categories',
        'new_item_name'     => 'New Class Categories',
        'menu_name'         => 'Class Categories',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'fitness-categories' ),
    );

    register_taxonomy( 'fitness-categories', 'fitness-class', $args );
}
add_action( 'init', 'goldy_create_custom_taxonomies' );


function goldy_add_class_schedule_meta_box()
{
  add_meta_box("class_schedule_meta_box", "Time", "goldy_schedule_meta_box_markup", "fitness-class", "normal", "high", null);
}

add_action("add_meta_boxes", "goldy_add_class_schedule_meta_box");

function  goldy_schedule_meta_box_markup($post)
{
wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    $goldy_start_time = get_post_meta( $post->ID, 'goldy_start_time', true );
    $start_time_parts = explode(' ', $goldy_start_time);
    $class_start_time = ! empty( $start_time_parts[0] ) ? $start_time_parts[0] : '';
    $class_start_time_period = ! empty( $start_time_parts[1] ) ? $start_time_parts[1] : '';

    // echo "<pre>";
    // print_r($start_time_parts);
    // echo "</pre>"; 

    $goldy_end_time = get_post_meta( $post->ID, 'goldy_end_time', true );
    $end_time_parts = explode(' ', $goldy_end_time);
    $class_end_time = ! empty( $end_time_parts[0] ) ? $end_time_parts[0] : '';
    $class_end_time_period = ! empty( $end_time_parts[1] ) ? $end_time_parts[1] : '';
?>
    <table class="admin_sidebar_select">
        <tbody><tr><td><label><h2 class="custom_meta">Start Time:</h2></label></td></tr>
        <tr>
            <td>
                <input type="time" id="goldy_start_time" name="goldy_start_time" value="<?php echo esc_attr($class_start_time); ?>" />
                <select name="class_start_time_period">
                  <option value="am" <?php selected( $class_start_time_period, 'am' ); ?>>AM</option>
                  <option value="pm" <?php selected( $class_start_time_period, 'pm' ); ?>>PM</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>
                <h2 class="custom_meta">End Time:</h2></label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="time" id="goldy_end_time" name="goldy_end_time" value="<?php echo esc_attr($class_end_time); ?>" />
                <select name="class_end_time_period">
                  <option value="am" <?php selected( $class_end_time_period, 'am' ); ?>>AM</option>
                  <option value="pm" <?php selected( $class_end_time_period, 'pm' ); ?>>PM</option>
                </select>          
            </td>
        </tr>
    </tbody></table>
<?php  

}

function goldy_save_schedule_metabox( $post_id ) {
    if ( isset( $_POST['goldy_start_time'], $_POST['class_start_time_period'] ) ) {
        $goldy_start_time = sanitize_text_field( $_POST['goldy_start_time'] );
        $class_start_time_period = sanitize_text_field( $_POST['class_start_time_period'] );
        $class_time_full = $goldy_start_time . ' ' . $class_start_time_period;
        update_post_meta( $post_id, 'goldy_start_time', $class_time_full );
    }

    if ( isset( $_POST['goldy_end_time'], $_POST['class_end_time_period'] ) ) {
        $goldy_end_time = sanitize_text_field( $_POST['goldy_end_time'] );
        $class_end_time_period = sanitize_text_field( $_POST['class_end_time_period'] );
        $class_time_full = $goldy_end_time . ' ' . $class_end_time_period;
        update_post_meta( $post_id, 'goldy_end_time', $class_time_full );
    }
}
add_action( 'save_post', 'goldy_save_schedule_metabox' );

/* Meta Box 2 */

function goldy_add_class_schedule_meta_box2() {
    add_meta_box(
        'class_schedule_meta_box2',      // Unique ID
        'Trainer Name',      // Title
        'goldy_schedule_meta_box_markup2',  // Callback function
        'fitness-class',                 // Post type
        'normal',               // Context (normal, side, advanced)
        'high'               // Priority (default, high, low)
    );
}
add_action('add_meta_boxes', 'goldy_add_class_schedule_meta_box2');


function goldy_schedule_meta_box_markup2($post) {
    $goldy_schedule_trainer_name = get_post_meta($post->ID, 'goldy_schedule_trainer_name', true);
    ?>
    <input type="text" id="goldy_schedule_trainer_name" name="goldy_schedule_trainer_name" value="<?php echo esc_attr($goldy_schedule_trainer_name); ?>">
    <?php
}

function goldy_schedule_meta_box_data($post_id) {
    // Check if the meta field is present in the $_POST data
    if (isset($_POST['goldy_schedule_trainer_name'])) {
        $goldy_schedule_trainer_name = sanitize_text_field($_POST['goldy_schedule_trainer_name']);
        update_post_meta($post_id, 'goldy_schedule_trainer_name', $goldy_schedule_trainer_name);
    }
}
add_action('save_post', 'goldy_schedule_meta_box_data');
?>