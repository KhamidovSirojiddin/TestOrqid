	<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_color_scheme',true)=='st2'){ ?>
		<?php $stukram_portfolio_post_header_color_scheme = 'white';?>
		<?php $stukram_portfolio_post_header_color_scheme2 = 'light';?>		
	<?php } else { ?>
		<?php $stukram_portfolio_post_header_color_scheme = 'black';?>
		<?php $stukram_portfolio_post_header_color_scheme2 = 'dark';?>
	<?php } ?>	
	<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_shape_scheme',true)=='st2'){ ?>
		<?php $stukram_portfolio_post_header_shape_scheme = 'black';?>
		<?php $stukram_portfolio_post_header_shape_scheme2 = 'dark';?>
	<?php } else { ?>
		<?php $stukram_portfolio_post_header_shape_scheme = 'white';?>
		<?php $stukram_portfolio_post_header_shape_scheme2 = 'light';?>
	<?php } ?>	    
	
	<!-- section start -->
    <?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_style_opt',true)=='st2'){ ?>	

    <!-- section start -->	  	  
	<section class="masthead -type-work-1 -full-screen bg-<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme);?> sm:text-center js-masthead-type-work-1 js-bg">
		<!-- shapes start -->
		<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_bg_img_opt',true)!='no'){ ?>
		
			<div data-parallax="0.7" class="masthead__bg overlay-<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme);?>-md js-image">
				<?php if (has_post_thumbnail( $post->ID ) ):
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				endif;
				?>
				<?php $stukram_back_image = rwmb_meta( 'rnr_portfolio_post_header_bg_img','type=image&size=' ); ?>
				<?php if ( ! empty( $stukram_back_image ) ) { ?>
				    <?php foreach ( $stukram_back_image as $stukram_back_images ){ ?>
				    <div data-parallax-target class="bg-image js-lazy js-bg-item" data-bg="<?php echo esc_url(($stukram_back_images['url']));?>"></div>				
				    <?php } ;?>
				<?php } else { ?>
				    <div data-parallax-target class="bg-image js-lazy js-bg-item" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
				<?php } ;?>			
			</div>				
		<?php } ?>
		<!-- shapes end -->		

		<!-- masthead__content start -->
        <div class="masthead__content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-sm-10 z-3">
                        <div data-split="lines">
							<p class="masthead__subtitle text-lg sm:text-base text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> mb-32 sm:mb-24 js-subtitle">
								<?php if (( get_post_meta($post->ID,'rnr_portfolio_post_header_subtitle',true))):?>
									<?php echo esc_html(get_post_meta($post->ID,'rnr_portfolio_post_header_subtitle',true)); ?>
								<?php else : ?>					
									<?php
										$stukram_portfolio_categorys = wp_get_post_terms( $post->ID, 'portfolio_category');
										foreach ( $stukram_portfolio_categorys as $stukram_portfolio_category ) {
										   $stukram_portfolio_category_link = get_term_link( $stukram_portfolio_category );
										   echo '<span class="cat-divider">' . $stukram_portfolio_category->name . '</span>' . ' ';
										   }
									?>									     
								<?php endif;?>	
							</p>
						</div>

						<div data-split="lines">
						  <h1 class="masthead__title text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> fw-700 js-title">
							<?php if (( get_post_meta($post->ID,'rnr_portfolio_post_header_title',true))):?>
								<?php echo esc_html(get_post_meta($post->ID,'rnr_portfolio_post_header_title',true)); ?>
							<?php else : ?>	
								<?php the_title();?>
							<?php endif;?>							  
						  </h1>
						</div>
						
						<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_info_selector_opt',true)=='st2'){ ?>
						<div class="masthead__info__wrap">
							<div class="row y-gap-32">
						  
								<?php
								$stukram_portfolio_post_header = rwmb_meta( 'rnr_portfolio_post_header_opt' );
								if ( ! empty( $stukram_portfolio_post_header ) ) {
								foreach ( $stukram_portfolio_post_header as $stukram_portfolio_post_headers ) { ;?>			
								
								<?php $stukram_portfolio_post_header_title = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_title_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_title_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_subtitle = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_sub_title_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_sub_title_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_buttontxt = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttontxt_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttontxt_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_buttonurl = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttonurl_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttonurl_opt'] : ''; ?>	
								
								<?php $stukram_portfolio_post_header_button_target = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_button_target_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_button_target_opt'] : ''; ?>		
								
								<?php $stukram_portfolio_post_header_col_gap = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_col_gap_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_col_gap_opt'] : ''; ?>			
													  
								<div class="col-lg-auto <?php if ($stukram_portfolio_post_header_col_gap =='st2'){ ?> <?php } else { ?>offset-lg-1<?php } ?> col-sm-6">
									<div class="masthead__info">
										<div data-split="lines" class="masthead__item js-info-item">
											<?php if ( !empty( $stukram_portfolio_post_header_title ) ) { ?>
												<h5 class="text-lg leading-sm fw-600 text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?>"><?php echo esc_html($stukram_portfolio_post_header_title);?></h5>
											<?php } ?>
											<?php if ( !empty( $stukram_portfolio_post_header_subtitle ) ) { ?>
												<p class="text-lg leading-sm mt-12 sm:mt-8 text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme2);?>"><?php echo esc_html($stukram_portfolio_post_header_subtitle);?></p>
											<?php } ?>
											<?php if ( !empty( $stukram_portfolio_post_header_buttontxt ) ) { ?>
											<?php if ( !empty( $stukram_portfolio_post_header_buttonurl ) ) { ?>		
												<a href="<?php echo esc_url($stukram_portfolio_post_header_buttonurl);?>" <?php if ( !empty( $stukram_portfolio_post_header_button_target ) ) { ?>target="<?php echo esc_attr($stukram_portfolio_post_header_button_target);?>"<?php } ?> class="button d-block fw-500 text-lg leading-sm text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> mt-12 sm:mt-8">
												<?php echo esc_html($stukram_portfolio_post_header_buttontxt);?>
												</a>
											<?php } ?>
											<?php } ?>
										</div>
									</div>
								</div>					
								<?php } } ;?> 
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!-- masthead__content end -->
    </section>
    <!-- section end -->	
	
	<?php } else { ?>
	
    <!-- section start -->	  	  
	<section class="masthead -type-work-1 sm:text-center js-masthead-type-work-1 js-shapes">
		<!-- shapes start -->
		<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_masthead_shapes_opt',true)!='no'){ ?>
		<div class="masthead-shapes -group-4">
		  <div class="masthead-shapes__item -item-1">
			<div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme2);?> js-shape"></div>
		  </div>
		  <div class="masthead-shapes__item -item-2">
			<div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_portfolio_post_header_shape_scheme2);?> js-shape"></div>
		  </div>
		</div>
		<?php } ?>
		<!-- shapes end -->		

		<!-- masthead__content start -->
		<div class="masthead__content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-9 col-sm-10 z-3">
						<div data-split="lines">
							<p class="masthead__subtitle text-lg sm:text-base text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> mb-32 sm:mb-24 js-subtitle">
								<?php if (( get_post_meta($post->ID,'rnr_portfolio_post_header_subtitle',true))):?>
									<?php echo esc_html(get_post_meta($post->ID,'rnr_portfolio_post_header_subtitle',true)); ?>
								<?php else : ?>					
									<?php
										$stukram_portfolio_categorys = wp_get_post_terms( $post->ID, 'portfolio_category');
										foreach ( $stukram_portfolio_categorys as $stukram_portfolio_category ) {
										   $stukram_portfolio_category_link = get_term_link( $stukram_portfolio_category );
										   echo '<span class="cat-divider">' . $stukram_portfolio_category->name . '</span>' . ' ';
										   }
									?>									     
								<?php endif;?>	
							</p>
						</div>

						<div data-split="lines">
						  <h1 class="masthead__title text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> fw-700 js-title">
							<?php if (( get_post_meta($post->ID,'rnr_portfolio_post_header_title',true))):?>
								<?php echo esc_html(get_post_meta($post->ID,'rnr_portfolio_post_header_title',true)); ?>
							<?php else : ?>	
								<?php the_title();?>
							<?php endif;?>							  
						  </h1>
						</div>
						
						<?php if(get_post_meta($post->ID,'rnr_portfolio_post_header_info_selector_opt',true)=='st2'){ ?>
						<div class="masthead__info__wrap">
							<div class="row y-gap-32">
						  
								<?php
								$stukram_portfolio_post_header = rwmb_meta( 'rnr_portfolio_post_header_opt' );
								if ( ! empty( $stukram_portfolio_post_header ) ) {
								foreach ( $stukram_portfolio_post_header as $stukram_portfolio_post_headers ) { ;?>			
								
								<?php $stukram_portfolio_post_header_title = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_title_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_title_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_subtitle = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_sub_title_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_sub_title_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_buttontxt = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttontxt_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttontxt_opt'] : ''; ?>
								
								<?php $stukram_portfolio_post_header_buttonurl = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttonurl_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_buttonurl_opt'] : ''; ?>	
								
								<?php $stukram_portfolio_post_header_button_target = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_button_target_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_button_target_opt'] : ''; ?>		
								
								<?php $stukram_portfolio_post_header_col_gap = isset( $stukram_portfolio_post_headers['rnr_portfolio_post_header_col_gap_opt'] ) ? $stukram_portfolio_post_headers['rnr_portfolio_post_header_col_gap_opt'] : ''; ?>			
													  
								<div class="col-lg-auto <?php if ($stukram_portfolio_post_header_col_gap =='st2'){ ?> <?php } else { ?>offset-lg-1<?php } ?> col-sm-6">
									<div class="masthead__info">
										<div data-split="lines" class="masthead__item js-info-item">
											<?php if ( !empty( $stukram_portfolio_post_header_title ) ) { ?>
												<h5 class="text-lg leading-sm fw-600 text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?>"><?php echo esc_html($stukram_portfolio_post_header_title);?></h5>
											<?php } ?>
											<?php if ( !empty( $stukram_portfolio_post_header_subtitle ) ) { ?>
												<p class="text-lg leading-sm mt-12 sm:mt-8 text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme2);?>"><?php echo esc_html($stukram_portfolio_post_header_subtitle);?></p>
											<?php } ?>
											<?php if ( !empty( $stukram_portfolio_post_header_buttontxt ) ) { ?>
											<?php if ( !empty( $stukram_portfolio_post_header_buttonurl ) ) { ?>		
												<a href="<?php echo esc_url($stukram_portfolio_post_header_buttonurl);?>" <?php if ( !empty( $stukram_portfolio_post_header_button_target ) ) { ?>target="<?php echo esc_attr($stukram_portfolio_post_header_button_target);?>"<?php } ?> class="button d-block fw-500 text-lg leading-sm text-<?php echo sanitize_html_class($stukram_portfolio_post_header_color_scheme);?> mt-12 sm:mt-8">
												<?php echo esc_html($stukram_portfolio_post_header_buttontxt);?>
												</a>
											<?php } ?>
											<?php } ?>
										</div>
									</div>
								</div>					
								<?php } } ;?> 
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!-- masthead__content end -->
    </section>
    <!-- section end -->	

	<?php } ?>	
