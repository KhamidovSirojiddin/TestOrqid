<?php

$args = array(
    	'class'=>'',		
		'margin'=>'',		
		'padding'=>'',	
		'featyretype'=>'',			
);
extract(shortcode_atts($args, $atts));

$html = "";

	$html .='<div class="sec-awards '.$class.'" style="';
		if($margin != '') { $html .='margin:'.$margin.';';} 
		if($padding != '') { $html .='padding:'.$padding.';';} 
	$html .='">'; 
	    if($featyretype == "st2"){	
		$html .='<div data-anim-wrap class="section-border-bottom-dark sm:mt-32">'; 
			$html .= do_shortcode($content);
		$html .= '</div>';
		} else {
			$html .= do_shortcode($content);			
		}	
	$html .= '</div>';

echo $html;