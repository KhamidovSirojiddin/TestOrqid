<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'el_class' => '',
	'row_type' => 'st1',
	'stukram_section_id' => '',
	'stukram_section_id2' => '',
	'stukram_section_class' => '',
	'stukram_default_class2' => '',
	'stukram_section_layout' => '',
	'stukram_section_layout_grid' => '',	
	'stukram_section_height' => '',
	'stukram_background_img' => '',
	'stukram_background_color' => '',
	'stukram_color_scheme' => '',
	'stukram_background_parallax' => '',
	'stukram_background_parallaxx' => '',
	'stukram_background_fancy' => '',
	'stukram_padding_top' => '',
	'stukram_padding_top2' => '',
	'stukram_padding_bottom' => '',
	'stukram_padding_bottom2' => '',
	'stukram_margin_top' => '',
	'stukram_margin_top2' => '',
	'stukram_margin_bottom' => '',
	'stukram_margin_bottom2' => '',
	'stukram_default_pad' => '',	
	'stukram_section_class2' => '',	
	'stukram_default_pad2' => '',	
	'stukram_featured_img' => '',	
	'stukram_section_title' => '',	
	'stukram_section_subtitle' => '',	
	'stukram_section_number' => '',	
	'stukram_separator' => '',	
	'stukram_df_padding_top' => '',	
	'stukram_df_padding_bottom' => '',	
	'stukram_content_row_opt' => '',	
	'stukram_content_position_opt' => '',	
	'stukram_anim_wrap' => 'data-anim-wrap',		
	'stukram_background_index' => '',		
	'stukram_parallax_overlay' => 'overlay-black-md',		
	'stukram_section_row_grid' => '',			
	'stukram_df_border_bottom' => '',			
	'stukram_anim_wrap_delay' => '',			
	'stukram_anim_delay' => '',			
	'stukram_anim_wrap2' => 'data-anim-wrap',			
	'stukram_section_df_pad' => '',			

), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');

// separator
if ($stukram_separator == "st2"){
   $stukram_section_separator ='';
} else {
   $stukram_section_separator ='<div class="sec-dec"></div>';
}



$stukram_back_image ="";
if($stukram_background_img != '' || $stukram_background_img != ' ') { 
	$stukram_back_image = wp_get_attachment_image_src( $stukram_background_img, 'full');
}
$stukram_featured_image ="";
if($stukram_featured_img != '' || $stukram_featured_img != ' ') { 
	$stukram_featured_image = wp_get_attachment_image_src( $stukram_featured_img, 'full');
}

$stukram_class_layout_full =  "";
$stukram_row_layout_full =  "";
$stukram_class_layout_grid =  "";
$stukram_row_layout_grid =  "";
if($stukram_section_layout == "section_grid"){
	if($stukram_section_layout_grid == "section_layout_grid"){
	$stukram_class_layout_grid =  "container-fluid";
	} else if($stukram_section_layout_grid == "section_layout_grid2"){
	$stukram_class_layout_grid =  "container-fluid px-0";
	} else if($stukram_section_layout_grid == "section_layout_grid3"){
	$stukram_class_layout_grid =  "container-wide";
	} else {
	$stukram_class_layout_grid =  "container";	
	}	
	if($stukram_section_row_grid == "no"){
	$stukram_row_layout_grid =  "row-off";		
	} else {	
	$stukram_row_layout_grid =  "row";	
	}
}
else {
	$stukram_class_layout_full =  "wr-section-full-width";
	$stukram_row_layout_full =  "row-off";	
}


//blank row
if($row_type == 'st1'){
    $output .='<div class="clear"></div>';
    $output .='<div class="blank-section">';
	
}
// main row
else if($row_type == 'main-section'){

$output .='<div class="clear"></div>';
$output .='<section';
if($stukram_section_id != ""){
$output .=' id="'.$stukram_section_id.'"';
}
$output .=' class="full-width-section '.$stukram_class_layout_full.' '.$stukram_color_scheme.' '.$stukram_section_class.' '.$stukram_section_df_pad.'" ';
if($stukram_background_parallaxx == "st2"){
$output .=' data-parallax="0.7"';	
}	
$output.='>';	
    if($stukram_background_img != ""){ 
		if($stukram_background_parallaxx == "st1"){
		$output.='<div data-parallax="0.7" class="bg-fill-image '.$stukram_parallax_overlay.'">';	
			$output.='<div data-parallax-target class="bg-image js-lazy" data-bg="'.$stukram_back_image[0].'"></div>';			
		$output.='</div>';	
		}
		else if($stukram_background_parallaxx == "st2"){
			$output.='<div data-parallax-target class="'.$stukram_parallax_overlay.' bg-image js-lazy" data-bg="'.$stukram_back_image[0].'"></div>';	
		}	
    }
    $output .='<div class="block-wrapper '.$stukram_df_padding_top.' '.$stukram_df_padding_bottom.' '.$stukram_df_border_bottom.'"';	
	if($stukram_section_height != "" || $stukram_background_color != "" || $stukram_padding_top != "" || $stukram_padding_bottom != "" || $stukram_margin_top != "" || $stukram_margin_bottom != "" || $stukram_background_img != ""){
			$output .= " style='";
				if($stukram_section_height != ""){
					$output .="min-height:".$stukram_section_height.";";
				}			
				if($stukram_background_color != ""){
					$output .="background-color:".$stukram_background_color.";";
				}
				if($stukram_background_parallaxx != "st1"){
				if($stukram_background_parallaxx != "st2"){	
					if($stukram_background_img != ""){ 
					$output .="background: url(".$stukram_back_image[0].");";
					}
				}
				}
				if($stukram_padding_top != ""){
					$output .=" padding-top:".$stukram_padding_top.";";
				}
				if($stukram_padding_bottom != ""){
					$output .=" padding-bottom:".$stukram_padding_bottom.";";
				}
				if($stukram_margin_top != ""){
					$output .=" margin-top:".$stukram_margin_top.";";
				}
				if($stukram_margin_bottom != ""){
					$output .=" margin-bottom:".$stukram_margin_bottom.";";
				}				
				$output.="'";
		}
		if($stukram_background_fancy != ""){
			$output .= " data-overlay-dark='".$stukram_background_fancy."'";	
		}	
		if($stukram_background_img != ""){
			$output .= " data-background='".$stukram_back_image[0]."'";	
		}		
	$output.=">";
		$output .='<div '.$stukram_anim_wrap2.' class="section-wrapper '.$stukram_class_layout_grid.' '.$stukram_background_index.'">';		
		$output .='<div '.$stukram_anim_wrap.' class="row-layout '.$stukram_row_layout_full.' '.$stukram_row_layout_grid.' '.$stukram_content_row_opt.' '.$stukram_content_position_opt.'"';
			if($stukram_anim_wrap_delay == "st2"){
			$output .=' data-anim-child="slide-up '.$stukram_anim_delay.'"';	
			}		
		$output .='>';

}

//blank row by default
else {
$output .='<div class="clear"></div>';
$output .='<div class="blank-section">';	
}

if($row_type != 'content_menu'){
	$output .= wpb_js_remove_wpautop($content);
}
//blank row
if($row_type == 'st1'){
	$output .= '</div><div class="clear"></div>'.$this->endBlockComment('row');
}
// main row
else if($row_type == 'main-section'){
$output .= '</div></div></div></section><div class="clear"></div>'.$this->endBlockComment('row');
}
//blank row by default
else {
$output .= '</div><div class="clear"></div>'.$this->endBlockComment('row');
}
echo $output;
