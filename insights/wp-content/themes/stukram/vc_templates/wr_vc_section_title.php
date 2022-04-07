<?php

$args = array(
		'class'=>'',
		'id'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',														
		'featyretype'=>'',	
		'animate_delay'=>'delay-3',
		'screen'=>'-sm',
		'screen2'=>'-lg',
		'text_editor'=>'',	
		'df_font_size'=>'text-lg',	
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-title '.$class.' '.$float.'">';
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
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="award__text '.$df_font_size.' mt-8" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {				
				if($title2 != '') {	
					$html .='<p class="award__text '.$df_font_size.' mt-8" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.esc_html($title2).'</p>';  
				} 
			} 
			$html .='</div>';  
		$html .='</div>';  	
			
	} else if($featyretype == "st3"){
		$html .='<div data-anim="slide-up '.$animate_delay.'" class="recognition">';   
            if($title != '') {	
				$html .='<h4 class="text-xl fw-500 tracking-none" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</h4>';	
			} 
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="'.$df_font_size.' fw-400 mt-8" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {			
				if($title2 != '') {	
					$html .='<p class="'.$df_font_size.' fw-400 mt-8" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.esc_html($title2).'</p>';  
				} 
			} 
		$html .='</div>';	
	} else if($featyretype == "st4"){ 
		if($title != '') {	
		$html .='<div data-anim="slide-up" class="sectionHeading '.$screen.'">'; 
			$html .='<h1 class="sectionHeading__title" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</h1>';	
		$html .='</div>';		
		} 
	
		$html .='<div data-anim="slide-up '.$animate_delay.'">'; 
			if($title3 != '') {			
				$html .='<p class="text'.$screen2.' sm:text-base">'.esc_html($title3).'</p>'; 
			} 
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="text'.$screen2.' sm:text-base mt-32 md:mt-20" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {				
				if($title2 != '') {	
					$html .='<p class="text'.$screen2.' sm:text-base mt-32 md:mt-20" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}					
					$html .='">'.$title2.'</p>';  
				} 				
			} 				
		$html .='</div>';		

    } else if($featyretype == "st5"){ 

		$html .='<div data-anim="slide-up '.$animate_delay.'" class="sectionHeading '.$screen.'">'; 
			if($title3 != '') {	
				$html .='<p class="sectionHeading__subtitle">'.$title3.'</p>';  
			} 
			if($title != '') {					
				$html .='<h1 class="sectionHeading__title leading-sm" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</h1>';	
			}
		$html .='</div>';		
		
	} else {	

		if($title != '') {	
			$html .='<h4 class="text-xl fw-600" style="';
			if($margin != '') { $html .='margin:'.$margin.';';} 
			if($padding != '') { $html .='padding:'.$padding.';';}  								
			$html .='">'.esc_html($title).'</h4>';	
		} 
		if($text_editor == "st2"){
			if($content != '') {	
				$html .='<div class="mt-16 '.$df_font_size.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.do_shortcode($content).'</div>';  
			} 			
		} else {				
			if($title2 != '') {	
				$html .='<p class="mt-16 '.$df_font_size.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
		}
	}	
	$html .='</div>';  		

echo $html;