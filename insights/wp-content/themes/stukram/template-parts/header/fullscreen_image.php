<?php $stukram_options = get_option('stukram'); ?>

	<?php if(get_post_meta($post->ID,'rnr_page_full_img_header_color_scheme',true)=='st2'){ ?>
		<?php $stukram_page_full_img_header_color_scheme = 'white';?>
	<?php } else { ?>
		<?php $stukram_page_full_img_header_color_scheme = 'black';?>
	<?php } ?>	
	<?php if(get_post_meta($post->ID,'rnr_page_full_img_header_shape_scheme',true)=='st2'){ ?>
		<?php $stukram_page_full_img_header_shape_scheme = 'black-sm dark';?>
	<?php } else if(get_post_meta($post->ID,'rnr_page_full_img_header_shape_scheme',true)=='st1'){ ?>
		<?php $stukram_page_full_img_header_shape_scheme = 'white-sm light';?>
	<?php } else { ?>
		<?php $stukram_page_full_img_header_shape_scheme = '';?>
	<?php } ?>	 

    <!-- section start -->
    <section data-anim-wrap class="<?php if(get_post_meta($post->ID,'rnr_page_full_menu_back',true)!='st2'){ ?>layout-mt-headerBar<?php } ;?> h-md md:h-70vh sliderMain -type-1">	    
        <div data-anim-child="img-right cover-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?> delay-2" class="bg-fill-image">
          <div data-parallax="0.7" class="h-full overlay-<?php echo esc_attr($stukram_page_full_img_header_shape_scheme);?>">
				<?php if (has_post_thumbnail( $post->ID ) ):
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				endif;
				?>
				<?php $stukram_back_image = rwmb_meta( 'rnr_page_full_img_header_bg_img','type=image&size=' ); ?>
				<?php if ( ! empty( $stukram_back_image ) ) { ?>
				    <?php foreach ( $stukram_back_image as $stukram_back_images ){ ?>
				    <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo esc_url(($stukram_back_images['url']));?>"></div>				
				    <?php } ;?>
				<?php } else { ?>
				    <div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
				<?php } ;?>			  
          </div>
        </div>

        <!-- container start -->
		<?php if(get_post_meta($post->ID,'rnr_page_full_img_header_title_opt',true)!='no'){ ?> 
        <div class="container h-full">
            <!-- row start -->
            <div class="row align-items-center justify-content-center text-center h-full">
				<div class="col-sm-10">
					<div data-anim-child="slide-up delay-8" class="sectionHeading ">
					    <?php if (( get_post_meta($post->ID,'rnr_page_full_img_header_subtitle',true))) {?>
						<p class="sectionHeading__subtitle fw-500 text-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?>">
							<?php echo esc_html(get_post_meta($post->ID,'rnr_page_full_img_header_subtitle',true)); ?>
						</p>
						<?php } ;?>	
						<h1 class="sectionHeading__title sliderMain__title text-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?> ">
						  <?php if (( get_post_meta($post->ID,'rnr_page_full_img_header_title',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_full_img_header_title',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
						</h1>
						<?php if (( get_post_meta($post->ID,'rnr_page_full_img_header_button_text',true))):?>
						<a class="button -md -outline-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?> text-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?>  mt-32" href="<?php echo esc_url(get_post_meta($post->ID,'rnr_page_full_img_header_button_url',true)); ?>" target="<?php echo esc_attr(get_post_meta($post->ID,'rnr_page_full_img_header_button_target',true)); ?>"><?php echo esc_html(get_post_meta($post->ID,'rnr_page_full_img_header_button_text',true)); ?></a>
						<?php endif;?>
						
					</div>
				</div>
            </div>
            <!-- row end -->
        </div>
		<?php } ;?>	
        <!-- container end -->
		<!-- ui-element start -->
		<?php if (( get_post_meta($post->ID,'rnr_full_image_scroll_button',true))):?>
        <div class="ui-element -bottom sm:d-none js-ui">
          <button type="button" class="ui-element__scroll text-<?php echo sanitize_html_class($stukram_page_full_img_header_color_scheme);?> js-ui-scroll-button">
            <?php echo esc_html(get_post_meta($post->ID,'rnr_full_image_scroll_button',true)); ?>
            <i class="icon" data-feather="arrow-down"></i>
          </button>
        </div>
		<?php endif;?>
        <!-- ui-element end -->
    </section>
    <!-- section end -->