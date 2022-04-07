<?php

$args = array(
    	'class'=>'',						
		'margin'=>'',					
		'padding'=>'',	
);

$html = "";

extract(shortcode_atts($args, $atts));	

	$html .='<div class="sec-progress md:mt-30 mt-20 '.$class.'" data-anim-wrap style="';
		if($margin != '') { $html .='margin:'.$margin.';';} 
		if($padding != '') { $html .='padding:'.$padding.';';}  							
	$html .='">';	
	    $html .='<div class="lineChart">';
			$html .= do_shortcode($content);	
		$html .= '</div>';			
	$html .= '</div>';			

echo $html;