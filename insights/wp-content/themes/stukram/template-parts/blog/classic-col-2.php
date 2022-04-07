<?php $stukram_options = get_option('stukram'); ?>
    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row no-gutters justify-content-between" id="insights-single-blog-post">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php global $stukram_sidebar_class; ?>
				<?php $stukram_sidebar_class = "col-lg-8";?>
				<?php else : ?>
				<?php $stukram_sidebar_class = "col-lg-10 offset-1";?>
				<?php endif;?>
                <!-- posts start -->
                <div class="<?php echo esc_attr($stukram_sidebar_class);?>">
				
				    <div class="row x-gap-60 y-gap-60">

						<?php
						global $post, $post_id, $stukram_post_title;
						$stukram_showpost= get_post_meta($post->ID, 'rnr_blog_post_show', true);
						$stukram_offset= get_post_meta($post->ID, 'rnr_blog_post_offset', true);
						$stukram_categoryname=get_post_meta($post->ID, 'rnr_blog_post_cat', true);
						$stukram_paged=(get_query_var('paged'))?get_query_var('paged'):1;
						$stukram_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$stukram_showpost, 'category_name'=>$stukram_categoryname, 'offset' => $stukram_offset, 'paged'=>$stukram_paged ) ); ?>
						<?php while ( $stukram_loop->have_posts() ) : $stukram_loop->the_post();?>
						<?php $stukram_category = wp_get_post_terms($post->ID,'category');?>
						<?php 
						$stukram_class = ""; 
						$stukram_categories = ""; 
						foreach ($stukram_category as $stukram_item) {
						$stukram_class.=esc_attr($stukram_item->slug . ' ');
						$stukram_categories.='<a href="'.get_category_link($stukram_item->term_id).'">';
						$stukram_categories.=esc_attr($stukram_item->name . '  ');
						$stukram_categories.='</a>';
						}?>
						<div class="col-md-6">									
							<!-- blog-item start -->
							<div data-anim="slide-up" class="blogPost mb-0">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if (has_post_thumbnail( $post->ID ) ):?>
								<?php $stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
								<a data-barba href="<?php the_permalink();?>">
								  <div class="blogPost__img -hover">
									<div class="bg-image ratio ratio-4:3 js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
								  </div>
								</a>
								<?php endif;?>
								<!-- blog-content start -->
								<div class="blogPost__content mt-24">
								   <?php if( has_category() ) {?>
									<div class="blogPost__cat leading-md">
										<?php the_category(', ');?>
									</div>
									<?php } ?> 
									<?php $stukram_post_title= get_the_title(); ?>
									<h3 class="blogPost__title text-2xl leading-lg fw-700 mt-12">
										<a data-barba href="<?php the_permalink();?>">
											<?php if($stukram_post_title != '') { ?>
												<?php the_title();?>
											<?php } else { ?>	
												<?php the_time( get_option( 'date_format' ) ); ?>
											<?php } ?>	
										</a>
									</h3>

								</div>
								<!-- blog-content end -->
							</div>
							</div>
						</div>
					    <!-- blog-item end -->					
						<?php endwhile; ?>
						<?php wp_reset_postdata();?>
					
					</div>

					<!-- pagination start next -->
					<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if ( $actual_link == "https://insights.orqid.sooperior.com/" ) { ?>
        				<a href="https://insights.orqid.sooperior.com/blog/page/2" data-barba class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">
                          Next
                          <i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i>
                        </a>
					<?php }
					else
					{
					 if (function_exists("stukram_pagination")) { ?>
						<button data-barba class="clickfunprev button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20" style="float:left;">
                        <i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i> 
						Prev
                        </button>
						<button data-barba class="clickfun button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">
                          Next
                          <i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i>
                        </button>
						<?php stukram_pagination($stukram_loop->max_num_pages); } 
					}
					?>
					<!-- pagination end next -->

					
				</div>
				<!-- posts end -->


            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
<section class="layout-pt-xl layout-pb-md bg-dark-1">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 sub-footer-cus">
              <p class="text-base text-light">
                Do you need help with your project?
              </p>
              <h2 class="text-6xl sm:text-5xl xs:text-4xl fw-700 mt-20 text-white">
                We would love to hear all the details. 
              </h2>
              <a href="/contact.html" class="button -md -white text-white mt-40 md:mt-32 button-sub-footer">
                get in touch
              </a>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>

    <!-- section end -->						
