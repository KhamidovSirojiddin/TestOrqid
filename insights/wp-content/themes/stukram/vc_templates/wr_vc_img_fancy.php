<?php

$args = array(

	'image'=>'',
	'scheme2'=>'-black',
	'title'=>'',
	'margin'=>'',
	'padding'=>'',

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
	        $html .='<div class="fancy-grid__item">';
				$html .='<a data-gallery="gallery1" class="glightbox" href="'.esc_url($stukram_image).'">';
					$html .='<div data-parallax="0.8" class="ratio ratio-3:4">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';
				$html .='</a>';
				if($title != '') {	
					$html .='<h5 class="text-xl fw-500 mt-24 text-right text'.$scheme2.'" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  												
					$html .='">'.esc_html($title).'</h5>';	
				} 				
			$html .='</div>';
	    }
 
echo $html;