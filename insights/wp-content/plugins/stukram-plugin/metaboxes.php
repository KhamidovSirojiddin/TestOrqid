<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'rnr_';

global $meta_boxes;

$meta_boxes = array();

global $smof_data;


/* ----------------------------------------------------- */
// Page Sections Metaboxes
/* ----------------------------------------------------- */


/* ----------------------------------------------------- */
// Revolution Slider
/* ----------------------------------------------------- */

$revolutionslider = array();
$revolutionslider[0] = 'No Slider';

if(class_exists('RevSlider')){
    $slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) { 
		$revolutionslider[$revSlider->getAlias()] = $revSlider->getTitle();
	}
}

/* Page Section Background Settings */

$grid_array = array('2 Columns','3 Columns','4 Columns');

$pagebg_type_array = array(
	'image' => 'Image',
	'gradient' => 'Gradient',
	'color' => 'Color'
);

/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'home_page_type',
	'title' => 'Default Page Template Function',
	'hide'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array('blog.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Default Page Type', 'stukram' ),
			'id'   => $prefix . 'wr_pagetype',
			'desc'  => esc_attr__( 'Select Default Page Type.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				
				'st1' => esc_attr__( 'Default', 'stukram' ),
				'st2' => esc_attr__( 'Right Sidebar', 'stukram' ),
				'st3' => esc_attr__( 'Left Sidebar', 'stukram' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Page Container', 'stukram' ),
			'id'   => $prefix . 'wr_pagetype_container',
			'desc'  => __( 'Disable When You Are Using WP Bakery Elements.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				
				'st1' => esc_attr__( 'Enable', 'stukram' ),
				'st2' => esc_attr__( 'Disable', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_wr_pagetype', '!=', 'st1' ),
		),
		
		
	)
);

/* ----------------------------------------------------- */
/* blog page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'wrblogpagetemp',
	'title' => 'Blog Page Template Function',
	'show'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array( 'blog.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Blog Page Type', 'stukram' ),
			'id'   => $prefix . 'wrblog-pagetype',
			'desc'  => esc_attr__( 'Select Blog Page Type.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Sidebar Right', 'stukram' ),
				'st2' => esc_attr__( 'Sidebar Left', 'stukram' ),
				'st3' => esc_attr__( 'No Sidebar', 'stukram' ),
				'st4' => esc_attr__( 'Sidebar 2 Cols', 'stukram' ),
				'st5' => esc_attr__( 'Fancy 3 Cols', 'stukram' ),

			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		
		array(
				'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'blog_post_show',
				'desc'		=> '',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Include Category',
			'id'		=> $prefix . 'blog_post_cat',
			'desc'		=> '(Optional) Insert category name here. Ex: web design, web development ',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		   ),
		   
		   array(
				'name'       => esc_attr__( 'Post Offset', 'blps' ),
				'id'         => $prefix . 'blog_post_offset',
				'desc'		=> '(Optional)',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),
		
		   
	)
);

/* ----------------------------------------------------- */
/* page header Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_page_header_main_opt',
	'title' => 'Page Header Options',
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
	
	// SELECT BOX
		array(
			'name'     => esc_attr__( 'Page Header Type', 'stukram' ),
			'id'   => $prefix . 'stukram_page_header_selector_opt',
			'desc'  => esc_attr__( 'Select Your Page Header Style.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Default', 'stukram' ),
				'st2' => esc_attr__( 'Thumbnail Slider', 'stukram' ),
				'st3' => esc_attr__( 'Fullscreen Slider', 'stukram' ),
				'st6' => esc_attr__( 'Statick Header', 'stukram' ),
				'st4' => esc_attr__( 'Revolution Slider', 'stukram' ),
				'st5' => esc_attr__( 'Fullscreen Image', 'stukram' ),
				'st7' => esc_attr__( 'Hide Header', 'stukram' ),
			
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
			
	
		// SELECT BOX Nav Menu
		array(
			'name'     => esc_attr__( 'Page Nav Menu Option ', 'stukram' ),
			'id'   => $prefix . 'stukram_page_header_menu_selector_opt',
			'desc'  => esc_attr__( 'Select Page Header Nav Menu Options.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Theme Option', 'stukram' ),
				'yes' => esc_attr__( 'Page Option', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		// SELECT BOX Nav Menu Style
		array(
			'name'     => esc_attr__( 'Nav Menu Style ', 'stukram' ),
			'id'   => $prefix . 'stukram_page_header_menu_style_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Classic', 'stukram' ),
				'yes' => esc_attr__( 'Click', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_header_menu_selector_opt', '!=', 'yes' ),
		),	
		// SELECT BOX Logo
		array(
			'name'     => esc_attr__( 'Header Color Style', 'stukram' ),
			'id'   => $prefix . 'stukram_page_header_color_style_opt',
			'desc'  => esc_attr__( '(Optional).', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			    'no' => esc_attr__( 'Light', 'stukram' ),
				'yes' => esc_attr__( 'Dark', 'stukram' ),				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_header_menu_selector_opt', '!=', 'yes' ),
		),			
		// SELECT BOX Logo
		array(
			'name'     => esc_attr__( 'Logo & Menu Button Color Style', 'stukram' ),
			'id'   => $prefix . 'stukram_page_header_logo_color_style_opt',
			'desc'  => esc_attr__( '(Optional) Useful if you use dark background.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => esc_attr__( 'Light', 'stukram' ),			
				'no' => esc_attr__( 'Dark', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_header_menu_selector_opt', '!=', 'yes' ),
		),	
			
		

	
	)
);


/* ----------------------------------------------------- */
/* page footer Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_page_footer_main_opt',
	'title' => 'Page Footer Option',
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT Page Footer Option
		array(
			'name'     => esc_attr__( 'Page Footer Option ', 'stukram' ),
			'id'   => $prefix . 'stukram_page_footer_selector_opt',
			'desc'  => esc_attr__( '(Optional) Select Page Footer Options. ', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Theme Option', 'stukram' ),
				'yes' => esc_attr__( 'Page Option', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
			'name'     => esc_attr__( 'Page Footer Style Type', 'stukram' ),
			'id'   => $prefix . 'stukram_page_footer_color_selector_opt',
			'desc'  => esc_attr__( '(Optional)', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Style 1', 'stukram' ),
				'yes' => esc_attr__( 'Style 2', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_footer_selector_opt', '!=', 'yes' ),
			
		),	
		array(
			'name'     => esc_attr__( 'Footer BG Color Scheme', 'stukram' ),
			'id'   => $prefix . 'stukram_page_footer_style_bg_scheme_opt',
			'desc'  => esc_attr__( '(Optional)', 'stukram' ),
            'tooltip' => array(
                    'icon'     => 'help',
                    'content'  => 'Footer bg color style selector option only working in a light version of the theme.',
                    'position' => 'top',
            ),			
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Dark', 'stukram' ),
				'yes' => esc_attr__( 'Light', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_footer_selector_opt', '!=', 'yes' ),
		),	
		array(
			'name'     => esc_attr__( 'Footer Text Color Scheme', 'stukram' ),
			'id'   => $prefix . 'stukram_page_footer_style_color_scheme_opt',
			'desc'  => esc_attr__( '(Optional)', 'stukram' ),
            'tooltip' => array(
                    'icon'     => 'help',
                    'content'  => 'Footer text color style selector option only working in a light version of the theme.',
                    'position' => 'top',
            ),			
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'no' => esc_attr__( 'Light', 'stukram' ),
				'yes' => esc_attr__( 'Dark', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_footer_selector_opt', '!=', 'yes' ),
		),
		array(
			'name'     => esc_attr__( 'Footer Shapes', 'stukram' ),
			'id'   => $prefix . 'stukram_page_footer_shapes_opt',
			'desc'  => esc_attr__( '(Optional)', 'stukram' ),
            'tooltip' => array(
                    'icon'     => 'help',
                    'content'  => 'Footer shapes style selector option only working in a footer style type 2 option.',
                    'position' => 'top',
            ),			
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_page_footer_selector_opt', '!=', 'yes' ),
		),		
	)
);

/* ----------------------------------------------------- */
/* Header Section Default
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_page_header_opts',
	'title' => 'Default Page Header Functions.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_page_header_selector_opt' => 'st1',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
	
		array(
			'name'     => esc_attr__( 'Header Position', 'stukram' ),
			'id'   => $prefix . 'page_header_position_selector_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Left', 'stukram' ),
				'st2' => esc_attr__( 'Center', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
	//title
	array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'page_default_header_title_main_opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '(Optional)',
		),
	// title font
		array(
			'name'     => esc_attr__( 'Title Font Size', 'stukram' ),
			'id'   => $prefix . 'page_default_header_title_font_size_opt',
			'desc'  => esc_attr__( 'Select page title font size.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'-lg' => esc_html__( 'Default', 'stukram' ),
				'-sm' => esc_html__( 'S', 'stukram' ),
				'-md' => esc_html__( 'M', 'stukram' ),
				'-lg' => esc_html__( 'L', 'stukram' ),
				'-xl' => esc_html__( 'XL', 'stukram' ),
				'-xxl' => esc_html__( 'XXL', 'stukram' ),				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => '-lg',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		array(
			'name'     => esc_attr__( 'Breadcrumbs', 'stukram' ),
			'id'   => $prefix . 'page_header_breadcumbs_opt',
			'desc'  => esc_attr__( '(Optional)', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
	
	
	)
);

/* ----------------------------------------------------- */
/* Intro Thumbnail Slider 
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_slider',
	'title' => 'Page Header Thumbnail Slider Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
     '#rnr_stukram_page_header_selector_opt' => 'st2',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'		=> 'Slider Speed',
			'id'		=> $prefix . 'main_slider_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: 1200',
		),	
		array(
			'name'		=> 'Slider Autoplay Delay',
			'id'		=> $prefix . 'main_slider_autoplay_delay',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: 2900',
		),			
		
		array(
				'id'		=> $prefix . 'main_slider_img_opt',
				'name'        => 'Slider Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Slide', // ID of the subfield
				'save_state' => true,
				'fields' => array(

					array(
						'name'		=> 'Slide Image',
						'id'		=> $prefix . 'main_slider_img_id_opt',
						'clone'		=> false,
						'type'		=> 'image_advanced',
						'max_file_uploads' => '1',
						'desc'		=> '',
					),
					array(
						'name'     => esc_attr__( 'Image BG Cover Scheme', 'stukram' ),
						'id'   => $prefix . 'main_slider_img_color_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'bg-default' => esc_attr__( 'Default', 'stukram' ),
							'bg-dark-1' => esc_attr__( 'Dark', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => 'st1',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),

					array(
						'name'		=> 'Slide Title',
						'id'		=> $prefix . 'main_slider_title_opt',
						'clone'		=> false,
						'type'		=> 'textarea',
						'std'		=> '',
						'desc'		=> 'Ex: Design Inspiration.',
					),
					
					array(
						'name'		=> 'Slide Subtitle',
						'id'		=> $prefix . 'main_slider_sub_title_opt',
						'clone'		=> false,
						'type'		=> 'textarea',
						'std'		=> '',
						'desc'		=> 'Ex: Growing brands through strategy, innovation and creativity.',
					),
					
					array(
						'name'		=> 'Slide Button',
						'id'		=> $prefix . 'main_slider_buttontxt_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: get in touch',
					),
					
					array(
						'name'		=> 'Slide Button URL',
						'id'		=> $prefix . 'main_slider_buttonurl_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					array(
						'name'     => esc_attr__( 'Button Target', 'stukram' ),
						'id'   => $prefix . 'main_slider_button_target_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'_self' => esc_attr__( 'Self', 'stukram' ),
							'_blank' => esc_attr__( 'Blank', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => '_self',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),
								
				),
			),
			
		array(
			'name'		=> 'Scroll Down Button',
			'id'		=> $prefix . 'main_slider_scroll_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Scroll Down',
		),	
	
		
		
	)
);


/* ----------------------------------------------------- */
/* Intro Fullscreen Slider
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_full_slider',
	'title' => 'Page Header Fullscreen Slider Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_page_header_selector_opt' => 'st3',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		array(
			'name'     => esc_attr__( 'Color Scheme', 'stukram' ),
			'id'   => $prefix . 'full_slider_color_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Light', 'stukram' ),
				'st2' => esc_attr__( 'Dark', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
				'id'		=> $prefix . 'full_slider_opt',
				'name'        => 'Slider Title Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Slider Title Item List', // ID of the subfield
				'save_state' => true,
				'fields' => array(
					array(
						'name'		=> 'Slide Image',
						'id'		=> $prefix . 'full_slider_img_id_opt',
						'clone'		=> false,
						'type'		=> 'image_advanced',
						'max_file_uploads' => '1',
						'desc'		=> '',
					),
					array(
						'name'		=> 'Slide Video URL',
						'id'		=> $prefix . 'full_slider_video_url_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: http://yoursite.com/stukram_video.mp4',
					),						
					array(
						'name'     => esc_attr__( 'BG Cover Scheme', 'stukram' ),
						'id'   => $prefix . 'full_slider_img_color_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'' => esc_attr__( 'Default', 'stukram' ),
							'-cover-dark' => esc_attr__( 'Dark', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => 'st1',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),	
					array(
						'name'		=> 'Slide Title',
						'id'		=> $prefix . 'full_slider_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: Slumber',
					),						
					array(
						'name'		=> 'Slide Subtitle',
						'id'		=> $prefix . 'full_slider_sub_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: Web Design',
					),				
					array(
						'name'		=> 'Slide Button',
						'id'		=> $prefix . 'full_slider_buttontxt_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: view work',
					),
					
					array(
						'name'		=> 'Slide Button URL',
						'id'		=> $prefix . 'full_slider_buttonurl_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					array(
						'name'     => esc_attr__( 'Slide Button Open In', 'stukram' ),
						'id'   => $prefix . 'full_slider_button_target_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'_self' => esc_attr__( 'Same Window', 'stukram' ),
							'_blank' => esc_attr__( 'New Window', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => '_self',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),					
				),
			),
		array(
				'id'		=> $prefix . 'full_slider_social_opt',
				'name'        => 'Slider Social Icon',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Slider Social Icon List', // ID of the subfield
				'save_state' => true,
				'fields' => array(

					array(
						'name'		=> 'Social Icon Class',
						'id'		=> $prefix . 'full_slider_social_icon_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'      => __( 'Insert <a href="https://fontawesome.com/icons?d=listing" target="_blank">Fontawesome</a> social icon class here. Ex: fab fa-facebook-f', 'stukram' ),
					),
					
					array(
						'name'		=> 'Social Icon URL',
						'id'		=> $prefix . 'full_slider_social_url_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					
				),
			),
			
		array(
			'name'		=> 'Scroll Down Button',
			'id'		=> $prefix . 'full_slider_scroll_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Scroll Down',
		),	
		
	)		
);

/* ----------------------------------------------------- */
/* Intro Static Header
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_statics',
	'title' => 'Page Static Header Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_page_header_selector_opt' => 'st6',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(	
		array(
			'name'     => esc_attr__( 'Style Type', 'stukram' ),
			'id'   => $prefix . 'header_static_style_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Style 1', 'stukram' ),
				'st2' => esc_attr__( 'Style 2', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'     => esc_attr__( 'Masthead Shapes', 'stukram' ),
			'id'   => $prefix . 'header_static_masthead_shapes',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'No' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		array(
			'name'     => esc_attr__( 'Shapes Color Scheme', 'stukram' ),
			'id'   => $prefix . 'header_static_shape_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Light', 'stukram' ),
				'st2' => esc_attr__( 'Dark', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
			'name'     => esc_attr__( 'Text Color Scheme', 'stukram' ),
			'id'   => $prefix . 'header_static_color_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Dark', 'stukram' ),
				'st2' => esc_attr__( 'Light', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st2',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'header_static_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'Ex: &lt;span class="text-accent"&gt;Stukram.&lt;/span&gt;&lt;br&gt; <br> Creative Agency',
		),
		array(
			'name'		=> 'Subtitle',
			'id'		=> $prefix . 'header_static_sbtitle',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Hello everyone',
			'hidden' => array( 'rnr_header_static_style_opt', '!=', 'st2' ),
		),		
		array(
			'name'		=> 'Content',
			'id'		=> $prefix . 'header_static_subtitle',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'Ex: We create progress by designing and &lt;br&gt; <br> developing custom software, mobile &lt;br&gt; <br> applications and websites.',
		),	
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'header_static_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Contact Us',
		),
		
		array(
			'name'		=> 'Button URL',
			'id'		=> $prefix . 'header_static_button_url',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		array(
			'name'     => esc_attr__( 'Button Open In', 'stukram' ),
			'id'   => $prefix . 'header_static_button_target',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'no' => esc_attr__( 'Same Window', 'stukram' ),
				'yes' => esc_attr__( 'New Window', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'no',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		array(
				'id'		=> $prefix . 'header_static_social_opt',
				'name'        => 'Social Icon',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Social Icon List', // ID of the subfield
				'save_state' => true,
				'fields' => array(

					array(
						'name'		=> 'Social Icon Class',
						'id'		=> $prefix . 'header_static_social_icon_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'      => __( 'Insert <a href="https://fontawesome.com/icons?d=listing" target="_blank">Fontawesome</a> social icon class here. Ex: fab fa-facebook-f', 'stukram' ),
					),
					
					array(
						'name'		=> 'Social Icon URL',
						'id'		=> $prefix . 'header_static_social_url_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					
				),
			),			
		array(
			'name'		=> 'Scroll Down Button',
			'id'		=> $prefix . 'header_static_scroll_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Scroll Down',
		),	
		
	)		
);

/* ----------------------------------------------------- */
/* Revolution Slider Header
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_rev_slider',
	'title' => 'Page Revolution Slider Header Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_page_header_selector_opt' => 'st4',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(	
		
		array(
			'name'		=> 'Revolution slider Shortcode',
			'id'		=> $prefix . 'stukram_rev_shortcode_opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: [rev_slider alias="home-slider"]',
		),
		
	)		
);

/* ----------------------------------------------------- */
/* Intro Static Header
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_static',
	'title' => 'Header Fullscreen Image Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_page_header_selector_opt' => 'st5',
    ),
	),
	'pages' => array( 'page', 'post', 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(	
	
		array(
			'name'		=> 'Header Background Image',
			'id'		=> $prefix . 'page_full_img_header_bg_img',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> '',
		),	
		
		array(
			'name'     => esc_attr__( 'Menu Background Style', 'stukram' ),
			'id'   => $prefix . 'page_full_menu_back',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Background Color', 'stukram' ),
				'st2' => esc_attr__( 'Transparent', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		
		array(
			'name'     => esc_attr__( 'Overlay Color Scheme', 'stukram' ),
			'id'   => $prefix . 'page_full_img_header_shape_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st0' => esc_attr__( 'Disable', 'stukram' ),
				'st1' => esc_attr__( 'Light', 'stukram' ),
				'st2' => esc_attr__( 'Dark', 'stukram' ),
				
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st0',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
			'name'     => esc_attr__( 'Text Color Scheme', 'stukram' ),
			'id'   => $prefix . 'page_full_img_header_color_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Dark', 'stukram' ),
				'st2' => esc_attr__( 'Light', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st2',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
			'name'     => esc_attr__( 'Header Title', 'stukram' ),
			'id'   => $prefix . 'page_full_img_header_title_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'page_full_img_header_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> '(Optional)',
			'hidden' => array( 'rnr_page_full_img_header_title_opt', '!=', 'yes' ),
		),
		array(
			'name'		=> 'Subtitle',
			'id'		=> $prefix . 'page_full_img_header_subtitle',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> '(Optional)',
			'hidden' => array( 'rnr_page_full_img_header_title_opt', '!=', 'yes' ),
		),		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'page_full_img_header_button_text',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '(Optional)',
			'hidden' => array( 'rnr_page_full_img_header_title_opt', '!=', 'yes' ),
		),
		
		array(
			'name'		=> 'Button URL',
			'id'		=> $prefix . 'page_full_img_header_button_url',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '(Optional)',
			'hidden' => array( 'rnr_page_full_img_header_title_opt', '!=', 'yes' ),
		),
		
		array(
			'name'     => esc_attr__( 'Button Target', 'stukram' ),
			'id'   => $prefix . 'page_full_img_header_button_target',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'_self' => esc_attr__( 'Self', 'stukram' ),
				'_blank' => esc_attr__( 'Blank', 'stukram' ),
				'_top' => esc_attr__( 'Top', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => '_self',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		
		
		array(
			'name'		=> 'Scroll Down Button',
			'id'		=> $prefix . 'full_image_scroll_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Scroll Down',
			'hidden' => array( 'rnr_page_full_img_header_title_opt', '!=', 'yes' ),
		),
	
		
	)		
);

/* ----------------------------------------------------- */
/* Portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'portfolio_img_pos',
	'title' => 'Portfolio Post Options.',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Portfolio Post Image Size', 'stukram' ),
			'id'   => $prefix . 'portfolio_image_size',
			'desc'  => __( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(				
				'st1' => esc_attr__( 'Default', 'stukram' ),
				'big' => esc_attr__( 'Big', 'stukram' ),
				'long' => esc_attr__( 'Long', 'stukram' ),				
				'wide' => esc_attr__( 'Wide', 'stukram' ),				
			),
			'tooltip' => array(
                    'icon'     => 'help',
                    'content'  => 'Works only at Stukram Portfolio WP Bakery Element',
                    'position' => 'top',
                ),			
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Portfolio Post Page Header', 'stukram' ),
			'id'   => $prefix . 'stukram_portfolio_header_selector_opt',
			'desc'  => __( 'Disable If You Like To Use Page Header Type Option.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(				
				'st1' => esc_attr__( 'Enable', 'stukram' ),
				'st2' => esc_attr__( 'Disable', 'stukram' ),				
			),		
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Page Container', 'stukram' ),
			'id'   => $prefix . 'wr_portfoliotype_container',
			'desc'  => __( 'Disable When You Are Using WP Bakery Elements.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				
				'st1' => esc_attr__( 'Enable', 'stukram' ),
				'st2' => esc_attr__( 'Disable', 'stukram' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),
		
		
		
	)
);

/* ----------------------------------------------------- */
/* Portfolio Post Header
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_header_portfolio_post',
	'title' => 'Portfolio Post Page Header Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_stukram_portfolio_header_selector_opt' => 'st1',
    ),
	),
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(	
		array(
			'name'     => esc_attr__( 'Style Type', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_style_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Style 1', 'stukram' ),
				'st2' => esc_attr__( 'Style 2', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'     => esc_attr__( 'Masthead Shapes', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_masthead_shapes_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_portfolio_post_header_style_opt', '!=', 'st1' ),
		),
		array(
			'name'     => esc_attr__( 'Background Image', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_bg_img_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_portfolio_post_header_style_opt', '!=', 'st2' ),
		),	
		array(
			'name'		=> 'Upload Background Image',
			'id'		=> $prefix . 'portfolio_post_header_bg_img',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> '',
			'hidden' => array( 'rnr_portfolio_post_header_bg_img_opt', '!=', 'yes' ),
		),		
		array(
			'name'     => esc_attr__( 'BG Color Scheme', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_shape_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Light', 'stukram' ),
				'st2' => esc_attr__( 'Dark', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),			
		),	
		array(
			'name'     => esc_attr__( 'Text Color Scheme', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_color_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Dark', 'stukram' ),
				'st2' => esc_attr__( 'Light', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st2',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'portfolio_post_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Apple Tonik',
		),
		array(
			'name'		=> 'Subtitle (Category)',
			'id'		=> $prefix . 'portfolio_post_header_subtitle',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Ex: Branding',
			//
		),	
		array(
			'name'     => esc_attr__( 'Post Data Info', 'stukram' ),
			'id'   => $prefix . 'portfolio_post_header_info_selector_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Disable', 'stukram' ),
				'st2' => esc_attr__( 'Enable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),			
		array(
				'id'		=> $prefix . 'portfolio_post_header_opt',
				'name'        => 'Post Data Info Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Data Info List Item', // ID of the subfield
				'save_state' => true,
				'hidden' => array( 'rnr_portfolio_post_header_info_selector_opt', '!=', 'st2' ),
				'fields' => array(
					array(
						'name'		=> 'Data Title',
						'id'		=> $prefix . 'portfolio_post_header_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: Role',
					),						
					array(
						'name'		=> 'Data Subtitle',
						'id'		=> $prefix . 'portfolio_post_header_sub_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: Designer',
					),				
					array(
						'name'		=> 'Data Button',
						'id'		=> $prefix . 'portfolio_post_header_buttontxt_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Ex: themeforest.net',
					),
					
					array(
						'name'		=> 'Data Link URL',
						'id'		=> $prefix . 'portfolio_post_header_buttonurl_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					array(
						'name'     => esc_attr__( 'Data Link Open In', 'stukram' ),
						'id'   => $prefix . 'portfolio_post_header_button_target_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'_self' => esc_attr__( 'Same Window', 'stukram' ),
							'_blank' => esc_attr__( 'New Window', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => '_self',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),
					array(
						'name'     => esc_attr__( 'Data Info Default Padding', 'stukram' ),
						'id'   => $prefix . 'portfolio_post_header_col_gap_opt',
						'desc'  => esc_attr__( '', 'stukram' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
							'options'  => array(
							'st1' => esc_attr__( 'Enable', 'stukram' ),
							'st2' => esc_attr__( 'Disable', 'stukram' ),
							),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => '_self',
						'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
					),					
				),
			),		
		array(
			'name'     => esc_attr__( 'Prev Next', 'stukram' ),
			'id'   => $prefix . 'stukram_portfolio_prev_naxt_selector_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		
	)		
);


/* ----------------------------------------------------- */
/* Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'stukram_blog_img_opts',
	'title' => 'Post Option.',
	'pages' => array( 'post'),
	'context' => 'normal',	
	'fields' => array(
	
		array(
			'name'     => esc_attr__( 'Post Page Header', 'stukram' ),
			'id'   => $prefix . 'stukram_blog_header_selector_opt',
			'desc'  => __( 'Disable If You Like To Use Page Header Type Option.', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(				
				'st1' => esc_attr__( 'Enable', 'stukram' ),
				'st2' => esc_attr__( 'Disable', 'stukram' ),				
			),		
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),	
		array(
			'name'     => esc_attr__( 'Background Image', 'stukram' ),
			'id'   => $prefix . 'blog_post_header_bg_img_opt',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'yes' => esc_attr__( 'Enable', 'stukram' ),
				'no' => esc_attr__( 'Disable', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'yes',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
			'hidden' => array( 'rnr_stukram_blog_header_selector_opt', '!=', 'st1' ),
		),	
		array(
			'name'		=> 'Upload Background Image',
			'id'		=> $prefix . 'portfolio_post_header_bg_img',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> '',
			'hidden' => array( 'rnr_blog_post_header_bg_img_opt', '!=', 'yes' ),
		),		
		array(
			'name'     => esc_attr__( 'BG Color Scheme', 'stukram' ),
			'id'   => $prefix . 'blog_post_header_shape_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Light', 'stukram' ),
				'st2' => esc_attr__( 'Dark', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st2',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),			
		),	
		array(
			'name'     => esc_attr__( 'Text Color Scheme', 'stukram' ),
			'id'   => $prefix . 'blog_post_header_color_scheme',
			'desc'  => esc_attr__( '', 'stukram' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
				'st1' => esc_attr__( 'Dark', 'stukram' ),
				'st2' => esc_attr__( 'Light', 'stukram' ),
				),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st2',
			'placeholder' => esc_attr__( 'Select an Option', 'stukram' ),
		),		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'blog_post_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),		
	
	)
);



/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function stukram_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'stukram_register_meta_boxes' );