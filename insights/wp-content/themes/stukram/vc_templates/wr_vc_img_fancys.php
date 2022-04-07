<?php

$args = array(
    	'class'=>'',	
		'col_size'=>'-col-2',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-img-fancy-grid '.$class.'">';
		$html .= '<div class="fancy-grid '.$col_size.'">';
				$html .= do_shortcode($content);
		$html .= '</div>';									
	$html .= '</div>';			

echo $html;