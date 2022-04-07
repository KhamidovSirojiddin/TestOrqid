<?php

$args = array(		
		'scheme2'=>'-black',
		'title'=>'',
		'title2'=>'',
		'margin'=>'',
		'padding'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';


		$html .='<div data-anim-child="line-chart" class="lineChart__item" data-percent="'.esc_attr($title2).'" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  							
		$html .='">';	
			$html .='<div class="lineChart__content text'.$scheme2.' fw-500">';
				if($title != '') {
					$html .='<p>'.esc_html($title).'</p>';
				}  if($title2 != '') {	
					$html .='<p class="lineChart__number number js-number text'.$scheme2.'">0%</p>'; 	
				}
			$html .='</div>';	
				$html .='<div class="lineChart-bar">';
					$html .='<div class="lineChart-bar__bg"></div>';
					$html .='<div class="lineChart-bar__item bg-accent js-bar"></div>';
				$html .='</div>';						
		$html .='</div>';

 
echo $html;