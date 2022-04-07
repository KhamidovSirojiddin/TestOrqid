<?php $stukram_options = get_option('stukram'); ?>
    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row no-gutters justify-content-center">
                <!-- posts start -->
                <div class="col-lg-10 offset-1">

					<?php global $post, $post_id, $stukram_post_title;?>
					<?php while ( have_posts() ) : the_post();?>
								    					
					<!-- blog-item start -->
					<div class="blogPost">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    <?php if (has_post_thumbnail( $post->ID ) ):?>
						<?php $stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
						<a data-barba href="<?php the_permalink();?>">
						  <div class="blogPost__img -hover">
							<div class="bg-image ratio ratio-16:9 js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
						  </div>
						</a>
                        <?php endif;?>
						<!-- blog-content start -->
						<div class="blogPost__content mt-24">
						   <?php if( has_category() ) {?>
						    <div class="blogPost__info leading-md">
							    <?php the_category(', ');?>
						    </div>
						    <?php } ?> 
                            <?php $stukram_post_title= get_the_title(); ?>
						    <h3 class="blogPost__title text-2xl fw-600 mt-16">
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
					<!-- blog-item end -->					
					<?php endwhile; ?>
					<?php wp_reset_postdata();?>

					<!-- pagination start -->
					<?php if (function_exists("stukram_pagination")) {
					stukram_pagination($wp_query->max_num_pages);
					} ?>
					<!-- pagination end -->					
					
				</div>
				<!-- posts end -->

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->						
	