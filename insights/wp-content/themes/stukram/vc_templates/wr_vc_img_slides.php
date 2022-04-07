<?php

$args = array(
    	'class'=>'',
		'scheme'=>'-dark',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-img-slides '.$class.'">';
	    $html .='<div class="js-section-slider" data-slider-col="base-2 lg-2 md-1 sm-1" data-gap="40" data-loop data-center data-pagination>';
			$html .= '<div class="swiper-wrapper">';
				$html .= do_shortcode($content);
			$html .= '</div>';								
		$html .= '<div class="pagination '.$scheme.' pb-4 mt-48 js-pagination"></div>';			
	    $html .= '</div>';			
	$html .= '</div>';			

echo $html;