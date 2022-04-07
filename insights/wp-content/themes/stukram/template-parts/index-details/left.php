<?php $stukram_options = get_option('stukram'); ?>

      <!-- section start -->
      <section class="layout-pt-md layout-pb-lg">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row no-gutters justify-content-between">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php global $stukram_sidebar_class; ?>
				<?php $stukram_sidebar_class = "col-lg-8 md:mt-64";?>
				<?php else : ?>
				<?php $stukram_sidebar_class = "col-lg-10 offset-1";?>
				<?php endif;?>
				<!-- sidebar start -->
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div class="col-lg-4">
					<aside class="blogSidebar widget_area">					
					
						<?php dynamic_sidebar( 'sidebar-1' ); ?>	

					</aside>
				</div>
				<!-- sidebar end -->
				<?php endif;?>					
				<!-- posts start -->
				<div class="<?php echo esc_attr($stukram_sidebar_class);?>">				
				
				  <div class="blogPost -single -light">
					<div class="blogPost__content">
						<div class="post-content">												
							<?php the_content();
								wp_link_pages( array(
								'before'      => '<div class="page-links">',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '%',
								'separator'   => '',
								) );
							?>								
						</div>                    
					</div>
				  </div>

					<?php if( has_tag() ) {?>
					<div class="blogPost tags">					
						<?php the_tags( 'Tagged with: ', ' ', ' ' ); ?>
					</div>			
					<?php } ?>	
					<!-- posts end -->
					
					<?php if ( comments_open() || get_comments_number() ) { ?>	
					<div class="blogPost comments">												
						<?php comments_template();?>								
					</div>
					<?php }?>					

				</div>
			<!-- row end -->		
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->			  
