<?php

add_filter( 'woocommerce_loop_product_link', 'bbloomer_change_product_permalink_shop', 99, 2 );

function bbloomer_change_product_permalink_shop( $link, $product ) {
   $this_product_id = $product->get_id();
   // E.G. CHANGE LINK FOR PRODUCT ID = 25
   if ( $this_product_id === 3608 ) $link = get_home_url().'/hiletters/design';
   return $link;
}

function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

function my_enqueue_script() {
	global $post;
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
    wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-1.12.4.min.js', array(), '1.0', false);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js', array(), '1.0', true);
	wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js', array(), '1.0', false);
    wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.0', true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script( 'sticky-sidebar', get_template_directory_uri().'/js/sticky-sidebar.min.js', array(), '1.0', true);
    wp_enqueue_script( 'review-widget', 'https://widget.reviews.io/rich-snippet-reviews-widgets/dist.js', array(), '1.0', true);
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array(), '1.0', true);
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/ajax-request.js', array(), '1.0', true );
    wp_localize_script( 'custom-js', 'jsobject', array( 'ajax_url' => admin_url( 'admin-ajax.php' ),'post_id' => $post->ID ) );
    wp_enqueue_script( 'hv2-custom', get_template_directory_uri().'/js/hv2_custom.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_script', 1, 1 );
/*-------------------------------------------------
            CPT for projects
--------------------------------------------------*/
function custom_post_type_projects() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'higobo' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'higobo' ),
        'menu_name'           => __( 'HiNeon Projects', 'higobo' ),
        'parent_item_colon'   => __( 'Parent Project', 'higobo' ),
        'all_items'           => __( 'All Projects', 'higobo' ),
        'view_item'           => __( 'View Project', 'higobo' ),
        'add_new_item'        => __( 'Add New Project', 'higobo' ),
        'add_new'             => __( 'Add New Project', 'higobo' ),
        'edit_item'           => __( 'Edit Project', 'higobo' ),
        'update_item'         => __( 'Update Project', 'higobo' ),
        'search_items'        => __( 'Search Project', 'higobo' ),
        'not_found'           => __( 'Not Found', 'higobo' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'higobo' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'projects', 'higobo' ),
        'description'         => __( 'All Projects', 'higobo' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        //'taxonomies'          => array( 'category', 'post_tag' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
		'menu_icon'   => 'dashicons-clipboard','rewrite' => array('slug' => 'projects','with_front' => false)

    );

    // Registering your Custom Post Type
    register_post_type( 'ourprojects', $args );


}
add_action( 'init', 'custom_post_type_projects', 0 );

add_action( 'init', 'create_projects_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "projects"
function create_projects_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Category', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'show_in_rest' 		=> true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project_category' ),
	);

	register_taxonomy( 'project_category', array( 'ourprojects' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tags', 'textdomain' ),
		'popular_items'              => __( 'Popular Tags', 'textdomain' ),
		'all_items'                  => __( 'All Tags', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag', 'textdomain' ),
		'update_item'                => __( 'Update Tag', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Tag with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags', 'textdomain' ),
		'not_found'                  => __( 'No tags found.', 'textdomain' ),
		'menu_name'                  => __( 'Tag', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_in_rest' 			=> true,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'project_tag' ),
	);

	register_taxonomy( 'project_tag', 'ourprojects', $args );
}


function wpdocs_enqueue_custom_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admincss.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

function higobo_theme_admin_scripts() {
    wp_enqueue_media();
    wp_enqueue_script( 'mytheme-gallery-js', get_template_directory_uri() . '/js/custom-gallery.js', array('jquery'), null, true );

}
add_action( 'admin_enqueue_scripts','higobo_theme_admin_scripts' );

add_theme_support( 'post-thumbnails' );


/*--------------------------------------------------
            Page Header option close
---------------------------------------------------------*/

add_theme_support( 'custom-logo' );

// Register Custom Navigation Walker
//require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}
function register_my_menu(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
//        'header-menu2' => __('Header Menu2'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init','register_my_menu');

/*--------------------------------------------------------
                    Footer weights
----------------------------------------------------------*/

function wrnch_widgets_init() {

    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area' ),
        'id' => 'footer-1',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="footer_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area' ),
        'id' => 'footer-2',
        'description' => __( 'The second footer widget area' ),
        'before_widget' => '<div id="%1$s" class="footer_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area'),
        'id' => 'footer-3',
        'description' => __( 'The third footer widget area' ),
        'before_widget' => '<div id="%1$s" class="footer_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area' ),
        'id' => 'footer-4',
        'description' => __( 'The fourth footer widget area' ),
        'before_widget' => '<div id="%1$s" class="footer_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    // Fifth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fifth Footer Widget Area' ),
        'id' => 'footer-5',
        'description' => __( 'The Fifth footer widget area' ),
        'before_widget' => '<div id="%1$s" class="footer_widget contact-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    // Sixth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Sixth Footer Widget Area' ),
        'id' => 'footer-6',
        'description' => __( 'The Sixth footer widget area' ),
        'before_widget' => '<div id="%1$s" class="footer_widget social-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar( array(
        'name' => __( 'Header Menu' ),
        'id' => 'header-menu',
        'description' => __( 'header menu widget area' ),
        'before_widget' => '<li id="%1$s" class="header-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => '',
    ) );

}

add_action( 'widgets_init', 'wrnch_widgets_init' );


 // theme options

if ( ! file_exists( get_template_directory() . '/inc/admin-options.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/inc/admin-options.php';
}




add_action( 'wp_ajax_nopriv_get_post_installation', 'get_installation_data' );
add_action( 'wp_ajax_get_post_installation', 'get_installation_data' );

function get_installation_data() {
    $postId =  $_REQUEST['postId'];
    ?>

    <div class="container">
        <h2 class="text-center mt-5 mb-5"> <?php echo get_the_title($postId) ?> </h2>
        <div class="row">
            <?php

            if( have_rows('steps', $postId) ):
                while ( have_rows('steps', $postId) ) : the_row(); ?>
                    <div class="col-md-6">
                        <div class="_install_step">
                            <img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
                            <h4><?php the_sub_field('title'); ?></h4>
                        </div>
                    </div>

                    <?php
                endwhile;
            else :
                echo  'Nothing Found';
            endif;
            ?>
        </div>
    </div>

    <?php
//    echo  ' welcome'; //returning this value but still shows 0
    wp_die();
}


//update cart
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {

    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';

    return $fragments;

}

function higobo_theme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'higobo_theme_add_woocommerce_support' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 22 );

add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );

function bbloomer_echo_qty_front_add_cart() {
    echo '<span class="_qty">Qty </span>';
}
add_action( 'woocommerce_after_add_to_cart_quantity', 'higobo_product_total_price' );
function higobo_product_total_price(){
  global $product;
  if ( 'custom-fonts' != $product->get_type() && 'custom' != $product->get_type()) {
    echo '<p class="price ay">';
    if($product->is_type('variable')){
      if( $product->is_on_sale() ) {
        echo '<del class="mr-2"><span class="woocommerce-Price-amount aa amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_regular_price('min'),2,".","").'</span></del>';
        echo '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_sale_price('min'),2,".","").'</span></ins>';
      }else{
        echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_regular_price('min'),2,".","").'</span>';
      }
    }else{
      if( $product->is_on_sale() ) {
        echo '<del class="mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_regular_price(),2,".","").'</span></del>';
        echo '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_sale_price(),2,".","").'</span></ins>';
      }else{
        echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_regular_price(),2,".","").'</span>';
      }
    }
    echo '</p>';
  }

}

add_filter( 'body_class', 'th_wc_product_cats_css_body_class' );

function th_wc_product_cats_css_body_class( $classes ){
  if ( is_singular( 'product' ) ) {
    $current_product = wc_get_product();
    $custom_terms = get_the_terms( $current_product->get_id(), 'product_cat' );
    if ( $custom_terms ) {
      foreach ( $custom_terms as $custom_term ) {
        $classes[] = 'product_cat_' . $custom_term->slug;
      }
    }
  }
  return $classes;
}
add_filter( 'woocommerce_product_tabs', 'remove_info_tab', 98);
function remove_info_tab($tabs) {

 unset($tabs['additional_information']);

 return $tabs;
}

// Remove Reviews Tab WooCommerce

add_filter( 'woocommerce_product_tabs', 'remove_reviews_tab', 98);
function remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}

function th_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'th_remove_product_page_skus' );
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);

add_filter( 'woocommerce_single_product_zoom_options', 'custom_single_product_zoom_options', 10, 3 );
function custom_single_product_zoom_options( $zoom_options ) {
    // Disable zoom magnify:
    $zoom_options['magnify'] = 0;

    return $zoom_options;
}
add_filter('acf/format_value/type=textarea', 'do_shortcode');

//related posts on project details page added by farooq
function wpb_rand_posts() {

$args = array(
    'post_type' => 'ourprojects',
    'orderby'   => 'rand',
    'posts_per_page' => 3,
    );

$the_query = new WP_Query( $args );
 $category_name= "";
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $categories = get_the_terms( get_the_ID(), 'project_category' );
        foreach( $categories as $category ) {
    if($category->parent == 231){

      $category_name = $category->name;
     }
    //echo $category->parent . ', ';
}
        $string .= '<div class="col-md-4 p-4">';
        //$string .= '<div>'. get_the_post_thumbnail_url($the_query->the_post(),'medium').'</div>';
        $string .= '<a href="'. get_permalink() .'"><img src="'. get_the_post_thumbnail_url(get_the_ID(),'medium') .'" class="img-fluid"></a>';
        $string .= '<h6 style="font-size:14px;color:#F86970;" class="pt-3 pb-3"><b>'. $category_name .'</b></h6>';
        $string .= '<h4><b>'.get_the_title().'</b></h4>';
        $string .= '</div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {

$string .= 'no posts found';
}

return $string;
}

add_shortcode('wpb-random-posts','wpb_rand_posts');

function clt_rand_posts(){

    $tag = get_the_terms( get_the_ID(), 'clt_tag' );
        //print_r($tag);

        $args = array(
          'posts_per_page' => 3,
          'post_type'=>'ourprojects',
          'orderby' => 'rand',
          //'tag' => 'ontario'
          'tax_query' => array(
           array(
            'taxonomy' => 'project_tag',   // taxonomy name
            'field' => 'slug',           // term_id, slug or name
            'terms' => $tag[0]->slug,                  // term id, term slug or term name
          )
        )
            );

        $the_query = new WP_Query( $args );
         $category_name= "";
        if ( $the_query->have_posts() ) {
          $category = get_the_terms( get_the_ID(), 'clt_category' );
//print_r($category);
//$category = get_the_category();
$link = get_category_link( $category[0]->term_id );
          $string .= '<div class="col-md-12"><h2><a href="'.$link.'">Our Projects Around ' . get_field('city_name') .'</a></h2></div>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $string .= '<div class="col-md-4 p-4">';
                //$string .= '<div>'. get_the_post_thumbnail_url($the_query->the_post(),'medium').'</div>';
                $string .= '<a href="'. get_permalink() .'"><img src="'. get_the_post_thumbnail_url(get_the_ID(),'medium') .'" class="img-fluid"></a>';
                //$string .= '<h6 style="font-size:14px;color:#F86970;" class="pt-3 pb-3"><b>'. $category_name .'</b></h6>';
                $string .= '<h4><a href="'. get_permalink() .'"><b>'.get_the_title().'</b></a></h4>';
                $string .= '</div>';
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {

        //$string .= 'no posts found';
        }

        return $string;
}

add_shortcode('clt-rand-posts','clt_rand_posts');

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );


function higobo_remove_default_sorting() {
   remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 30 );
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
   remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
   add_filter( 'woocommerce_product_description_heading', '__return_null' );
   remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 22 );
   //add_filter( 'woocommerce_show_variation_price', '__return_false' );
}
add_action( 'init', 'higobo_remove_default_sorting' );


function product_cat_hide_page_title() {
  if ( is_product_category() ){
    return false;
  }
  return true;
}
add_filter( 'woocommerce_show_page_title', 'product_cat_hide_page_title' );

function product_sub_categories_filter_list(){
  if(is_product_category()){
    $term = get_term_by('slug', 'open', 'product_cat');
    if($term){
      $sub_terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'parent'   => $term->term_id,
        'hide_empty' => false
      ));
    }
    if($sub_terms){ ?>
      <div class="product-sub-category-container mb-4">
        <div class="category d-inline p-2 active" data-id="<?php echo $term->term_id; ?>" role="button">All</div>
      <?php
      foreach($sub_terms as $sk => $s_term){
        ?>
        <div class="category d-inline p-2" data-id="<?php echo $s_term->term_id; ?>" role="button"><?php echo $s_term->name; ?></div>
        <?php
      }
      ?>
      </div>
    <?php
    }
  }
}
add_action('woocommerce_before_shop_loop', 'product_sub_categories_filter_list');

function wps_custom_cart_button_text( $text, $product ) {
  if(is_product_category()){
    return __( 'Add to cart', 'higobo' );
  }
  return $text;
}
add_filter( 'woocommerce_product_add_to_cart_text', 'wps_custom_cart_button_text', 10, 2 );

function get_category_products(){
  if ( defined( 'DOING_AJAX' ) && DOING_AJAX ){
    if(isset($_POST['cat_id']) && !empty($_POST['cat_id'])){
      $category_id = $_POST['cat_id'];
      $args = [
        'post_type' => 'product',
        'posts_per_page' => -1,
        'tax_query' => [
          [
            'taxonomy' => 'product_cat',
            'terms' => $category_id,
            'include_children' => true
          ],
        ],
        'order' => 'DESC',
        'orderby' => 'post_parent__in',
      ];
      $products= get_posts($args);
      if($products){
        ob_start();
        foreach($products as $product){
          $product = wc_get_product($product->ID);
          ?>
          <li <?php wc_product_class( 'category_animate', $product ); ?>>
            <a href="<?php echo get_permalink($product->get_id()); ?>">
              <?php if( $product->is_on_sale() ) { ?>
                <span class="onsale">Sale!</span>
              <?php } ?>
              <img src="<?php echo (wp_get_attachment_url( $product->get_image_id() ))?wp_get_attachment_url( $product->get_image_id() ):wc_placeholder_img_src(); ?>" />
              <h2 class="woocommerce-loop-product__title"><?php echo $product->get_name(); ?></h2>
              <span class="price"><?php echo get_woocommerce_currency_symbol().''.number_format($product->get_price(),2,'.',''); ?></span>
            </a>
            <a href="<?php echo do_shortcode('[add_to_cart_url id="'.$product->get_id().'"]'); ?>" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="" aria-label="Add “<?php echo $product->get_name() ;?>” to your cart" rel="nofollow">Add to cart</a>
          </li>
          <?php
        }
        wp_reset_postdata();
        $output = ob_get_contents();
        ob_end_clean();
        die($output);
      }else{
        die();
      }
    }
  }
}

add_action( 'wp_ajax_nopriv_get_category_products', 'get_category_products' );
add_action( 'wp_ajax_get_category_products', 'get_category_products' );

function hiletters_open_catagory_ordering_args( $args ) {
    if( !is_product_category('open') && !is_product_category('hiletters-shop')) return $args;

    $args['orderby'] = 'post_parent__in';
    $args['order'] = 'DESC';

    return $args;
}

add_filter( 'woocommerce_get_catalog_ordering_args', 'hiletters_open_catagory_ordering_args', 20, 1 );

function custom_product_gallery(){
  global $product;
  if(is_product() AND ('custom' == $product->get_type())):
  ?>
  <div class="product-gallery">
    <div class="heading">
      <h2>Product Gallery</h2>
    </div>
    <div class="row">
      <?php
        $product_thumbnail_id = get_post_meta($product->get_id(), '_thumbnail_id', true);
        if($product_thumbnail_id){
          $thumbnail_image = wp_get_attachment_url($product_thumbnail_id);
          if($thumbnail_image){
            ?>
            <div class="col-lg-4">
              <img src="<?php echo $thumbnail_image; ?>" >
            </div>
            <?php
          }
        }
        $product_gallery_images = get_post_meta($product->get_id(), '_product_image_gallery', true);
        $product_galleryArr = explode(',', $product_gallery_images);
        if(!empty($product_galleryArr)){
          foreach($product_galleryArr as $image_id){
            $image = wp_get_attachment_url($image_id);
            if($image){
              ?>
              <div class="col-lg-4">
                <img src="<?php echo $image; ?>" >
              </div>
              <?php
            }
          }
        }
      ?>
    </div>
  </div>
  <?php
  endif;
}

add_action('woocommerce_after_single_product', 'custom_product_gallery');

function single_product_title(){
  global $product;
  if(('custom' !== $product->get_type() && 'custom-fonts' !== $product->get_type())):
    ?>
    <h1 class="product_title entry-title"><?php echo $product->get_title(); ?></h1>
    <?php
  endif;
}
add_action('woocommerce_single_product_summary', 'single_product_title', 9);

function footer_script() {
  if ( is_checkout() || is_cart() ) {

  }elseif(is_page('5206')){
          ?>
          <script type="text/javascript">
          jQuery(window).load(function(){

              setTimeout(function(){
                WPUPG_Grids['wpupg-grid-projects'].layout();
                WPUPG_Grids['wpupg-grid-projects'].on('initReady', function( data ) {
                WPUPG_Grids['wpupg-grid-projects'].layout();

                });
              },1000)
          })
          </script>
          <?php
      }else{
      ?>
<?php if(!is_page('12825') && !is_page('13051')){ ?>
  <script type='text/javascript'>
  jQuery(document).ready(function ($) {
      $(".wpgs-for").slick({
          adaptiveHeight: true
      });
  })
  </script>
  <?php } ?>
      <?php
  }
}
add_action('wp_footer', 'footer_script', 80, 1);

function related_products_catalog(){
  global $post;
  $pro_term =  get_the_terms( $post->ID, 'product_cat' );
  $related_products = get_posts(array(
      'post_type' => 'product',
      'numberposts' => 4,
      'offset' => 0,
      'orderby'   => 'rand',
      'tax_query' => array(
          array(
              'taxonomy' => 'product_cat',
              'field'    => 'term_id',
              'terms'    => array($pro_term[0]->term_id),
          ),
       ),
      'post__not_in' => array($post->ID),
      'post_status'=>'publish'
  ));
  if( $related_products ) { ?>
    <section class="related products">
      <div class="heading">
      <h2>Related products</h2>
    </div>
        <ul class="products columns-4">
      <?php
    foreach($related_products as $product){
      if($product){
        $product = wc_get_product( $product);
        if($product){
          $terms = get_the_terms ( $product->get_id(), 'product_cat' );
          $link = 'javascript:;';
          if(!empty($terms)){
            if(array_key_exists(0, $terms)){
              $link = get_term_link( $terms[0]->term_id, 'product_cat' );
            }
          }
          ?>
          <li <?php wc_product_class( '', $product ); ?>>
            <a href="<?php echo get_permalink($product->get_id()); ?>">
              <?php if($product->is_on_sale() ) { ?>
                <span class="onsale">Sale!</span>
              <?php } ?>
              <img src="<?php echo (wp_get_attachment_url( $product->get_image_id() ))?wp_get_attachment_url( $product->get_image_id() ):wc_placeholder_img_src(); ?>" />
            </a>
            <a href="<?php echo get_permalink($product->get_id()); ?>"><h2 class="woocommerce-loop-product__title"><?php echo $product->get_name(); ?></h2></a>
            <span class="price"><?php
            if($product->is_type('variable')){
              if( $product->is_on_sale() ) {
                echo '<del class="mr-2"><span class="woocommerce-Price-amount aa amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_regular_price('min'),2,".","").'</span></del>';
                echo '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_sale_price('min'),2,".","").'</span></ins>';
              }else{
                echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_variation_regular_price('min'),2,".","").'</span>';
              }
            }else{
              if( $product->is_on_sale() ) {
                echo '<del class="mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_regular_price(),2,".","").'</span></del>';
                echo '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_sale_price(),2,".","").'</span></ins>';
              }else{
                echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.get_woocommerce_currency_symbol().'</span>'.number_format($product->get_regular_price(),2,".","").'</span>';
              }
            }
            ?></span>
            <a href="<?php echo do_shortcode('[add_to_cart_url id="'.$product->get_id().'"]'); ?>" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="" aria-label="Add “<?php echo $product->get_name() ;?>” to your cart" rel="nofollow">Add to cart</a>
          </li>
          <?php
        }
      }
    }
    wp_reset_postdata();
    ?>
    </ul>
  </section>
    <?php
  }
}

add_action('woocommerce_after_single_product_summary', 'related_products_catalog', 20);

function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[$row[1]] = $row[0];
        }
        fclose($handle);
    }
    return $data;
}
function get_province_or_state(){
global $post;
$canada_provinces_abbr = array('ON','QC','NS','NB','MB','BC','PE','SK','NL','AB');
$canada_provinces = array('ON'=>'Ontario','QC'=>'Quebec','NS'=>'Nova Scotia','NB'=>'New Brunswick','MB'=>'Manitoba','BC'=>'British Columbia','PE'=>'Prince Edward Island','SK'=>'Saskatchewan','NL'=>'Newfoundland and Labrador','AB'=>'Alberta');
$category = get_the_terms( $post->ID, 'clt_category' );
//print_r($category);
//$category = get_the_category();
$link = get_category_link( $category[0]->term_id );
$state_or_province = explode('-',$category[0]->name);
//echo $state_or_province[1];
if(in_array($state_or_province[1],$canada_provinces_abbr)){//it means its canada's province

  return '<h1 class="text-center"><b>We made custom LED Neon Sign for '.get_field('city_name').'!</b></h1>
        <p class="text-center">Below is our custom made neon sign gallery, Are you in '. get_field('city_name').' and want to get beautiful neon signs? Our shop is based in Vancouver BC and we deliver Canada wide in 2-3 weeks.</p>';

// $canada_provinces[$state_or_province[1]];
}else{
 $arr = csv_to_array(get_template_directory()."/us.csv", $delimiter=',');
//var_dump($arr);
return '<h1 class="text-center"><b>We made custom LED Neon Sign for ' . get_field('city_name') . '!</b></h1>
        <p class="text-center">Below is our custom made neon sign gallery, Are you in '. get_field('city_name') . ', '.$arr[$state_or_province[1]].' and want to get beautiful neon signs? Our shop is based in Vancouver, BC and we deliver signs to all U.S. States.</p>';


 /*
  $file = fopen(get_template_directory()."/us.csv","r");
  while(! feof($file))
    {
    //print_r();
    $state_array= fgetcsv($file);
    $key = array_flip($state_array);
    //echo $key[$state_or_province[1]];
    print_r($state_array);
  }
  fclose($file); */
}
//print_r( $categories);
}

function clt_city_name_current_category(){

      //print_r($tag);

      $category = get_the_terms( get_the_ID(), 'clt_category' );
      $args = array(
        'posts_per_page' => -1,
        'post_type'=>'clt',
        //'orderby' => 'rand',
        //'tag' => 'ontario'
        'tax_query' => array(
         array(
          'taxonomy' => 'clt_category',   // taxonomy name
          'field' => 'slug',           // term_id, slug or name
          'terms' => $category[0]->slug,                  // term id, term slug or term name
        )
      )
          );

      $the_query = new WP_Query( $args );
       $category_name= "";
      if ( $the_query->have_posts() ) {
//print_r($category);
//$category = get_the_category();
$link = get_category_link( $category[0]->term_id );
            $string .= '<div class="text-justify mb-md-5 mt-md-5">';
          while ( $the_query->have_posts() ) {
            $the_query->the_post();

             //$tag = get_the_terms( get_the_ID(), 'clt_tag' );

              $string .= '<a href="'.get_the_permalink().'">#'.get_field('city_name').'</a>, ';
              }
              $string .= '</div>';
          /* Restore original Post Data */
          wp_reset_postdata();
      } else {

      //$string .= 'no posts found';
      }

      return $string;
}

add_shortcode('clt-cities','clt_city_name_current_category');
add_shortcode('why-us','why_us_section_shortcode');

function why_us_section_shortcode(){
  ob_start();
?>
<div class="why-us container-fluid p-0 p-md-5 mt-5" style="background: #f2f2f2;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="pt-3 pb-5">Why work with HiNeon?</h1>
      </div>
    </div>
    <div class="row d-none d-md-flex">
      <div class="col-md-4">
        <h5 class="pt-3 pb-5">Modern Neon with LED Technology</h5>
        <div class="why_us_content text-justify">HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It’s designed to provide even illumination, easy installation, low maintenance and even lower power costs.
<a href="#"><b>Learn More</b></a>
</div>
      </div>
      <div class="col-md-4">
        <h5 class="pt-3 pb-5">Proudly Canadian</h5>
        <div class="why_us_content text-justify">Each sign is assembled in Vancouver, BC, machined by our expert sign-makers to guarantee brand accuracy and performance. We ship to both Canada & the USA.
<br /><a href="<?php bloginfo('url')?>/projects"><b>Browse Projects</b></a>
</div>
      </div>

      <div class="col-md-4">
      <h5 class="pt-3 pb-4">Get new products and neon industry news in your inbox. </h5>
        <div class="why_us_content form-group text-center">
          <p class="pt-0 mb-4" style="font-size: 15px;font-weight: normal;">We're not clingy, you can unsubscribe at any time.</p>


        </div>
      </div>

      <div class="col-md-12 mt-3">
        <div class="row">
          <div class="col-md-4">
            <h5 class="pt-3 pb-4">Get new products and neon industry news in your inbox. </h5>
          </div>
          <div class="col-md-8">
            <?php echo do_shortcode('[mc4wp_form id="11727"]');?>
          </div>
        </div>
      </div>

    </div>
    <div class="row d-block d-md-none">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                    <h6 type="button" class="" data-toggle="collapse" data-target="#collapseOne">Modern Neon with LED Technology <i class="fa fa-plus float-right"></i>
</h6>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <div class="why_us_content text-justify">HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It’s designed to provide even illumination, easy installation, low maintenance and even lower power costs.
<a href="#"><b>Learn More</b></a>
</div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                    <h6 type="button" class="" data-toggle="collapse" data-target="#collapseTwo">Proudly Canadian<i class="fa fa-plus float-right"></i></h6>

            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                <div class="why_us_content text-justify">Each sign is assembled in Vancouver, BC, machined by our expert sign-makers to guarantee brand accuracy and performance. We ship to both Canada & the USA.
<br /><a href="<?php bloginfo('url')?>/projects"><b>Browse Projects</b></a>
</div>    </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                    <h6 type="button" class="" data-toggle="collapse" data-target="#collapseThree">Our Clients Loves Us<i class="fa fa-plus float-right"></i></h6>

            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body rich-snippet-reviews-widgets">
                <div class="why_us_content text-justify">
                  <script src="https://widget.reviews.io/rich-snippet-reviews-widgets/dist.js"></script>
                  <div id="carousel-inline-widget-8101" style="width:100%;max-width:810px;margin:0 auto;"></div>
                  <script>
                    var a = richSnippetReviewsWidgets('carousel-inline-widget-8101', {
                      store: 'hineon-com',
                      widgetName: 'carousel-inline',
                      primaryClr: '#f47e27',
                      neutralClr: '#f4f4f4',
                      reviewTextClr:'#5F5E5E',
                      ratingTextClr:'#5F5E5E',
                      layout:'fullWidth',
                      numReviews: 21
                    });
                  </script>
                </div>
              </div>
            </div>
        </div>

    </div>
    </div>
    <div class="row d-block d-md-none">
    <div class="col-md-4">
      <h5 class="pt-3 pb-4">Get new products and neon industry news in your inbox. </h5>
        <div class="why_us_content form-group text-center mb-0 pb-5">
          <p class="pt-0 mb-4" style="font-size: 15px;font-weight: normal;">We're not clingy, you can unsubscribe at any time.</p>

          <?php echo do_shortcode('[mc4wp_form id="11727"]');?>
        </div>
      </div>
      </div>

  </div>
</div>
<?php
$output = ob_get_contents();
ob_end_clean();
return $output;
}

add_action('woocommerce_after_main_content','woo_why_us_section',10);

function woo_why_us_section(){
  echo do_shortcode('[why-us]');
}

add_filter( 'wpseo_url', 'change_url' );
add_filter( 'wpseo_opengraph_url', 'change_url' );

function change_url( $url ) {
  global $post;
  if($post->post_type == 'clt'){
    $post_tags = get_the_terms($post->ID, 'clt_tag');
    $tag = 'tag';
    if(isset($post_tags[0]->name)){
      $tag = str_replace(' ', '-', strtolower($post_tags[0]->name));
    }
    $url = home_url().'/'.$tag.'/'.$post->post_name;
  }
  return $url;
}


add_filter( 'wpseo_schema_webpage', 'ld_json_change_url' );

function ld_json_change_url( $data ) {
  global $post;
  if($post->post_type == 'clt'){
    $post_tags = get_the_terms($post->ID, 'clt_tag');
    $tag = 'tag';
    if(isset($post_tags[0]->name)){
      $tag = str_replace(' ', '-', strtolower($post_tags[0]->name));
    }
    $url = home_url().'/'.$tag.'/'.$post->post_name;
    $data['url'] = $url;
  }
  return $data;
}

add_shortcode('clt-flicker-images', 'clt_flicker_images');

function clt_flicker_images($atts){
  $attr = shortcode_atts( array(
      'city_name' => 'caifornia',
  ), $atts );
  $city_name = str_replace(' ','+',$attr['city_name']);
  ob_start();
  $url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=05e8d8a9a0e9dd9b0adfe5d909614871&text=neon+signs+'.$city_name.'&per_page=4&page=1&format=json&nojsoncallback=1&sort=relevance&extras=tags&media=photos';
  $response  = wp_remote_get($url);

  if(!is_wp_error($response)){
    $responseData = json_decode(wp_remote_retrieve_body($response), true);
    if(!empty($responseData['photos']['photo'])){
      foreach($responseData['photos']['photo'] as $photo){
        ?>
        <div class="col-md-3 p-3 text-center">
          <img src="https://farm<?php echo $photo['farm']  ?>.staticflickr.com/<?php echo $photo['server']  ?>/<?php echo $photo['id']  ?>_<?php echo $photo['secret']  ?>_c.jpg"  width="250" height="250">
          <p><?php echo str_replace(' ', ', ', $photo['tags']);  ?></p>
        </div>
        <?php
      }
    }
  }
  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}

add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );

function wc_billing_field_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Billing details' :
            $translated_text = __( 'Shipping details', 'woocommerce' );
            break;
    }
    return $translated_text;
}

function clt_usa_canada_states($key){
  $arr=array('AL'=>array('state'=>'Alabama','country'=>'USA'),'AK'=>array('state'=>'Alaska','country'=>'USA'),'AS'=>array('state'=>'American Samoa','country'=>'USA'),'AZ'=>array('state'=>'Arizona','country'=>'USA'),'AR'=>array('state'=>'Arkansas','country'=>'USA'),'CA'=>array('state'=>'California','country'=>'USA'),'CO'=>array('state'=>'Colorado','country'=>'USA'),'CT'=>array('state'=>'Connecticut','country'=>'USA'),'DE'=>array('state'=>'Delaware','country'=>'USA'),'DC'=>array('state'=>'District Of Columbia','country'=>'USA'),'FM'=>array('state'=>'Federated States Of Micronesia','country'=>'USA'),'FL'=>array('state'=>'Florida','country'=>'USA'),'GA'=>array('state'=>'Georgia','country'=>'USA'),'GU'=>array('state'=>'Guam','country'=>'USA'),'HI'=>array('state'=>'Hawaii','country'=>'USA'),'ID'=>array('state'=>'Idaho','country'=>'USA'),'IL'=>array('state'=>'Illinois','country'=>'USA'),'IN'=>array('state'=>'Indiana','country'=>'USA'),'IA'=>array('state'=>'Iowa','country'=>'USA'),'KS'=>array('state'=>'Kansas','country'=>'USA'),'KY'=>array('state'=>'Kentucky','country'=>'USA'),'LA'=>array('state'=>'Louisiana','country'=>'USA'),'ME'=>array('state'=>'Maine','country'=>'USA'),'MH'=>array('state'=>'Marshall Islands','country'=>'USA'),'MD'=>array('state'=>'Maryland','country'=>'USA'),'MA'=>array('state'=>'Massachusetts','country'=>'USA'),'MI'=>array('state'=>'Michigan','country'=>'USA'),'MN'=>array('state'=>'Minnesota','country'=>'USA'),'MS'=>array('state'=>'Mississippi','country'=>'USA'),'MO'=>array('state'=>'Missouri','country'=>'USA'),'MT'=>array('state'=>'Montana','country'=>'USA'),'NE'=>array('state'=>'Nebraska','country'=>'USA'),'NV'=>array('state'=>'Nevada','country'=>'USA'),'NH'=>array('state'=>'New Hampshire','country'=>'USA'),'NJ'=>array('state'=>'New Jersey','country'=>'USA'),'NM'=>array('state'=>'New Mexico','country'=>'USA'),'NY'=>array('state'=>'New York','country'=>'USA'),'NC'=>array('state'=>'North Carolina','country'=>'USA'),'ND'=>array('state'=>'North Dakota','country'=>'USA'),'MP'=>array('state'=>'Northern Mariana Islands','country'=>'USA'),'OH'=>array('state'=>'Ohio','country'=>'USA'),'OK'=>array('state'=>'Oklahoma','country'=>'USA'),'OR'=>array('state'=>'Oregon','country'=>'USA'),'PW'=>array('state'=>'Palau','country'=>'USA'),'PA'=>array('state'=>'Pennsylvania','country'=>'USA'),'PR'=>array('state'=>'Puerto Rico','country'=>'USA'),'RI'=>array('state'=>'Rhode Island','country'=>'USA'),'SC'=>array('state'=>'South Carolina','country'=>'USA'),'SD'=>array('state'=>'South Dakota','country'=>'USA'),'TN'=>array('state'=>'Tennessee','country'=>'USA'),'TX'=>array('state'=>'Texas','country'=>'USA'),'UT'=>array('state'=>'Utah','country'=>'USA'),'VT'=>array('state'=>'Vermont','country'=>'USA'),'VI'=>array('state'=>'Virgin Islands','country'=>'USA'),'VA'=>array('state'=>'Virginia','country'=>'USA'),'WA'=>array('state'=>'Washington','country'=>'USA'),'WV'=>array('state'=>'West Virginia','country'=>'USA'),'WI'=>array('state'=>'Wisconsin','country'=>'USA'),'WY'=>array('state'=>'Wyoming','country'=>'USA'),'AB'=>array('state'=>'Alberta','country'=>'Canada'),'BC'=>array('state'=>'British Columbia','country'=>'Canada'),'MB'=>array('state'=>'Manitoba','country'=>'Canada'),'NB'=>array('state'=>'New Brunswick','country'=>'Canada'),'NL'=>array('state'=>'Newfoundland and Labrador','country'=>'Canada'),'NS'=>array('state'=>'Nova Scotia','country'=>'Canada'),'NT'=>array('state'=>'Northwest Territories','country'=>'Canada'),'NU'=>array('state'=>'Nunavut','country'=>'Canada'),'ON'=>array('state'=>'Ontario','country'=>'Canada'),'PE'=>array('state'=>'Prince Edward Island','country'=>'Canada'),'QC'=>array('state'=>'Québec','country'=>'Canada'),'SK'=>array('state'=>'Saskatchewan','country'=>'Canada'),'YT'=>array('state'=>'Yukon','country'=>'Canada'));
  return $arr[$key];
}

function specifications_product_tab( $tabs ) {

	$tabs['specifications_tab'] = array(
		'title'    => __( 'Specifications', 'textdomain' ),
		'callback' => 'specifications_tab_content',
		'priority' => 50,
	);

	return $tabs;

}
add_filter( 'woocommerce_product_tabs', 'specifications_product_tab' );

function specifications_tab_content( $slug, $tab ){
  global $product;
  $aprox_horizontal_size =  get_field('aprox_horizontal_size', $product->get_id(), true);
  $aprox_vertical_size =  get_field('aprox_vertical_size', $product->get_id(), true);
  $power =  get_field('power', $product->get_id(), true);
  $output = array();

  $terms = wp_get_post_terms( $product->get_id(), 'product_tag' );
  if( count($terms) > 0 ){
    foreach($terms as $term){
        $output[] = $term->name;
    }
    $output = implode( ', ', $output );
  }
  ?>
  <table class="product-specification-table">
    <tbody>
      <tr>
        <th>General Dimensions:</th>
        <td><?php echo is_numeric($aprox_vertical_size)?number_format($aprox_vertical_size*0.39370):''; ?>" H * <?php echo is_numeric($aprox_horizontal_size)?number_format($aprox_horizontal_size*0.39370):''; ?>" W / <?php echo $aprox_vertical_size; ?>cm H * <?php echo $aprox_horizontal_size; ?>cm W</td>
      </tr>
      <tr>
        <th>Power Rating:</th>
        <td>12V - <?php echo $power; ?>Watts</td>
      </tr>
      <tr>
        <th>Production Time:</th>
        <td><?php echo ($product->get_attribute( 'pa_production-time' ))?$product->get_attribute( 'pa_production-time' ):'N/A'; ?></td>
      </tr>
      <tr>
        <th>Included In The Package:</th>
        <td><?php echo ($product->get_attribute( 'pa_included-in-the-package' ))?$product->get_attribute( 'pa_included-in-the-package' ):'N/A'; ?></td>
      </tr>
      <tr>
        <th>Applications:</th>
        <td><?php echo ($output)?$output:'N/A'; ?></td>
      </tr>
      <tr>
        <th>SKU:</th>
        <td><?php echo ($product->get_sku())?$product->get_sku():'N/A'; ?></td>
      </tr>
    </tbody>
  </table>
  <?php
}

add_action('woocommerce_after_single_product_summary', 'related_products_instagram_catalog', 30);

function related_products_instagram_catalog(){
  global $post;
  $related_products = wc_get_related_products($post->ID, 4);
  if( $related_products ) { ?>
    <section class="related products">
      <div class="heading">
        <h2>HiNeon, In Real Life</h2>
        <p>Show us your neon sign using #hineon and make sure you tag us @hineonled</p>
      </div>
      <div class="marginTop">
        <script src="https://widget.reviews.co.uk/instagram-photo/dist.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://widget.reviews.co.uk/instagram-photo/dist.css" />
        <div id="instagram-photo-widget"></div>
        <script>
        instagramPhotoWidget('instagram-photo-widget', {
        store: 'hineon-com',
        layout: 'grid',
        sliderToggleControls: true,
        sliderCellSize: '300px',
        commentFontFamily: 'Quicksand, Times New Roman, serif',
        commentFontWeight: 'normal',
        commentFontStyle: 'normal',
        accentFontFamily: 'Quicksand, Helvetica Neue, Helvetica, Arial, sans-serif',
        accentFontWeight: 'bold',
        accentFontStyle: 'normal',
        hoverButtonLabel: 'Shop Now',
        hoverButtonStyle: 'border',
        hoverButtonPadding: '2px',
        hoverButtonBorderSize: '3px',
        hoverBackgroundColor: 'rgba(0,0,0,0.6)',
        hoverTextColor: 'rgba(255,255,255,1)',
        hoverShowIcon: true,
        hoverShowDate: false,
        hoverShowButton: false,
        hoverShowText: true,
        hoverShowUsername: false,
        hoverShowRatingStars: true,
        hoverRatingStarColor: '#F98D3F',
        hoverMargin: '0px',
        modalShowText: true,
        modalShowDate: true,
        modalShowShareIcons: true,
        modalShowRatingStars: true,
        modalButtonStyle: 'button',
        modalButtonLabel: 'Shop now',
        modalButtonBorderColor: '#414141',
        modalButtonColor: '#222222',
        modalButtonTextColor: '#ffffff',
        modalButtonPadding: '7px',
        modalButtonBorderSize: '3px',
        modalButtonEnableHover: false,
        modalButtonTarget: '_blank',
        modalRatingStarColor: '#F98D3F',
        modalOverlayColor: 'rgba(0,0,0,0.7)',
        gridMargin: '2px',
        categories: 'hipatterns'
        });
        </script>
      </div>
    </section>
    <?php
  }
}

add_action( 'wp_ajax_nopriv_get_custom_neon_signs_products', 'get_custom_neon_signs_products' );
add_action( 'wp_ajax_get_custom_neon_signs_products', 'get_custom_neon_signs_products' );

function get_custom_neon_signs_products() {


  if (defined( 'DOING_AJAX' ) && DOING_AJAX ){
    $offset=12*$_POST['offset'];
	if($_POST['page_id']==13051){
		$args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' =>'custom-open,open', 'orderby' => 'menu_order', 'order' => 'asc', 'offset' => $offset);
	}
	else{
		$args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'custom-neon-signs', 'orderby' => 'id', 'order' => 'asc', 'offset' => $offset);
	}

    $loop = new WP_Query( $args );
	$count = $loop->found_posts;
    ob_start();
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="col-md-4 text-center mb-3 product">
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
            <p><?php the_title(); ?></p>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
        </a>
      </div>
    <?php endwhile;
    $output = ob_get_contents();
    ob_end_clean();
    $args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'custom-neon-signs', 'orderby' => 'id', 'order' => 'asc', 'offset' => 12 * ($_POST['offset'] + 1) );
    $loop = new WP_Query( $args );
    $next = false;
	$total_pro=$offset+12;
    if($total_pro < $count){
      $next = true;
    }
    wp_reset_query();
    die(json_encode(array('total_pro'=>$total_pro,'next' => $next,'counter'=>$count,'data' => $output)));
  }
}
add_action( 'wp_ajax_nopriv_get_custom_neon_signs_filter_products', 'get_custom_neon_signs_filter_products' );
add_action( 'wp_ajax_get_custom_neon_signs_filter_products', 'get_custom_neon_signs_filter_products' );

function get_custom_neon_signs_filter_products() {
  if (defined( 'DOING_AJAX' ) && DOING_AJAX ){
    $args = array( 'post_type' => 'product', 'product_cat' => 'custom-neon-signs', 'orderby' => 'id', 'order' => 'asc', 's' => $_POST['search']);
    if($_POST['search']){
      $args['posts_per_page'] = -1;
    }else{
      $args['posts_per_page'] = 12;
      $args['offset'] = 0;
    }
    $loop = new WP_Query( $args );
    ob_start();
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="col-md-4 text-center mb-3 product">
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
            <p><?php the_title(); ?></p>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
        </a>
      </div>
    <?php endwhile;
    $output = ob_get_contents();
    ob_end_clean();

    wp_reset_query();
    die(json_encode(array('data' => $output)));
  }
}
