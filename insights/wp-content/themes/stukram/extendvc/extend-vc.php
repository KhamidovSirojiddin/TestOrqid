<?php
/*** Removing shortcodes ***/
vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_gallery");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_primary_title');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_hover_title');
    vc_remove_param('vc_hoverbox', 'hover_add_button');
	vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'disable_element');
	vc_remove_param('vc_row', 'el_id');
	vc_remove_param('vc_row', 'el_class');
	//vc_remove_param('vc_row', 'css_animation');
}

/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(		
		"Blank Section" => "st1",
		"Stukram Section" => "main-section",
	)
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Layout",
	"param_name" => "stukram_section_layout",
	"value" => array(
		"Full Width" => "section_full_width",
		"In Container" => "section_grid",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Container Layout",
	"param_name" => "stukram_section_layout_grid",
	"value" => array(
		"Default" => "",
		"Fluid" => "section_layout_grid",
		"Fluid 2" => "section_layout_grid2",
		"Wide" => "section_layout_grid3",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Row Layout",
	"param_name" => "stukram_section_row_grid",
	"value" => array(
		"Default" => "",
		"Row OFF" => "no",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Row Section ID",
	"param_name" => "stukram_section_id",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Row Section Class",
	"param_name" => "stukram_section_class",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Column Padding",
	"param_name" => "stukram_content_row_opt",
	"value" => array(
		"None" => "",
		"X60 Y48" => "x-gap-60 y-gap-48 layout-pt-md",
		"X48 Y40" => "x-gap-48 y-gap-40 layout-pt-sm",
		"X40 Y40 PT" => "x-gap-40 y-gap-40 layout-pt-sm",
		"X60 Y60" => "x-gap-60 y-gap-60 layout-pt-md",
		"Y32" => "y-gap-32 layout-pt-md",
		"X48 Y48" => "x-gap-48 y-gap-48",
		"X48 Y48 PT" => "x-gap-48 y-gap-48 layout-pt-md",
		"X48" => "x-gap-48",
		"X48 PT" => "x-gap-48 layout-pt-md",
		"X40 Y60" => "x-gap-40 y-gap-60",
		"X40 Y40" => "x-gap-40 y-gap-40",
		"X40" => "x-gap-40",
		"X40 PT" => "x-gap-40 layout-pt-md",
		"X32 Y32" => "x-gap-32 y-gap-32",
		"X32 Y32 PT" => "x-gap-32 y-gap-32 layout-pt-md",
		"No Gutters" => "no-gutters",
	),
	"description" => "Optional.",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Content Position",
	"param_name" => "stukram_content_position_opt",
	"value" => array(
		"None" => "",
		"Center" => "align-items-center",
		"Align End Justify" => "align-items-end justify-content-between",
		"Justify" => "justify-content-between",
		"Justify Center" => "justify-content-center text-center",
		"Justify Content" => "justify-content-center",
	),
	"description" => "Optional.",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
	
));



vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Animated Effect",
	"param_name" => "stukram_anim_wrap_delay",
	"value" => array(
		"Disable" => "",
		"Enable" => "st2",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Animated Delay",
	"param_name" => "stukram_anim_delay",
	"value" => array(
		"None" => "",
		"Delay 1" => "delay-1",
		"Delay 2" => "delay-2",	
		"Delay 3" => "delay-3",	
		"Delay 4" => "delay-4",	
		"Delay 5" => "delay-5",	
		"Delay 6" => "delay-6",	
		"Delay 7" => "delay-7",	
		"Delay 8" => "delay-8",	
		"Delay 9" => "delay-9",	
		"Delay 10" => "delay-10",	
		"Delay 11" => "delay-11",	
		"Delay 12" => "delay-12",	
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Section Padding Top",
	"param_name" => "stukram_df_padding_top",
	"value" => array(	
		"No Padding" => "no-padding-top",
		"Padding 10rem" => "layout-pt-xl",
		"Padding 7.5rem" => "layout-pt-lg",
		"Padding 5rem" => "layout-pt-md",
		"Padding 3.75rem" => "layout-pt-sm",
		"Padding 2.5rem" => "layout-pt-xs",
		"Padding 10rem (Hide Header)" => "layout-pt-pageHeader",
		"Padding 11.25rem" => "layout-pt-2xl",
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
	
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Section Padding Bottom",
	"param_name" => "stukram_df_padding_bottom",
	"value" => array(	
		"No Padding" => "no-padding-bottom",
		"Padding 10rem" => "layout-pb-xl",
		"Padding 7.5rem" => "layout-pb-lg",
		"Padding 5rem" => "layout-pb-md",
		"Padding 3.75rem" => "layout-pb-sm",
		"Padding 2.5rem" => "layout-pb-xs",
		"Padding 11.25rem" => "layout-pb-2xl",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background Color",
	"param_name" => "stukram_background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Color Scheme",
	"param_name" => "stukram_color_scheme",
	"value" => array(
		"Disable" => "",
		"Dark" => "bg-dark-1",
		"Light" => "bg-white",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background Image",
	"value" => "",
	"param_name" => "stukram_background_img",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Parallax Effect",
	"param_name" => "stukram_background_parallaxx",
	"value" => array(
		"None" => "",
		"Style 1" => "st1",
		"Style 2" => "st2",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Parallax Overlay",
	"param_name" => "stukram_parallax_overlay",
	"value" => array(
		"Dark" => "overlay-black-md",
		"Light" => "overlay-white-md",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Z-index",
	"param_name" => "stukram_background_index",
	"value" => array(
		"None" => "",
		"Z 1" => "Z-1",
		"Z 2" => "Z-2",
		"Z 3" => "Z-3",
		"Z 4" => "Z-4",
		"Z 5" => "Z-5",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Border Bottom",
	"param_name" => "stukram_df_border_bottom",
	"value" => array(
		"Disable" => "",
		"Dark" => "border-bottom-dark",
		"Light" => "border-bottom-white",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Default Padding",
	"param_name" => "stukram_section_df_pad",
	"value" => array(
		"Disable" => "",
		"Enable" => "y-gap",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"param_name" => "stukram_padding_top",
	"value" => "",
	"description" => esc_attr__("In format: 10px", 'stukram'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"param_name" => "stukram_padding_bottom",
	"value" => "",
	"description" => esc_attr__("In format: 10px", 'stukram'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Top",
	"param_name" => "stukram_margin_top",
	"value" => "",
	"description" => esc_attr__("In format: 10px", 'stukram'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Bottom",
	"param_name" => "stukram_margin_bottom",
	"value" => "",
	"description" => esc_attr__("In format: 10px", 'stukram'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Column Padding",
	"param_name" => "inner_sec_effect_opt",
	"value" => array(
		"None" => "",
		"X72 MT48" => "x-gap-72 md:mt-48",
		"X72" => "x-gap-72",
		"Y32" => "y-gap-32",
		"X32 Y60 PT" => "x-gap-32 y-gap-60 layout-pt-md",
		"X32 Y60" => "x-gap-32 y-gap-60",
		"X40 Y60" => "x-gap-40 y-gap-60",
		"X32 Y32 PT" => "x-gap-32 y-gap-32 layout-pt-md",
		"X32 Y32" => "x-gap-32 y-gap-32",
		"X48 Y48" => "x-gap-48 y-gap-48",
		"X40 Y32" => "x-gap-40 y-gap-32",
		"No Gutters" => "no-gutters mb-8 layout-pt-md sm:d-none",
		"No Gutters" => "justify-content-center text-center",
	),	
	"description" => "(Optional)",
));


/***************** Stukram  Shortcodes *********************/


// Heading  Block
class WPBakeryShortCode_WR_VC_Section_Heading  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Heading", "stukram",
        "base" => "wr_vc_section_heading",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-ui-custom_heading",       
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
					"Style 3" => "st3",
					"Style 4" => "st4",
				),
				"description" => ""
			),				
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Animate Effect",
				"param_name" => "animate",
				"value" => array(
					"Default" => "",
					"Enable" => "yes",
					"Disable" => "no",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title 2",
				"param_name" => "title4",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "animate", 'value' => array('yes'))
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Animate Delay",
				"param_name" => "animate_delay_title",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Animate Delay",
				"param_name" => "animate_delay_title2",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Editor",
				"param_name" => "text_editor",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "text_editor", 'value' => array('st1'))
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"dependency" => Array('element' => "text_editor", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Font Size",
				"param_name" => "df_font_size",
				"value" => array(
					"Default" => "",
					"XS" => "text-xs",
					"SM" => "text-sm",
					"LG" => "text-lg",
					"2XL" => "text-2xl",
					"3XL" => "text-3xl",
					"4XL" => "text-4xl",
					"5XL" => "text-5xl",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Animate Delay",
				"param_name" => "animate_delay_title3",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-black",
					"Light" => "-light",
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme 2",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Dark " => "-black",
					"Light" => "-white",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Style",
				"param_name" => "button_style",
				"value" => array(
					"Default" => "",
					"Dark " => "-outline-black text-black",
					"Dark 2" => "-black text-white",
					"Light" => "-outline-white text-white",
					"Light 2" => "-white text-black",
					"Underline Black" => "-underline fw-400 text-black",
					"Underline Light" => "-underline fw-400 text-white",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Animate Delay",
				"param_name" => "animate_delay_button",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Size",
				"param_name" => "screen",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Size",
				"param_name" => "screen2",
				"value" => array(
				    "Default" => "",
					"SM" => "text-sm",
					"LG" => "text-lg",
					"MD" => "text-md",
					"XL" => "text-xl",
					"XXL" => "text-xxl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Size",
				"param_name" => "screen3",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
					"Default" => "text-lg",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "MD Container",
				"param_name" => "md_container",
				"value" => array(
				    "Default" => "",
				    "Disable" => "none",
					"Enable" => "md:container",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Class Title",
				"param_name" => "df_title",
				"value" => array(
				    "Disable" => "",
					"Col 1" => "ml-minus-col-1 lg:ml-minus-lg mr-minus-col-2 md:ml-0 md:mr-0",
					"Col 2" => "ml-minus-col-2 md:ml-0",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin",
				"param_name" => "df_class",
				"value" => array(
					"None" => "",
					"ML 80" => "ml-80 md:ml-0 md:mt-48",
					"MT 48" => "md:mt-48 z-2",
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Title Margin",
				"param_name" => "df_title_mrg",
				"value" => array(
					"None" => "",
					"MT 32" => "leading-lg mt-32",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Button Margin",
				"param_name" => "df_button_mrg",
				"value" => array(
					"None" => "",
					"MT 32" => "mt-32",
					"MT 40" => "mt-40",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Content Margin",
				"param_name" => "df_con_mrg",
				"value" => array(
					"None" => "",
					"ML 20" => "mt-20",
					"ML 24 S" => "mt-24",
					"MT 24" => "sm:text-base mt-24",
					"MT 24 B" => "text-base mt-24",
					"MT 12" => "leading-md mt-12",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Padding",
				"param_name" => "df_pading",
				"value" => array(
				    "Default" => "",
				    "Disable" => "none",
					"PT 16" => "pt-16",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin Title",
				"param_name" => "title_mt",
				"value" => array(
				    "None" => "",
					"MT 40" => "mt-40 md:mt-24",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin Content",
				"param_name" => "title3_mt",
				"value" => array(
				    "None" => "",
					"MT 56" => "mt-56 lg:mt-40 md:mt-20",
					"MT 48" => "mt-48 md:mt-32",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin Button",
				"param_name" => "button_mt",
				"value" => array(
				    "None" => "",
					"MT 56" => "mt-56 lg:mt-48 md:mt-32",
					"MT 48" => "mt-48 md:mt-32",
					"MT 40" => "mt-40 md:mt-32",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st3', 'st4'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Margin",
				"param_name" => "margin3",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram'),
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Padding",
				"param_name" => "padding3",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram'),
			),	            
        ),
        
) );

// Title Block
class WPBakeryShortCode_WR_VC_Section_Title  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Title", "stukram",
        "base" => "wr_vc_section_title",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-layer-shape-text",        
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
					"Style 3" => "st3",
					"Style 4" => "st4",
					"Style 5" => "st5",					
				),
				"description" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st3', 'st4', 'st5'))
			),				
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Size",
				"param_name" => "screen",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st4', 'st5'))
			),				
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4', 'st5'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Editor",
				"param_name" => "text_editor",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "content",
				"value" => "",
				"dependency" => Array('element' => "text_editor", 'value' => array('st2'))
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "text_editor", 'value' => array('st1'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Font Size",
				"param_name" => "screen2",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st4'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Font Size",
				"param_name" => "df_font_size",
				"value" => array(
					"Default" => "",
					"XS" => "text-xs",
					"SM" => "text-sm",
					"LG" => "text-lg",
					"2XL" => "text-2xl",
					"3XL" => "text-3xl",
					"4XL" => "text-4xl",
					"5XL" => "text-5xl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1', 'st2', 'st3'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
            
        ),
        
) );

// Context Block
class WPBakeryShortCode_WR_VC_Section_Context  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Text Block", "stukram",
        "base" => "wr_vc_section_context",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-gitem-post-excerpt",        
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Editor",
				"param_name" => "text_editor",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"dependency" => Array('element' => "text_editor", 'value' => array('st2'))
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "text_editor", 'value' => array('st1'))
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Light" => "-light",
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme 2",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Dark " => "-black",
					"Light" => "-white",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin",
				"param_name" => "df_mrg",
				"value" => array(
					"None" => "",
					"MD MT 20" => "md:mt-20",
					"MT 20" => "mt-20",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Font Size",
				"param_name" => "df_font_size",
				"value" => array(
					"Default" => "",
					"XS" => "text-xs",
					"SM" => "text-sm",
					"LG" => "text-lg",
					"2XL" => "text-2xl",
					"3XL" => "text-3xl",
					"4XL" => "text-4xl",
					"5XL" => "text-5xl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Font Size",
				"param_name" => "df_class",
				"value" => array(
					"Default" => "",
					"LG" => "text-lg mt-24 sm:mt-16",
					"XL" => "text-3xl md:text-2xl leading-lg mt-24",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Line Height",
				"param_name" => "df_line_height",
				"value" => array(
					"Disable" => "",
					"Enable" => "leading-5xl",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),							
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
            
        ),
        
) );

// Image Block
vc_map( array(
		"name" => "Stukram Image",
		"base" => "wr_vc_section_image",
		"category" => 'By Stukram',
		"icon" => "icon-wpb-single-image",
		"allowed_contaistukram_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"None" => "",
					"Style 1" => "st1",
					"Style 2" => "st2",					
					"Style 3" => "st3",					
					"Style 4" => "st4",					
					"Style 5" => "st5",					
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Effect",
				"param_name" => "animate",
				"value" => array(
					"Default" => "",
					"Disable" => "no",
					"Enable" => "yes",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4'))
			),				
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Parallax",
				"param_name" => "df_parallax",
				"value" => array(
					"None" => "",
					"P 0.5" => "0.5",	
					"P 0.6" => "0.6",						
					"P 0.7" => "0.7",												
					"P 0.8" => "0.8",												
					"P 0.9" => "0.9",												
				),
				"description" => "",
			), 			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Height",
				"param_name" => "df_height",
				"value" => array(
					"None" => "",
					"H-80" => "h-80vh",	
					"H-100" => "h-100vh",					
					"H-LG Z-5" => "h-lg z-5 js-image",		
					"H-LG" => "h-lg",		
					"H-1/2" => "ratio ratio-1:1",		
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st3', 'st5'))
			), 				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Class",
				"param_name" => "df_class",
				"value" => array(
					"None" => "",
					"Cover Dark" => "bg-dark-1",	
					"Z-5 Relative" => "z-5 relative",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st3'))
			), 			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 0" => "delay-0",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4', 'st5'))
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Position",
				"param_name" => "df_position",
				"value" => array(
					"None" => "",
					"Left" => "img-left",
					"Right" => "img-right",	
				),
				"description" => "",
				"dependency" => Array('element' => "animate", 'value' => array('yes'))
			),						
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Cover Scheme",
				"param_name" => "cover_scheme",
				"value" => array(
					"None" => "",
					"Light" => "cover-white",
					"Dark" => "cover-dark",	
					"Dark 2" => "cover-dark-2",	
				),
				"description" => "",
				"dependency" => Array('element' => "animate", 'value' => array('yes'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Ratio",
				"param_name" => "ratio",
				"value" => array(
					"None" => "",
					"Ratio 1:1" => "1:1",
					"Ratio 3:4" => "3:4",
					"Ratio 16:9" => "16:9",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4'))
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Height",
				"param_name" => "height",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "",
					"Left" => "left",
					"Right" => "right",
				),
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Position",
				"param_name" => "position",
				"value" => array(
					"Default" => "",
					"Inherit" => "inherit",
					"Absolute" => "absolute",
					"Relative" => "relative",
					"Static" => "static",
					
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))				
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Top",
				"param_name" => "top",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Bottom",
				"param_name" => "Bottom",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Left",
				"param_name" => "left",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Right",
				"param_name" => "right",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Z-index",
				"param_name" => "zindex",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram'),
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram'),
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))	
			),

		)
) );

// Carousel Slide Block
class WPBakeryShortCode_WR_VC_Img_Slides  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Carousel Slider", "stukram",
        "base" => "wr_vc_img_slides",
        "as_parent" => array('only' => 'wr_vc_img_slide'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-images-stack",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Pagination Color Scheme",
				"param_name" => "scheme",
				"value" => array(					
					"Dark" => "-dark",
					"Light" => "-light",
				),
				"description" => ""
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Img_Slide extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Image Slide List", "stukram",
        "base" => "wr_vc_img_slide",
        "content_element" => true,
		"icon" => "icon-wpb-single-image",
        "as_child" => array('only' => 'wr_vc_img_slides'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(	
		
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Slide Image",
				"param_name" => "image",
				"value" => ""
			),	               
        )
) );

// Image Gallery (Fancy) Block
class WPBakeryShortCode_WR_VC_Img_Fancys  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Image Gallery (Fancy Grid)", "stukram",
        "base" => "wr_vc_img_fancys",
        "as_parent" => array('only' => 'wr_vc_img_fancy'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-media-grid",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "col_size",
				"value" => array(
					"Default" => "",
					"Col 2" => "-col-2",
					"Col 3" => "-col-3",
					"Col 4" => "-col-4",
				),
				"description" => "",
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Img_Fancy extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Image Gallery List", "stukram",
        "base" => "wr_vc_img_fancy",
        "content_element" => true,
		"icon" => "icon-wpb-single-image",
        "as_child" => array('only' => 'wr_vc_img_fancys'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(	
		
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Gallery Image",
				"param_name" => "image",
				"value" => ""
			),	 				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme ",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Dark " => "-black",
					"Light" => "-white",
				),
				"description" => "",
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),				
        )
) );
// Image Gallery (Masonry) Block
class WPBakeryShortCode_WR_VC_Img_Masonrys  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Image Gallery (Masonry Grid)", "stukram",
        "base" => "wr_vc_img_masonrys",
        "as_parent" => array('only' => 'wr_vc_img_masonry'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-masonry-media-grid",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "col_size",
				"value" => array(
					"Default" => "",
					"Col 2" => "-col-2",
					"Col 3" => "-col-3",
					"Col 4" => "-col-4",
				),
				"description" => "",
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Img_Masonry extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Image Gallery List", "stukram",
        "base" => "wr_vc_img_masonry",
        "content_element" => true,
		"icon" => "icon-wpb-single-image",
        "as_child" => array('only' => 'wr_vc_img_masonrys'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(	
		
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Gallery Image",
				"param_name" => "image",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Image Size",
				"param_name" => "img_size",
				"value" => array(
					"Default" => "",
					"Wide" => "-wide",
					"Big" => "-big",
					"Long" => "-long",
				),
				"description" => "",
			),			
        )
) );


// Video Block
vc_map( array(
		"name" => "Stukram Video",
		"base" => "wr_vc_section_video",
		"category" => 'By Stukram',
		"icon" => "icon-wpb-film-youtube",
		"allowed_contaistukram_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Video Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
				"description" => __("Please insert video link url in format: https://www.youtube.com/watch?v=ANYfx4-jyqY", 'stukram'),
			),			
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Video Background Image",
				"param_name" => "image",
				"value" => ""
			),							
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Color Scheme",
				"param_name" => "cover_scheme",
				"value" => array(
					"Light" => "bg-white text-black",
					"Dark" => "bg-black text-white",	
				),
				"description" => "",
			),	

		)
) );

// Button  Block
class WPBakeryShortCode_WR_VC_Section_Button  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Button", "stukram",
        "base" => "wr_vc_section_button",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-ui-button",       
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_name",
				"value" => "",
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Style",
				"param_name" => "button_style",
				"value" => array(
					"Default" => "",
					"Dark " => "-outline-black text-black",
					"Dark 2" => "-black text-white",
					"Light" => "-outline-white text-white",
					"Light 2" => "-white text-black",
				),
				"description" => "",
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Size",
				"param_name" => "size",
				"value" => array(
				    "Default" => "",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
				),
				"description" => ""
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin",
				"param_name" => "df_margin",
				"value" => array(
					"Disable" => "",
					"Enable" => "sm:mt-24",
				),
				"description" => ""
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Class",
				"param_name" => "df_class",
				"value" => array(
				    "Disable" => "",
					"Enable" => "col-md-auto",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "",
					"Left" => "left",
					"Right" => "right",
				),
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	         
        ),
        
) );

// Portfolio Block
vc_map( array(
		"name" => "Stukram Portfolio",
		"base" => "wr_vc_portfolio",
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-hoverbox",
		"allowed_contaistukram_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "CSS Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Pagination",
				"param_name" => "post_pagination",
				"value" => array(
					"Disable" => "st1",				
					"Enable" => "st2",
				),
				"description" => "Not working with multiple WPBakery elements.",
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Previous",
				"param_name" => "pagination_previous",
				"value" => "",
				"admin_label" => true,
				"description" => __("Text translation option", 'stukram'),				
				"dependency" => Array('element' => "post_pagination", 'value' => array('st2'))
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Next",
				"param_name" => "pagination_next",
				"value" => "",
				"admin_label" => true,
				"description" => __("Text translation option", 'stukram'),				
				"dependency" => Array('element' => "post_pagination", 'value' => array('st2'))
			),
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Fancy Grid 1" => "st1",
					"Fancy Grid 2" => "st4",
					"Masonry Grid 1" => "st2",
					"Masonry Grid 2" => "st3",
					"Masonry Filter" => "st5",
					"Simple Filter" => "st6",
					"Vertical" => "st7",
				),
				"description" => ""
			),

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Include Category",
				"param_name" => "categoryname",
				"value" => "",
				"admin_label" => true,
				"description" => __("(Optional) Insert category name in format: Graphic", 'stukram')
			),			
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Filter Option",
				"param_name" => "filter_type",
				"value" => array(
					"Enable" => "yes",				
					"Disable" => "no",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st5', 'st6'))
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of categories to show",
				"param_name" => "cat_count",
				"value" => "",
				"admin_label" => true,
				"description" => __("Number of categories to show in the filter option.", 'stukram'),				
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Exclude category ",
				"param_name" => "exclude_cat_id",
				"value" => "",
				"admin_label" => true,
				"description" => __("Exclude category from the filter by the category ID e.x: 6 <br>For multiple category ID e.x: 6 7<br> If you want to use this option, then please write that category name  in the Include Category option, you want to show post from that category.", 'stukram'),				
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number Of Posts To Show",
				"param_name" => "postcount",
				"value" => "100",
				"admin_label" => true,
				"description" => __("Insert number of post show in format: 8", 'stukram')
			),

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'stukram'),
				"param_name" => "postoffset",
				"value" => "",
				"admin_label" => true,
				"description" => esc_attr__('(Optional)Use this field if you need.', 'stukram'),
				"dependency" => Array('element' => "post_pagination", 'value' => array('st1'))
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "View All Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => __("Change/Replace View All Text Here.", 'stukram'),				
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Style",
				"param_name" => "button_style",
				"value" => array(
					"Default" => "",
					"Dark " => "-outline-black text-black",
					"Dark 2" => "-black text-white",
					"Light" => "-outline-white text-white",
					"Light 2" => "-white text-black",
				),
				"description" => "",
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Size",
				"param_name" => "screen3",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
					"Default" => "text-lg",
				),
				"description" => "",
				"dependency" => Array('element' => "filter_type", 'value' => array('yes'))
			),	
			
			
				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "View Project Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"description" => __("Change/Replace View Project Text Here.", 'stukram'),				
				"dependency" => Array('element' => "featyretype", 'value' => array('st7'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "col_size",
				"value" => array(
					"Default" => "",
					"Col 2" => "-col-2",
					"Col 3" => "-col-3",
					"Col 4" => "-col-4",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Gap",
				"param_name" => "gap_size",
				"value" => array(				    
					"Default" => "",
					"Gap 32" => "-gap-32",
					"Gap 16" => "-gap-16",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st3', 'st5', 'st6'))
			),				
						
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Class",
				"param_name" => "df_class",
				"value" => array(
					"None" => "",
					"reverse" => "-reverse",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st4'))
			),			
								
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animation Cover Scheme",
				"param_name" => "cover_scheme",
				"value" => array(
					"None" => "",
					"Light" => "-cover-white-1",
					"Dark" => "-cover-dark-1",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1', 'st2', 'st3', 'st7'))
			), 
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animation Delay Image",
				"param_name" => "animate_delay_img",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4', 'st7'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animation Delay Title",
				"param_name" => "animate_delay_title",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animation Delay Category",
				"param_name" => "animate_delay_title2",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'stukram'),
				"param_name" => "postoffset",
				"value" => "",
				"admin_label" => true,
				"description" => esc_attr__('(Optional)Use this field if you need.', 'stukram'),
				"dependency" => Array('element' => "post_pagination", 'value' => array('st1'))
			),			
		)
) );

// Blog Block
vc_map( array(
		"name" => "Stukram Blog",
		"base" => "wr_vc_blog",
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-gitem-post-date",
		"allowed_contaistukram_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Set Show Post Number",
				"param_name" => "showpost",
				"value" => "100",
				"admin_label" => true,
				"description" => __("Please insert number of member show in format: 3", 'stukram')
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"admin_label" => true,
				"description" => __("(Optional) Insert category name in format: Graphic", 'stukram')
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Read More Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => __("Change/Replace read more text here.", 'stukram'),
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Row Column Gap",
				"param_name" => "df_class",
				"value" => array(
					"None" => "",
					"X48 Y40" => "x-gap-48 y-gap-40",
					"X40 Y40" => "x-gap-40 y-gap-40",	
				),
				"description" => "",
				//"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),  			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Cover Scheme",
				"param_name" => "cover_scheme",
				"value" => array(
					"Default" => "",
					"Light" => "-cover-white-1",
					"Dark" => "-cover-dark-1",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			), 
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay Image",
				"param_name" => "animate_delay_img",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
				//"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay Title",
				"param_name" => "animate_delay_title",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay Meta Info",
				"param_name" => "animate_delay_title2",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay Read More",
				"param_name" => "animate_delay_title3",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
		)
) );

// Services Block
class WPBakeryShortCode_WR_VC_Services  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Services", "stukram",
        "base" => "wr_vc_services",
        "as_parent" => array('only' => 'wr_vc_service'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-gitem-post-title",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Element Style",
				"param_name" => "featyretype",
				"value" => array(
					"Default" => "st1",
					"Featured Image & Icon" => "st2",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Type",
				"param_name" => "icontype",
				"value" => array(
					"Feather Icons" => "st1",
					"Fontawesome Icons" => "st2",
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "icon_class",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://feathericons.com/' target='_blank'>Feather Icons</a> Icon Class. <br> Ex: activity",
				"dependency" => Array('element' => "icontype", 'value' => array('st1'))
				
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "icon_class_awesome",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome</a> Icon Class. <br> Ex: fas fa-address-book",
				"dependency" => Array('element' => "icontype", 'value' => array('st2'))
				
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))				
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Image Position",
				"param_name" => "position",
				"value" => array(
					"Left" => "st1",
					"Right" => "st2",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Image Ratio",
				"param_name" => "ratio",
				"value" => array(
					"Ratio 1:1" => "1:1",
					"Ratio 3:4" => "3:4",
					"Ratio 4:3" => "4:3",
					"Ratio 16:9" => "16:9",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2', 'st4'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Image Parallax",
				"param_name" => "df_parallax",
				"value" => array(
					"None" => "",
					"P 0.5" => "0.5",	
					"P 0.6" => "0.6",						
					"P 0.7" => "0.7",												
					"P 0.8" => "0.8",												
					"P 0.9" => "0.9",												
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			), 						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Anim Cover Scheme",
				"param_name" => "scheme_cover",
				"value" => array(
					"Light" => "",
					"Dark" => "cover-dark-2",
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Light" => "bg-white shadow-light",
					"Light No Shadow" => "bg-white",
					"Dark" => "bg-black bg-white shadow-dark",
					"Dark No Shadow" => "bg-black",
				),
				"description" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Black" => "-black",
					"Dark " => "-dark",
					"Light" => "-light",
					"White" => "-white",
				),
				"description" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),		
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Service extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Services List Item", "stukram",
        "base" => "wr_vc_service",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_services'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	            
        )
) );

// Services 2 Block
class WPBakeryShortCode_WR_VC_Section_Services  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Services 2", "stukram",
        "base" => "wr_vc_section_services",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "vc_icon-vc-gitem-post-title",       
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Light" => "bg-white shadow-light",
					"Dark" => "bg-dark shadow-dark",
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Type",
				"param_name" => "icontype",
				"value" => array(
					"Feather Icons" => "st1",
					"Fontawesome Icons" => "st2",
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "icon_class",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://feathericons.com/' target='_blank'>Feather Icons</a> Icon Class. <br> Ex: activity",
				"dependency" => Array('element' => "icontype", 'value' => array('st1'))
				
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "icon_class_awesome",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome</a> Icon Class. <br> Ex: fas fa-address-book",
				"dependency" => Array('element' => "icontype", 'value' => array('st2'))
				
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Editor",
				"param_name" => "text_editor",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "content",
				"value" => "",
				"dependency" => Array('element' => "text_editor", 'value' => array('st2'))
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"dependency" => Array('element' => "text_editor", 'value' => array('st1'))
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Color Scheme",
				"param_name" => "button_style",
				"value" => array(
					"Dark" => "text-black",
					"Light" => "text-white",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	          
        ),
        
) );

// Team Member Block
class WPBakeryShortCode_WR_VC_Teams  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Team Member", "stukram",
        "base" => "wr_vc_teams",
        "as_parent" => array('only' => 'wr_vc_team'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-ui-tab-content",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),		
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Team extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Team Member List", "stukram",
        "base" => "wr_vc_team",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_teams'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(					
					"Dark" => "text-black",
					"Light" => "text-white",
				),
				"description" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon",
				"param_name" => "icon_class",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://fontawesome.com/icons?d=gallery' target='_blank'>Fontawesome</a> Icon Class. <br> Ex: fab fa-twitter",
				
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	                
        )
) );

// Testimonials Block
class WPBakeryShortCode_WR_VC_Section_Testimonials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Testimonials", "stukram",
        "base" => "wr_vc_section_testimonials",
        "as_parent" => array('only' => 'wr_vc_section_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-ui-tab-content",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Autoplay Speed",
				"param_name" => "autoplay_speed",
				"value" => "",
				"description" => esc_attr__("Please insert autoplay speed here. Ex: 3500", 'stukram'),
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Light" => "-light",
					"Dark" => "-dark",	
				),
				"description" => "",
			), 			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => __("Ex: DRAG", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Section_Testimonial extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Testimonial Item", "stukram",
        "base" => "wr_vc_section_testimonial",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_section_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "col_size",
				"value" => array(
					"Col 8" => "col-lg-8",
					"Col 9" => "col-lg-9",
				),
				"description" => "",
			), 		
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Client Image",
				"param_name" => "image",
				"value" => ""
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Client Name",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Text",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),		
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Quote Text",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Light" => "-light",
					"Dark" => "-dark",	
				),
				"description" => "",
			), 
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Color Scheme 2",
				"param_name" => "scheme2",
				"value" => array(
					"Light" => "-white",
					"Dark" => "-black",	
				),
				"description" => "",
			), 				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Client Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Client Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Quote Margin",
				"param_name" => "margin3",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram'),
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Quote Padding",
				"param_name" => "padding3",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram'),
			),	             
        )
) );

// Counter Block
class WPBakeryShortCode_WR_VC_Section_Counter  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Counter", "stukram",
        "base" => "wr_vc_section_counter",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-vc-round-chart",        
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Counter Number",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: 41",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "MD Container",
				"param_name" => "md_container",
				"value" => array(
				    "Disable" => "",
					"Enable" => "md:container",
				),
				"description" => "",
			),	
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Light" => "-light",
				),
				"description" => "",
			),						
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Size",
				"param_name" => "screen",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Counter Size",
				"param_name" => "screen2",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xxl",
				),
				"description" => ""
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Left" => "-left",
					"Right" => "-right",
				)
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Counter Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Counter Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
            
        ),
        
) );

// Progress Bar Block
class WPBakeryShortCode_WR_VC_Progress  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Progress Bar", "stukram",
        "base" => "wr_vc_progress",
        "as_parent" => array('only' => 'wr_vc_progres'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-graph",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	 	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Progres extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Progress Item", "stukram",
        "base" => "wr_vc_progres",
        "content_element" => true,
		"icon" => "icon-wpb-graph",
        "as_child" => array('only' => 'wr_vc_progress'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(		
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: Graphic Design",
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Percentage",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: 83",
			),												
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Black " => "-black",
					"White" => "-white",
				),
				"description" => "",
			),							
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	          
        )
) );

// Pricing Plan Block
class WPBakeryShortCode_WR_VC_Pricings  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Pricing Plan", "stukram",
        "base" => "wr_vc_pricings",
        "as_parent" => array('only' => 'wr_vc_pricing'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-ui-tab-content",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",		
				),
				"description" => "",
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: Personal",
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Price",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: $ 49",
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Duration",
				"param_name" => "title4",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: Monthly",
			),										
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: Get the current deal without any risk and additional fees.",
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Light" => "-light",
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme 2",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Black " => "-black",
					"White" => "-white",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Box Shadow",
				"param_name" => "shadow",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Light" => "-light",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "BG Cover Scheme",
				"param_name" => "scheme_cover",
				"value" => array(
					"Default" => "",					
					"Light" => "bg-white",
					"Dark " => "bg-dark-1",
				),
				"description" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Style",
				"param_name" => "button_style",
				"value" => array(
					"Default" => "",
					"Dark " => "-outline-black text-black",
					"Dark 2" => "-black text-white",
					"Light" => "-outline-white text-white",
					"Light 2" => "-white text-black",
					"Underline Black" => "-underline fw-400 text-black",
					"Underline Light" => "-underline fw-400 text-white",
				),
				"description" => "",
			),							
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Subtitle Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Margin",
				"param_name" => "margin3",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram'),
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Padding",
				"param_name" => "padding3",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram'),
			),	 	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Pricing extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Pricing List", "stukram",
        "base" => "wr_vc_pricing",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_pricings'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
				"description" => "Ex: Custom permissions",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Light" => "-light",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Line Through",
				"param_name" => "line",
				"value" => array(
					"Disable" => "",
					"Enable " => "line-through",
				),
				"description" => "",
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	          
        )
) );

// Awards Block
class WPBakeryShortCode_WR_VC_Section_Awards  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Awards", "stukram",
        "base" => "wr_vc_section_awards",
        "as_parent" => array('only' => 'wr_vc_section_award2'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => esc_attr__('By Stukram', 'stukram'),
		"icon" => "icon-wpb-toggle-small-expand",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Section Type",
				"param_name" => "featyretype",
				"value" => array(
					"Header Section" => "st1",
					"Content List Section" => "st2",	
				),
				"description" => "",
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => " Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),				
		 
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Section_Award2  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Awards Iteam", "stukram",
        "base" => "wr_vc_section_award2",
        "as_parent" => array('only' => 'wr_vc_section_award3'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"as_child" => array('only' => 'wr_vc_section_awards'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "content_element" => true,
		"category" => esc_attr__('By Stukram', 'stukram'),
		"icon" => "icon-wpb-ui-tab-content",
        "show_settings_on_create" => true,
        "params" => array(
		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Section Type",
				"param_name" => "featyretype",
				"value" => array(
					"Header Section" => "st1",
					"Content List Section" => "st2",	
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Border Bottom",
				"param_name" => "border_bottom",
				"value" => array(
					"None" => "",
					"Dark" => "border-bottom-dark",
					"Light" => "border-bottom-light",	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),			
			
        ),
        "js_view" => 'VcColumnView'
) );
class WPBakeryShortCode_WR_VC_Section_Award3 extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Awards List", "stukram",
        "base" => "wr_vc_section_award3",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_section_award2'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(			
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Section Type",
				"param_name" => "featyretype",
				"value" => array(
					"Header Section" => "st1",
					"Content List Section" => "st2",	
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "col_size",
				"value" => array(
					"None" => "",
					"Col LG 2 MD 1" => "col-lg-2 col-md-1",
					"Col LG 2 MD 2" => "col-lg-2 col-md-2",
					"Col LG 2 MD 3" => "col-lg-2 col-md-3",
					"Col LG 3 MD 2" => "col-lg-3 col-md-2",
					"Col LG 3 MD 3" => "col-lg-3 col-md-3",
				),
				"description" => "",
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Column Offset",
				"param_name" => "col_offset",
				"value" => array(
					"Disable" => "",
					"Enable" => "offset-lg-1 offset-md-1",
				),
				"description" => "",
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"description" =>  "",
				"admin_label" => true,
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme2",
				"value" => array(
					"Default" => "",
					"Dark " => "-black",
					"Light" => "-white",
				),
				"description" => "",
			),										
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),																	
            
        )
) );

// Partner Block
vc_map( array(
		"name" => "Stukram Partner",
		"base" => "wr_vc_section_partner",
		"category" => 'By Stukram',
		"icon" => "icon-wpb-slideshow",
		"allowed_contaistukram_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Partner Logo Image",
				"param_name" => "image",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Delay",
				"param_name" => "animate_delay",
				"value" => array(
					"None" => "",
					"Delay 1" => "delay-1",
					"Delay 2" => "delay-2",	
					"Delay 3" => "delay-3",	
					"Delay 4" => "delay-4",	
					"Delay 5" => "delay-5",	
					"Delay 6" => "delay-6",	
					"Delay 7" => "delay-7",	
					"Delay 8" => "delay-8",	
					"Delay 9" => "delay-9",	
					"Delay 10" => "delay-10",	
					"Delay 11" => "delay-11",	
					"Delay 12" => "delay-12",	
				),
				"description" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "featyretype",
				"value" => array(
					"Light" => "st1",
					"Dark" => "st2",	
				),
				"description" => "",
			),			

		)
) );

// Social Icon Block Block
class WPBakeryShortCode_WR_VC_Socials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Social Icon", "stukram",
        "base" => "wr_vc_socials",
        "as_parent" => array('only' => 'wr_vc_social'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-vc_icon",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Size",
				"param_name" => "screen",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xl",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Padding",
				"param_name" => "df_pad",
				"value" => array(
					"None" => "",
					"Enable" => "df-pad",
				),
				"description" => ""
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Padding",
				"param_name" => "df_pad",
				"value" => array(					
					"MT 16" => "mt-16 md:mt-12",
					"MT 32" => "mt-32",
					"None" => "",
				),
				"description" => ""
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Social extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Stukram Social Icon List", "stukram",
        "base" => "wr_vc_social",
        "content_element" => true,
		"icon" => "icon-wpb-ui-tab-content",
        "as_child" => array('only' => 'wr_vc_socials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Light" => "text-white border-white",
					"Dark" => "text-black border-dark",
				),
				"description" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon",
				"param_name" => "icon_class",
				"value" => "",
				"admin_label" => true,
				"description" => "Use <a href='https://fontawesome.com/icons?d=gallery' target='_blank'>Fontawesome</a> Icon Class. <br> Ex: fab fa-twitter",
				
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link URL",
				"param_name" => "link_url",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Default" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),	            
        )
) );

// Contact Info Block
class WPBakeryShortCode_WR_VC_Section_Contact  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Contact Info", "stukram",
        "base" => "wr_vc_section_contact",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-atm",        
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color Scheme",
				"param_name" => "scheme",
				"value" => array(
					"Default" => "",
					"Dark " => "-dark",
					"Black " => "-black",
					"Light" => "-light",
					"White" => "-white",
				),
				"description" => "",
			),					
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Size",
				"param_name" => "screen",
				"value" => array(
				    "Default" => "",
					"SM" => "-sm",
					"LG" => "-lg",
					"MD" => "-md",
					"XL" => "-xl",
					"XXL" => "-xl",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",	
                "admin_label" => true,				
			),
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Address Location",
				"param_name" => "title2",
				"value" => "",
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Mail Address",
				"param_name" => "title3",
				"value" => "",
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Mail Address 2",
				"param_name" => "title4",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Phone Number",
				"param_name" => "title5",
				"value" => "",
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Phone Number 2",
				"param_name" => "title6",
				"value" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Padding",
				"param_name" => "df_pad",
				"value" => array(
					"None" => "",
					"Enable" => "df-pad",
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Title Margin",
				"param_name" => "df_title_mrg",
				"value" => array(
					"Default" => "",
					"Disable" => "none",
					"Enable" => "mt-16",
				),
				"description" => ""
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),					
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),	
            
        ),
        
) );

// Contact Form Block
class WPBakeryShortCode_WR_VC_Section_Cform  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Stukram Contact Form", "stukram",
        "base" => "wr_vc_section_cform",
        "content_element" => true,
		"category" => 'By Stukram',
		"icon" => "icon-wpb-atm",        
        "params" => array(

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	

			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Form ID",
				"param_name" => "contactfromid",
				"value" => "",
				"admin_label" => true,
				"description" => __("Please insert contact form id number in format: 5", 'stukram')
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Row",
				"param_name" => "df_row",
				"value" => array(
					"Disable" => "",
					"Enable" => "row",
				),
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Margin",
				"param_name" => "df_mrg",
				"value" => array(
					"Disable" => "",
					"Enable" => "mt-48 sm:mt-32",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'stukram')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'stukram')
			),		
            
        ),
        
) );



?>