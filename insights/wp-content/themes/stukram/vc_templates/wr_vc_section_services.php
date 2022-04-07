<?php

$args = array(
    	'class'=>'',
    	'icon_class'=>'',
		'title'=>'',
		'title2'=>'',			
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'scheme'=>'bg-white shadow-light',	
		'button_name'=>'',
		'button_style'=>'text-black',
		'link_url'=>'',
		'link_target'=>'',		
		'featyretype'=>'',	
        'text_editor'=>'',	
		'icontype'=>'',	
		'icon_class_awesome'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

	$html .='<div class="sec-services '.$class.' '.$float.'">';
		if($featyretype == "st2"){
			$html .='<div class="serviceCard">';
				$html .='<div class="serviceCard__content">';
						
					$html .='<div class="d-flex align-items-center ml-minus-4">';
						
							if($icontype == "st2"){
								if($icon_class_awesome != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full">';
									$html .='<i class="size-md str-width-md text-accent text-center font-30 '.esc_attr($icon_class_awesome).'" ></i>';
									$html .='</div>';
								}
							}
							else {	
								if($icon_class != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full">';
									$html .='<i class="size-md str-width-md text-accent" data-feather="'.esc_attr($icon_class).'"></i>';
									$html .='</div>';
								}
					        }
						
					$html .='</div>';
					 
					
					if($title != '') {	
						$html .='<h3 class="serviceCard__title text-2xl fw-500 '.$button_style.' mt-40 md:mt-32" style="';
						if($margin != '') { $html .='margin:'.$margin.';';} 
						if($padding != '') { $html .='padding:'.$padding.';';}  								
						$html .='">'.esc_html($title).'</h3>';	
					}  
					
					if($text_editor == "st2"){
						if($content != '') {	
							$html .='<div class="serviceCard__text mt-20 md:mt-12" style="';
							if($margin2 != '') { $html .='margin:'.$margin2.';';} 
							if($padding2 != '') { $html .='padding:'.$padding2.';';}
							$html .='">'.do_shortcode($content).'</div>';  
						} 			
					} else {						
						if($title2 != '') {	
							$html .='<p class="serviceCard__text mt-20 md:mt-12" style="';
							if($margin2 != '') { $html .='margin:'.$margin2.';';} 
							if($padding2 != '') { $html .='padding:'.$padding2.';';}
							$html .='">'.esc_html($title2).'</p>';  
						} 
					} 
					
					if($button_name != '') {	
						$html .='<div class="mt-24 md:mt-16">';
							$html .='<a data-barba href="'.esc_url($link_url).'"';
								if($link_target != '') { $html .='target="'.$link_target.'"';}						
							$html .=' class="button -icon '.$button_style.'">'.esc_html($button_name).'<i class="icon size-xs str-width-md" data-feather="arrow-right"></i></a>';
						$html .= '</div>';		
					}
				$html .= '</div>';	
			$html .= '</div>';	
		} else {
				
			$html .='<div class="ml-minus-4">';
				$html .='<div class="d-flex align-items-center">';
					
						if($icontype == "st2"){
							if($icon_class_awesome != '') {
								$html .='<div class="px-20 py-20 '.$scheme.' rounded-full">';
								$html .='<i class="size-sm str-width-md text-accent text-center font-30 '.esc_attr($icon_class_awesome).'" ></i>';
								$html .='</div>';
							}
						}
						else {
							if($icon_class != '') {
								$html .='<div class="px-20 py-20 '.$scheme.' rounded-full">';						
								$html .='<i class="size-sm str-width-md text-accent" data-feather="'.esc_attr($icon_class).'"></i>';
								$html .='</div>';
							}
						}
					
				$html .='</div>';
			$html .='</div>';
			 
			
			if($title != '') {	
				$html .='<h3 class="text-2xl fw-500 mt-32" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</h3>';	
			}  
			
			if($text_editor == "st2"){
				if($content != '') {	
					$html .='<div class="mt-12" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.do_shortcode($content).'</div>';  
				} 			
			} else {			
				if($title2 != '') {	
					$html .='<p class="mt-12" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.esc_html($title2).'</p>';  
				}  
			}  
			
			if($button_name != '') {	
				$html .='<div class="mt-16">';
					$html .='<a data-barba href="'.esc_url($link_url).'"';
						if($link_target != '') { $html .='target="'.$link_target.'"';}						
					$html .=' class="button -icon '.$button_style.'">'.esc_html($button_name).'<i class="icon size-xs str-width-md" data-feather="arrow-right"></i></a>';
				$html .= '</div>';		
			}			
		}		
	$html .= '</div>';			

echo $html;