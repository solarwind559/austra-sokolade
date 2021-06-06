<?php
/**
 * Sokolade functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sokolade
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sokolade_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sokolade_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sokolade, use a find and replace
		 * to change 'sokolade' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sokolade', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sokolade' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sokolade_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		
	}
endif;
add_action( 'after_setup_theme', 'sokolade_setup' );

add_image_size('sokolade-logo', 159, 96);

add_theme_support('custom-logo', array(
  'size' => 'sokolade-logo',
));

function sokolade_custom_logo(){
  if (function_exists('the_custom_logo')){
    the_custom_logo();
  }
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sokolade_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sokolade_content_width', 640 );
}
add_action( 'after_setup_theme', 'sokolade_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sokolade_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sokolade' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sokolade' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-1', 'sokolade' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'sokolade' ),
			'before_widget' => '<div id="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="mobile-m">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-2', 'sokolade' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'sokolade' ),
			'before_widget' => '<div id="footer-widget-social">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="mobile-s">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Privacy Policy', 'sokolade' ),
			'id'            => 'privacy-policy',
			'description'   => esc_html__( 'Add widgets here.', 'sokolade' ),
			'before_widget' => '<div id="footer-privacy-policy">',
			'after_widget'  => '</div>',
			// 'before_title'  => '<h2 class="mobile-s">',
			// 'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Navigation', 'sokolade' ),
			'id'            => 'nav-bar',
			'description'   => esc_html__( 'Add widgets here.', 'sokolade' ),
			'before_widget' => '<div id="nav-bar-widget">',
			'after_widget'  => '</div>',
			// 'before_title'  => '<h2 class="mobile-s">',
			// 'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sokolade_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sokolade_scripts() {
	wp_enqueue_style( 'sokolade-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'index-css', get_stylesheet_directory_uri() . '/resources/css/stylesheet.css' );


	wp_style_add_data( 'sokolade-style', 'rtl', 'replace' );


	wp_enqueue_script( 'sokolade-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'main-js', get_template_directory_uri() . '/resources/js/mainjs.js', 5);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sokolade_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





if (function_exists('acf_register_block_type')){
  add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

  acf_register_block_type(
    array(
      'name' => 'product_preview',
      'title' => __('Product Preview'),
      'description' => 'product preview',
      'render_template' => 'template-parts/blocks/chocolate-preview.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'about_text_area',
      'title' => __('"About" text area'),
      'description' => 'text area',
      'render_template' => 'template-parts/blocks/about-text-area.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'about_visual',
      'title' => __('"About" visual area'),
      'description' => 'visual area',
      'render_template' => 'template-parts/blocks/about-visual.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'product_display',
      'title' => __('Product Display'),
      'description' => 'product display',
      'render_template' => 'template-parts/blocks/product-display.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'maker',
      'title' => __('Maker'),
      'description' => 'maker',
      'render_template' => 'template-parts/blocks/maker.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'buy_info',
      'title' => __('Buying info'),
      'description' => 'maker',
      'render_template' => 'template-parts/blocks/buy-info.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'blog_area',
      'title' => __('Blog Area'),
      'description' => 'blog area',
      'render_template' => 'template-parts/blocks/blog-area.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

	acf_register_block_type(
    array(
      'name' => 'title',
      'title' => __('Page title with background image'),
      'description' => 'title',
      'render_template' => 'template-parts/blocks/title.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro')
    )
  );

}











function add_this_script_footer(){ ?>

<script>
const x = document.getElementById("switch-to");
const lines = document.getElementById("switch-from");
const topnav = document.getElementById("navigation");
const logo = document.getElementById("logo");


function myFunction() {
  var toggleBtn = document.querySelector(".open");
  if (toggleBtn.style.display === "block") {
    toggleBtn.style.display = "none";
    lines.style.display = "block";
    x.style.display = "none";
    topnav.style.backgroundColor = "transparent";
    logo.style.display = "block";

  } else {
    toggleBtn.style.display = "block";
    lines.style.display = "none";
    x.style.display = "block";
    topnav.style.backgroundColor = "white";
    logo.style.display = "none";
  }
}

const title = document.querySelector('h1');
// title.classList.remove('pulse');
// const about = document.querySelector('.animate');
// about.classList.remove('pulse');
const white = document.querySelector('.white-h2');
white.classList.remove('pulse');
const white2 = document.querySelector('.h2-2');
white2.classList.remove('pulse');
const white3 = document.querySelector('.h2-3');
white2.classList.remove('pulse');
const blog = document.querySelector('.h2-blog');
blog.classList.remove('pulse');


const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      title.classList.add('pulse');
      // about.classList.add('pulse');
      white.classList.add('pulse');
      white2.classList.add('pulse');
      white3.classList.add('pulse');
      blog.classList.add('pulse');
      return;
    }

    // title.classList.remove('pulse');
    // about.classList.remove('pulse');
    white.classList.remove('pulse');
    white2.classList.remove('pulse');
    white3.classList.remove('pulse');
    blog.classList.remove('pulse');
  });
});

observer.observe(document.querySelector('h1'));
// observer.observe(document.querySelector('.animate'));
observer.observe(document.querySelector('.white-h2'));
observer.observe(document.querySelector('.h2-2'));
observer.observe(document.querySelector('.h2-3'));
observer.observe(document.querySelector('.h2-blog'));
</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>