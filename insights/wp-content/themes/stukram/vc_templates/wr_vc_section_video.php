<?php

$args = array(
			'class'=>'',
            'scheme'=>'bg-white text-black',
			'image'=>'',
			'link_url'=>'',
			
);

$html = "";

extract(shortcode_atts($args, $atts));

	if(is_numeric($image)) {
		$stukram_image = wp_get_attachment_url( $image );
		$stukram_title = get_the_title( $image );
	}else {
		$stukram_image = $image;
		$stukram_title = $image;
	}			

	$html .='<div class="sec-image '.$class.'">';		    	
		$html .='<div class="sectionVideo h-lg">';	
			if(is_numeric($image)) {
				$html .='<div data-parallax="0.7" class="h-full">';
					$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
				$html .='</div>';	
			}		
			if($link_url != '') {	
				$html .='<a href="'.esc_url($link_url).'" data-cursor data-gallery="gallery1" class="sectionVideo__btn '.$scheme.' js-video-button glightbox">';
			    $html .='<span class="sectionVideo__btn__inner">';
			    $html .='<i class="icon str-width-lg" data-feather="arrow-right"></i>';
			    $html .='</span>';
			    $html .='</a>';
			}	
		$html .='</div>';
	$html .='</div>';

echo $html;