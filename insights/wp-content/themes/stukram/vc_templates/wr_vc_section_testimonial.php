<?php

$args = array(
		'title'=>'',
		'title2'=>'',
		'title3'=>'',
		'image'=>'',
		'color'=>'',
		'color2'=>'',
		'color3'=>'',
		'font_size'=>'',
		'font_size2'=>'',
		'font_size3'=>'',
		'font_weight'=>'',
		'font_weight2'=>'',
		'font_weight3'=>'600',
		'line_height'=>'',
		'text_align'=>'',
		'text_transform'=>'',								
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'margin3'=>'',					
		'padding3'=>'',	
        'scheme'=>'-light',			
        'scheme2'=>'-white',			
        'col_size'=>'col-lg-8 col-md-10',			
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
	
    $html .= '<div class="swiper-slide">';
        $html .= '<div class="row justify-content-center">';	
            $html .= '<div class="'.$col_size.' col-md-10">';	
                $html .= '<div class="testimonials text-center">';	
                    if($title3 != '') {	
					$html .='<p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-'.$font_weight3.' leading-xl text'.$scheme2.'">'.esc_html($title3).'</p>';  
					}
					$html .='<div class="testimonials__author mt-48">'; 
					    if(is_numeric($image)) {		
						$html .='<div class="size-xl mx-auto mb-20">'; 
						    $html .= '<div class="bg-image rounded-full swiper-lazy" data-background="'.esc_url($stukram_image).'"></div>';
						$html .= '</div>';
						}
						if($title != '') {	
						$html .='<h5 class="text-lg capitalize text'.$scheme2.' fw-600" style="';
							if($margin != '') { $html .='margin:'.$margin.';';} 
							if($padding != '') { $html .='padding:'.$padding.';';}  								
						$html .='">'.esc_html($title).'</h5>';
					    }
						if($title2 != '') {	
					    $html .='<p class="capitalize text'.$scheme.'" style="';
							if($margin2 != '') { $html .='margin:'.$margin2.';';} 
							if($padding2 != '') { $html .='padding:'.$padding2.';';}
						$html .='">'.esc_html($title2).'</p>';  	
					    } 
					$html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        $html .= '</div>';
    $html .= '</div>';

echo $html;