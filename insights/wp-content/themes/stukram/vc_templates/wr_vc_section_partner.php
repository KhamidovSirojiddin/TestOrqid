<?php

$args = array(
		'class'=>'',	
		'title'=>'',			
		'image'=>'',
		'link_url'=>'',
		'link_target'=>'',					
		'animate_delay'=>'delay-1',	
		'featyretype'=>'',	
			
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

	$html .='<div class="sec-partner '.$class.'">';	
	    if(is_numeric($image)) {		
		    if($featyretype == "st2"){
			$html .='<div data-anim="slide-up '.$animate_delay.'" class="clientsItem -hover -light ratio ratio-3:2 border-light rounded-4">';
				$html .='<div class="clientsItem__img">';
					if($link_url != '') {	
						$html .='<a href="'.$link_url.'"';
							if($link_target != '') { $html .='target="'.$link_target.'"';}						
						$html .='>';
					}	
					$html .='<img src="'.esc_url($stukram_image).'" ';				
					$html .=' alt="'.esc_attr($stukram_title).'" class="col-7"/>';
					if($link_url != '') {
						$html .='</a>';
					}					
				$html .='</div>';				
	
				if($title != '') {	
					$html .='<div class="clientsItem__content">';				
						$html .='<h5 class="clientsItem__title text-xl">'.esc_html($title).'</h5>';
					$html .='</div>';
				}	
		    $html .='</div>';	
			} else {	
			$html .='<div data-anim="slide-up '.$animate_delay.'" class="clientsItem -hover ratio ratio-3:2 border-dark rounded-4 py-4">';
				$html .='<div class="clientsItem__img">';
					if($link_url != '') {	
						$html .='<a href="'.$link_url.'"';
							if($link_target != '') { $html .='target="'.$link_target.'"';}						
						$html .='>';
					}	
					$html .='<img src="'.esc_url($stukram_image).'" ';				
					$html .=' alt="'.esc_attr($stukram_title).'" class="col-7"/>';
					if($link_url != '') {
						$html .='</a>';
					}					
				$html .='</div>';				
	
				if($title != '') {	
					$html .='<div class="clientsItem__content">';				
						$html .='<h5 class="clientsItem__title text-xl text-white">'.esc_html($title).'</h5>';
					$html .='</div>';
				}	
		    $html .='</div>';				
			}
		}

	$html .='</div>';

echo $html;