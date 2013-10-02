<?php
/**
 * Flying functions and definitions
 *
 * @package flying-goat
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'flying_goat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function flying_goat_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Flying, use a find and replace
	 * to change 'flying_goat' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'flying_goat', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'med', 230, 115, true );
	add_image_size( 'square', 112, 115, true );
	add_image_size( 'large', 230, 175, true );
	add_image_size( 'modal', 530, 999 );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'flying_goat' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // flying_goat_setup
add_action( 'after_setup_theme', 'flying_goat_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function flying_goat_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'flying_goat_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'flying_goat_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function flying_goat_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'flying_goat' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'flying_goat_widgets_init' );

function flying_goat_widgets_init1() {
	register_sidebar( array(
		'name'          => __( 'Commerce Sidebar', 'flying_goat' ),
		'id'            => 'sidebar-commerce',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'flying_goat_widgets_init1' );

/**
 * Enqueue scripts and styles
 */
function flying_goat_scripts() {
	wp_enqueue_style( 'flying-bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'flying-bootstrap-responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css' );
	wp_enqueue_script( 'Flying-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'flying-bootrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_script( 'Flying-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'Flying-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'flying_goat_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
 
/**
 * Add Woo Commerce Support
 */
add_theme_support( 'woocommerce' );

/**
 * Add Cheezcap Options
 */
require get_template_directory() . '/inc/cheezcap/cheezcap.php';
require get_template_directory() . '/inc/cheezcap-config.php';

/**
 * Returns the URL to an image resized and cropped to the given dimensions.
 *
 * You can use this image URL directly -- it's cached and such by our servers.
 * Please use this function to generate the URL rather than doing it yourself as
 * this function uses staticize_subdomain() makes it serve off our CDN network.
 *
 * Somewhat contrary to the function's name, it can be used for ANY image URL, hosted by us or not.
 * So even though it says "remote", you can use it for attachments hosted by us, etc.
 *
 * @link http://vip.wordpress.com/documentation/image-resizing-and-cropping/ Image Resizing And Cropping
 * @param string $url The raw URL to the image (URLs that redirect are currently not supported with the exception of http://foobar.wordpress.com/files/ type URLs)
 * @param int $width The desired width of the final image
 * @param int $height The desired height of the final image
 * @param bool $escape Optional. If true (the default), the URL will be run through esc_url(). Set this to false if you need the raw URL.
 * @return string
 */
function goat_resized_remote_image_url( $url, $width, $height, $escape = true ) {
	$width = (int) $width;
	$height = (int) $height;

	// Photon doesn't support redirects, so help it out by doing http://foobar.wordpress.com/files/ to http://foobar.files.wordpress.com/
	if ( function_exists( 'new_file_urls' ) )
		$url = new_file_urls( $url );

	$thumburl = jetpack_photon_url( $url, array( 'resize' => array( $width, $height ) ) );

	return ( $escape ) ? esc_url( $thumburl ) : $thumburl;
}

/**
 * Generate a modal from a URL, or just return an image tag
 */
function goat_generate_image_modal( $str, $size ) {

	$output = '';

	if ( intval( $str ) ) {
		$url = wp_get_attachment_image_src( $str, $size );
		$meta = get_post_meta( $str, 'link_url', true );
		$rand = mt_rand();
		if ( $meta ) {
			$output .= '<a href="' . esc_url(  $meta ) . '" role="button">';
		} else {
			$output .= '<a href="#modal-' . $rand . '" role="button" data-toggle="modal">';
		}
		$output .= '<img src="' . esc_url( $url[0] ) . '" class="darken" alt="' . get_the_title( $str ) . '">';
		$output .= "</a>";
		if ( !$meta ) :
			$output .= '<div id="modal-' . $rand . '" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
			$output .= '<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			$output .= '<h3>' . get_the_title( $str ) . '</h3></div>';
			$output .=	'<div class="modal-body">';
			$output .= wp_get_attachment_image( $str, 'modal' );
			$output .= apply_filters( 'the_content', get_post( $str )->post_content );
			$output .= '</div></div>';
		endif;

	} else {
		$output = '<img src="' . esc_url( $str ) . '" class="" alt="Flying Goat Coffee">';
	}
	return $output;
}

add_shortcode( 'cats', 'goat_category_list' );
/**
 * Generate a list of a titles of product categories.
 * 
 * @param int $cat Category ID of the product category that you want titles for.
 */
function goat_category_list( $atts ) {

	$term = get_term_by( 'slug', $atts['cat'], 'product_cat' );

	$output = '<h3>' . $term->name . '</h3>';

	$output .= '<ul class="unstyled products_list">';
		$args = array(
			'post_type'			=> 'product',
			'posts_per_page'	=> 100,
			'product_cat'		=> $atts['cat']
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				$output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a><li>';
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	$output .= '</ul><!--/.products-->';
	return $output;
}