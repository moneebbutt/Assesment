<?php
/**
 * Fusion-convert Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fusion-convert
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_FUSION_CONVERT_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'fusion-convert-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_FUSION_CONVERT_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


define( 'CHILD_THEME_Convter_Fusion_VERSION', '1.0.0' );

add_theme_support('post-thumbnails');
add_theme_support('custom-header');

register_sidebar(
    array(
       'name'=>"footer_colum_1",
        'id'=>'footer_colum_1'
     )   
    );
register_sidebar(
   array(
      'name'=>"footer_colum_2",
      'id'=>'footer_colum_2'
   )   
   );
register_sidebar(
   array(
      'name'=>"footer_colum_3",
         'id'=>'footer_colum_3'
      )   
   );
register_sidebar(
   array(
      'name'=>"footer_colum_4",
         'id'=>'footer_colum_4'
      )   
   );             
add_post_type_support('page','excerpt');  


add_action('wp_ajax_my_action', 'my_action');
add_action('wp_ajax_nopriv_my_action', 'my_action');

function my_action()
{

    $args = array(
        'post_type' => 'post',
        'paged' => $_POST['page']

    );

    // The Query
    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts())
    {

        while ($the_query->have_posts())
        {
         ?><div class="col-md-6"><?php
         $the_query->the_post(); ?>
         <div> <h3><?php echo the_title();?> </h3>
               <p><?php echo the_excerpt();?> </p> </div>
 
        
         <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
      </div><?php
        }

    }
    else
    {
        // no posts found
        
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    wp_die();
}











function process_form() {
   // Check for the data sent via AJAX
   if (isset($_POST['category']) || isset($_POST['taxonomy'])) {
       $category = $_POST['category'];
       $taxonomy = $_POST['taxonomy'];




       $args = array(
         'post_type' => 'post', // Replace with your custom post type if necessary
         'tax_query' => array(
             'relation' => 'OR', // Add the OR relation here
             array(
                 'taxonomy' => 'item-1', // Replace with your actual taxonomy name
                 'field'    => 'slug',
                 'terms'   => $taxonomy,
             ),
             array(
                 'taxonomy' => 'category',
                 'field'    => 'slug',
                 'terms'   => $category,
             ),
         ),
     );

      $the_query = new WP_Query($args);

      $response = array(); // Create an array to store the post data

      if ($the_query->have_posts()) {
         while ($the_query->have_posts()) {
               $the_query->the_post();
               $post_data = array(
                  'title' => get_the_title(),
                  'excerpt' => get_the_excerpt(),
                  'thumbnail' => get_the_post_thumbnail_url(),
               );
               $response[] = $post_data;
         }
      }

      wp_reset_postdata(); // Restore the global post data

       // Send the response as JSON
       wp_send_json_success($response);
   } else {
       wp_send_json_error("Data not received or missing parameters.");
   }
}

// Add an action hook for the AJAX function
add_action('wp_ajax_process_form', 'process_form');
add_action('wp_ajax_nopriv_process_form', 'process_form'); // Allow non-logged-in users to use the AJAX function