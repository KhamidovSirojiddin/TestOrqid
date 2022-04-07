<?php

$args = array(
    	'class'=>'',		
		'margin'=>'',		
		'padding'=>'',	
		'title'=>'DRAG',	
		'scheme'=>'-light',		
		'autoplay_speed'=>'3500',	
			
);
extract(shortcode_atts($args, $atts));

$html = "";

	$html .='<div class="sec-testimonials '.$class.'" style="';
		if($margin != '') { $html .='margin:'.$margin.';';} 
		if($padding != '') { $html .='padding:'.$padding.';';} 
	$html .='">'; 
		$html .= '<div data-cursor data-cursor-label="'.esc_attr($title).'" class="overflow-hidden js-section-slider" data-slider-col="base-1 lg-1 md-1 sm-1" data-pagination data-loop data-autoplay-speed="'.esc_attr($autoplay_speed).'">';		
			$html .= '<div class="pagination '.$scheme.' js-pagination pt-4 mb-48"></div>';		
			$html .='<div class="swiper-wrapper">'; 
				$html .= do_shortcode($content);
			$html .= '</div>';
		$html .= '</div>';
	$html .= '</div>';

echo $html;