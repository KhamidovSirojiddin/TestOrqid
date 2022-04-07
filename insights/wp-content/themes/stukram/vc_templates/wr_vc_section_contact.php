<?php

$args = array(
		'class'=>'',
		'id'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',
		'title4'=>'',
		'title5'=>'',
		'title6'=>'',	
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',														
		'featyretype'=>'',	
		'animate_delay'=>'delay-3',
		'screen'=>'-lg',
		'scheme'=>'-dark',
		'df_pad'=>'',
		'df_title_mrg'=>'mt-16',
			
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-contact-info '.$class.'  '.$df_pad.' '.$float.'">';
	if($featyretype == "st2"){	
		$html .='<div data-anim-child="slide-up '.$animate_delay.'" class="award">';  
			$html .='<div class="award__content">';  
			if($title3 != '') {	
				$html .='<p class="text-lg text-accent number fw-500">'.$title3.'</p>';  
			} 
			if($title != '') {	
				$html .='<h3 class="award__title text-2xl fw-500 mt-16" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  				 				
				$html .='">'.esc_html($title).'</h3>';	
			} 
			if($title2 != '') {	
				$html .='<p class="award__text mt-8" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.do_shortcode($title2).'</p>';  
			} 
			$html .='</div>';  
		$html .='</div>';  									
	} else {	
		if($title != '') {	
			$html .='<h4 class="text'.$screen.' fw-600" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</h4>';	
		} 		
			$html .='<div class="text'.$scheme.' mt-12 md:mt-12" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">';	
				if($title2 != '') {	
				$html .='<p class="'.$df_title_mrg.'" style="';
				$html .='">'.do_shortcode($title2).'</p>'; 
				} if($title3 != '') {	
				$html .='<div>'; 
					$html .='<a class="button -underline" href="mailto:'.esc_attr($title3).'">'.esc_html($title3).'</a>'; 
				$html .='</div>'; 
			    } if($title4 != '') {	
				$html .='<div class="mt-4">'; 
					$html .='<a class="button -underline" href="mailto:'.esc_attr($title4).'">'.esc_html($title4).'</a>'; 
				$html .='</div>'; 
			    } if($title5 != '') {	
				$html .='<div class="mt-4">'; 
					$html .='<a href="tel:'.esc_attr($title5).'" class="button -underline">'.esc_html($title5).'</a>'; 
				$html .='</div>'; 
			    } if($title6 != '') {	
				$html .='<div class="mt-4">'; 
					$html .='<a href="tel:'.esc_attr($title6).'" class="button -underline">'.esc_html($title6).'</a>'; 
				$html .='</div>'; 
			    }   
				
			$html .='</div>'; 
	}	
	$html .='</div>';  		

echo $html;