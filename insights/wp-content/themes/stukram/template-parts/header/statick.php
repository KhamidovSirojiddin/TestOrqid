    <!-- section start -->
    <?php if(get_post_meta($post->ID,'rnr_header_static_style_opt',true)=='st2'){ ?>	
		<section class="masthead -type-3 -full-height js-masthead-type-3 js-shapes">
		<?php if(get_post_meta($post->ID,'rnr_header_static_color_scheme',true)=='st2'){ ?>
			<?php $stukram_header_static_color_scheme = 'white';?>
			<?php $stukram_header_static_color_scheme2 = 'light';?>		
		<?php } else { ?>
			<?php $stukram_header_static_color_scheme = 'black';?>
			<?php $stukram_header_static_color_scheme2 = 'dark';?>
		<?php } ?>	
		<?php if(get_post_meta($post->ID,'rnr_header_static_shape_scheme',true)=='st2'){ ?>
			<?php $stukram_header_static_shape_scheme = 'black';?>
			<?php $stukram_header_static_shape_scheme2 = 'dark';?>
		<?php } else { ?>
			<?php $stukram_header_static_shape_scheme = 'white';?>
			<?php $stukram_header_static_shape_scheme2 = 'light';?>
		<?php } ?>			
			<!-- shapes start -->
			<?php if(get_post_meta($post->ID,'rnr_header_static_masthead_shapes',true)=='yes'){ ?>
			<div class="masthead-shapes -group-2">
			    <div class="masthead-shapes__item -item-1">
				   <div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_header_static_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_header_static_shape_scheme2);?> js-shape"></div>
			    </div>
			</div>
			<?php } ?>
			<!-- shapes end -->

			<!-- content start -->
			<div class="container">
				<div class="row">
					<div class="col-auto offset-lg-1">
						<div class="masthead__content -left-padding pt-40 z-3">
							<?php if (( get_post_meta($post->ID,'rnr_header_static_sbtitle',true))):?>
							<div data-split="lines" data-split-page-reveal>
							  <p class="masthead__subtitle text-xs uppercase tracking-lg fw-500 mb-40 md:mb-32 js-subtitle">
								<?php echo balanceTags(get_post_meta($post->ID,'rnr_header_static_sbtitle',true)); ?>
							  </p>
							</div>
							<?php endif;?>							
							<?php if (( get_post_meta($post->ID,'rnr_header_static_title',true))):?>
							<div data-split="lines" data-split-page-reveal>
							  <h1 class="masthead__title fw-600 js-title">
								<?php echo balanceTags(get_post_meta($post->ID,'rnr_header_static_title',true)); ?>
							  </h1>
							</div>
							<?php endif;?>			  

							<?php if (( get_post_meta($post->ID,'rnr_header_static_subtitle',true))):?>
							<div data-split="lines" data-split-page-reveal>
							  <p class="masthead__text mt-40 md:mt-32 sm:mt-20 js-text">
								<?php echo balanceTags(get_post_meta($post->ID,'rnr_header_static_subtitle',true)); ?>
							  </p>
							</div>
							<?php endif;?>

							<?php if (( get_post_meta($post->ID,'rnr_header_static_button',true))):?>
							<div class="masthead__button overflow-hidden mt-48 md:mt-40 sm:mt-40 ml-56 sm:ml-0">
							  <div class="js-button">
								<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_header_static_button_url',true)); ?>" <?php if(get_post_meta($post->ID,'rnr_header_static_button_target',true)=='yes'){ ?>target="_blank"<?php } ?>  class="button -md -outline-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?> text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?>">
								  <?php echo esc_html(get_post_meta($post->ID,'rnr_header_static_button',true)); ?>
								</a>
							  </div>
							</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
			<!-- content end -->

			<!-- ui element start -->
			<div class="ui-element -bottom-left js-ui">
				<div class="ui-element__social text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?>">
					<?php
					$stukram_header_static_social = rwmb_meta( 'rnr_header_static_social_opt' );
					if ( ! empty( $stukram_header_static_social ) ) {
					foreach ( $stukram_header_static_social as $stukram_header_static_socials ) { ;?>
					
					<?php $stukram_header_static_social_icon_opt = isset( $stukram_header_static_socials['rnr_header_static_social_icon_opt'] ) ? $stukram_header_static_socials['rnr_header_static_social_icon_opt'] : ''; ?>
					
					<?php $stukram_header_static_social_url_opt = isset( $stukram_header_static_socials['rnr_header_static_social_url_opt'] ) ? $stukram_header_static_socials['rnr_header_static_social_url_opt'] : ''; ?>	
					
						<?php if ( !empty( $stukram_header_static_social_icon_opt ) ) { ?>
						<?php if ( !empty( $stukram_header_static_social_url_opt ) ) { ?>			    
						<a href="<?php echo esc_url($stukram_header_static_social_url_opt);?>" target="_blank"  class="overflow-hidden"><i class="<?php echo esc_attr($stukram_header_static_social_icon_opt);?> js-ui-item"></i></a>
						<?php } ?>
						<?php } ?>				
					<?php } } ;?> 			  
			  </div>
			</div>
			<!-- ui element end -->

			<!-- ui-element start -->
			<?php if (( get_post_meta($post->ID,'rnr_header_static_scroll_button',true))):?>
			<div class="ui-element -bottom sm:d-none js-ui">
			  <button type="button" class="ui-element__scroll text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?> js-ui-scroll-button">
				<?php echo esc_html(get_post_meta($post->ID,'rnr_header_static_scroll_button',true)); ?>
				<i class="icon" data-feather="arrow-down"></i>
			  </button>
			</div>
			<?php endif;?>		
			<!-- ui-element end -->
		  </section>
		  <!-- section end -->	
	
	<?php } else { ?>
		<section class="masthead -type-2 js-masthead js-masthead-type-2">
		<?php if(get_post_meta($post->ID,'rnr_header_static_color_scheme',true)=='st2'){ ?>
			<?php $stukram_header_static_color_scheme = 'white';?>
			<?php $stukram_header_static_color_scheme2 = 'light';?>		
		<?php } else { ?>
			<?php $stukram_header_static_color_scheme = 'black';?>
			<?php $stukram_header_static_color_scheme2 = 'dark';?>
		<?php } ?>	
		<?php if(get_post_meta($post->ID,'rnr_header_static_shape_scheme',true)=='st2'){ ?>
			<?php $stukram_header_static_shape_scheme = 'black';?>
			<?php $stukram_header_static_shape_scheme2 = 'dark';?>
		<?php } else { ?>
			<?php $stukram_header_static_shape_scheme = 'white';?>
			<?php $stukram_header_static_shape_scheme2 = 'light';?>
		<?php } ?>				  
			<!-- shapes start -->
			<?php if(get_post_meta($post->ID,'rnr_header_static_masthead_shapes',true)=='yes'){ ?>
			<div class="masthead-shapes -group-3">
			  <div class="masthead-shapes__item -item-1">
				<div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_header_static_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_header_static_shape_scheme2);?> js-shape"></div>
			  </div>
			  <div class="masthead-shapes__item -item-2">
				<div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_header_static_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_header_static_shape_scheme2);?> js-shape"></div>
			  </div>
			  <div class="masthead-shapes__item -item-3">
				<div class="masthead-shapes__shape -<?php echo sanitize_html_class($stukram_header_static_shape_scheme);?> -shadow-<?php echo sanitize_html_class($stukram_header_static_shape_scheme2);?> js-shape"></div>
			  </div>
			</div>
			<?php } ?>
			<!-- shapes end -->

			<!-- content start -->
			<div class="container-fluid px-24">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="masthead__content z-3">
							<?php if (( get_post_meta($post->ID,'rnr_header_static_title',true))):?>
							<div data-split="lines" data-split-page-reveal>
							  <h1 class="masthead__title fw-800 js-title">
								<?php echo balanceTags(get_post_meta($post->ID,'rnr_header_static_title',true)); ?>
							  </h1>
							</div>
							<?php endif;?>			  

							<?php if (( get_post_meta($post->ID,'rnr_header_static_subtitle',true))):?>
							<div data-split="lines" data-split-page-reveal>
							  <p class="masthead__text mt-40 md:mt-32 ml-56 sm:ml-0 js-text">
								<?php echo balanceTags(get_post_meta($post->ID,'rnr_header_static_subtitle',true)); ?>
							  </p>
							</div>
							<?php endif;?>

							<?php if (( get_post_meta($post->ID,'rnr_header_static_button',true))):?>
							<div class="masthead__button overflow-hidden mt-48 md:mt-40 sm:mt-40 ml-56 sm:ml-0">
							  <div class="js-button">
								<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_header_static_button_url',true)); ?>" <?php if(get_post_meta($post->ID,'rnr_header_static_button_target',true)=='yes'){ ?>target="_blank"<?php } ?>  class="button -md -outline-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?> text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?>">
								  <?php echo esc_html(get_post_meta($post->ID,'rnr_header_static_button',true)); ?>
								</a>
							  </div>
							</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
			<!-- content end -->

			<!-- ui element start -->
			<div class="ui-element -bottom-left js-ui">
				<div class="ui-element__social text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?>">
					<?php
					$stukram_header_static_social = rwmb_meta( 'rnr_header_static_social_opt' );
					if ( ! empty( $stukram_header_static_social ) ) {
					foreach ( $stukram_header_static_social as $stukram_header_static_socials ) { ;?>
					
					<?php $stukram_header_static_social_icon_opt = isset( $stukram_header_static_socials['rnr_header_static_social_icon_opt'] ) ? $stukram_header_static_socials['rnr_header_static_social_icon_opt'] : ''; ?>
					
					<?php $stukram_header_static_social_url_opt = isset( $stukram_header_static_socials['rnr_header_static_social_url_opt'] ) ? $stukram_header_static_socials['rnr_header_static_social_url_opt'] : ''; ?>	
					
						<?php if ( !empty( $stukram_header_static_social_icon_opt ) ) { ?>
						<?php if ( !empty( $stukram_header_static_social_url_opt ) ) { ?>			    
						<a href="<?php echo esc_url($stukram_header_static_social_url_opt);?>" target="_blank"  class="overflow-hidden"><i class="<?php echo esc_attr($stukram_header_static_social_icon_opt);?> js-ui-item"></i></a>
						<?php } ?>
						<?php } ?>				
					<?php } } ;?> 			  
			  </div>
			</div>
			<!-- ui element end -->

			<!-- ui-element start -->
			<?php if (( get_post_meta($post->ID,'rnr_header_static_scroll_button',true))):?>
			<div class="ui-element -bottom sm:d-none js-ui">
			  <button type="button" class="ui-element__scroll text-<?php echo sanitize_html_class($stukram_header_static_color_scheme);?> js-ui-scroll-button">
				<?php echo esc_html(get_post_meta($post->ID,'rnr_header_static_scroll_button',true)); ?>
				<i class="icon" data-feather="arrow-down"></i>
			  </button>
			</div>
			<?php endif;?>		
			<!-- ui-element end -->
		  </section>
		  <!-- section end -->	
	<?php } ?>	