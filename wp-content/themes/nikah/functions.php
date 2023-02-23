<?php

if (!function_exists('nikah_header_part')) {
	function nikah_header_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

if (!function_exists('nikah_footer_part')) {
	function nikah_footer_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1200; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'nikah_setup' ) ) :

	function nikah_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'gallery', 'video') );
		add_theme_support( 'custom-background' );
		$nikah_def_bg = array(
		  'default-color'          => '#fafafa',
		);
		add_theme_support( 'custom-background', $nikah_def_bg );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );   
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'nikah', get_template_directory() .'/languages' );
		add_theme_support( "title-tag" );
}
endif;
add_action( 'after_setup_theme', 'nikah_setup' );

function nikah_thumbnail_setup() {
	add_image_size( 'nikah-portfolio-widget-thumb', 100, 100, true );
	add_image_size( 'nikah-related', 370, 250, true );
	add_image_size( 'nikah-post', 350, 150, true );
	add_image_size( 'nikah-portfolio-widget', 250, 250, true );
	add_image_size( 'nikah-portfolio', 800, 600, true );
	add_image_size( 'nikah-post-block', 535, 355, true );
	add_image_size( 'nikah-team', 500, 500, true );
	add_image_size( 'nikah-client', 100, 76, true );
	add_image_size( 'nikah-testi', 60, 60, true );
}

add_action('after_setup_theme', 'nikah_thumbnail_setup');

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter('acf/settings/show_admin', '__return_false');

/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function nikah_scripts() {

//All necessary CSS
$options = get_option('nikah_framework');

wp_enqueue_style( 'nikah-plugin-css', get_template_directory_uri() .'/css/plugin.css', array(), null );
wp_enqueue_style( 'nikah-style', get_stylesheet_uri(), array( 'nikah-plugin-css' ) );
wp_enqueue_style( 'nikah-font', get_template_directory_uri() .'/css/font.css', array(), null );

wp_enqueue_style( 'nikah-responsive-css', get_template_directory_uri() .'/css/responsive.css', array(), null );

//All Necessary Script
wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/js/modernizr.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'respond', get_template_directory_uri(). '/js/respond.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'fitvids', get_template_directory_uri(). '/js/fitvids.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'classie', get_template_directory_uri(). '/js/classie.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'wow', get_template_directory_uri(). '/js/wow.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'easing', get_template_directory_uri(). '/js/easing.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'smartmenus', get_template_directory_uri(). '/js/smartmenus.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'owlcarousel', get_template_directory_uri(). '/js/owlcarousel.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'infinitescroll', get_template_directory_uri(). '/js/infinitescroll.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'isotope', get_template_directory_uri(). '/js/isotope.js', array( 'jquery', 'imagesloaded' ), '', $in_footer = true );
wp_enqueue_script( 'headroom', get_template_directory_uri(). '/js/headroom.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'animeonscroll', get_template_directory_uri(). '/js/animeonscroll.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'lightgallery', get_template_directory_uri(). '/js/lightgallery.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'stickykit', get_template_directory_uri(). '/js/stickykit.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'thumbsplugin', get_template_directory_uri(). '/js/thumbsplugin.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'nikah-main-js', get_template_directory_uri(). '/js/main.js', array( 'jquery' ), '', true );

if ( class_exists( 'Redux' ) ) {

	$options = get_option('nikah_framework');
	if(!empty($options['search_bar_style'])) {
		$search_bar_style    = $options['search_bar_style'];
	} else {
		$search_bar_style    = "";
	}
	if(!empty($options['footer_style_type'])) {
		$nikah_footer_style_type = $options['footer_style_type'];
	} else {
		$nikah_footer_style_type = "";
	}

	if(!empty($options['header_customize_right']['enabled'])) {
		$nikah_right    = $options['header_customize_right']['enabled'];
	} else {
		$nikah_right    = "";
	}
	if(!empty($options['header_customize_center']['enabled'])) {
		$nikah_center    = $options['header_customize_center']['enabled'];
	} else {
		$nikah_center    = "";
	}
	if(!empty($options['header_customize_left']['enabled'])) {
		$nikah_left     = $options['header_customize_left']['enabled'];
	} else {
		$nikah_left     = "";
	}

	if($search_bar_style == 'expand') {
	  if($nikah_right || $nikah_center || $nikah_left ) {
		if( isset($nikah_right['nikah-search']) || isset($nikah_center['nikah-search']) || isset($nikah_left['nikah-search']) ) {
		  wp_enqueue_script( 'nikah-header1', get_template_directory_uri(). '/js/header1.js', array( 'jquery' ), '', true );
		}
	  }
	}

	/*footer*/
	if( $nikah_footer_style_type == 'fixed-footer' ) {
		wp_enqueue_script( 'nikah-footer-fixed', get_template_directory_uri(). '/js/footer-fixed.js', array( 'jquery' ), '', true );
	}
}
else {
	wp_enqueue_script( 'nikah-header1', get_template_directory_uri(). '/js/header1.js', array( 'jquery' ), '', true );
}



if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
 }
}

add_action( 'wp_enqueue_scripts', 'nikah_scripts' );

/* customizer scripts */
function nikah_customizer_live_preview() {
	wp_enqueue_script( 'nikah-color-customizer', get_template_directory_uri().'/js/color-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'nikah_customizer_live_preview' );

/* admin style on admin dashboard */
function nikah_admin_style() {
	wp_enqueue_style('nikah-admin-styles', get_template_directory_uri() .'/css/admin.css');
	if('nikah-portfolio' == get_post_type() ) {
	wp_enqueue_style('nikah-admin-portfolio-styles', get_template_directory_uri() .'/css/admin-portfolio.css');
	}
}
add_action('admin_enqueue_scripts', 'nikah_admin_style');

/* admin style on elementor editor */
if(is_user_logged_in()){
	add_action( 'elementor/frontend/after_register_styles', function() {
		wp_enqueue_style('admin-styles2', get_template_directory_uri() .'/css/admin.css');
	} );
}

add_action( 'elementor/editor/before_enqueue_scripts', function() {
	wp_enqueue_style('admin-styles1', get_template_directory_uri() .'/css/admin.css');
	if('nikah-portfolio' == get_post_type() ) {
	wp_enqueue_style('nikah-admin-portfolio-styles', get_template_directory_uri() .'/css/admin-portfolio.css');
	}
} );

/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/

require_once( get_template_directory() . '/inc/option/panel/config.php' );

/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
add_action( 'after_setup_theme', 'nikah_register_my_menu' );
function nikah_register_my_menu() {
  register_nav_menu( 'header-menu', esc_html__( 'Header Menu (Right/Primary)', 'nikah' ) ); 
  register_nav_menu( 'header-menu-sec', esc_html__( 'Header Menu (Left)', 'nikah' ) ); 
  if ( class_exists( 'Redux' ) ) {
	  register_nav_menu( 'footer-menu', esc_html__( 'Footer Menu', 'nikah' ) );
	}
}

//Register Menus
add_action( 'after_setup_theme', 'nikah_register_header_menu_style_4' );
function nikah_register_header_menu_style_4() {
  register_nav_menu( 'header-menu-style-4', esc_html__( 'Header Menu (style 4, 5, 6)', 'nikah' ) ); 
}

//MAIN MENU
function nikah_main_nav_menu(){
	if ( class_exists( 'Redux' ) ) {
		$options = get_option('nikah_framework');
		$menus_choose_style = $options['menus_choose_style'];

		if($menus_choose_style ==  'style-1') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ferdinand',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-2') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--prospero',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-3') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--viola',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-4') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--antonio',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-5') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--miranda',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-6') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ariel',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-7') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--caliban',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-8') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--iris',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-9') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--stephano',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-10') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ceres',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-11') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--juno',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-12') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--maria',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-13') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--valentine',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-14') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--sebastian',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
		else{
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean',
				'fallback_cb'  => 'nikah_header_menu_cb'
			));
		}
	} else {
		wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container'       => 'ul',
			'menu_class'      => 'sm sm-clean',
			'fallback_cb'  => 'nikah_header_menu_cb'
		));
	}
}

//SECONDARY MENU
function nikah_main_nav_menu_left(){
	if ( class_exists( 'Redux' ) ) {
		$options = get_option('nikah_framework');
		$menus_choose_style = $options['menus_choose_style'];

		if($menus_choose_style ==  'style-1') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ferdinand',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-2') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--prospero',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-3') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--viola',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-4') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--antonio',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-5') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--miranda',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-6') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ariel',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-7') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--caliban',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-8') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--iris',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-9') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--stephano',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-10') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ceres',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-11') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--juno',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-12') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--maria',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-13') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--valentine',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-14') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--sebastian',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
		else{
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean',
				'fallback_cb'  => 'nikah_header_sec_menu_cb'
			));
		}
	} else {
		wp_nav_menu( array(
			'theme_location' => 'header-menu-sec',
			'container'       => 'ul',
			'menu_class'      => 'sm sm-clean',
			'fallback_cb'  => 'nikah_header_sec_menu_cb'
		));
	}
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="menu__link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

//TOP MENU Header Style 4
function nikah_main_nav_menu_header_4(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu-style-4',
	'container'       => 'ul',
	'menu_class'      => 'sm',
	'fallback_cb'  => 'nikah_header_menu_cb_header_4'
  ));
}

// FOOTER MENU
if ( class_exists( 'Redux' ) ) {
function nikah_footer_menu(){
  wp_nav_menu( array(
	'theme_location' => 'footer-menu',
	'container'       => 'ul',
	'menu_class'      => 'sm',
	'fallback_cb'  => 'nikah_footer_menu_cb'
  ));
}
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET

function nikah_header_menu_cb() {
  echo '<ul id="menu-top-menu" class="menus sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function nikah_header_menu_sec_cb() {
  echo '<ul id="menu-top-menu-sec" class="menus sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function nikah_header_menu_cb_header_4() {
  echo '<ul id="menu-top-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

if ( class_exists( 'Redux' ) ) {
function nikah_footer_menu_cb() {
  echo '<ul id="menu-footer-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}
}

/*-----------------------------------------------------------------------------------*/
/*  HEADER
/*-----------------------------------------------------------------------------------*/

// logo text or image huh?
function nikah_logo_type(){
if ( class_exists( 'Redux' ) ) {
	$options = get_option('nikah_framework');
	$logo = '';
	if (isset($options['logo_upload'])) {
	$logo = $options['logo_upload'];
	$upload_logo = $logo['url'];
	}


	if ( ! empty( $upload_logo ) ) { ?>

	<div class="logo-image">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $upload_logo ); ?>" class="image-logo" alt="<?php esc_attr_e( 'logo', 'nikah' ); ?>" /></a>
	</div>
	
	<?php } else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>

<?php }
	} else { ?> 
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>
	<?php }
} 

/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/


// SETUP DEFAULT SIDEBAR
function nikah_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'nikah' ),
		'id'            => 'primary-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'nikah_widgets_init' );



/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function nikah_pagination($pages = '', $range = 2)
{  
		 $showitems = ($range * 2)+1;  

		 global $paged;
		 if(empty($paged)) $paged = 1;

		 if($pages == '')
		 {
				 global $wp_query;
				 $pages = $wp_query->max_num_pages;
				 if(!$pages)
				 {
						 $pages = 1;
				 }
		 }   

		 if(1 != $pages)
		 {
				 echo "<div class='navigation-paging pagination-num'>";
				 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>" . esc_html__( 'First', 'nikah' ) . "</a>";
				 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

				 for ($i=1; $i <= $pages; $i++)
				 {
						 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						 {
								 echo (esc_html($paged) == esc_html($i))? "<span class='btn current'>".esc_html($i)."</span>":"<a href='".get_pagenum_link($i)."' class='btn inactive' >".esc_html($i)."</a>";
						 }
				 }

				 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
				 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>" . esc_html__( 'Last', 'nikah' ) . "</a>";
				 echo "</div>\n";
		 }
}

/*-----------------------------------------------------------------------------------*/
/*  PLACEHOLDER
/*-----------------------------------------------------------------------------------*/

/* Add Placehoder in comment Form Fields (Name, Email, Website) */
 
add_filter( 'comment_form_default_fields', 'nikah_comment_placeholders' );
function nikah_comment_placeholders( $fields )
{
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Name', 'nikah' ) . '"',
		$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Email', 'nikah' ) . '"',
		$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Website URL', 'nikah' ) . '"',
		$fields['url']
	);
	return $fields;
}
 
/* Add Placehoder in comment Form Field (Comment) */
add_filter( 'comment_form_defaults', 'nikah_textarea_placeholder' );
 
function nikah_textarea_placeholder( $fields )
{
  
		$fields['comment_field'] = str_replace(
			'<textarea',
			'<textarea placeholder="' . esc_html__( 'Your thoughts..', 'nikah' ) . '"',
			$fields['comment_field']
		);
   
 
	return $fields;
}

/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/function/custom.php' );
require_once( get_template_directory() . '/inc/function/navigation.php' );
require_once( get_template_directory() . '/inc/function/aq_resizer.php' );
require_once( get_template_directory() . '/inc/function/comment.php' );
require_once( get_template_directory() . '/inc/function/akmanda-customizer.php' );
require_once( get_template_directory() . '/inc/function/meta-box.php' );
require_once( get_template_directory() . '/inc/function/thefooter.php' );

/* Customizer Inline Style */
require_once( get_template_directory() . '/inc/function/inline-styles.php' );

// INSTALL NECESSARY PLUGINS
require_once( get_template_directory() . '/class-tgm.php' ); /*activate plugin function*/

/* body custom class */
add_filter( 'body_class', 'nikah_body_custom_class' );
function nikah_body_custom_class( $classes ) {

	if ( class_exists( 'Redux' ) ) {
		$classes[] = 'header-style-1';
	}
	else {
		$classes[] = 'header-style-1';
	}
	return $classes;
}

function nikah_post_custom_class( $classes ) {
	global $post;
	
	if ( class_exists( 'Redux' ) ) {
		$options = get_option('nikah_framework');
		if(!empty($options['blog_masonry_column'])) {
			$nikah_nikah_blog_masonry_column = $options['blog_masonry_column'];
		} else {
			$nikah_nikah_blog_masonry_column = "";
		}

		if(is_front_page() && is_home() ) {
			$classes[] = 'blog-item masonry-blog column '.$nikah_nikah_blog_masonry_column.'';
		}
		elseif ( is_front_page() ) {
			$classes[] = 'blog-item masonry-blog column '.$nikah_nikah_blog_masonry_column.'';
		}
		elseif(is_home()) {
			$classes[] = 'blog-item masonry-blog column '.$nikah_nikah_blog_masonry_column.'';
		}
		elseif(is_archive() || is_search()) {
			$classes[] = 'blog-item masonry-blog column column-2';
		}
		elseif(is_page() || is_single( 'post' ) || is_singular( 'post' )) {
			$classes[] = '';
		}
	}
	else {
		if(!is_singular( array( 'post', 'page' ) )) {
			$classes[] = 'blog-item masonry-blog column column-2';
		}
	}

	return $classes;
}

add_filter( 'post_class', 'nikah_post_custom_class' );
