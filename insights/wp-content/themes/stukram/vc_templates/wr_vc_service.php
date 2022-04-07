<?php

$args = array(
		
	'title'=>'',	
	'margin'=>'',					
	'padding'=>'',	
	'featyretype'=>'',

);

extract(shortcode_atts($args, $atts));

$html = '';

	if($title != '') {	
	    if($featyretype == "st2"){	
			$html .='<div class="d-flex align-items-center">';
				$html .='<i class="size-2xs str-width-lg text-accent mr-8" data-feather="check"></i><p style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  												
				$html .='">'.esc_html($title).'</p>';	
			$html .='</div>';	
		} else {
			$html .='<p class="mt-8" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  												
			$html .='">'.esc_html($title).'</p>';	
		}	
	} 
 
echo $html;