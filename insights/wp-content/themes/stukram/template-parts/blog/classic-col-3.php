<?php $stukram_options = get_option('stukram'); ?>
    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">
        <div class="fancy-grid -col-3 -container">

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
			<div class="fancy-grid__item">									
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
						<div class="blogPost__info leading-md">
							<?php the_category(', ');?>
						</div>
						<?php } ?> 
						<?php $stukram_post_title= get_the_title(); ?>
						<h3 class="blogPost__title text-2xl leading-lg fw-500 mt-12">
							<a data-barba href="<?php the_permalink();?>">
								<?php if($stukram_post_title != '') { ?>
									<?php the_title();?>
								<?php } else { ?>	
									<?php the_time( get_option( 'date_format' ) ); ?>
								<?php } ?>	
							</a>
						</h3>

						<div class="blogPost__text post-content text-base mt-8">
							<!-- excerpt -->
							<?php if( wp_link_pages('echo=0') ): ?>
								<?php the_content(
									sprintf(
									/* translators: %s: Post title. */
									esc_html__( '', 'stukram' ),
										get_the_title()
										)
									);
									wp_link_pages( array(
										'before'      => '<div class="page-links">',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										'pagelink'    => '%',
										'separator'   => '',
									) );
									?>
							<?php else : ?>
								<?php the_excerpt();?>
							<?php endif;?>	
						</div>

					  <div class="blogPost__button text-black mt-12">
						<a href="<?php the_permalink();?>" data-barba class="button -icon text-black">
							<?php if(!empty($stukram_options['blog_read_more'])): ?>
								<?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('blog_read_more',''));?> 
							<?php else:?>	
								<?php esc_html_e('Read More','stukram');?>
							<?php endif; ?>	
							<i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
						</a>
					  </div>
					</div>
					<!-- blog-content end -->
				</div>
				</div>
			</div>
			<!-- blog-item end -->					
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
					
		</div>
		<!-- posts end -->		
        
		<!-- pagination start -->
		<div class="mt-64">
		<?php if (function_exists("stukram_pagination")) {
		stukram_pagination($stukram_loop->max_num_pages);
		} ?>
		</div>
		<!-- pagination end -->					
									
    </section>
    <!-- section end -->						
