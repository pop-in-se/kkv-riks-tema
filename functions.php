<?php


function load_styles() {
    wp_register_style( 'kkv-riks-main',  get_template_directory_uri() .'/css/mainstyle.css', array(), null, 'all' );
    wp_register_style( 'kkv-riks-mobile',  get_template_directory_uri() .'/css/mobile.css', array(), null, 'all' );
    wp_register_style( 'kkv-riks-tablet', get_template_directory_uri(), '/css/tablet.css', array(), null, 'all' );
    wp_enqueue_style( 'kkv-riks-main' );
    wp_enqueue_style( 'kkv-riks-mobile' );
    wp_enqueue_style( 'kkv-riks-tablet' );

    wp_enqueue_style( 'style' );
}

//Registrerar menyplaceringar 
function register_my_menu(){
    register_nav_menu( 'huvudmeny', 'Meny toppen av sidan');
    register_nav_menu( 'startsida_lankar', 'Länkar på startsidan');
    register_nav_menu( 'sidfotsmeny', 'Länkar i sidfoten');
    register_nav_menu( 'medlemsmeny', 'Länkar på medlemssidan');
}


//Widgets

add_action( 'widgets_init', 'footer_sidebar' );
function footer_sidebar() {
  $args = array(
    'name'          => 'Sidfot adress',
    'id'            => 'footer-sidebar',
    'description'   => 'Adress i sidfoten',
    'class'         => '',
    'before_widget'  => '<div id="%1$s" class="colorWhite %2$s">',
    'after_widget'  => '</div>', 
    'before_title'  => '<h5 class="colorWhite">',
    'after_title'   => '</h5>' 
  );

  register_sidebar( $args );

}


//Göm adminmeny 
add_filter('show_admin_bar', 'is_blog_admin');

//Undermeny 
class Sub_Menu_Walker extends Walker {

	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Add active class */
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
			unset($classes['current-menu-item']);
		}
		
		/* Check for children */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</span></a>';
		$item_output .= $args->after;
		
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>\n";
	}
}


//Kryptera mailadresser
add_filter( 'acf/load_value', 'eae_encode_emails' );

//Forum inläggstitel längd

add_filter ('bbp_get_title_max_length','kkv_change_title') ;

Function kkv_change_title ($default) {
$default=60 ;
return $default ;
}

//Lägger till extra fält i forum
add_action ( 'bbp_new_topic', 'bbp_save_extra_fields', 10, 1 );
add_action ( 'bbp_edit_topic', 'bbp_save_extra_fields', 10, 1 );


add_action ( 'bbp_theme_before_topic_form_content', 'bbp_extra_fields');
function bbp_extra_fields() {
   $value = get_post_meta( bbp_get_topic_id(), 'bbp_extra_field1', true);
   echo '<label>'."Extra fält för köp / Sälj".'</label>'.'<br>';
   echo '<label for="bbp_extra_field1">Produkt:</label><br>';
   echo "<input type='text' name='bbp_extra_field1' value='".$value."'>";

   $value = get_post_meta( bbp_get_topic_id(), 'bbp_extra_field2', true);
   echo '<br><label for="bbp_extra_field1">Pris:</label><br>';
   echo "<input type='text' name='bbp_extra_field2' value='".$value."'>";
}

function bbp_save_extra_fields($topic_id=0) {
    if (isset($_POST) && $_POST['bbp_extra_field1']!='')
    update_post_meta( $topic_id, 'bbp_extra_field1', $_POST['bbp_extra_field1'] );
    if (isset($_POST) && $_POST['bbp_extra_field2']!='')
    update_post_meta( $topic_id, 'bbp_extra_field2', $_POST['bbp_extra_field2'] );
}
  
add_action('bbp_theme_before_reply_content', 'bbp_show_extra_fields');
function bbp_show_extra_fields() {
$itemTitle = bbp_get_topic_title();
  $topic_id = bbp_get_topic_id();
  $produkt = get_post_meta( $topic_id, 'bbp_extra_field1', true);
  $price = get_post_meta( $topic_id, 'bbp_extra_field2', true);
  if ( $produkt )
  echo "<div class='extraField'>"."Produkt: ".$produkt."<br>"."</div>";
  else echo "";
  if ( $price )
  echo "<div class='extraField'>"."Pris: ".$price."<br>"."</div>";
  else echo "";
}


function post_type_kurs() {

    $labels = array(
        'name'                => _x( 'Kurs', 'Post Type General Name' ),
        'singular_name'       => _x( 'Kurs', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Kurser'),
        'parent_item_colon'   => __( 'Parent'),
        'all_items'           => __( 'Alla kurser' ),
        'view_item'           => __( 'Se kurser'),
        'add_new_item'        => __( 'Lägg till kurs' ),
        'add_new'             => __( 'Lägg till' ),
        'edit_item'           => __( 'Redigera kurs' ),
        'update_item'         => __( 'Uppdatera kurs' ),
        'search_items'        => __( 'Sök kurs'),
        'not_found'           => __( 'Hittades inte' ),
        'not_found_in_trash'  => __( 'Hittades inte i papperskorgen'),
    );

    $args = array(
        'label'               => __( 'kurser'),
        'description'         => __( 'KKV kurser'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'revisions', 'custom-fields', 'page-attributes'),
        'taxonomies'          => array('post_tag'), 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        "query_var"           => true,
        'show_in_rest'        => true,
    );
    register_post_type( 'kurs', $args );
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
            'rewrite'       => array( 'slug' => '%verkstad%', 'with_front' => true),

        );

        $args = array(
            'label'               => __( 'verkstad'),
            'description'         => __( 'KKV Verksäder'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'revisions', 'custom-fields', 'page-attributes'),
            'taxonomies'          => array('post_tag'), 
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-marker',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
			"query_var"           => true,
            'show_in_rest'        => true,
        );
        register_post_type( 'verkstad', $args );
}
    

function ort_kategori() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'ort', 'taxonomy general name', 'textdomain' ),
        'menu_name'         => __( 'Orter', 'textdomain' ),
        'singular_name'     => _x( 'Ort', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Sök ort', 'textdomain' ),
        'all_items'         => __( 'Alla orter', 'textdomain' ),
        'edit_item'         => __( 'Redigera ort', 'textdomain' ),
        'update_item'       => __( 'Uppdatera ort', 'textdomain' ),
        'add_new_item'      => __( 'Lägg till ort', 'textdomain' ),
        'new_item_name'     => __( 'Nytt ortnamn', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        "public"             => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'verkstad' ),
        'show_in_quick_edit' => true,
        "show_in_rest"       => true,
        "rest_base"          => "",
    );
 
    register_taxonomy( 'ort', array( 'verkstad' ), $args );

    unset( $args );
    unset( $labels );
}

add_filter('post_type_link', 'cj_update_permalink_structure', 10, 2);
function cj_update_permalink_structure( $post_link, $post )
{
    if ( false !== strpos( $post_link, '%ort%' ) ) {
        $taxonomy_terms = get_the_terms( $post->ID, 'ort' ); 
        foreach ( $taxonomy_terms as $term ) { 
            if ( ! $term->parent ) {
                $post_link = str_replace( '%ort%', $term->slug, $post_link );
            }
        } 
    }
    return $post_link;
}

// Tags loop

function tagloop_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        $post_types = array( 'post', 'verkstad' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'tagloop_add_custom_types' );


// Custom fields search
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


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
add_action( 'init', 'post_type_kurs', 0 );
add_action( 'init', 'post_type_verkstad', 0 );
add_action( 'init', 'ort_kategori', 0 );

?>
