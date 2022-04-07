<?php

$args = array(
			'class'=>'',
			'id'=>'',
			'width'=>'',
			'height'=>'',
			'margin'=>'',
			'padding'=>'',			
			'position'=>'',			
			'float'=>'',			
			'top'=>'',
			'bottom'=>'',
			'right'=>'',
			'left'=>'',
			'image'=>'',
			'link_url'=>'',
			'link_target'=>'',			
			'featyretype'=>'',
			'zindex'=>'',
			'animate'=>'',	
			'df_position'=>'img-right',	
			'cover_scheme'=>'cover-white',	
			'animate_delay'=>'delay-1',	
			'ratio'=>'1:1',	
			'df_class'=>'',	
			'df_height'=>'h-80vh',	
			'df_parallax'=>'0.7',	
			
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

	$html .='<div class="sec-image '.$class.'">';	
	    if(is_numeric($image)) {
		if($featyretype == "st2"){	
		    if($animate == "no"){
				$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
					$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
				$html .='</div>';					
			} else {
				$html .='<div data-anim-child="'.$df_position.' '.$cover_scheme.' '.$animate_delay.'">';					
					$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';				
				$html .='</div>';			
			}	
		} else if($featyretype == "st3"){	
			$html .='<div class="custom-img '.$df_class.'">';						
				$html .='<div data-parallax="'.$df_parallax.'" class="'.$df_height.'">';
					$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
				$html .='</div>';				
			$html .='</div>';
		} else if($featyretype == "st4"){
			if($animate == "yes"){
			$html .='<div data-anim="slide-up '.$animate_delay.'">';					
				$html .='<a data-gallery="gallery1" class="glightbox" href="'.esc_url($stukram_image).'">';					
					$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';				
				$html .='</a>';	
			$html .='</div>';	
			} else {
				$html .='<a data-gallery="gallery1" class="glightbox" href="'.esc_url($stukram_image).'">';					
					$html .='<div class="ratio ratio-'.$ratio.'" data-parallax="'.$df_parallax.'">';
						$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
					$html .='</div>';				
				$html .='</a>';					
			}
		} else if($featyretype == "st5"){	
		    $html .='<div data-anim="slide-up '.$animate_delay.'" data-parallax="'.$df_parallax.'" class="'.$df_height.'">';
				$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
			$html .='</div>';			
		} else {
			if($link_url != '') {	
				$html .='<a href="'.esc_url($link_url).'"';
					if($link_target != '') { $html .='target="'.$link_target.'"';}						
				$html .='>';
			}	
			$html .='<img src="'.esc_url($stukram_image).'" ';
				$html .='style="';
				if($width != '') { $html .='width:'.$width.';';}  				
				if($height != '') { $html .='height:'.$height.';';}  				
				if($float != '') { $html .='float:'.$float.';';}  				
				if($position != '') { $html .='position:'.$position.';';}  				
				if($top != '') { $html .='top:'.$top.';';}  				
				if($bottom != '') { $html .='bottom:'.$bottom.';';}  				
				if($right != '') { $html .='right:'.$right.';';}  				
				if($left != '') { $html .='left:'.$left.';';}  				
				if($zindex != '') { $html .='z-index:'.$zindex.';';}  				
				if($margin != '') { $html .='margin:'.$margin.';';} 
				if($padding != '') { $html .='padding:'.$padding.';';}
				$html .='"';
			$html .=' alt="'.esc_attr($stukram_title).'" class="img-responsive"/>';
			if($link_url != '') {
				$html .='</a>';
			}	
		}	
		}
	$html .='</div>';

echo $html;