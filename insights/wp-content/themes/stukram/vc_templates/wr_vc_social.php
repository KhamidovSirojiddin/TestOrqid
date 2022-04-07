<?php

$args = array(
		
	'icon_class'=>'',
	'scheme'=>'text-black border-dark',
	'link_url'=>'',
	'link_target'=>'',

);

extract(shortcode_atts($args, $atts));

$html = '';

	if($icon_class != '') {	
        $html .='<a class="social__item '.$scheme.'" href="'.esc_url($link_url).'" ';
			if($link_target != '') { $html .='target="'.$link_target.'"';}						
		$html .='>';	
			$html .='<i class="'.esc_attr($icon_class).'"></i>';  
	    $html .='</a>';
	}
 
echo $html;