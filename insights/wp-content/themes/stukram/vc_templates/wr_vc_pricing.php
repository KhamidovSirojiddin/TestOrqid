<?php

$args = array(		
		'scheme'=>'-dark',
		'line'=>'',
		'title'=>'',
		'margin'=>'',
		'padding'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';

	if($title != '') {	
		$html .='<li><p class="'.$line.' text'.$scheme.'" style="';
		if($margin != '') { $html .='margin:'.$margin.';';} 
		if($padding != '') { $html .='padding:'.$padding.';';}  								
		$html .='">'.esc_html($title).'</p></li>';	
	}
 
echo $html;