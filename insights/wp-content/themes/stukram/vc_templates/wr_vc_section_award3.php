<?php

$args = array(
		'title'=>'',							
		'margin'=>'',					
		'padding'=>'',			
        'scheme2'=>'-black',			
        'col_size'=>'col-lg-2 col-md-1',			
        'col_offset'=>'',			
        'link_url'=>'',			
        'link_target'=>'',			
        'featyretype'=>'',			
);

extract(shortcode_atts($args, $atts));

$html = '';

    $html .= '<div class="'.$col_size.' '.$col_offset.'">';
	    if($featyretype == "st2"){	
			if($link_url != '') {	
				$html .='<a class="button -underline text'.$scheme2.'" href="'.esc_url($link_url).'" ';
						if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .='>'.esc_html($title).'</a>';	 
			} else if($title != '') {	
			$html .='<p class="text-lg text'.$scheme2.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</p>';
			}		
		
		} else {
			if($title != '') {	
			$html .='<p class="title-xs text'.$scheme2.' fw-600" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</p>';
			}			
		}	

    $html .= '</div>';

echo $html;