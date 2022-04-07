<?php

$args = array(
    	'class'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',
		'title4'=>'',							
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'margin3'=>'',					
		'padding3'=>'',			
		'scheme'=>'',	
		'scheme2'=>'-black',	
		'scheme_cover'=>'',	
		'shadow'=>'-light',	
		'animate_delay'=>'delay-2',		
		'button_name'=>'',
		'button_style'=>'-outline-black text-black',
		'link_url'=>'',
		'link_target'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));	

	$html .='<div class="sec-pricing '.$class.'">';
	    $html .='<div data-anim-child="slide-up '.$animate_delay.'" class="priceCard py-40 px-40 rounded-base shadow'.$shadow.' '.$scheme_cover.'">';
			$html .='<div class="priceCard__content">';
				if($title != '') {	
					$html .='<h3 class="priceCard__title text-2xl fw-500 text'.$scheme2.'" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  								
					$html .='">'.esc_html($title).'</h3>';	
				}  if($title2 != '') {	
					$html .='<h3 class="priceCard__price number -md text'.$scheme2.' fw-600 mt-24" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.esc_html($title2).'</h3>';  
				} if($title4 != '') {	
					$html .='<p class="priceCard__badge '.$scheme.' text-sm fw-500 mt-32 text'.$scheme2.'">'.esc_html($title4).'</p>';  
				}  if($title3 != '') {	
					$html .='<p class="fw-500 mt-24 text'.$scheme2.'" style="';
						if($margin3 != '') { $html .='margin:'.$margin3.';';} 
						if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.esc_html($title3).'</p>';  
				}
				$html .= '<ul class="priceCard__list mt-24">';
					$html .= do_shortcode($content);
				$html .= '</ul>';
				if($button_name != '') {	
					$html .='<div class="priceCard__button mt-32">';
						$html .='<a data-barba href="'.esc_url($link_url).'" ';
							if($link_target != '') { $html .='target="'.$link_target.'"';}						
						$html .=' class="button -sm '.$button_style.'">'.esc_html($button_name).'</a>';
					$html .='</div>';		
				}					
			$html .='</div>';		
		$html .= '</div>';			
	$html .= '</div>';			

echo $html;