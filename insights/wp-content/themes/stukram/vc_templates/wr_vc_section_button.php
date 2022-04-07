<?php

$args = array(
		'class'=>'',
		'df_class'=>'',
		'df_margin'=>'',
		'button_name'=>'',
		'button_style'=>'-outline-black text-black',
		'link_url'=>'',
		'link_target'=>'',
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'featyretype'=>'',	
		'size'=>'-md',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-button '.$class.' '.$float.'">';	
		
        if($button_name != '') {	
			$html .='<div class="custom-mr-pd '.$df_class.' '.$df_margin.'"';
			if($margin != '') {
			$html .='style="margin:'.$margin.'"';
			}
			$html .='">';
				$html .='<a href="'.esc_url($link_url).'"';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .=' class="button '.$size.' '.$button_style.'"';
				if($padding != '') {
				$html .='style="padding:'.$padding.'"';
				}
				$html .='>'.esc_html($button_name).'</a>';
			$html .='</div>';		
		}	
		
	$html .='</div>';  


echo $html;