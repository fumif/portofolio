<?php 
remove_filter( 'the_content', 'wpautop' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-header' );
add_theme_support('custom-logo');
add_theme_support( 'post-formats',
	 array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	)
);
add_editor_style();


//remove title tagline
function remove_title_tagline($title) {

	if(isset($title['tagline'])) {
		unset($title['tagline']);
	}

	return $title;
}

add_filter('document_title_parts', 'remove_title_tagline');

// Change separator
function angledp_change_separator()
{
    return '|';
}
add_filter('document_title_separator', 'angledp_change_separator');

	// ====================================== //
	// 		Add more class in Body Class
	// ====================================== //

add_filter( 'body_class', 'angledp_body_classes');
function angledp_body_classes($classes) {
	$classes[] = 'animsition';
	return $classes;
}


	// =================================== //
	// 		Custom Excerpt Read More Link
	// =================================== //

function angledp_custom_excerpt_more() {
	return '<a href="'. get_permalink().'" class="btn btn-lg btn-accent">read more</a>';
}

add_filter('the_content_more_link', 'angledp_custom_excerpt_more');

	// =================================== //
	// Add more buttons to the html editor
	// =================================== //

function angledp_appthemes_add_quicktags() {
	if (wp_script_is('quicktags')){
		?>
		<script type="text/javascript">
			QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1 );
			QTags.addButton( 'eg_hr', 'hr', '<hr />', '', 'h', 'Horizontal rule line', 201 );
			QTags.addButton( 'eg_pre', 'pre', '<pre lang="php">', '</pre>', 'q', 'Preformatted text tag', 111 );
		</script>
		<?php
	}
}
add_action( 'admin_print_footer_scripts', 'angledp_appthemes_add_quicktags' );



	// ================================ //
	// 				ACF Category			//
	// ================================ //
function angledp_taxonomy_query( $args, $field, $post_id ) {
    // modify args
	$args['parent'] = 0;
    // return
	return $args;
}

add_filter('acf/fields/taxonomy/query', 'angledp_taxonomy_query', 10, 3);
	// ================================ //
	// 				SVG Logo			//
	// ================================ //

function angledp_generage_svg ($svg_mime) {
	$svg_mime['svg'] = 'image/svg+xml';
	$svg_mime['svgz'] = 'imageｓ/svg+xml';
	return $svg_mime;
}
add_filter('upload_mimes', 'angledp_generage_svg', 10, 1);

register_default_headers( 
	array(
		'main-logo' => array(
			'url'           => '%2$s/asset/images/icon-logo.svg',
			'thumbnail_url' => '%2$s/asset/images/icon-logo.svg',
			'description'   => __( 'Main Logo', 'angled-portfolio-theme' )
		)
	)
);
add_theme_support( 'custom-header', array(
	'flex-width'    => true,
	'width'           => 260,
	'flex-height'    => true,
	'height'          => 100,
	'header-selector' => '.site-title a',
	'header-text'     => false
) );


	// ================================ //
	// 			Register widget 		
	// ================================ //

// function angledp_register_widgets() {
// 	register_sidebar( array(
// 		'name'          => __( 'Footer Sidebar', 'angled-portfolio-theme' ),
// 		'id'            => 'footer_sidebar',
// 		'before_widget' => '<ul class="list-inline inline-flex">',
// 		'after_widget' => '</ul>',
// 		'before_title'  => '<p>',
// 		'after_title'   => '</p>',
// 	));


// }

// add_action( 'widgets_init', 'angledp_register_widgets');



	// ================================ //
	// 			Register Nav Menu 			
	// ================================ //


function angledp_register_menus (){

	register_nav_menus( 
		array(
			'primary-menu'   =>  __('Primary Menu', 'angled-portfolio-theme'),
			'secondary-menu' =>  __('Secondary Menu', 'angled-portfolio-theme'),
			'social-menu'    =>  __('Social Menu', 'angled-portfolio-theme'),
		)
	);
}

add_action( 'init', 'angledp_register_menus');

	// ================================ //
	// Importing css files and js files //
	// ================================ //

function angledp_styles (){
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style( 'animsition_css', get_template_directory_uri().'/asset/css/animsition.min.css');
	wp_enqueue_style( 'aos_css', get_template_directory_uri().'/asset/css/aos.css');
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Raleway:300,400,700,800');
	wp_enqueue_style( 'main_css', get_template_directory_uri().'/style.css');
}

add_action( 'wp_enqueue_scripts', 'angledp_styles' );


	/**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function angledp_scripts () {
		wp_enqueue_script( 'jquery-ui-core', get_template_directory_uri(). '/asset/js/jquery-ui.min.js', array('jquery'), false, true );
		wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), false, true );
		wp_enqueue_script( 'fontawesome_js', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('jquery'), false, true );
		wp_enqueue_script( 'animsition_js', get_template_directory_uri(). '/asset/js/animsition.min.js', array('jquery'), false, true );
		wp_enqueue_script( 'aos_js', get_template_directory_uri(). '/asset/js/aos.js', array('jquery'), false, true );
		wp_enqueue_script( 'main_js', get_template_directory_uri(). '/asset/js/script.js', array('jquery'), false, true );
		wp_enqueue_script('easing_js',get_template_directory_uri().'/asset/js/easing.js', array('jquery'), false, true );
		
	}
	add_action( 'wp_enqueue_scripts', 'angledp_scripts' );


	function add_jquery_ui() {
		wp_enqueue_script( 'jquery-ui-core' );
		// wp_enqueue_script( 'jquery-ui-widget' );
		// wp_enqueue_script( 'jquery-ui-mouse' );
		// wp_enqueue_script( 'jquery-ui-accordion' );
		// wp_enqueue_script( 'jquery-ui-autocomplete' );
		// wp_enqueue_script( 'jquery-ui-slider' );
		// wp_enqueue_script( 'jquery-ui-tabs' );
		// wp_enqueue_script( 'jquery-ui-sortable' );
		// wp_enqueue_script( 'jquery-ui-draggable' );
		// wp_enqueue_script( 'jquery-ui-droppable' );
		// wp_enqueue_script( 'jquery-ui-datepicker' );
		// wp_enqueue_script( 'jquery-ui-resize' );
		// wp_enqueue_script( 'jquery-ui-dialog' );
		// wp_enqueue_script( 'jquery-ui-button' );
	}
	add_action( 'wp_enqueue_scripts', 'add_jquery_ui' );


