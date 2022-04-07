<?php $stukram_options = get_option('stukram'); ?>

    <!-- section start -->
	<?php if(get_post_meta($post->ID,'rnr_main_slider_speed',true)):?>
	<?php $stukram_slider_speed = get_post_meta($post->ID,'rnr_main_slider_speed',true);?>
	<?php else: ?>
	<?php $stukram_slider_speed = '1200';?>
	<?php endif;?>	
	<?php if(get_post_meta($post->ID,'rnr_main_slider_autoplay_delay',true)):?>
	<?php $stukram_slider_autoplay_delay = get_post_meta($post->ID,'rnr_main_slider_autoplay_delay',true);?>
	<?php else: ?>
	<?php $stukram_slider_autoplay_delay = '2900';?>
	<?php endif;?>		
    <section data-speed="<?php echo esc_attr($stukram_slider_speed);?>" data-autoplay-delay="<?php echo esc_attr($stukram_slider_autoplay_delay);?>" class="sliderMain -type-3 js-sliderMain-type-3 sm:layout-mt-headerBar">
        <!-- container start -->
        <div class="container-fluid h-full px-0 sm:px-20">
            <!-- row start -->
            <div class="row sm:justify-content-center h-full">
                <div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1 col-md-5 offset-md-1 col-sm-9">
                    <div class="slider__content__wrapper sm:text-center h-full z-3">
					
						<?php
						$stukram_main_slider = rwmb_meta( 'rnr_main_slider_img_opt' );
						if ( ! empty( $stukram_main_slider ) ) {
						$stukram_counter=1;
					    $stukram_count = count($stukram_main_slider);
						foreach ( $stukram_main_slider as $stukram_main_sliders ) { ;?>
						<?php $stukram_main_slider_title = isset( $stukram_main_sliders['rnr_main_slider_title_opt'] ) ? $stukram_main_sliders['rnr_main_slider_title_opt'] : ''; ?>
						
						<?php $stukram_main_slider_subtitle = isset( $stukram_main_sliders['rnr_main_slider_sub_title_opt'] ) ? $stukram_main_sliders['rnr_main_slider_sub_title_opt'] : ''; ?>
						
						<?php $stukram_main_slider_buttontxt = isset( $stukram_main_sliders['rnr_main_slider_buttontxt_opt'] ) ? $stukram_main_sliders['rnr_main_slider_buttontxt_opt'] : ''; ?>
						
						<?php $stukram_main_slider_buttonurl = isset( $stukram_main_sliders['rnr_main_slider_buttonurl_opt'] ) ? $stukram_main_sliders['rnr_main_slider_buttonurl_opt'] : ''; ?>
						
						<?php $stukram_main_slider_button_target = isset( $stukram_main_sliders['rnr_main_slider_button_target_opt'] ) ? $stukram_main_sliders['rnr_main_slider_button_target_opt'] : ''; ?>
						<?php $stukram_main_slider_img_ids_title = isset( $stukram_main_sliders['rnr_main_slider_img_id_opt'] ) ? $stukram_main_sliders['rnr_main_slider_img_id_opt'] : array(); ?>
				       <?php 
					    foreach ( $stukram_main_slider_img_ids_title as $stukram_main_slider_img_ids_titles ) {
				        $stukram_image = RWMB_Image_Field::file_info( $stukram_main_slider_img_ids_titles, array( 'size' => '' ) ); ?>
				
						<div class="slider__content <?php if ($stukram_counter == 1) : ?>is-active<?php endif;?> js-slider-content">
							<?php if ( !empty( $stukram_main_slider_title ) ) { ?>
							<div data-split="lines">
								<p class="slider__subtitle text-sm uppercase tracking-md leading-md mb-32 js-subtitle">
									<?php echo esc_html($stukram_main_slider_title);?>
								</p>
							</div>
							<?php } ?>
								
							<?php if ( !empty( $stukram_main_slider_subtitle ) ) { ?>
							<div data-split="lines" class="mr-minus-col-2 sm:mr-0">
								<h1 class="slider__title fw-700 leading-xs js-title">
								<?php echo esc_html($stukram_main_slider_subtitle);?> 
								</h1>						
							</div>
							<?php } ?>
							<?php if ( !empty( $stukram_main_slider_buttontxt ) ) { ?>
							<?php if ( !empty( $stukram_main_slider_buttonurl ) ) { ?>
							<div class="slider__button overflow-hidden mt-32">
								<div class="js-button py-4">						
									<a href="<?php echo esc_url($stukram_main_slider_buttonurl);?>" class="button -md -black text-white" <?php if ( !empty( $stukram_main_slider_button_target ) ) { ?>target="<?php echo esc_attr($stukram_main_slider_button_target);?>"<?php } ?>><?php echo esc_html($stukram_main_slider_buttontxt);?></a>							
								</div>
							</div>
							<?php } ?>
							<?php } ?>
						</div>
						<?php 
						} ?>
					    <?php 
						$stukram_counter++;
						} } ;?> 	

                    </div>
                </div>

				<div class="col layout-pr-headerBar lg:pr-0 col-lg-7 col-md-6 swiper-col">
				    <div class="swiper-container h-100vh">
					    <div class="swiper-wrapper z-2">
 
							<?php
							$stukram_main_slider_img = rwmb_meta( 'rnr_main_slider_img_opt' );
							if ( ! empty( $stukram_main_slider_img ) ) {
							$stukram_counter=1;
							$stukram_count = count($stukram_main_slider_img);
							foreach ( $stukram_main_slider_img as $stukram_main_slider_imgs ) { ;?>
							
							<?php $stukram_main_slider_img_color_opt = isset( $stukram_main_slider_imgs['rnr_main_slider_img_color_opt'] ) ? $stukram_main_slider_imgs['rnr_main_slider_img_color_opt'] : ''; ?>
							
							<?php $stukram_main_slider_img_ids = isset( $stukram_main_slider_imgs['rnr_main_slider_img_id_opt'] ) ? $stukram_main_slider_imgs['rnr_main_slider_img_id_opt'] : array();
				            foreach ( $stukram_main_slider_img_ids as $stukram_main_slider_img_id ) {
				            $stukram_image = RWMB_Image_Field::file_info( $stukram_main_slider_img_id, array( 'size' => '' ) ); ?>
							
						    <div class="swiper-slide overflow-hidden">
								<div class="slider__img" data-swiper-parallax="150" data-parallax="0.7" data-swiper-parallax-opacity="0">
								  <div data-parallax-target class="bg-image swiper-lazy js-image" data-background="<?php echo esc_url(($stukram_image['url']));?>"></div>
								</div>
                                
								<?php if ($stukram_counter == 1) : ?>
								<div class="slider__img__cover js-image-cover "></div>
								<?php endif;?>
                                
								<div class="slider__img__bg <?php echo sanitize_html_class($stukram_main_slider_img_color_opt);?>"></div>
						    </div>
							<?php } ?>
							<?php 
							$stukram_counter++;
							} } ;?> 

					    </div>
				    </div>
				</div>
            </div>
            <!-- row end -->

			<!-- slider nav start -->
			 <div class="slider__navs js-slider-nav js-ui">
				<div class="navButton">
				  <button type="button" class="navButton__item button -outline-black text-black js-prev">
					<i class="icon" data-feather="arrow-left"></i>
				  </button>
				  <button type="button" class="navButton__item button -outline-black text-black mt-12 js-next">
					<i class="icon" data-feather="arrow-right"></i>
				  </button>
				</div>
			</div>
			<!-- slider nav end -->
        </div>
        <!-- container end -->

        <!-- ui-element start -->
		<?php if (( get_post_meta($post->ID,'rnr_main_slider_scroll_button',true))):?>
        <div class="ui-element -bottom-left sm:d-none js-ui">
          <button type="button" class="ui-element__scroll text-black js-ui-scroll-button">
            <?php echo esc_html(get_post_meta($post->ID,'rnr_main_slider_scroll_button',true)); ?>
            <i class="icon" data-feather="arrow-down"></i>
          </button>
        </div>
		<?php endif;?>
        <!-- ui-element end -->
    </section>
    <!-- section end -->