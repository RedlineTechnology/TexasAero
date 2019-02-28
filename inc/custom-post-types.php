<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ta
 */

/**
 * Adds custom classes to the array of body classes.
 */

 // Register Custom Post Type
 function register_custom_posts() {

 	$labels = array(
 		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'ta' ),
 		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'ta' ),
 		'menu_name'             => __( 'Testimonials', 'ta' ),
 		'name_admin_bar'        => __( 'Testimonials', 'ta' ),
 		'archives'              => __( 'Testimonial Archives', 'ta' ),
 		'attributes'            => __( 'Testimonial Attributes', 'ta' ),
 		'parent_item_colon'     => __( 'Parent Testimonial:', 'ta' ),
 		'all_items'             => __( 'All Testimonials', 'ta' ),
 		'add_new_item'          => __( 'Add New Testimonial', 'ta' ),
 		'add_new'               => __( 'Add New', 'ta' ),
 		'new_item'              => __( 'New Testimonial', 'ta' ),
 		'edit_item'             => __( 'Edit Testimonial', 'ta' ),
 		'update_item'           => __( 'Update Testimonial', 'ta' ),
 		'view_item'             => __( 'View Testimonial', 'ta' ),
 		'view_items'            => __( 'View Testimonials', 'ta' ),
 		'search_items'          => __( 'Search Testimonials', 'ta' ),
 		'not_found'             => __( 'Not found', 'ta' ),
 		'not_found_in_trash'    => __( 'Not found in Trash', 'ta' ),
 		'featured_image'        => __( 'Featured Image', 'ta' ),
 		'set_featured_image'    => __( 'Set featured image', 'ta' ),
 		'remove_featured_image' => __( 'Remove featured image', 'ta' ),
 		'use_featured_image'    => __( 'Use as featured image', 'ta' ),
 		'insert_into_item'      => __( 'Insert into Testimonial', 'ta' ),
 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ta' ),
 		'items_list'            => __( 'Items list', 'ta' ),
 		'items_list_navigation' => __( 'Items list navigation', 'ta' ),
 		'filter_items_list'     => __( 'Filter items list', 'ta' ),
 	);
 	$args = array(
 		'label'                 => __( 'Testimonial', 'ta' ),
 		'description'           => __( 'Short Client Testimonials', 'ta' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'custom-fields' ),
 		'taxonomies'            => array( 'category', 'post_tag' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 20,
 		'menu_icon'             => 'dashicons-format-quote',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => false,
 		'can_export'            => true,
 		'has_archive'           => false,
 		'exclude_from_search'   => true,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'testimonials', $args );

	$labels = array(
		'name'                  => _x( 'Aircraft', 'Post Type General Name', 'ta' ),
		'singular_name'         => _x( 'Aircraft', 'Post Type Singular Name', 'ta' ),
		'menu_name'             => __( 'Aircraft', 'ta' ),
		'name_admin_bar'        => __( 'Aircraft', 'ta' ),
		'archives'              => __( 'Aircraft Archives', 'ta' ),
		'attributes'            => __( 'Aircraft Attributes', 'ta' ),
		'parent_item_colon'     => __( 'Parent Aircraft:', 'ta' ),
		'all_items'             => __( 'All Aircraft', 'ta' ),
		'add_new_item'          => __( 'Add New Aircraft', 'ta' ),
		'add_new'               => __( 'Add New', 'ta' ),
		'new_item'              => __( 'New Aircraft', 'ta' ),
		'edit_item'             => __( 'Edit Aircraft', 'ta' ),
		'update_item'           => __( 'Update Aircraft', 'ta' ),
		'view_item'             => __( 'View Aircraft', 'ta' ),
		'view_items'            => __( 'View Aircraft', 'ta' ),
		'search_items'          => __( 'Search Aircraft', 'ta' ),
		'not_found'             => __( 'Not found', 'ta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ta' ),
		'featured_image'        => __( 'Featured Image', 'ta' ),
		'set_featured_image'    => __( 'Set featured image', 'ta' ),
		'remove_featured_image' => __( 'Remove featured image', 'ta' ),
		'use_featured_image'    => __( 'Use as featured image', 'ta' ),
		'insert_into_item'      => __( 'Insert into item', 'ta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ta' ),
		'items_list'            => __( 'Items list', 'ta' ),
		'items_list_navigation' => __( 'Items list navigation', 'ta' ),
		'filter_items_list'     => __( 'Filter items list', 'ta' ),
	);
	$args = array(
		'label'                 => __( 'Aircraft', 'ta' ),
		'description'           => __( 'Aircraft For Sale and Wanted', 'ta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag', 'type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-tag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'aircraft', $args );

 }
 add_action( 'init', 'register_custom_posts', 0 );


 // Register Custom Taxonomies
 function register_custom_taxes() {
 	$args = array(
 		"label" => __( 'Type', 'ta' ),
 		"labels" => array(
   		"name" => __( 'Type', '' ),
   		"singular_name" => __( 'Type', '' ),
   		"menu_name" => __( 'Type', '' ),
   		"all_items" => __( 'All Types', '' ),
   		"edit_item" => __( 'Edit Type', '' ),
   		"view_item" => __( 'View Type', '' ),
   		"update_item" => __( 'Update Type', '' ),
   		"add_new_item" => __( 'Add New Type', '' ),
   		"new_item_name" => __( 'New Type Name', '' ),
   		"parent_item" => __( 'Parent Type', '' ),
   		"parent_item_colon" => __( 'Parent Type:', '' ),
   		"search_items" => __( 'Search Types', '' ),
   		"popular_items" => __( 'Popular Types', '' ),
   		"separate_items_with_commas" => __( 'Separate Types with Commas', '' ),
   		"add_or_remove_items" => __( 'Add or Remove Types', '' ),
   		"choose_from_most_used" => __( 'Choose from the Most Used Types', '' ),
   		"not_found" => __( 'No Types Found', '' ),
   		"no_terms" => __( 'No Types', '' ),
   		"items_list_navigation" => __( 'Type List Navigation', '' ),
   		"items_list" => __( 'Type List', '' )
   	),
 		"public" => true,
 		"hierarchical" => false,
 		"label" => "Types",
 		"show_ui" => true,
 		"show_in_menu" => true,
 		"show_in_nav_menus" => true,
 		"query_var" => true,
 		"rewrite" => array( 'slug' => 'type', 'with_front' => true, ),
 		"show_admin_column" => true,
 		"show_in_rest" => false,
 		"rest_base" => "",
 		"show_in_quick_edit" => true
 	);
 	register_taxonomy( "type", array( "aircraft" ), $args );
 }

 add_action( 'init', 'register_custom_taxes' );

 // CUSTOM FIELDS
 ///////////////////////////////////////////////////////////////////////////////
 //www.taniarascia.com/wordpress-part-three-custom-fields-and-metaboxes/

 // Add Aircraft Meta Box
 function add_aircraft_meta_box() {
	add_meta_box(
		'aircraft_meta_box', // $id
		'Aircraft Information', // $title
		'show_aircraft_meta_box', // $callback
		'aircraft', // post type
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_aircraft_meta_box' );

// Show Aircraft Custom Fields
function show_aircraft_meta_box() {
	global $post;
		$meta = get_post_meta( $post->ID, 'aircraft_fields', true ); ?>

	<input type="hidden" name="aircraft_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <!-- All fields will go here -->
    <p>
    	<label for="aircraft_fields[year]">Year</label>
    	<br>
    	<input type="text" name="aircraft_fields[year]" id="aircraft_fields[year]" class="regular-text" value="<?php echo $meta['year']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[make]">Make</label>
    	<br>
    	<input type="text" name="aircraft_fields[make]" id="aircraft_fields[make]" class="regular-text" value="<?php echo $meta['make']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[model]">Model</label>
    	<br>
    	<input type="text" name="aircraft_fields[model]" id="aircraft_fields[model]" class="regular-text" value="<?php echo $meta['model']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[serialnumber]">Serial Number</label>
    	<br>
    	<input type="text" name="aircraft_fields[serialnumber]" id="aircraft_fields[serialnumber]" class="regular-text" value="<?php echo $meta['serialnumber']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[regnumber]">Registration Number</label>
    	<br>
    	<input type="text" name="aircraft_fields[regnumber]" id="aircraft_fields[regnumber]" class="regular-text" value="<?php echo $meta['regnumber']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[totaltime]">Total Time</label>
    	<br>
    	<input type="text" name="aircraft_fields[totaltime]" id="aircraft_fields[totaltime]" class="regular-text" value="<?php echo $meta['totaltime']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[seats]">Number of Seats</label>
    	<br>
    	<input type="text" name="aircraft_fields[seats]" id="aircraft_fields[seats]" class="regular-text" value="<?php echo $meta['seats']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[location]">Location</label>
    	<br>
    	<input type="text" name="aircraft_fields[location]" id="aircraft_fields[location]" class="regular-text" value="<?php echo $meta['location']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[price]">Price</label>
    	<br>
    	<input type="text" name="aircraft_fields[price]" id="aircraft_fields[price]" class="regular-text" value="<?php echo $meta['price']; ?>">
    </p>
    <p>
    	<label for="aircraft_fields[pdf]">Full Specifications URL</label>
    	<br>
    	<input type="text" name="aircraft_fields[pdf]" id="aircraft_fields[pdf]" class="regular-text" value="<?php echo $meta['pdf']; ?>">
    </p>

	<?php }

// Save Aircraft Custom Fields
function save_aircraft_fields_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['aircraft_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'aircraft' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'aircraft_fields', true );
	$new = $_POST['aircraft_fields'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'aircraft_fields', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'aircraft_fields', $old );
	}
}
add_action( 'save_post', 'save_aircraft_fields_meta' );

// Add Custom Image Gallery
function aircraft_gallery_meta_box(){
  add_meta_box(
    'aircraft_gallery_meta_box', // $id
    'Aircraft Gallery', // $title
    'show_aircraft_gallery_meta_box', // $callback
    'aircraft', // post type
    'normal', // $context
    'high' // $priority
  );
}
add_action( 'add_meta_boxes', 'aircraft_gallery_meta_box' );

// Show Custom Image Gallery
function show_aircraft_gallery_meta_box(){
  global $post;

  $ag_meta_keys = get_post_meta( $post->ID, 'aircraft_gallery', true ); ?>

  <input type="hidden" name="aircraft_gallery_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  <?php

  $imageCount = count($ag_meta_keys); //what we got, yo?
  $i = 0;
  while($i < $imageCount ) { ?>

    <div class="aircraft_gallery_box" id="<?php echo 'aircraft_gallery_' . $i . '_wrapper'; ?>">
      <img src="<?php echo ( $ag_meta_keys[$i]!=''?wp_get_attachment_image_src($ag_meta_keys[$i])[0]:'http://www.placekitten.com/150/150' ); ?>" style="width:100%;" alt="">
      <a class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($ag_meta_keys[$i]!=''?'block':'none'); ?>" onclick="aircraft_gallery_remove_image('<?php echo $i; ?>');"><?php _e('remove image','ta'); ?></a>
      <?php echo ( $ag_meta_keys[$i]!=''?'':'<a class="addimage button" id="aircraft_gallery_add_image" onclick="aircraft_gallery_add_image(\'' . $i . '\');"><i class="fal fa-plus"></i></a>' ); ?>
      <input type="hidden" name="<?php echo 'aircraft_gallery[' . $i . ']'; ?>" id="<?php echo 'aircraft_gallery[' . $i . ']'; ?>" value="<?php echo $ag_meta_keys[$i]; ?>" />
    </div>

    <?php $i++;
  } ?>

  <script>
  function aircraft_gallery_add_image(key){

      var $wrapper = jQuery('#aircraft_gallery_'+key+'_wrapper');

      aircraft_gallery_uploader = wp.media.frames.file_frame = wp.media({
          title: '<?php _e('select image','ta'); ?>',
          button: {
              text: '<?php _e('select image','ta'); ?>'
          },
          multiple: false
      });
      aircraft_gallery_uploader.on('select', function() {

          var attachment = aircraft_gallery_uploader.state().get('selection').first().toJSON();
          var img_url = attachment['url'].replace(/\.[^/.]+$/, "-150x150.jpg");
          var img_id = attachment['id'];
          $wrapper.find('input').val(img_id);
          $wrapper.find('img').attr('src',img_url);
          $wrapper.find('img').show();
          $wrapper.find('a.removeimage').show();
          $wrapper.find('#aircraft_gallery_add_image').remove();

          key++;
          $wrapper.after('<div class="aircraft_gallery_box" id="aircraft_gallery_'+key+'_wrapper" style="margin-bottom:20px;"><img src="http://www.placekitten.com/150/150" style="width:100%; display: block" alt=""><a class="removeimage" style="color:#a00;cursor:pointer;display:none" onclick="aircraft_gallery_remove_image(\''+key+'\');">remove image</a><a class="addimage button" id="aircraft_gallery_add_image" onclick="aircraft_gallery_add_image(\''+key+'\');"><i class="fal fa-plus"></i></a><input type="hidden" name="aircraft_gallery['+key+']" id="aircraft_gallery['+key+']" value="" /></div>');
      });
      aircraft_gallery_uploader.on('open', function(){
          var selection = aircraft_gallery_uploader.state().get('selection');
          var selected = $wrapper.find('input').val();
          if(selected){
              selection.add(wp.media.attachment(selected));
          }
      });
      aircraft_gallery_uploader.open();
      return false;
  }
  function aircraft_gallery_remove_image(key){
      var $wrapper = jQuery('#aircraft_gallery_'+key+'_wrapper');
      $wrapper.find('input').val('');
      $wrapper.hide();
      return false;
  }
  </script>
  <?php }

// Save Custom Image Gallery
function save_aircraft_gallery_meta( $post_id ){
  // verify nonce
	if ( !wp_verify_nonce( $_POST['aircraft_gallery_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'aircraft' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}
  //same array as in custom_postimage_meta_box_func($post)
  $old = get_post_meta( $post->ID, 'aircraft_gallery', true );
  $new = $_POST['aircraft_gallery'];

	if ( $new && $new !== $old ) {

    // let's clean up and re-index before we save
    $count = count($new); //what we got, yo?
    $i = 0;
    while( $i < $count ) :
      if ( $new[$i]=='' ) {
        unset( $new[$i] );
      } $i++;
    endwhile;
    $new = array_values($new); //reindex
    $new[$i] = ''; //add a placeholder to the end, cuz we like that

    update_post_meta( $post_id, 'aircraft_gallery', $new );

	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'aircraft_gallery', $old );
	}
}
add_action( 'save_post', 'save_aircraft_gallery_meta' );

// Admin Styles
function admin_style() {
  wp_enqueue_style('admin-fontawesome', get_template_directory_uri().'/vendor/css/all.css', array(), '20151215', all);
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css', array(), '20151222', all);
}
add_action('admin_enqueue_scripts', 'admin_style');
