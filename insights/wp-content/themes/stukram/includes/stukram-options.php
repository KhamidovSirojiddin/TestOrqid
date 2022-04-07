<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "stukram";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'stukram/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
		'class'                => 'admin-color-pimax',
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Stukram Options', 'stukram' ),
        'page_title'           => esc_html__( 'Stukram Options', 'stukram' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyCN8bSGZHdbSOXu0HbhXf8j0SnswTmbCNw',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => true,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the stukram. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'stukram'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'stukram'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( '', 'stukram' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'stukram' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'stukram' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Support', 'stukram' ),
            'content' => esc_html__( 'Send us a mail by using our item support form.', 'stukram' )
        ),
        
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'Send us a mail by using our item support form.', 'stukram' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // ACTUAL DECLARATION OF SECTIONS
                Redux::setSection( $opt_name, array(
                    'title'  => esc_html__( 'General Settings', 'stukram' ),
                    'desc'   => esc_html__( '', 'stukram' ),
                    'icon'   => 'el-icon-home-alt',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
					
					array(
								'id' => 'notice_site_ajax',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Ajax Page Load Options.', 'stukram'),
								'desc' => esc_html__('Enable/ Disable site ajax loading.', 'stukram'),
						),
					
					array(
							'id' => 'enable_ajax_load',
							'type' => 'button_set',
							'title' => esc_html__('Page Ajax Load', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => 'If you would like to use WP Bakery default elements please disable Ajax loading.',
							'options' => array(
									'st1'=> esc_html__('Enable', 'stukram'),
									'st2' => esc_html__('Disable', 'stukram'),
							),
							'default'  => 'st1'
					),
					
					array(
								'id' => 'notice_site_preloader',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Preloader Options.', 'stukram'),
								'desc' => esc_html__('Enable/ Disable site preloader.', 'stukram'),
						),
					
					array(
							'id' => 'enable_preloader',
							'type' => 'button_set',
							'title' => esc_html__('Preloader', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Disable', 'stukram'),
									'yes' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'no'
					),
					
											
					array(
								'id' => 'pagelogopic',
								'type' => 'media',
								'compiler' => 'true',
								'title' => esc_html__('Upload  Preloader Image', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'default' => array('url' => get_template_directory_uri().'/includes/images/logo/logo-light.png'),
								'required' => array('enable_preloader', '=' , 'yes')
								
					),
					
					$fields = array(
							'id'       => 'opt_preloader_logo_dimensions',
							'type'     => 'dimensions',
							'units'    => array('em','px','%'),
							'output' => array('.preloader__img'),
							'title'    => __('Preloader Size', 'stukram'),
							'subtitle' => __('.', 'stukram'),
							'desc'     => __('Optional', 'stukram'),
							'default'  => array(
								'Width'   => '65', 
								'Height'  => '10'
							),
						'required' => array('enable_preloader', '=' , 'yes')
					),
					
					array(
                            'id'       => 'opt_preloader_style',
                            'type'     => 'color',
                            'title'    => esc_html__( 'Preloader Background', 'stukram' ),
                            'subtitle' => esc_html__( '', 'stukram' ),
                            'desc'     => esc_html__( '', 'stukram' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
							'required' => array('enable_preloader', '=' , 'yes')
                            
                    ),
					
					
					array(
								'id' => 'notice_site_cursor',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Custom Cursor Option', 'stukram'),
								'desc' => esc_html__('Enable/Disable custom cursor.', 'stukram'),
								
						),
							
					array(
								'id' => 'enable_cursor',
								'type' => 'button_set',
								'title' => esc_attr__('Custom Cursor', 'stukram'),
								'subtitle' => esc_attr__('', 'stukram'),
								'desc' => '',
								'options' => array(
										'no'=> esc_html__('Disable', 'stukram'),
										'yes' => esc_html__('Enable', 'stukram'),
										
								),
								'default'  => 'no'
					),
					
					array(
			                'id' => 'notice_header_logo',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Logo Options', 'stukram'),
			                'desc' => esc_html__('Logo options of your site header.', 'stukram')
			            ),
					
					array(
							'id' => 'textlogo',
							'type' => 'button_set',
							'title' => esc_html__('Select Logo Format', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Text Logo', 'stukram'),
									'st2' => esc_html__('Image Logo', 'stukram'),
							),
							'default'  => 'st1'
					),
					
					array(
			                'id' => 'notice_site_logo_h',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Logo Options.', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
							'required' => array('textlogo', '=' , 'st2')
							
					),
					array(
							'id' => 'logopic',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload Dark Logo', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('textlogo', '=' , 'st2')
					),
					array(
							'id' => 'logopiclight',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload Light Logo', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('textlogo', '=' , 'st2')
					),					
					
					$fields = array(
					'id'       => 'opt_logo_dimensions',
					'type'     => 'dimensions',
					'units'    => array('em','px','%'),
					'output' => array('.header__logo img'),
					'title'    => __('Logo Size', 'stukram'),
					'subtitle' => __('.', 'stukram'),
					'desc'     => __('Optional', 'stukram'),
					'default'  => array(
						'Width'   => '108', 
						'Height'  => '21'
					),
					'required' => array('textlogo', '=' , 'st2')
					),
					
				
					array(
							'id' => 'logotext',
							'type' => 'text',
							'title' => esc_html__('Logo Text ', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('textlogo', '=' , 'st1')
						
					),
					array(
								'id' => 'notice_site_theme_color',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Theme Color Scheme Options.', 'stukram'),
								'desc' => esc_html__('Select Theme Color Scheme Style.', 'stukram'),
								
						),
					array(
							'id' => 'theme_color_style',
							'type' => 'button_set',
							'title' => esc_html__('Theme Color Scheme Style', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'yes' => esc_html__('Light Version', 'stukram'),
									'no' => esc_html__('Dark Version', 'stukram'),
									
							),
							'default'  => 'yes'
						),	
					array(
								'id' => 'notice_site_nav_menu',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Nav Menu Options.', 'stukram'),
								'desc' => esc_html__('Select Nav Menu Style.', 'stukram'),
								
						),
					array(
							'id' => 'nav_menu_style',
							'type' => 'button_set',
							'title' => esc_html__('Nav Menu Style', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Classic', 'stukram'),
									'yes' => esc_html__('Click', 'stukram'),
									
							),
							'default'  => 'yes'
						),	
					array(
							'id' => 'header_color_style',
							'type' => 'button_set',
							'title' => esc_html__('Header Color Style', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Light', 'stukram'),
									'yes' => esc_html__('Dark', 'stukram'),
									
							),
							'default'  => 'no',
					),	
					array(
							'id' => 'header_logo_color_style',
							'type' => 'button_set',
							'title' => esc_html__('Logo & Menu Button Color Style', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'yes'=> esc_html__('Light', 'stukram'),
									'no' => esc_html__('Dark', 'stukram'),
									
							),
							'default'  => 'no',
					),						
					array(
								'id' => 'notice_header_contact_info',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Nav Menu Info Options', 'stukram'),
								'desc' => esc_html__('', 'stukram'),
								'required' => array('nav_menu_style', '=' , 'yes')
					),
					array(
							'id' => 'menu_contact_info',
							'type' => 'button_set',
							'title' => esc_html__('Menu Info', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Disable', 'stukram'),
									'yes' => esc_html__('Enable', 'stukram'),
									
							),
							'default'  => 'yes',
							'required' => array('nav_menu_style', '=' , 'yes')
					),				
					
						array(
								'id' => 'notice_header_contact_info_address',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Address Info', 'stukram'),
								'desc' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'header_address_title1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Title', 'stukram'),
								'subtitle' => esc_html__('Ex:  Address ', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'hd_address1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Address Line 1', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'hd_address2',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Address Line 2', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
					    array(
								'id' => 'notice_header_contact_info_email',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Contact Info', 'stukram'),
								'desc' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'header_contact_title1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Title', 'stukram'),
								'subtitle' => esc_html__('Ex:  Contact Us ', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'hd_email_address1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Email Address 1', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						array(
								'id' => 'hd_address1_link_url',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Address Line 1 Link URL', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'st2')
						),							
						array(
								'id' => 'hd_email_address2',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Email Address 2', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),					
						array(
								'id' => 'hd_address2_link_url',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Address Line 2 Link URL', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'st2')
						),						
						array(
								'id' => 'hd_address_link_target',
								'type' => 'button_set',
								'title' => esc_html__('Address Link URL Open In', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'desc' => '',
								'options' => array(
										'st1'=> esc_html__('Same Window', 'stukram'),
										'st2' => esc_html__('New Window', 'stukram'),
								),
								'default'  => 'st1',
								'required' => array('en_footer_contact_opt', '=' , 'st2')
						),																									
						array(
								'id' => 'hd_phn_number1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Phone Number 1', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')								
						),
						
						array(
								'id' => 'hd_phn_number2',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Phone Number 2', 'stukram'),
								'subtitle' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'notice_header_contact_info_social',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('Social Info', 'stukram'),
								'desc' => esc_html__('', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),
						
						array(
								'id' => 'header_social_title1',
								'type' => 'text',
								'compiler' => 'true',
								'title' => esc_html__('Title', 'stukram'),
								'subtitle' => esc_html__('Ex:  Socials ', 'stukram'),
								'required' => array('menu_contact_info', '=' , 'yes')
						),		
				)
               ) );
			   
			  
			   
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cogs',
                    'title'  => esc_html__( 'Page Settings', 'stukram' ),
                    'fields' => array(
					array(
							'id' => 'header-error',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('404 Error Page Option', 'stukram'),
							
					),						
					array(
							'id' => '404_color_style',
							'type' => 'button_set',
							'title' => esc_html__('404 Color Style', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Light', 'stukram'),
									'yes' => esc_html__('Dark', 'stukram'),
									
							),
							'default'  => 'no',
					),	
					
					array(
			                'id' => 'notice_404page_translation',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('404 Page Translate Options', 'stukram'),
			                'desc' => esc_html__('404 Page Text Translate Options', 'stukram'),
							
			            ),
						
					array(
							'id' => '404_page_title_1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 1', 'stukram'),
							'subtitle' => esc_html__('Translate Options. Ex:  404 ', 'stukram'),
							
					),
					
					array(
							'id' => '404_page_title_2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 2', 'stukram'),
							'subtitle' => esc_html__('Translate Options. Ex:  Page not found. ', 'stukram'),
							
					),
					array(
							'id' => '404_page_title_4',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 3', 'stukram'),
							'subtitle' => esc_html__('Translate Options. Ex:  The page you were looking for does not exist. ', 'stukram'),
							
					),					
					array(
							'id' => '404_page_title_3',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 4', 'stukram'),
							'subtitle' => esc_html__('Translate Options. Ex:  Take me home', 'stukram'),
							
					),
					array(
			                'id' => 'notice_portfoliopage_translation',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Portfolio Post Page Options', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
							
			            ),					
					array(
							'id' => 'port_page_url',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Portfolio Page URL', 'stukram'),
							'subtitle' => esc_html__('Insert portfolio page url link here.', 'stukram'),
							
					),					
					
                    )
                ) );
				
			
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-bullhorn',
                    'title'  => esc_html__( 'Blog Settings', 'stukram' ),
                    'fields' => array(
					array(
			                'id' => 'notice_index_main_page_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Blog Style', 'stukram'),
			                'desc' => esc_html__('Select blog page style of your site. Page Template also available.', 'stukram')
			        ),
					array(
							'id' => 'blogtyle',
							'type' => 'button_set',
							'title' => esc_html__('Select Blog Layout', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Right Sidebar', 'stukram'),
									'st2' => esc_html__('Left Sidebar', 'stukram'),
									'st3' => esc_html__('Full Width', 'stukram'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
			                'id' => 'notice_index_details_main_page_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Blog Details Page Style', 'stukram'),
			                'desc' => esc_html__('Select blog details page style of your site. You can select details style from post also.', 'stukram')
			        ),
					
					array(
							'id' => 'blogdetailstyle',
							'type' => 'button_set',
							'title' => esc_html__('Select Blog Details Layout', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Right Sidebar', 'stukram'),
									'st2' => esc_html__('Left Sidebar', 'stukram'),
									'st3' => esc_html__('Full Width', 'stukram'),
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'blog_sidebar_back_opt',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload Index Header Image', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							
					),
					
			        array(
							'id' => 'index_header_show',
							'type' => 'button_set',
							'title' => esc_html__('Blog Header Section', 'stukram'),
							'subtitle' => esc_html__('Enable/Disable header section for blog single, archives, category, tag & search page.', 'stukram'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> esc_html__('Enable', 'stukram'),
									'no'=> esc_html__('Disable', 'stukram'),
							),
							
					),	
			        array(
							'id' => 'index_header_breadcumbs_show',
							'type' => 'button_set',
							'title' => esc_html__('Blog Header Breadcumbs', 'stukram'),
							'subtitle' => esc_html__('Enable/Disable header breadcumbs for blog single, archives, category, tag & search page.', 'stukram'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> esc_html__('Enable', 'stukram'),
									'no'=> esc_html__('Disable', 'stukram'),
							),
							'required' => array('index_header_show', '=' , 'yes')
					),	
					array(
							'id' => 'header_home_title',
							'type' => 'text',
							'title' => esc_html__('Breadcumbs Home Text', 'stukram'),
							'subtitle' => esc_html__('Insert blog page header home text here.', 'stukram'),
							'required' => array('index_header_breadcumbs_show', '=' , 'yes')
							
					),						
					array(
							'id' => 'blog_page_title',
							'type' => 'text',
							'title' => esc_html__('Blog Title Text', 'stukram'),
							'subtitle' => esc_html__('Insert blog page header title text here.', 'stukram'),
							'required' => array('index_header_show', '=' , 'yes')
							
					),									
					array(
			                'id' => 'notice_blog-scroll_swipe_translation',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Translation Options', 'stukram'),
			                'desc' => esc_html__('Default Text Translate Here.', 'stukram'),
			        ),										
					array(
							'id' => 'arch_page_title',
							'type' => 'text',
							'title' => esc_html__('Archive Page Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog archive page here. Ex: Archive : ', 'stukram'),
							'default' => '',
					),	
					array(
							'id' => 'cat_page_title',
							'type' => 'text',
							'title' => esc_html__('Category Page Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog category page here. Ex: Category : ', 'stukram'),
							'default' => '',
					),	
	
					array(
							'id' => 'tag_page_title',
							'type' => 'text',
							'title' => esc_html__('Tag Page Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog tag page here. Ex: Tag : ', 'stukram'),
							'default' => '',
					),						

					array(
							'id' => 'src_page_title',
							'type' => 'text',
							'title' => esc_html__('Search Page Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog search page title here. Ex: Search Results for :', 'stukram'),
							'default' => '',
					),
					array(
							'id' => 'blog_page_nopost',
							'type' => 'text',
							'title' => esc_html__('Search Page No Post Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog search page no post title here. Ex: No Post Found', 'stukram'),
							'default' => '',
					),	
					array(
							'id' => 'blog_page_search_again',
							'type' => 'text',
							'title' => esc_html__('Search Page Search Again Title', 'stukram'),
							'subtitle' => esc_html__('Insert header title for blog search page no post title here. Ex: Please Search Again.', 'stukram'),
							'default' => '',
					),					
					array(
							'id' => 'translet_opt_10',
							'type' => 'text',
							'title' => esc_html__('One Comment on', 'stukram'),
							'subtitle' => esc_html__('Post Comment Section.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_11',
							'type' => 'text',
							'title' => esc_html__('Comment on', 'stukram'),
							'subtitle' => esc_html__('Post Comment Section.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_12',
							'type' => 'text',
							'title' => esc_html__('Comments on', 'stukram'),
							'subtitle' => esc_html__('Post Comment Section.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_13',
							'type' => 'text',
							'title' => esc_html__('Comments are closed.', 'stukram'),
							'subtitle' => esc_html__('Post Comment Section.', 'stukram'),
					),
					
                    )
                ) );
				
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cog',
                    'title'  => __( 'Translate Options', 'stukram' ),
                    'fields' => array(
					
					array(
							'id' => 'wr-blog-opt2',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Blog Page', 'stukram'),
							'desc' => esc_html__('Blog page text translate options.', 'stukram')
							
					  ),
					array(
							'id' => 'blog_read_more',
							'type' => 'text',
							'title' => __('Read More', 'stukram'),
							'subtitle' => __('Change/Repalce blog post "Read More" text here.', 'stukram'),
							'default' => '',
							
					),					  
					array(
							'id' => 'translet_opt_3',
							'type' => 'text',
							'title' => esc_html__('Search..', 'stukram'),
							'subtitle' => esc_html__('Search Widget.', 'stukram'),
					),
					array(
							'id' => 'translet_opt_1',
							'type' => 'text',
							'title' => esc_html__('By', 'stukram'),
							'subtitle' => esc_html__('Post Meta', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_2',
							'type' => 'text',
							'title' => esc_html__('In', 'stukram'),
							'subtitle' => esc_html__('Post Meta', 'stukram'),
					),
					

					
					array(
							'id' => 'translet_opt_9',
							'type' => 'text',
							'title' => esc_html__('No Results Found', 'stukram'),
							'subtitle' => esc_html__('Search Page.', 'stukram'),
					),
					
					array(
							'id' => 'wr-post-pagination',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Post Pagination', 'stukram'),
							'desc' => esc_html__('Post pagination text translate options.', 'stukram')
					),
					
					array(
							'id' => 'back_port',
							'type' => 'text',
							'title' => esc_html__('Back To Portfolio', 'stukram'),
							'subtitle' => esc_html__('Portfolio Pagination.', 'stukram'),
					),
					array(
							'id' => 'back_home',
							'type' => 'text',
							'title' => esc_html__('Back To Home', 'stukram'),
							'subtitle' => esc_html__('Portfolio Pagination.', 'stukram'),
					),					
					array(
							'id' => 'translet_opt_5',
							'type' => 'text',
							'title' => esc_html__('Prev', 'stukram'),
							'subtitle' => esc_html__('Portfolio Pagination.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_6',
							'type' => 'text',
							'title' => esc_html__('Next', 'stukram'),
							'subtitle' => esc_html__('Portfolio Pagination.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_7',
							'type' => 'text',
							'title' => esc_html__('Prev Article', 'stukram'),
							'subtitle' => esc_html__('Post Pagination.', 'stukram'),
					),
					
					array(
							'id' => 'translet_opt_8',
							'type' => 'text',
							'title' => esc_html__('Next Article', 'stukram'),
							'subtitle' => esc_html__('Post Pagination.', 'stukram'),
					),
					
					
                    )
                ) );
				
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-leaf',
                    'title'  => esc_html__( 'Social Options', 'stukram' ),
                    'fields' => array(
					
					
					array(
							'id' => 'facebook',
							'type' => 'text',
							'title' => esc_html__('Facebook ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'twitter',
							'type' => 'text',
							'title' => esc_html__('Twitter ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'pinterest',
							'type' => 'text',
							'title' => esc_html__('Pinterest ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'instagram',
							'type' => 'text',
							'title' => esc_html__('Instagram ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
							
					),					
					
					array(
							'id' => 'behance',
							'type' => 'text',
							'title' => esc_html__('Behance ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'dribbble',
							'type' => 'text',
							'title' => esc_html__('Dribbble', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'gplus',
							'type' => 'text',
							'title' => esc_html__('Google+ ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'linkedin',
							'type' => 'text',
							'title' => esc_html__('LinkedIn ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
					),
					
					array(
							'id' => 'youtube',
							'type' => 'text',
							'title' => esc_html__('YouTube ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
						
					),
					
					array(
							'id' => 'vimeo',
							'type' => 'text',
							'title' => esc_html__('Vimeo ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
							
					),
					
					array(
							'id' => 'slack',
							'type' => 'text',
							'title' => esc_html__('Slack ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
							
					),
					
					array(
							'id' => 'github',
							'type' => 'text',
							'title' => esc_html__('GitHub ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
							
					),
					
					array(
							'id' => 'tumblr',
							'type' => 'text',
							'title' => esc_html__('Tumblr ', 'stukram'),
							'subtitle' => esc_html__('Insert Social URL Here.', 'stukram'),
							
							
					),
					
					array(
							'id'       => 'opt_add_more_social',
							'type'     => 'multi_text',
							'title'    => esc_html__( 'Add More Social Icons', 'stukram' ),
							'subtitle' => esc_html__( '', 'stukram' ),
							'desc'     => __( 'Ex: &lt;a class="social__item text-white border-light" target="_blank" href="#"&gt;&lt;i class="fab fa-facebook-f"&gt;&lt;/i&gt;&lt;/a&gt;<br>Use <a href="https://fontawesome.com/v5/" target="_blank">Fontawesome</a> Icon Class', 'stukram' ),							
					),					
					
					array(
							'id'       => 'opt_add_more_text_social',
							'type'     => 'multi_text',
							'title'    => esc_html__( 'Add More Social Icons (Text)', 'stukram' ),
							'subtitle' => esc_html__( '', 'stukram' ),
							'desc'     => __( 'Ex: &lt;a target="_blank" href="#"&gt;Facebook&lt;/a&gt;', 'stukram' ),							
					),	
					
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-text-width',
                    'title'  => esc_attr__( 'Typography', 'stukram' ),
                    'fields' => array(  


						array(
                            'id'          => 'typo_body',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Body', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('body'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the Body Text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
				
						array(
			                'id' => 'notice_t_global',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('All The Title Tag Font Properties.', 'stukram'),
			                'desc' => esc_html__('Specify the all title tag font properties.', 'stukram')
			            ),
						
						array(
                            'id'          => 'typo_t_h1',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h1', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h1'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h1 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_t_h2',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h2', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h2'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h2 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_t_h3',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h3', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h3'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h3 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_t_h4',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h4', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h4'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h4 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_t_h5',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h5', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h5'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h5 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_t_h6',
                            'type'        => 'typography', 
                            'title'       => esc_html__('h6', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h6'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the h6 font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),												
						array(
                            'id'          => 'typo_t_xs',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (XS)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-xs'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_t_sm',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (SM)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-sm'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_md',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (MD)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-md'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_t_lg',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (LG)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-lg'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_2xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (2XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-2xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_3xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (3XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-3xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_4xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (4XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-4xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_t_5xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (5XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-5xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_t_6xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Title (6XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.leading-6xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_t_t',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Section Title', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sectionHeading'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the title font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),							
						array(
                            'id'          => 'typo_sub_s',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Section Subtitle', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sectionHeading__subtitle'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the subtitle font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),							
						array(
			                'id' => 'notice_text_1',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Text Font Properties.', 'stukram'),
			                'desc' => esc_html__('Specify the text font properties.', 'stukram')
			            ),
						array(
                            'id'          => 'typo_text_base',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text Base', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-base'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),						
						array(
                            'id'          => 'typo_text_xs',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (XS)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('text-xs'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_text_sm',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (SM)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-sm'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),							
						array(
                            'id'          => 'typo_text_lg',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (LG)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-lg'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_text_xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_text_2xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (2XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-2xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_text_3xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (3XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-3xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_text_4xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (4XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-4xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_text_5xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (5XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-5xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
							array(
                            'id'          => 'typo_text_6xl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Text (6XL)', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.text-6xl'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the text font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),						
						array(
			                'id' => 'notice_p_1',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('P Tag Font Properties.', 'stukram'),
			                'desc' => esc_html__('Specify the p tag font properties.', 'stukram')
			            ),
						
						array(
                            'id'          => 'typo_p_s_d',
                            'type'        => 'typography', 
                            'title'       => esc_html__('P', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the p font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
			                'id' => 'notice_critical1_permalink1',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Permalink', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),	
                        array(
                            'id'          => 'typography-lnurl',
                            'type'        => 'typography', 
                            'title'       => __('Link URL', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-a-hover',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Link URL Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a:focus, a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-lnurl-btn',
                            'type'        => 'typography', 
                            'title'       => __('Button Link URL', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a.button'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-a-hover-btn',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Button Link URL Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a.button:focus, a.button:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typo_button1_bl',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Black', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-black'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_button1_bl_hv',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Black Hover', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-black:hover'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),						
						array(
                            'id'          => 'typo_button2',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button White', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-black'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_button2_hv',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button White Hover', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-white:hover'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),			
						array(
                            'id'          => 'typo_button1',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Outline Black', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-outline-black'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_button1',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Outline Black Hover', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-outline-black:hover'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),						
						array(
                            'id'          => 'typo_button3',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Outline White', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-outline-white'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),
						array(
                            'id'          => 'typo_button3_hv',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button Outline White Hover', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.button.-outline-white:hover'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('Specify the button font properties.', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),						
												
						array(
			                'id' => 'notice_critical13',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Page', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),					
                        array(
                            'id'          => 'typography-breadcrumbs',
                            'type'        => 'typography', 
                            'title'       => __('Page Breadcrumbs', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.breadcrumbs-item'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page breadcrumbs font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-pgcontentl',
                            'type'        => 'typography', 
                            'title'       => __('Content', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.page-content p'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page content text font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),						
                        array(
                            'id'          => 'typography-pgsecwdtl',
                            'type'        => 'typography', 
                            'title'       => __('Sidebar Widget Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogSidebar .widget-title'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page section title font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						), 	
                        array(
                            'id'          => 'typography-pgsecwdcont',
                            'type'        => 'typography', 
                            'title'       => __('Sidebar Widget Content', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.widget.widget-block, .textwidget'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page section title font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						), 		
                        array(
                            'id'          => 'typography-lnurl_sidebar',
                            'type'        => 'typography', 
                            'title'       => __('Sidebar Link URL', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogSidebar a'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-a-hover_sidebar',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Sidebar Link URL Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogSidebar a:focus, .blogSidebar a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						array(
			                'id' => 'notice_critical14',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Post', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),	
                        array(
                            'id'          => 'typography-bltl',
                            'type'        => 'typography', 
                            'title'       => __('Blog Page Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h3.blogPost__title.text-2xl, .blogPost .blogPost__title a'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post title font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),	
	                        array(
                            'id'          => 'typography-bltl',
                            'type'        => 'typography', 
                            'title'       => __('Blog Page Title Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost .blogPost__title a:hover'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post title font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),						
                        array(
                            'id'          => 'typography-bltlindx',
                            'type'        => 'typography', 
                            'title'       => __('Post Page Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h1.masthead__title.text-white.fw-600.leading-md'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post title font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),						
                        array(
                            'id'          => 'typography-blcon',
                            'type'        => 'typography', 
                            'title'       => __('Post Content', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.post-content p, .comment-text p'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post content font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),	
                        array(
                            'id'          => 'typography-blcon',
                            'type'        => 'typography', 
                            'title'       => __('Post Meta', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost__info.leading-md'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post content font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),							
						array(
			                'id' => 'notice_critical1_permalink1_post',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Permalink', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),	
                        array(
                            'id'          => 'typography-lnurl_post',
                            'type'        => 'typography', 
                            'title'       => __('Link URL', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost a'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-a-hover_post',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Link URL Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost a:focus, .blogPost a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-readlnurl',
                            'type'        => 'typography', 
                            'title'       => __('Read More (Button)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost a.button'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),
                        array(
                            'id'          => 'typography-readlnurlhover',
                            'type'        => 'typography', 
                            'title'       => __('Read More (Button) Hover', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.blogPost a.button:hover'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),	
						array(
			                'id' => 'notice_critical1_navmenu',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Navigation Menu (Click)', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),		
						array(
                            'id'          => 'typography-a-navmenu',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navList li a'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typography-a-sub-navmenu',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Sub Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.subnav-list li a'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typography-a-hover-navmenu',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navList__wrap a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						array(
			                'id' => 'notice_critical1_navmenu-cl',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Navigation Menu (Classic)', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),		
						array(
                            'id'          => 'typography-a-navmenu-cl',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navClassic-wrap a'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typography-a-sub-navmenu-cl',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Sub Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navClassic-list .tippy-box .tippy-content a'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typography-a-hover-navmenu-cl',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Menu Item', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navClassic-list .tippy-box a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						
						array(
			                'id' => 'notice_critical1_intro',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Intro Slider', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),
						array(
                            'id'          => 'typography-intro-slider-title',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Slider Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sliderMain.-type-3 .slider__title'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						array(
                            'id'          => 'typography-intro-slider-subtitle',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Slider Subtitle', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p.slider__subtitle.text-sm.uppercase.tracking-md.leading-md '),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						array(
                            'id'          => 'typography-intro-slideshow-title',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Slideshow Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sliderMain.-type-1 .sliderMain__title'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						array(
                            'id'          => 'typography-intro-slideshow-subtitle',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Slideshow Subtitle', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p.sliderMain__subtitle.leading-xs.text-xs.tracking-md.uppercase.fw-500.text-white'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
							array(
                            'id'          => 'typography-intro-static-title',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Static Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.masthead.-type-2 .masthead__title'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						array(
                            'id'          => 'typography-intro-static-content',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Static Content', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p.masthead__text.mt-40.md\:mt-32.ml-56.sm\:ml-0.js-text'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
							array(
                            'id'          => 'typography-intro-persoanl-title',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Personal Title', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.masthead.-type-3 .masthead__title'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						array(
                            'id'          => 'typography-intro-persoanl-subtitle',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Personal Subtitle', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p.masthead__subtitle.text-xs.uppercase.tracking-lg.fw-500'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						array(
                            'id'          => 'typography-intro-persoanl-content',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Intro Personal Content', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.masthead.-type-3 .masthead__content.-left-padding .masthead__text'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						
					array(
			                'id' => 'notice_contact_form',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Contact form font properties.', 'stukram'),
			                'desc' => esc_html__('Specify the Contact form font properties.', 'stukram')
			            ),
						array(
                            'id'          => 'typopagi_form_1',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Contact Form Placeholder', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('::placeholder'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						
						array(
                            'id'          => 'typopagi_form_2',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Label', 'stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('form label'),
                            'units'       =>'px',
                            'line-height'       =>true,
							'font-size'   => true,
                            'text-align'       =>false,
                            'subtitle'    => esc_html__('', 'stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            'text-align' => false,
                            ),
						),	
						
						array(
			                'id' => 'notice_critical1_footer',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Copyright', 'Stukram'),
			                'desc' => __('', 'Stukram')
			            ),
						array(
                            'id'          => 'typography-footer-copy',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Copyright (Type 1)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.footer.-type-1 .footer__copyright p'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),		
						array(
                            'id'          => 'typography-footer-copy2',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Copyright (Type 2)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.footer.-type-2 .footer__copyright p'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						array(
                            'id'          => 'typography-footer-title',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Title (Type 1)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h4.text-xl.fw-500.text-white'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),		
						array(
                            'id'          => 'typography-footer-title2',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Title (Type 2)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h5.text-base.fw-400.text-dark'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
						array(
                            'id'          => 'typography-footer-text',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Text (Type 1)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.footer.-type-1 .footer__content a, .footer.-type-1 .footer__content p'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),		
						array(
                            'id'          => 'typography-footer-text2',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Footer Text (Type 2)', 'Stukram'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p.footer__text.text-lg.md\:text-base.text-black'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'Stukram'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),							
                        
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-brush',
                    'title'  => esc_html__( 'Styling', 'stukram' ),
                    'fields' => array(
					
					array(
                            'id'       => 'opt_theme_style',
                            'type'     => 'color',
                            'title'    => esc_html__( 'Theme Color Option', 'stukram' ),
                            'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'stukram' ),
                            'desc'     => esc_html__( 'Change all global color.', 'stukram' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                    ),
					)
                ) );
				
				
				
				
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-th-large',
                    'title'  => esc_html__( 'Footer Settings', 'stukram' ),
                    'fields' => array(
					array(
			                'id' => 'notice_footer_section',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Page Footer Section.', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
			        ),					
					array(
							'id' => 'backfooter',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Footer Background Image', 'stukram'),
							'subtitle' => esc_html__('(Optional)', 'stukram'),
							
					),					
					array(
							'id' => 'footer_style',
							'type' => 'button_set',
							'title' => esc_html__('Footer Style Type', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Style 1', 'stukram'),
									'st2' => esc_html__('Style 2', 'stukram'),
							),
							'default'  => 'st1',
					),	
					array(
							'id' => 'footer_style_bg_scheme_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer BG Color Scheme', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Dark', 'stukram'),
									'st2' => esc_html__('Light', 'stukram'),
							),
							'default'  => 'st1',
					),	
					array(
							'id' => 'footer_style_color_scheme_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Text Color Scheme', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Light', 'stukram'),
									'st2' => esc_html__('Dark', 'stukram'),
							),
							'default'  => 'st1',
					),					
					array(
							'id' => 'footer_shapes_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Shapes', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'no'=> esc_html__('Disable', 'stukram'),
									'yes' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'yes',
					),	
					array(
			                'id' => 'notice_footer_content',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Content Options', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
			        ),					
					
					array(
							'id' => 'en_footer_content_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Content', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'stukram'),
									'st2' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'st1',
							
					),
					
					array(
			                'id' => 'notice_footer_logo',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Logo Options', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
							'required' => array('en_footer_content_opt', '=' , 'st2')
			        ),	

					array(
							'id' => 'en_footer_logo_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Logo', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'stukram'),
									'st2' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'st1',
							'required' => array('en_footer_content_opt', '=' , 'st2')
					),
					array(
							'id' => 'footer_textlogo_opt',
							'type' => 'button_set',
							'title' => esc_html__('Select Logo Format', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Text Logo', 'stukram'),
									'st2' => esc_html__('Image Logo', 'stukram'),
							),
							'default'  => 'st1',
							'required' => array('en_footer_logo_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'logotext_footer',
							'type' => 'text',
							'title' => esc_html__('Logo Text ', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('footer_textlogo_opt', '=' , 'st1')
						
					),					
					array(
							'id' => 'logopicfooter',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload Footer Logo', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('footer_textlogo_opt', '=' , 'st2')
					),					
					$fields = array(
							'id'       => 'opt_footer_logo_dimensions',
							'type'     => 'dimensions',
							'units'    => array('em','px','%'),
							'output' => array('.footer-logo__img'),
							'title'    => __('Logo Size', 'stukram'),
							'subtitle' => __('.', 'stukram'),
							'desc'     => __('Optional', 'stukram'),
							'default'  => array(
								'Width'   => '113', 
								'Height'  => '65'
							),
						'required' => array('footer_textlogo_opt', '=' , 'st2')
					),	
					array(
			                'id' => 'notice_footer_contact',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Contact Options', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
							'required' => array('en_footer_content_opt', '=' , 'st2')
			        ),						
					array(
							'id' => 'en_footer_contact_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Contact', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'stukram'),
									'st2' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'st1',
							'required' => array('en_footer_content_opt', '=' , 'st2')
					),					
					array(
							'id' => 'footer_contact_title1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Title', 'stukram'),
							'subtitle' => esc_html__('Ex:  Studio ', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),
					array(
							'id' => 'footer_contact_title2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Title 2', 'stukram'),
							'subtitle' => esc_html__('Ex:  Let’s get in touch ', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2'),
					),					
					array(
							'id' => 'ft_address1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Address Line 1', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),	
					array(
							'id' => 'ft_address1_link_url',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Address Line 1 Link URL', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),						
					array(
							'id' => 'ft_address2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Address Line 2', 'stukram'),
							'subtitle' => esc_html__('(Optional)', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),
					array(
							'id' => 'ft_address2_link_url',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Address Line 2 Link URL', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),						
					array(
							'id' => 'ft_address_link_target',
							'type' => 'button_set',
							'title' => esc_html__('Address Link URL Open In', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Same Window', 'stukram'),
									'st2' => esc_html__('New Window', 'stukram'),
							),
							'default'  => 'st1',
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),				
					array(
							'id' => 'ft_email_address1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Email Address 1', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'ft_email_address2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Email Address 2', 'stukram'),
							'subtitle' => esc_html__('(Optional)', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),
																							
					array(
							'id' => 'ft_phn_number1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Phone Number 1', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')								
					),
					
					array(
							'id' => 'ft_phn_number2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Phone Number 2', 'stukram'),
							'subtitle' => esc_html__('(Optional)', 'stukram'),
							'required' => array('en_footer_contact_opt', '=' , 'st2')
					),					

					array(
			                'id' => 'notice_footer_nav',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Nav Menu Options', 'stukram'),
			                'desc' => esc_html__('Add a nav menu for footer section from menu option.', 'stukram'),
							'required' => array('en_footer_content_opt', '=' , 'st2')
			        ),					
					array(
							'id' => 'footer_nav_title1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Footer Nav Menu Text', 'stukram'),
							'subtitle' => esc_html__('Ex: Links', 'stukram'),
							'required' => array('en_footer_content_opt', '=' , 'st2')
					),	
					array(
			                'id' => 'notice_footer_social',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Social Icon Options', 'stukram'),
			                'desc' => esc_html__('', 'stukram'),
							'required' => array('en_footer_content_opt', '=' , 'st2')
			        ),						
					array(
							'id' => 'en_footer_social_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Social Icon', 'stukram'),
							'subtitle' => esc_html__('', 'stukram'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'stukram'),
									'st2' => esc_html__('Enable', 'stukram'),
							),
							'default'  => 'st1',
							'required' => array('en_footer_content_opt', '=' , 'st2')
					),					
					array(
							'id' => 'footer_social_title1',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Footer Social Icon Text', 'stukram'),
							'subtitle' => esc_html__('Ex: Follow Us', 'stukram'),
							'required' => array('en_footer_social_opt', '=' , 'st2')
					),						
				    array(
							'id' => 'theme-cus-copy',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Footer Copyright Text Options', 'stukram'),
							'desc' => esc_html__('Copyright text of your webSite.', 'stukram')
							
					  ),
					
					array(
							'id' => 'copyright',
							'type' => 'editor',
							'wpautop'=>true,
							'compiler' => 'true',
							'title' => esc_html__('Copyright Text', 'stukram'),
							'subtitle' => esc_html__('Insert copyright text here.', 'stukram'),
							'default'          => '&copy; Copyright 2022 Stukram. Developed By <a href="https://themeforest.net/user/webredox/portfolio" class="text-weight-700 js-pointer-small">webRedox</a>',
							'args'   => array(
								'teeny'            => true,
								'textarea_rows'    => 10
							)
					),

					array(
								'id' => 'notice_site_to_top',
								'type' => 'info',
								'notice' => true,
								'style' => 'success',
								'title' => esc_html__('To Top Button Option', 'stukram'),
								'desc' => esc_html__('Enable/Disable to top button.', 'stukram'),
								
						),
							
					array(
								'id' => 'enable_top_button',
								'type' => 'button_set',
								'title' => esc_attr__('To Top Button', 'stukram'),
								'subtitle' => esc_attr__('', 'stukram'),
								'desc' => '',
								'options' => array(
										'no'=> esc_html__('Disable', 'stukram'),
										'yes' => esc_html__('Enable', 'stukram'),
										
								),
								'default'  => 'no'
					),					
					
					)
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-key',
                    'title'  => esc_html__( 'Documentation', 'stukram' ),
                    'fields' => array(					
					
					array(
							'id' => 'docs',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Stukram Theme Documentation', 'stukram'),
							'desc' => __('<a href="http://webredox.net/demo/wp/stukram/doc/documentation.html" target="_blank">Click Here</a> To get the theme documentation.', 'stukram')
							
					),	

			
			
					)
                ));
				
				
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'stukram' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'stukram' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-stukram plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

