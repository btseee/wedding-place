<?php


	if ( ! class_exists( 'Redux' ) ) {
		return;
	}


if (!class_exists("NIKAH_Framework_Config")) {

	require_once ( get_template_directory().'/inc/opt-ext/social-opt-ext.php');

	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-general-opt.php');	
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-alt-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-search-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-typo-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-menu-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/singlepost-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/content-typo-opt.php');

	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-general-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-style-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-widget-opt.php');

	class NIKAH_Framework_Config {

		public $args = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct() {
			// This is needed. Bah WordPress bugs.  ;)
			if ( get_template_directory() && strpos( Redux_Helpers::cleanFilePath( __FILE__ ), Redux_Helpers::cleanFilePath( get_template_directory() ) ) !== false) {
				$this->initSettings();
			} else {
				add_action('plugins_loaded', array($this, 'initSettings'), 10);    
			}
		}

		public function initSettings() {

			if ( !class_exists("ReduxFramework" ) ) {
				return;
			}       
			
			$this->theme = wp_get_theme();
			$this->setArguments();
			$this->setHelpTabs();
			$this->setSections();

			if (!isset($this->args['opt_name'])) { 
				return;
			}

			$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
		}

		public function setSections() {



			ob_start();

			$ct = wp_get_theme();
			$this->theme = $ct;
			$item_name = $this->theme->get('Name');
			$tags = $this->theme->Tags;
			$screenshot = $this->theme->get_screenshot();
			$class = $screenshot ? 'has-screenshot' : '';

			$customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'nikah'), $this->theme->display('Name'));
			?>
			

			<?php
			$item_info = ob_get_contents();

			ob_end_clean();


			// DECLARATION OF SECTIONS

			/*---------------------------------------
				1. Header Options
				2. Content Options
				3. Footer Options
				4. Blog Options
				5. Single Post Options
				6. Single Portfolio Options
				7. 404 Options
			----------------------------------------*/

			/*-----------------------------------------------------------------------------------
			1. Header Options
				1.1. Header Container
				1.2. Header Type
					1.2.1. Header 1 Options
						1.2.1.1 Header 1 Top Options
					1.2.1. Header 2 & 3 Options
					1.2.3. Header 4, 5, 6 Options
				1.3. Boxed Header Options
				1.4. Header Alternative Options
				1.5. Search
			-----------------------------------------------------------------------------------*/
			
			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Header Builder', 'nikah'),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'id'   => 'genereal-header',
				'icon_class' => 'icon-large',
				'class' => 'header-general-sub',
				'subsection' => true,
				'title' => esc_html__('General Header', 'nikah'),
				'fields' => nikah_header_general_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-website',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'class' => 'header-style-sub',
				'title' => esc_html__('Header Style', 'nikah'),
				'fields' => nikah_header_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'class' => 'header-alt-sub',
				'title' => esc_html__('Header Alternative', 'nikah'),
				'fields' => nikah_header_alt_ext_opt(),
			);

			/* Header Mobile*/
			$this->sections[] = array(
				'icon' => 'el-icon-credit-card',
				'icon_class' => 'icon-large',
				'id' => 'header-mobile-sub-id',
				'class' => 'header-mobile-sub-class',
				'subsection' => true,
				'title' => esc_html__('Mobile Header', 'nikah'),
				'fields' => array(

					array(
						'id'       => 'header_mob_bg_def',
						'type'     => 'color',
						'title'    => esc_html__('Header Mobile Default Background', 'nikah'),
						'default'  => 'transparent',
						'validate' => 'color',
					),

					array(
						'id'       => 'header_mob_bg_alt',
						'type'     => 'color',
						'title'    => esc_html__('Header Mobile Alternative Background', 'nikah'),
						'default'  => '#000000',
						'validate' => 'color',
						'required' => array('header_scheme','=','enable'),
					),

					array(
						'id'       => 'mobile_padding_head',
						'type'     => 'spacing',
						'mode'     => 'padding',
						'all'      => false,
						'bottom'         => false,
						'top'         => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Header Mobile Padding', 'nikah' ),
						'default'  => array(
							'padding-top'    => 'auto',
							'padding-bottom' => 'auto',
							'padding-left'   => '45px',
							'padding-right'  => '45px'
						),
					),

					array(
						'id'       => 'mobile_margin_logo',
						'type'     => 'spacing',
						'mode'     => 'margin',
						'all'      => false,
						'top'         => true,
						'bottom'         => true,
						'left'	=> false,
						'right'	=> false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Logo Mobile Margin', 'nikah' ),
						'default'  => array(
							'margin-top'    => '0',
							'margin-bottom' => '0',
							'margin-left'   => 'auto',
							'margin-right'  => 'auto'
						),
					),

					array(
						'id'       => 'mobile_margin_menu',
						'type'     => 'spacing',
						'mode'     => 'margin',
						'all'      => false,
						'top'         => true,
						'bottom'         => true,
						'left'	=> false,
						'right'	=> false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Margin Mobile Margin', 'nikah' ),
						'default'  => array(
							'margin-top'    => '15px',
							'margin-bottom' => '0',
							'margin-left'   => 'auto',
							'margin-right'  => 'auto'
						),
					),

				)
			);

			$this->sections[] = array(
				'icon' => ' el-icon-search',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-search-sub-id',
				'class' => 'header-search-sub-class',
				'title' => esc_html__('Search Bar', 'nikah'),
				'fields' => nikah_header_search_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-fontsize',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-typo-sub-id',
				'class' => 'header-typo-sub-class',
				'title' => esc_html__('Header Typography', 'nikah'),
				'fields' => nikah_header_typography_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-text-width',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-menus-sub-id',
				'class' => 'header-menus-sub-class',
				'title' => esc_html__('Header Menu Style', 'nikah'),
				'fields' => nikah_header_menus_ext_opt(),
			);
			
			/*-----------------------------------------------------------------------------------
			2. Content Options
				2.1. Content Container
				2.2. Content Wrapper Type
				2.3. Boxed Content
					2.3.1. Boxed Content Options
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-fullscreen',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Content Options', 'nikah'),
				'fields' => array(

					/* 2.1. Content Container*/
					array(
						'id' => 'content_background',
						'type' => 'background',
						'output' => array('#content'),
						'title' => __('Content Custom Background', 'nikah'),
						'subtitle' => __('Content background with image, color, etc.', 'nikah'),
						'default' => 'transparent',
					),
					/* end of content container */

					/* 2.2. Content Wrapper Type */
					array(
						'id'       => 'wrap_opt',
						'type'     => 'image_select',
						'title'    => esc_html__( 'Wrapper Option', 'nikah' ),
						'subtitle' => esc_html__( 'Select Your Wrapper Type', 'nikah' ),
						'options' => array(
							'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/wrap-1.jpg'),
							'bordered' => array('alt' => 'bordered', 'img' => get_template_directory_uri() .'/img/wrap-2.jpg'),
						),
						'default'  => 'default'
					),

					array(
						'id'       => 'bordered_title',
						'type'     => 'color',
						'output'   => array( '.bordered' ),
						'title'    => __( 'Border Frame Color', 'nikah' ),
						'subtitle' => __( 'Pick a border color for the frame (default: #111111).', 'nikah' ),
						'default'  => '#111111',
						'validate' => 'color',
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					array(
						'id'       => 'bordered_width',
						'type'     => 'dimensions',
						'units'    => array('px'),
						'title'    => esc_html__('Border Frame Vertical', 'nikah'),
						'subtitle' => esc_html__('Define width for vertical border frame', 'nikah'),
						'output'   => array('.bordered.left-border, .bordered.right-border'),
						'height'   => false,
						'default'  => array(
							'Width'   => '25', 
							'Height'  => false
						),
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					array(
						'id'       => 'bordered_height',
						'type'     => 'spacing',
						'output'   => array( '.bordered.bottom-border, .bordered.top-border' ),
						'mode'     => 'padding',
						'all'      => true,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Border Frame Horizontal', 'nikah' ),
						'subtitle' => __( 'Define width for horizontal border frame', 'nikah' ),
						'default'  => array(
							'padding-top'    => '12',
							'padding-right'  => '12',
							'padding-bottom' => '12',
							'padding-left'   => '12'
						),
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					/* end of content wrapper type */

					/* 2.3. Boxed Content */
					array(
						'id'       => 'content_boxed',
						'type'     => 'switch',
						'title'    => __( 'Use Boxed Content', 'nikah' ),
						'subtitle' => __( 'Make your content boxed', 'nikah' ),
						'default'  => false,
					),
					array(
						'id'       => 'content_boxed_width',
						'type'     => 'dimensions',
						'units'    => array('px', '%'),
						'title'    => esc_html__('Content Boxed Width.', 'nikah'),
						'subtitle' => esc_html__('Define width for content box.', 'nikah'),
						'output'   => array('#content'),
						'height'   => false,
						'default'  => array(
							'Width'   => '1170', 
							'Height'  => false
						),
						'required' => array(
							array('content_boxed','=', true),
						),
					),

					/* 2.3.1. Boxed Content Options */
					array(
						'id'       => 'content_padding',
						'type'     => 'spacing',
						'output'   => array( '#content' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Boxed Content', 'nikah' ),
						'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'nikah' ),
						'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
						'default'  => array(
							'padding-top'    => '0',
							'padding-right'  => '0',
							'padding-bottom' => '0',
							'padding-left'   => '0'
						),
						'required' => array(
							array('content_boxed','=', true),
						),
					),
					array(
						'id'       => 'content_margin',
						'type'     => 'spacing',
						'output'   => array( '#content' ),
						'mode'     => 'margin',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Margin Boxed Content', 'nikah' ),
						'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'nikah' ),
						'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
						'default'  => array(
							'margin-top'    => '0',
							'margin-right'  => 'auto',
							'margin-bottom' => '0',
							'margin-left'   => 'auto'
						),
						'required' => array(
							array('content_boxed','=', true),
						),
					),
				)
			);
			
			/* body content typograpgy */
			$this->sections[] = array(
				'icon' => ' el-icon-fontsize',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'content-typography-sub-id',
				'class' => 'content-typography-sub-class',
				'title' => esc_html__('Content Typography', 'nikah'),
				'fields' => nikah_content_typography_ext_opt(),
			);

			/*-----------------------------------------------------------------------------------
				4. ` Options
					4.1. Blog Pagination Type
					4.2. Blog Padding
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Blog Options', 'nikah'),
				'fields' => array(

					/* 4.1. Blog Pagination Type */
					array(
						'id'       => 'blog_masonry_column',
						'type'     => 'select',
						'title'    => esc_html__('Blog Infinite Button Style', 'nikah'),
						'options'  => array(
							'column-2'   => esc_html__('Column 2', 'nikah'),
							'column-3'   => esc_html__('Column 3', 'nikah'),
							'column-4'   => esc_html__('Column 4', 'nikah'),
						),
						'default'  => 'column-2',
					),
					array(
						'id'       => 'loop_blog_style',
						'type'     => 'select',
						'title'    => esc_html__( 'Blog Loop Layout Type', 'nikah' ),
						'subtitle' => esc_html__( 'Select Your Blog Loop Layout Type', 'nikah' ),
						'options'  => array(
							'fullwidth' => esc_html__( 'Full Width', 'nikah' ),
							'sidebar' => esc_html__( 'Sidebar', 'nikah' ),
						),
						'default'  => 'sidebar'
					),
					array(
						'id'       => 'loop_nav_type',
						'type'     => 'select',
						'title'    => esc_html__('Blog Pagination Type', 'nikah'),
						'options'  => array(
							'nav_default'   => esc_html__('Default Pagination', 'nikah'),
							'nav_pagina'   => esc_html__('Number Pagination', 'nikah'),
							'nav_infinite'    => esc_html__('Infinite Loop Pagination', 'nikah'),
						),
						'default'  => 'nav_default'
					),
					array(
						'id'       => 'blog_infinite_style',
						'type'     => 'select',
						'title'    => esc_html__('Blog Infinite Button Style', 'nikah'),
						'options'  => array(
							'style-1'   => esc_html__('Style 1', 'nikah'),
							'style-2'   => esc_html__('Style 2', 'nikah'),
							'style-3'    => esc_html__('Style 3', 'nikah'),
						),
						'default'  => 'style-1',
						'required' => array(
							array('loop_nav_type','=', array( 'nav_infinite' ))
						),
					),
					/* end of blog pagination type*/

					/* 4.2. Blog Padding */
					array(
						'id'       => 'blog_padding',
						'type'     => 'spacing',
						'output'   => array( '.blog-content-wrap .blog' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Blog', 'nikah' ),
						'subtitle' => __( 'Padding top and bottom for Blog Page.', 'nikah' ),
						'default'  => array(
							'padding-top'    => '60',
							'padding-right'  => '0',
							'padding-bottom' => '60',
							'padding-left'   => '0'
						),
					),
					/* end of blog padding */
				)
			);

			/*-----------------------------------------------------------------------------------
				4. Blog Options
					4.1. Blog Pagination Type
					4.2. Blog Padding
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Archive Options', 'nikah'),
				'fields' => array(

					array(
						'id'       => 'archive_hide_title',
						'type'     => 'button_set',
						'title'    => 'Archive Page Hide Title',
						'subtitle' => '',
						'options'  => array(
							'hide_title'     => 'Hide Title',
							'show_title'     => 'Show Title',
						),
						'default'  => 'show_title',
					),
					/* end of blog pagination type*/

					/* 4.2. Blog Padding */
					array(
						'id'       => 'archive_padding',
						'type'     => 'spacing',
						'output'   => array( '.archive #content' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Archive', 'nikah' ),
						'subtitle' => __( 'Padding top and bottom for Archive Page.', 'nikah' ),
						'default'  => array(
							'padding-top'    => '60',
							'padding-right'  => '0',
							'padding-bottom' => '60',
							'padding-left'   => '0'
						),
					),
					/* end of blog padding */
				)
			);

			/*-----------------------------------------------------------------------------------*/
			/*  5. Single Post Options
					5.1. Single Post Layout
					5.2. Single Post Padding
			/*-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Single Post Options', 'nikah'),
				'fields' => nikah_single_post_ext_opt(),
			);

			/*-----------------------------------------------------------------------------------*/
			/*  6. Single Portfolio Options
					6.1. Single Portfolio Style
					6.2. Single Portfolio Padding
					6.3. Single Portfolio Link
			/*-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Single Portfolio Options', 'nikah'),
				'fields' => array(

					/* 6.1. Single Portfolio Padding */
					array(
						'id'       => 'single_porto_style',
						'type'     => 'select',
						'title'    => esc_html__('Single Portfolio Style', 'nikah'),
						'options'  => array(
							'style-1'   => esc_html__('Single Portfolio 1', 'nikah'),
							'style-2'   => esc_html__('Single Portfolio 2', 'nikah'),
							'use-builder'    => esc_html__('Single Portfolio Builder', 'nikah'),
						),
						'default'  => 'style-1',
					),

					/* 6.2. Single Portfolio Padding */
					array(
						'id'       => 'single_porto_padding',
						'type'     => 'spacing',
						'output'   => array( '.single-portfolio-wrap' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Single Portfolio', 'nikah' ),
						'subtitle' => __( 'Padding top and bottom for Single Portfolio.', 'nikah' ),
						'default'  => array(
							'padding-top'    => '60',
							'padding-right'  => '0',
							'padding-bottom' => '60',
							'padding-left'   => '0'
						),
					),
					/* end of single post padding */

					/* 6.3. Single Portfolio Link */
					array(
						'id'=>'portfolio_back_link',
						'type'     => 'select',
						'data'     => 'pages',
						'args'  => array(
							'posts_per_page' => -1,
						),
						'title' => esc_html__('Portfolio Link Page', 'nikah'),
						'subtitle' => esc_html__( 'Insert your portfolio page link.', 'nikah' ),
						'desc' => esc_html__( 'This link will work in single portfolio default as back button link.', 'nikah' ),
					),
				)
			);

			/*-----------------------------------------------------------------------------------
				7. 404 Options
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('404 Options', 'nikah'),
				'fields' => array(

					/* 404 Background Image */
					array(
						'id' => '404_img_bg',
						'type' => 'background',
						'output' => array('body.error404'),
						'title' => __('404 Body Background', 'nikah'),
						'subtitle' => __('404 background with image, color, etc.', 'nikah'),
						'default' => '',
					),
					/* end of 404 background image */
				)
			);


			/*-----------------------------------------------------------------------------------
				3. Footer Options
					3.1. Footer Style Type
					3.2. Footer Type
					3.3. Footer Container
					3.4. Footer Padding
					3.5. Boxed Footer
					3.6. Footer 2 Options
					3.7. Footer Options
			-----------------------------------------------------------------------------------*/

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Footer Builder', 'nikah'),
			);

			$this->sections[] = array(
				'icon' => 'el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-general-sub-id',
				'class' => 'footer-general-sub-class',
				'title' => esc_html__('General Footer', 'nikah'),
				'fields' => nikah_footer_general_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-style-sub-id',
				'class' => 'footer-style-sub-class',
				'title' => esc_html__('Footer Style', 'nikah'),
				'fields' => nikah_footer_style_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-widget-sub-id',
				'class' => 'footer-widget-sub-class',
				'title' => esc_html__('Footer Widget', 'nikah'),
				'fields' => nikah_footer_widget_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Other Options', 'nikah'),
			);

			$this->sections[] = array(
				'icon' => 'el-icon-twitter',
				'title' => esc_html__('Social Profile', 'nikah'),
				'subsection' => true,
				'fields' => nikah_social_link_ext_opt(),
			); 

		}

		public function setHelpTabs() {

			// Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
			$this->args['help_tabs'][] = array(
				'id' => 'redux-opts-1',
				'title' => esc_html__('Theme Information 1', 'nikah'),
				'content' => esc_html__('<p>Please go to themesawesome.com to get support</p>', 'nikah')
			);
		}


		public function setArguments() {

			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array(
				// TYPICAL -> Change these values as you need/desire
				'opt_name' => 'nikah_framework', // This is where your data is stored in the database and also becomes your global variable name.
				'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
				'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
				'menu_type' => 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu' => true, // Show the sections below the admin menu item or not
				'menu_title' => esc_html__('Options', 'nikah'),
				'page' => esc_html__('Options', 'nikah'),
				// You will need to generate a Google API key to use this feature.
				// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
				'google_api_key' => 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII', // Must be defined to add google fonts to the typography module
				//'admin_bar' => false, // Show the panel pages on the admin bar
				'global_variable' => '', // Set a different name for your global variable other than the opt_name
				'dev_mode' => false, // Show the time the page took to load, etc
				'customizer' => false, // Enable basic customizer support
				// OPTIONAL -> Give you extra features
				'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
				'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
				'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
				'menu_icon' => '', // Specify a custom URL to an icon
				'last_tab' => '', // Force your panel to always open to a specific tab (by id)
				'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
				'page_slug' => '_options', // Page slug used to denote the panel
				'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
				'default_show' => true, // If true, shows the default value next to each field that is not the default value.
				'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
				// CAREFUL -> These options are for advanced use only
				'transient_time' => 60 * MINUTE_IN_SECONDS,
				'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
				'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
				//'domain'              => 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
				//'footer_credit'       => '', // Disable the footer credit of Redux. Please leave if you can help it.
				// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
				'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
				'show_import_export' => true, // REMOVE
				'system_info' => false, // REMOVE
				'help_tabs' => array(),
				'help_sidebar' => '', // esc_html__( '', $this->args['domain'] );            
			);

			$this->args['share_icons'][] = array(
				'url' => 'https://themesawesome.com/',
				'title' => 'Our Site',
				//'icon' => 'el-icon-github'
				'img' => get_template_directory_uri() .'/img/logo-site.png', // You can use icon OR img. IMG needs to be a full URL.
			);


		}

	}

	new NIKAH_Framework_Config();
}

function nikah_footer_copyright() {


	$options = get_option('nikah_framework');
	$copyright_footer = $options['footer-text'];
	if(!empty($copyright_footer)) {
		echo wp_specialchars_decode( esc_html( $copyright_footer ) );
	}
}

function nikah_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'nikah_removeDemoModeLink');