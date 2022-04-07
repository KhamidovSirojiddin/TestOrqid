<?php

$args = array(
    	'class'=>'',	
		'col_size'=>'-col-3',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-img-masonry-grid section-filter '.$class.'">';
		$html .= '<div class="masonry '.$col_size.'">';
		    $html .= '<div class="masonry__sizer"></div>';
			$html .= do_shortcode($content);
		$html .= '</div>';									
	$html .= '</div>';			

echo $html;