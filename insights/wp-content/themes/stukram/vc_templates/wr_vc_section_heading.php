<?php

$args = array(
		'class'=>'',
		'df_class'=>'',
		'title'=>'',
		'title2'=>'',
		'title3'=>'',
		'title4'=>'',
		'button_name'=>'',
		'button_style'=>'-outline-black text-black',
		'link_url'=>'',
		'link_target'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'margin3'=>'',					
		'padding3'=>'',		
		'featyretype'=>'',	
		'screen'=>'-lg',	
		'screen3'=>'-md',	
		'screen2'=>'',	
		'scheme'=>'-black',	
		'scheme2'=>'-black',	
		'md_container'=>'md:container',	
		'df_pading'=>'pt-16',	
		'df_title'=>'',	
		'title_mt'=>'',	
		'title3_mt'=>'mt-56 lg:mt-40 md:mt-20',	
		'button_mt'=>'mt-56 lg:mt-48 md:mt-32',	
		'animate_delay_title'=>'delay-1',	
		'animate_delay_title2'=>'delay-9',	
		'animate_delay_title3'=>'delay-10',	
		'animate_delay_button'=>'delay-11',	
		'animate'=>'',	
		'df_title_mrg'=>'',	
		'df_con_mrg'=>'mt-20',	
		'df_button_mrg'=>'mt-32',	
		'text_editor'=>'',	

);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-heading '.$df_class.' '.$class.' '.$float.'">';	
	if($featyretype == "st2"){
        
		$html .='<div class="sectionHeading '.$screen.' '.$md_container.' '.$df_pading.'">';
			
			if($title2 != '') {	
			$html .='<div data-anim-child="slide-up '.$animate_delay_title2.'">';
				$html .='<p class="sectionHeading__subtitle '.$scheme.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			$html .='</div>'; 	
			} 
			
			if($title != '') {
                if($animate == "no"){	
				$html .='<div class="'.$df_title.'">';
					$html .='<h2 class="sectionHeading__title fw-700 leading-md '.$title_mt.' text'.$scheme2.'" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  								
					$html .='">'.esc_html($title).'';
					$html .='</h2>';
				$html .='</div>';	
				} else {
				$html .='<div data-anim-child="slide-up '.$animate_delay_title.'" class="'.$df_title.'">';
					$html .='<h2 class="sectionHeading__title '.$title_mt.' text'.$scheme2.'" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  								
					$html .='">'.esc_html($title).'';
					if($title4 != '') {
					$html .='<br>'.esc_html($title4).'';
					}
					$html .='</h2>';					
				$html .='</div>';	
				}				 	
			} 
			
			if($text_editor == "st2"){
				if($content != '') {
				$html .='<div data-anim-child="slide-up '.$animate_delay_title3.'">';
					$html .='<div class="'.$title3_mt.' text'.$scheme2.'" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				$html .='</div>';						
				} 			
			} else {			
				if($title3 != '') {	
				$html .='<div data-anim-child="slide-up '.$animate_delay_title3.'">';
					$html .='<p class="'.$title3_mt.' text'.$scheme2.'" style="'; 
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.esc_html($title3).'</p>';  
				$html .='</div>';	
				} 
		    }
			
			if($button_name != '') {	
			$html .='<div data-anim-child="slide-up '.$animate_delay_button.'">';
				$html .='<a data-barba href="'.esc_url($link_url).'" ';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .=' class="button '.$screen3.' '.$button_style.' '.$button_mt.'">'.esc_html($button_name).'</a>';
			$html .='</div>';		
			}			
		$html .='</div>';  	
	
	} else if($featyretype == "st3"){	
			if($title2 != '') {	
				$html .='<p class="text-sm uppercase tracking-lg text'.$scheme2.' mb-20" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
			
			if($title != '') {	
				$html .='<h2 class="text-5xl sm:text-5xl xs:text-4xl leading-sm fw-700 text'.$scheme2.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'';
				$html .='</h2>';	
			} 
			
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="text-xl md:text-lg text'.$scheme2.' mt-16" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {						
				if($title3 != '') {	
					$html .='<p class="text-xl md:text-lg text'.$scheme2.' mt-16" style="'; 
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.esc_html($title3).'</p>';  
				} 			
	        }
			
			if($button_name != '') {	
				$html .='<a data-barba href="'.esc_url($link_url).'" ';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .=' class="button '.$screen3.' '.$button_style.' '.$button_mt.'">'.esc_html($button_name).'</a>';	
			}
			
	} else if($featyretype == "st4"){	
			
			if($title2 != '') {	
				$html .='<p class="text-base text'.$scheme2.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
			
			if($title != '') {	
				$html .='<h2 class="text-6xl sm:text-5xl xs:text-4xl fw-700 mt-20 text'.$scheme2.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'';
				$html .='</h2>';	
			} 
			
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="text-xl md:text-lg text'.$scheme2.' mt-16" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {						
				if($title3 != '') {	
					$html .='<p class="text-xl md:text-lg text'.$scheme2.' mt-16" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.esc_html($title3).'</p>';  
				} 			
			}
			
			if($button_name != '') {	
				$html .='<a data-barba href="'.esc_url($link_url).'" ';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .=' class="button '.$screen3.' '.$button_style.' '.$button_mt.'">'.esc_html($button_name).'</a>';	
			}
			
	} else {	

		$html .='<div class="sectionHeading '.$screen.'">'; 
			if($title2 != '') {	
				$html .='<p class="sectionHeading__subtitle '.$scheme2.'" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.esc_html($title2).'</p>';  
			} 
			
			if($title != '') {	
				$html .='<h2 class="sectionHeading__title '.$df_title_mrg.' text'.$scheme.'" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  							
				$html .='">'.esc_html($title).'</h2>';	
			} 
			
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="'.$screen2.' '.$df_con_mrg.' text'.$scheme.'" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 
			} else {
				if($title3 != '') {	
					$html .='<p class="'.$screen2.' '.$df_con_mrg.' text'.$scheme.'" style="';
					if($margin3 != '') { $html .='margin:'.$margin3.';';} 
					if($padding3 != '') { $html .='padding:'.$padding3.';';}
					$html .='">'.esc_html($title3).'</p>';  
				} 
            }				
			
			if($button_name != '') {	
				$html .='<a href="'.esc_url($link_url).'" ';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .=' class="button '.$screen3.' '.$button_style.'  '.$df_button_mrg.'">'.esc_html($button_name).'</a>';	
			}	
		$html .='</div>'; 	

	}	
	$html .='</div>';  		

echo $html;