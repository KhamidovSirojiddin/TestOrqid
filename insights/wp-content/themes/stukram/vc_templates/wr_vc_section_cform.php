<?php

$args = array(
		'class'=>'',
		'df_pad'=>'',
		'contactfromid'=>'',
		'df_row'=>'',			
		'df_mrg'=>'',			
		'margin'=>'',			
		'padding'=>'',			
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-contact-form '.$class.' '.$df_pad.'">';
		$html .='<div class="contact-form -type-1 '.$df_mrg.'" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';} 			
		$html .='">'; 
			$html .='<div class="custom-form '.$df_row.'">'; 	 
				$html .=''.do_shortcode('[contact-form-7 id="'.$contactfromid.'" title="Contact Form"]').'';			
			$html .='</div>'; 			
		$html .='</div>'; 		
	$html .='</div>';  		

echo $html;