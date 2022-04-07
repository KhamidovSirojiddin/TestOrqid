<?php $stukram_options = get_option('stukram'); ?>

    <?php if (has_post_thumbnail( $post->ID ) ):
		$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
	?>

    <!-- section start -->
    <section data-anim-wrap class="layout-mt-headerBar h-md md:h-70vh">
		<div data-anim-child="img-right cover-white delay-2" class="bg-fill-image">
		  <div data-parallax="0.7" class="h-full overlay-black-sm">
			<div data-parallax-target class="bg-image js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
		  </div>
		</div>

		<!-- container start -->
		<div class="container h-full">
		  <!-- row start -->
		  <div class="row align-items-center justify-content-center text-center h-full">
			<div class="col-xl-6 col-lg-7">
			  <div data-anim-child="slide-up delay-8" class="sectionHeading <?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true))):?><?php echo sanitize_html_class(get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true)); ?><?php else : ?>-lg<?php endif;?>">
				<h2 class="sectionHeading__title text-white">
				   <?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
				</h2>				
			  </div>
			</div>
		  </div>
		  <!-- row end -->
		</div>
		<!-- container end -->
    </section>
    <!-- section end -->

    <?php else: ?>
	   <?php if(get_post_meta($post->ID,'rnr_page_header_position_selector_opt',true)=='st2'){ ?> 
		<!-- section start -->
		<section class="layout-pt-xl layout-pb-md">
			<!-- container start -->
			<div class="container">
				<!-- row start -->
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-8">
						<?php if(get_post_meta($post->ID,'rnr_page_header_breadcumbs_opt',true)!='no'){ ?> 
						<ul class="breadcrumbs justify-content-center text-black mb-40">
							<li class="breadcrumbs-item">
								<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<?php if(!empty($stukram_options['header_home_title'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_home_title',''));?><?php else : ?><?php esc_html_e('Home','stukram');?><?php endif;?>
								</a>
							</li>
							<li class="breadcrumbs-item active" aria-current="page">
								<?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
							</li>
						</ul>
						<?php } ;?>

						<div class="sectionHeading <?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true))):?><?php echo sanitize_html_class(get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true)); ?><?php else : ?>-lg<?php endif;?>">
							<h1 class="sectionHeading__title">
								<?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
							</h1>
						</div>
					</div>
			  </div>
			  <!-- row end -->
			</div>
			<!-- container end -->
		</section>
		<!-- section end -->	
		<?php } else { ?>
		<!-- section start -->
		<section class="layout-pt-pageHeader layout-pb-xs">
			<!-- container start -->
			<div class="container">
				<!-- row start -->
				<div class="row">
					<div class="col-xl-7 col-lg-8">
						<?php if(get_post_meta($post->ID,'rnr_page_header_breadcumbs_opt',true)!='no'){ ?> 
						<ul class="breadcrumbs text-black mb-40">
							<li class="breadcrumbs-item">
								<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<?php if(!empty($stukram_options['header_home_title'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_home_title',''));?><?php else : ?><?php esc_html_e('Home','stukram');?><?php endif;?>
								</a>
							</li>
							<li class="breadcrumbs-item active" aria-current="page">
								<?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
							</li>
						</ul>
						<?php } ;?>

						<div class="sectionHeading <?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true))):?><?php echo sanitize_html_class(get_post_meta($post->ID,'rnr_page_default_header_title_font_size_opt',true)); ?><?php else : ?>-lg<?php endif;?>">
							<h1 class="sectionHeading__title">
								<?php if (( get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true))):?><?php echo esc_html(get_post_meta($post->ID,'rnr_page_default_header_title_main_opt',true)); ?><?php else : ?><?php the_title();?><?php endif;?>
							</h1>
						</div>
					</div>
			  </div>
			  <!-- row end -->
			</div>
			<!-- container end -->
		</section>
		<!-- section end -->
		<?php }?>	
    <?php endif; ?>	