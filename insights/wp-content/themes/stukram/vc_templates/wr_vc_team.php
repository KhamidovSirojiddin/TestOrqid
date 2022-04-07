<?php

$args = array(
		
	'icon_class'=>'',
	'scheme'=>'text-black',
	'link_url'=>'',
	'link_target'=>'',

);

extract(shortcode_atts($args, $atts));

$html = '';

	if($icon_class != '') {	
        $html .='<div class="teamCard__social__item">';
			$html .='<a class="'.$scheme.'" href="'.esc_url($link_url).'" ';
				if($link_target != '') { $html .='target="'.$link_target.'"';}						
			$html .='>';	
				$html .='<i class="'.esc_attr($icon_class).'"></i>';  
			$html .='</a>';
	    $html .='</div>';
	}
 
echo $html;