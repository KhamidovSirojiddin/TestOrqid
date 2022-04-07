    <!-- section start -->
    <section class="sliderMain -type-1 bg-black js-sliderMain-type-1">
	<?php if(get_post_meta($post->ID,'rnr_full_slider_color_scheme',true)=='st2'){ ?>
	    <?php $stukram_full_slider_color_scheme = 'black';?>
	<?php } else { ?>
	    <?php $stukram_full_slider_color_scheme = 'white';?>
	<?php } ?>	
        <!-- swiper-wrapper start -->
        <div class="swiper-wrapper">

            <!-- swiper-slide start -->
			<?php
			$stukram_full_slider = rwmb_meta( 'rnr_full_slider_opt' );
			if ( ! empty( $stukram_full_slider ) ) {
			foreach ( $stukram_full_slider as $stukram_full_sliders ) { ;?>			
			
			<?php $stukram_full_slider_title = isset( $stukram_full_sliders['rnr_full_slider_title_opt'] ) ? $stukram_full_sliders['rnr_full_slider_title_opt'] : ''; ?>
			
			<?php $stukram_full_slider_subtitle = isset( $stukram_full_sliders['rnr_full_slider_sub_title_opt'] ) ? $stukram_full_sliders['rnr_full_slider_sub_title_opt'] : ''; ?>
			
			<?php $stukram_full_slider_buttontxt = isset( $stukram_full_sliders['rnr_full_slider_buttontxt_opt'] ) ? $stukram_full_sliders['rnr_full_slider_buttontxt_opt'] : ''; ?>
			
			<?php $stukram_full_slider_buttonurl = isset( $stukram_full_sliders['rnr_full_slider_buttonurl_opt'] ) ? $stukram_full_sliders['rnr_full_slider_buttonurl_opt'] : ''; ?>	
			
			<?php $stukram_full_slider_button_target = isset( $stukram_full_sliders['rnr_full_slider_button_target_opt'] ) ? $stukram_full_sliders['rnr_full_slider_button_target_opt'] : ''; ?>	
			
			<?php $stukram_full_slider_video_url = isset( $stukram_full_sliders['rnr_full_slider_video_url_opt'] ) ? $stukram_full_sliders['rnr_full_slider_video_url_opt'] : ''; ?>	
			
			<?php $stukram_full_slider_img_color_opt = isset( $stukram_full_sliders['rnr_full_slider_img_color_opt'] ) ? $stukram_full_sliders['rnr_full_slider_img_color_opt'] : ''; ?>

			<?php $stukram_full_slider_img_ids = isset( $stukram_full_sliders['rnr_full_slider_img_id_opt'] ) ? $stukram_full_sliders['rnr_full_slider_img_id_opt'] : array();
			foreach ( $stukram_full_slider_img_ids as $stukram_full_slider_img_id ) {
			$stukram_image = RWMB_Image_Field::file_info( $stukram_full_slider_img_id, array( 'size' => '' ) ); ?>	
			
            <div class="swiper-slide overflow-hidden">
				<div class="sliderMain__wrap">
				    <div class="sliderMain__img <?php echo sanitize_html_class($stukram_full_slider_img_color_opt);?> z-1 js-image">
					    <?php if ( !empty( $stukram_full_slider_video_url ) ) { ?>	
						<video autoplay playsinline loop muted class="masthead__bg__item bg-video js-lazy" data-src="<?php echo esc_url($stukram_full_slider_video_url);?>">
						    <source src="#" type="video/mp4" data-src="<?php echo esc_url($stukram_full_slider_video_url);?>" />
						</video>	
						<?php } else { ?>
					    <div data-swiper-parallax-opacity="0" class="bg-image swiper-lazy" data-background="<?php echo esc_url(($stukram_image['url']));?>" data-swiper-parallax="750"></div>
						<?php } ?>						
				    </div>
                    
					<?php if ( !empty( $stukram_full_slider_title ) ) { ?>
					<div class="sliderMain__bgTitle fw-800 pb-48 md:d-none z-2 js-bgTitle" data-swiper-parallax="550">
						<?php echo esc_html($stukram_full_slider_title);?>
					</div>
					<?php } ?>

				    <div class="container-fluid">
					    <div class="row justify-content-center text-center">
					        <div class="col-sm-10">
						        <div class="sliderMain__content pt-24 z-3">
								    <?php if ( !empty( $stukram_full_slider_subtitle ) ) { ?>
						            <div class="js-subtitle">
										<p class="sliderMain__subtitle leading-xs text-xs tracking-md uppercase fw-500 text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> mb-32">
										    <?php echo esc_html($stukram_full_slider_subtitle);?>
										</p>
						            </div>
									<?php } ?>
									<?php if ( !empty( $stukram_full_slider_title ) ) { ?>
									<div class="js-title">						    
										<h1 class="sliderMain__title fw-800 text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?>">
										  <?php echo esc_html($stukram_full_slider_title);?>
										</h1>
									</div> 
						            <?php } ?>
									<?php if ( !empty( $stukram_full_slider_buttontxt ) ) { ?>
									<?php if ( !empty( $stukram_full_slider_buttonurl ) ) { ?>									
									<div class="sliderMain__button js-button">
										<a class="button -md -outline-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> mt-32" href="<?php echo esc_url($stukram_full_slider_buttonurl);?>" <?php if ( !empty( $stukram_full_slider_button_target ) ) { ?>target="<?php echo esc_attr($stukram_full_slider_button_target);?>"<?php } ?> data-barba>
										    <?php echo esc_html($stukram_full_slider_buttontxt);?>
										</a>
									</div>
									<?php } ?>
									<?php } ?>
						        </div>
					        </div>
					    </div>
				    </div>
				</div>
            </div>
			<?php } ?>
			<?php } } ;?> 
            <!-- swiper-slide end -->         

        </div>
        <!-- swiper-wrapper end -->

        <!-- ui-element start -->		
        <div class="ui-element -bottom-left js-ui">
            <div class="ui-element__social text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> js-bottom-left-links">
				<?php
				$stukram_full_slider_social = rwmb_meta( 'rnr_full_slider_social_opt' );
				if ( ! empty( $stukram_full_slider_social ) ) {
				foreach ( $stukram_full_slider_social as $stukram_full_slider_socials ) { ;?>
				
				<?php $stukram_full_slider_social_icon_opt = isset( $stukram_full_slider_socials['rnr_full_slider_social_icon_opt'] ) ? $stukram_full_slider_socials['rnr_full_slider_social_icon_opt'] : ''; ?>
				
				<?php $stukram_full_slider_social_url_opt = isset( $stukram_full_slider_socials['rnr_full_slider_social_url_opt'] ) ? $stukram_full_slider_socials['rnr_full_slider_social_url_opt'] : ''; ?>	
				
					<?php if ( !empty( $stukram_full_slider_social_icon_opt ) ) { ?>
					<?php if ( !empty( $stukram_full_slider_social_url_opt ) ) { ?>			    
					<a href="<?php echo esc_url($stukram_full_slider_social_url_opt);?>" target="_blank"><i class="<?php echo esc_attr($stukram_full_slider_social_icon_opt);?>"></i></a>
					<?php } ?>
					<?php } ?>				
		        <?php } } ;?> 				
				
            </div>
        </div>
        <!-- ui-element end -->

        <!-- ui-element start -->
		<?php if (( get_post_meta($post->ID,'rnr_full_slider_scroll_button',true))):?>
        <div class="ui-element -bottom sm:d-none js-ui">
          <button type="button" class="ui-element__scroll text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> js-ui-scroll-button">
            <?php echo esc_html(get_post_meta($post->ID,'rnr_full_slider_scroll_button',true)); ?>
            <i class="icon" data-feather="arrow-down"></i>
          </button>
        </div>
		<?php endif;?>
        <!-- ui-element end -->

        <!-- ui-element start -->
        <div class="ui-element -bottom-right sm:d-none js-ui js-slider-nav">
          <div class="navButton js-slider-main-nav">
            <button type="button" class="navButton__item button -outline-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> js-prev text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?>">
              <i class="icon" data-feather="arrow-left"></i>
            </button>

            <button type="button" class="navButton__item button -outline-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> js-next text-<?php echo sanitize_html_class($stukram_full_slider_color_scheme);?> ml-20">
              <i class="icon" data-feather="arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- ui-element end -->
    </section>
    <!-- section end -->