<?php

$args = array(
    	'class'=>'',
		'title'=>'',
		'title2'=>'',		
		'float'=>'',					
		'margin'=>'',					
		'padding'=>'',	
		'margin2'=>'',					
		'padding2'=>'',	
		'scheme'=>'bg-white shadow-light',	
		'scheme_cover'=>'cover-dark-2',	
		'image'=>'',	
		'link_url'=>'',	
		'link_target'=>'',	
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

	$html .='<div class="sec-team '.$class.'">';
	    $html .='<div data-anim="slide-up" class="teamCard">';
		
		    if(is_numeric($image)) {
	        $html .='<div class="teamCard__img">';
	            $html .='<div>';
	                $html .='<div class="bg-image ratio ratio-2:3 js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
			    $html .='</div>';  
			$html .='</div>';
			}
		
			$html .='<div class="teamCard__content text-center mt-24">';
				if($title != '') {	
					$html .='<h4 class="teamCard__title text-2xl fw-500" style="';
					if($margin != '') { $html .='margin:'.$margin.';';} 
					if($padding != '') { $html .='padding:'.$padding.';';}  								
					$html .='">';	
					if($link_url != '') {	
						$html .='<a href="'.esc_url($link_url).'"';
							if($link_target != '') { $html .='target="'.$link_target.'"';}						
						$html .='>';
					}						
					    $html .=''.esc_html($title).'';	
					if($link_url != '') {
						$html .='</a>';
					}						
					$html .='</h4>';	
				}  if($title2 != '') {	
					$html .='<p class="teamCard__text text-xs uppercase tracking-md fw-500 mt-8" style="';
					if($margin2 != '') { $html .='margin:'.$margin2.';';} 
					if($padding2 != '') { $html .='padding:'.$padding2.';';}
					$html .='">'.esc_html($title2).'</p>';  
				} 
				$html .= '<div class="teamCard__social justify-content-center mt-12">';
					$html .= do_shortcode($content);
				$html .= '</div>';					
			$html .='</div>';		
		$html .= '</div>';			
	$html .= '</div>';			

echo $html;