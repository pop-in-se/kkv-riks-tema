<?php


function load_styles() {
    wp_register_style( 'kkv-riks-main',  get_template_directory_uri() .'/css/mainstyle.css', array(), null, 'all' );
    wp_register_style( 'kkv-riks-mobile',  get_template_directory_uri() .'/css/mobile.css', array(), null, 'all' );
    wp_register_style( 'kkv-riks-tablet', get_template_directory_uri(), '/css/tablet.css', array(), null, 'all' );
    wp_register_style( 'kkv-riks-forum', get_template_directory_uri(), '/css/forum.css', array(), null, 'all' );
    wp_enqueue_style( 'kkv-riks-main' );
    wp_enqueue_style( 'kkv-riks-mobile' );
    wp_enqueue_style( 'kkv-riks-tablet' );
    wp_enqueue_style( 'kkv-riks-forum' );

    wp_register_script('gallery-script', get_template_directory_uri() . '/js/magicgrid.js');
    wp_enqueue_script('gallery-script');
    wp_enqueue_script( 'my-scripts', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), 'NULL', true );
    wp_localize_script('my-scripts', 'wpAjax', 
        array('ajaxUrl' => admin_url('admin-ajax.php'))

);
    wp_enqueue_style( 'style' );
}

//Registrerar menyplaceringar 
function register_my_menu(){
    register_nav_menu( 'huvudmeny', 'Meny toppen av sidan');
    register_nav_menu( 'startsida_lankar', 'Länkar på startsidan');
    register_nav_menu( 'sidfotsmeny', 'Länkar i sidfoten');
}

//Lägger till extra fält i forum
add_action ( 'bbp_new_topic', 'bbp_save_extra_fields', 10, 1 );
add_action ( 'bbp_edit_topic', 'bbp_save_extra_fields', 10, 1 );


add_action ( 'bbp_theme_before_topic_form_content', 'bbp_extra_fields');
function bbp_extra_fields() {
   $value = get_post_meta( bbp_get_topic_id(), 'bbp_extra_field1', true);
   echo '<label for="bbp_extra_field1">Pris</label><br>';
   echo "<input type='text' name='bbp_extra_field1' value='".$value."'>";
}

function bbp_save_extra_fields($topic_id=0) {
    if (isset($_POST) && $_POST['bbp_extra_field1']!='')
      update_post_meta( $topic_id, 'bbp_extra_field1', $_POST['bbp_extra_field1'] );
  }
  
add_action('bbp_theme_before_reply_content', 'bbp_show_extra_fields');
function bbp_show_extra_fields() {
$itemTitle = bbp_get_topic_title();
  $topic_id = bbp_get_topic_id();
  $price = get_post_meta( $topic_id, 'bbp_extra_field1', true);
  echo "<p>".$itemTitle."</p>";
  if ( $price )
  echo "<p>"."Pris: ".$price."<br>"."</p>";
  else echo "";
}

    
function post_type_verkstad() {

        $labels = array(
            'name'                => _x( 'Verkstad', 'Post Type General Name' ),
            'singular_name'       => _x( 'Verkstad', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Verkstäder'),
            'parent_item_colon'   => __( 'Parent'),
            'all_items'           => __( 'Alla verkstäder' ),
            'view_item'           => __( 'Se verkstäder'),
            'add_new_item'        => __( 'Lägg till verkstad' ),
            'add_new'             => __( 'Lägg till' ),
            'edit_item'           => __( 'Redigera verkstad' ),
            'update_item'         => __( 'Uppdatera verkstad' ),
            'search_items'        => __( 'Sök verkstad'),
            'not_found'           => __( 'Hittades inte' ),
            'not_found_in_trash'  => __( 'Hittades inte i papperskorgen'),
        );

        $args = array(
            'label'               => __( 'verkstad'),
            'description'         => __( 'KKV Verksäder'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'taxonomies'          => array('post_tag', 'category'), 
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-admin-customizer',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
     
        );
        register_post_type( 'verkstad', $args );
}


function acfBlocks() {

    if( function_exists('acf_register_block_type') ) {
        
        acf_register_block_type(array(
            'name'              => 'destinationgallery',
            'title'             => __('Destination gallery'),
            'description'       => __('A custom ACF block.'),
            'render_template'   => '/blocks/destination-gallery.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        
        acf_register_block_type(array(
            'name'              => 'destination-accordion',
            'title'             => __('Destination accordion'),
            'description'       => __('A custom accordion block.'),
            'render_template'   => '/blocks/destination-accordion.php',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'accordion', 'info' ),
        ));

        acf_register_block_type(array(
            'name'              => 'social-media',
            'title'             => __('Social media'),
            'description'       => __('A custom accordion block.'),
            'render_template'   => '/blocks/social-media-block.php',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'social media', 'contact' ),
        ));

    }
}


function destinationTags() {
    ob_start();
    get_template_part('/templates/destination-tags');
    $output = ob_get_clean();
    return $output;
}

// Tags loop

function wpse28145_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        $post_types = array( 'post', 'verkstad' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );


/**
 * Font Awesome CDN Setup Webfont
 *
 * This will load Font Awesome from the Font Awesome Free or Pro CDN.
 */
if (! function_exists('fa_custom_setup_cdn_webfont') ) {
    function fa_custom_setup_cdn_webfont($cdn_url = '', $integrity = null) {
        $matches = [];
        $match_result = preg_match('|/([^/]+?)\.css$|', $cdn_url, $matches);
        $resource_handle_uniqueness = ($match_result === 1) ? $matches[1] : md5($cdn_url);
        $resource_handle = "font-awesome-cdn-webfont-$resource_handle_uniqueness";

        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
            add_action(
                $action,
                function () use ( $cdn_url, $resource_handle ) {
                    wp_enqueue_style( $resource_handle, $cdn_url, [], null );
                }
            );
        }

        if($integrity) {
            add_filter(
                'style_loader_tag',
                function( $html, $handle ) use ( $resource_handle, $integrity ) {
                    if ( in_array( $handle, [ $resource_handle ], true ) ) {
                        return preg_replace(
                            '/\/>$/',
                            'integrity="' . $integrity .
                            '" crossorigin="anonymous" />',
                            $html,
                            1
                        );
                    } else {
                        return $html;
                    }
                },
                10,
                2
            );
        }
    }
}

fa_custom_setup_cdn_webfont(
    'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
    'sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm'
);



add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support( 'custom-logo' );
add_action('after_setup_theme', 'register_my_menu');
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_action( 'init', 'post_type_verkstad', 0 );
add_action( 'init', 'post_type_Golf_course', 0 );
add_action('acf/init', 'acfBlocks');
add_shortcode('tags', 'destinationTags');



?>
