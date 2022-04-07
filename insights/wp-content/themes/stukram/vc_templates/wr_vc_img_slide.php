<?php

$args = array(

	'image'=>'',

);

extract(shortcode_atts($args, $atts));

$html = '';

	if(is_numeric($image)) {
		$stukram_image = wp_get_attachment_url( $image );
		$stukram_title = get_the_title( $image );
	}else {
		$stukram_image = $image;
		$stukram_title = $image;
	}	

		if(is_numeric($image)) {
	        $html .='<div class="swiper-slide slider-slide">';
	            $html .='<div class="ratio ratio-3:2 bg-image swiper-lazy" data-background="'.esc_url($stukram_image).'"></div>';
			$html .='</div>';
	    }
 
echo $html;