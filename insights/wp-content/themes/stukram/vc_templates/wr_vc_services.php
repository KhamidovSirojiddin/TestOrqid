<?php

$args = array(
    	'class'=>'',
    	'icon_class'=>'',
    	'icon_class_awesome'=>'',
		'title'=>'',
		'title2'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'scheme'=>'bg-white shadow-light',	
		'scheme2'=>'-black',	
		'scheme_cover'=>'cover-dark-2',	
		'animate_delay'=>'delay-1',	
		'featyretype'=>'',
		'button_name'=>'',
		'link_url'=>'',
		'link_target'=>'',		
		'image'=>'',		
		'df_parallax'=>'',		
		'ratio'=>'1:1',		
		'position'=>'',		
		'icontype'=>'',		
);

$html = "";

extract(shortcode_atts($args, $atts));

	if(is_numeric($image)) {
		$stukram_image = wp_get_attachment_url( $image );
		$stukram_title = get_the_title( $image );
	}else {
		$stukram_image = $image;
		$stukram_title = $image;
	}	
	
	if($featyretype == "st2"){	
	$html .='<div class="sec-service align-items-center row '.$class.' '.$float.'">';	
		if($position == "st2"){
		if(is_numeric($image)) {
			$html .='<div class="col-lg-4 col-md-10 md:order-1">';		
				$html .='<div data-anim="slide-up '.$animate_delay.'">';		
						
					$html .='<div class="d-flex align-items-center ml-minus-4">';
						
							if($icontype == "st2"){
								if($icon_class_awesome != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full d-flex align-items-center justify-content-center">';
									$html .='<i class="size-md str-width-md text-accent text-center font-40 '.esc_attr($icon_class_awesome).'" ></i>';
									$html .='</div>';
								}
							}
							else {
								if($icon_class != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full d-flex align-items-center justify-content-center">';
									$html .='<i class="size-md str-width-md text-accent" data-feather="'.esc_attr($icon_class).'"></i>';
									$html .='</div>';
								}
							}
						  
					$html .='</div>';
					
					if($title != '') {	
						$html .='<h2 class="text-4xl sm:text-3xl fw-500 text'.$scheme2.' mt-32" style="';
						if($margin != '') { $html .='margin:'.$margin.';';} 
						if($padding != '') { $html .='padding:'.$padding.';';}  								
						$html .='">'.esc_html($title).'</h2>';	
					}  if($title2 != '') {	
						$html .='<p class="text-lg fw-300 text'.$scheme2.' mt-24" style="';
						if($margin2 != '') { $html .='margin:'.$margin2.';';} 
						if($padding2 != '') { $html .='padding:'.$padding2.';';}
						$html .='">'.do_shortcode($title2).'</p>';  
					} 
					$html .= '<div class="text'.$scheme2.' text-base ml-minus-4 mt-32">';
						$html .= do_shortcode($content);
					$html .= '</div>';
					if($button_name != '') {	
						$html .='<div class="mt-32">';
							$html .='<a data-barba href="'.esc_url($link_url).'" ';
								if($link_target != '') { $html .='target="'.$link_target.'"';}						
							$html .=' class="button -icon text-lg text'.$scheme2.'">'.esc_html($button_name).'<i class="icon size-sm str-width-md ml-4" data-feather="arrow-right-circle"></i></a>';
						$html .='</div>';		
					}			
				$html .= '</div>';				
			$html .= '</div>';
			
				$html .='<div class="col-lg-7 offset-lg-1 md:order-2 md:mt-48">';
					$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';			
				$html .='</div>';	
			}		
		} else {
			if(is_numeric($image)) {
				$html .='<div class="col-lg-6 md:order-2 md:mt-48">';
					$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';			
				$html .='</div>';	
			
			$html .='<div class="col-lg-4 offset-lg-1 col-md-10 md:order-1">';		
				$html .='<div data-anim="slide-up '.$animate_delay.'">';		
					
					$html .='<div class="d-flex align-items-center ml-minus-4">';
						
							if($icontype == "st2"){
								if($icon_class_awesome != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full d-flex align-items-center justify-content-center">';
									$html .='<i class="size-md str-width-md text-accent text-center  font-40 '.esc_attr($icon_class_awesome).'" ></i>';
									$html .='</div>';
								}
							}
							else {
								if($icon_class != '') {
									$html .='<div class="px-20 py-20 '.$scheme.' rounded-full d-flex align-items-center justify-content-center">';
									$html .='<i class="size-md str-width-md text-accent" data-feather="'.esc_attr($icon_class).'"></i>';
									$html .='</div>';
								}
							}
						  
					$html .='</div>';
					
					if($title != '') {	
						$html .='<h2 class="text-4xl sm:text-3xl fw-500 text'.$scheme2.' mt-32" style="';
						if($margin != '') { $html .='margin:'.$margin.';';} 
						if($padding != '') { $html .='padding:'.$padding.';';}  								
						$html .='">'.esc_html($title).'</h2>';	
					}  if($title2 != '') {	
						$html .='<p class="text-lg fw-300 text'.$scheme2.' mt-24" style="';
						if($margin2 != '') { $html .='margin:'.$margin2.';';} 
						if($padding2 != '') { $html .='padding:'.$padding2.';';}
						$html .='">'.do_shortcode($title2).'</p>';  
					} 
					$html .= '<div class="text'.$scheme2.' text-base ml-minus-4 mt-32">';
						$html .= do_shortcode($content);
					$html .= '</div>';
					if($button_name != '') {	
						$html .='<div class="mt-32">';
							$html .='<a data-barba href="'.esc_url($link_url).'" ';
								if($link_target != '') { $html .='target="'.$link_target.'"';}						
							$html .=' class="button -icon text-lg text'.$scheme2.'">'.esc_html($button_name).'<i class="icon size-sm str-width-md ml-4" data-feather="arrow-right-circle"></i></a>';
						$html .='</div>';		
					}			
				$html .= '</div>';				
			$html .= '</div>';	
			}
		}						
	$html .= '</div>';		
	} else {
	$html .='<div class="sec-service serviceCard '.$class.' '.$float.'">';		
	    $html .='<div class="serviceCard__content">';		
		   
	        $html .='<div class="d-flex align-items-center ml-minus-4">';
	            
				if($icontype == "st2"){
					if($icon_class_awesome != '') {
						$html .='<div data-anim-child="img-right '.$scheme_cover.'" class="px-20 py-20 '.$scheme.' rounded-full">';
						$html .='<i class="size-md str-width-md text-accent text-center  font-40 '.esc_attr($icon_class_awesome).'" ></i>';
						$html .='</div>';
					}
				}
				else {
					if($icon_class != '') {
						$html .='<div data-anim-child="img-right '.$scheme_cover.'" class="px-20 py-20 '.$scheme.' rounded-full">';
						$html .='<i class="size-md str-width-md text-accent" data-feather="'.esc_attr($icon_class).'"></i>';
						$html .='</div>';
					}
				}
			      
			$html .='</div>';
			
			if($title != '') {	
				$html .='<h3 class="serviceCard__title text-2xl fw-500 tacking-none mt-32" style="';
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}  								
				$html .='">'.esc_html($title).'</h3>';	
			}  if($title2 != '') {	
				$html .='<p class="serviceCard__text mt-16" style="';
				if($margin2 != '') { $html .='margin:'.$margin2.';';} 
				if($padding2 != '') { $html .='padding:'.$padding2.';';}
				$html .='">'.do_shortcode($title2).'</p>';  
			} 
			$html .= '<div class="text'.$scheme2.' mt-24">';
				$html .= do_shortcode($content);
			$html .= '</div>';			
		$html .= '</div>';				
	$html .= '</div>';	
	}

echo $html;