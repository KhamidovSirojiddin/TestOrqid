<?php

$args = array(
		'class'=>'',
		'id'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',														
		'featyretype'=>'',	
		'scheme'=>'-dark',
		'scheme2'=>'-black',
		'df_mrg'=>'',
		'df_class'=>'text-lg mt-24 sm:mt-16',
		'df_line_height'=>'',
		'text_editor'=>'',	
		'df_font_size'=>'',	
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-context '.$class.'">';	
	if($featyretype == "st2"){

		    $html .='<div class="d-flex text-xs tracking-md pt-4">';
            if($title2 != '') {	
				$html .='<p class="text-accent fw-600 mr-16" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
			if($title != '') {	
				$html .='<p class="uppercase fw-500 text'.$scheme.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</p>';	
			}
			$html .='</div>';
			
	} else {
		 
		    $html .='<div class="custom-context '.$df_mrg.'">';  
            if($title != '') {	
				$html .='<h2 class="text-3xl fw-600 text'.$scheme2.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</h2>';	
			} 
			if($title2 != '') {	
				$html .='<p class="'.$df_class.' text'.$scheme2.' '.$df_line_height.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="leading-5xl '.$df_font_size.' text'.$scheme.' mt-24 sm:mt-16">'.do_shortcode($content).'</div>';  
				} 			
			} else {				
				if($title3 != '') {	
					$html .='<p class="leading-5xl '.$df_font_size.' text'.$scheme.' mt-24 sm:mt-16">'.$title3.'</p>';  
				} 
			}	
			$html .='</div>';    	
	}	
	$html .='</div>';  		

echo $html;