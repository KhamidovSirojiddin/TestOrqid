<?php

$args = array(
    	'class'=>'',
		'title'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',		
		'screen'=>'-lg',	
		'df_pad'=>'',	
		'df_mrg'=>'mt-16 md:mt-12',	
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-social '.$class.' '.$df_pad.' '.$float.'">';
		if($title != '') {	
			$html .='<h4 class="text'.$screen.' fw-600" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</h4>';	
		}
		$html .= '<div class="social -bordered '.$df_mrg.'">';
			$html .= do_shortcode($content);
		$html .= '</div>';					
	$html .= '</div>';			

echo $html;