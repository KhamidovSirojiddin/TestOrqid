<?php $stukram_options = get_option('stukram'); ?>
    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row no-gutters justify-content-between">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<?php global $stukram_sidebar_class; ?>
				<?php $stukram_sidebar_class = "col-lg-8";?>
				<?php else : ?>
				<?php $stukram_sidebar_class = "col-lg-10 offset-1";?>
				<?php endif;?>
                <!-- page start -->
                <div class="<?php echo esc_attr($stukram_sidebar_class);?>">
					<div class="page-content">
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
					<?php if ( comments_open() || get_comments_number() ) { ?>	
					<div class="blogPost comments">												
						<?php comments_template();?>								
					</div>
					<?php }?>				
					
				</div>
				<!-- page end -->

                <!-- sidebar start -->
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <div class="col-lg-4">
                    <aside class="blogSidebar widget_area">					
					
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>	

                    </aside>
                </div>
                <!-- sidebar end -->
                <?php endif;?>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->					

