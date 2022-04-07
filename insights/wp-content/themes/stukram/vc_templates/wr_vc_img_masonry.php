<?php

$args = array(

	'image'=>'',
	'img_size'=>'',

);

extract(shortcode_atts($args, $atts));

$html = '';

	if(is_numeric($image)) {
		$stukram_image = wp_get_attachment_url( $image );
		$stukram_title = get_the_title( $image );
	}else {
		$stukram_image = $image;
		$stukram_title = $image;
	}	

		if(is_numeric($image)) {
	        $html .='<div class="masonry__item '.$img_size.'">';
			   $html .='<a data-gallery="gallery1" class="glightbox" href="'.esc_url($stukram_image).'">';
					$html .='<div data-anim="slide-up" class="portfolioCard -type-2 -hover">';
						$html .='<div class="ratio">';
							$html .='<div class="portfolioCard__img">';
								$html .='<div class="portfolioCard__img__inner">';
									$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image).'"></div>';
								$html .='</div>';
							$html .='</div>';
						$html .='</div>';
					$html .='</div>';
				$html .='</a>';
			$html .='</div>';
	    }
 
echo $html;