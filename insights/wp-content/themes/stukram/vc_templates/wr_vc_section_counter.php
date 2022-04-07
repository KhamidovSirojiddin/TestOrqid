<?php

$args = array(
		'class'=>'',
		'id'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',		
		'float'=>'-left',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',														
		'featyretype'=>'',	
		'animate_delay'=>'delay-1',
		'screen'=>'-lg',
		'screen2'=>'-md',
		'scheme'=>'-dark',		
		'md_container'=>'',		
		'featyretype'=>'',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-counter '.$md_container.' '.$class.'">';
			if($title != '' || $title2 != '') {	
			    if($featyretype == "st2"){
				$html .='<div data-anim="counter" data-counter="'.esc_attr($title2).'" class="counter">';
					$html .='<h2 class="number '.$screen2.' '.$float.' fw-500 js-counter-num" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">0</h2>';  				
					$html .='<h5 class="text'.$screen.' text'.$screen.' fw-500 tracking-none mt-20" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  							
					$html .='">'.esc_html($title).'</h5>';	
				$html .='</div>'; 					
				} else {	
				$html .='<div data-anim="counter '.$animate_delay.'" data-counter="'.esc_attr($title2).'" data-counter-add="+" class="counter">';
					$html .='<h2 class="number '.$screen2.' '.$float.' fw-300 js-counter-num" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">0+</h2>';  				
					$html .='<h3 class="text'.$screen.' text'.$screen.' fw-500 mt-20" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  								
					$html .='">'.esc_html($title).'</h3>';	
				$html .='</div>'; 
				}
			}		
	$html .='</div>';  		

echo $html;