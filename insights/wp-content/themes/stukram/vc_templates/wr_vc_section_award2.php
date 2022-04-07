<?php

$args = array(
        'animate_delay'=>'delay-2',					
        'border_bottom'=>'border-bottom-dark',					
        'featyretype'=>'',					
);

extract(shortcode_atts($args, $atts));

$html = '';
	
	if($featyretype == "st2"){	
	$html .='<div data-anim-child="slide-up '.$animate_delay.'" class="row no-gutters '.$border_bottom.' py-20">'; 
		$html .= do_shortcode($content);
	$html .= '</div>';
	} else {
	$html .='<div class="row no-gutters mb-8 layout-pt-md sm:d-none">';	
		$html .= do_shortcode($content);		
	$html .= '</div>';	
	}

echo $html;