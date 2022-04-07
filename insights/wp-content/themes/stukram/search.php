<?php $stukram_options = get_option('stukram'); ?>
<?php get_header(); ?>	

    <?php if (Stukram_AfterSetupTheme::return_thme_option('index_header_show')!='no'){ ?>	
    <!-- section start -->
    <section class="layout-pt-xl layout-pb-md">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row justify-content-center text-center">
				<div class="col-xl-7 col-lg-8">
				    <?php if (Stukram_AfterSetupTheme::return_thme_option('index_header_breadcumbs_show')!='no'){ ?>	
					<ul class="breadcrumbs justify-content-center text-black mb-40">
						<li class="breadcrumbs-item">
							<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>">
							    <?php if(!empty($stukram_options['header_home_title'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_home_title',''));?><?php else : ?><?php esc_html_e('Home','stukram');?><?php endif;?>
							</a>
						</li>
						<li class="breadcrumbs-item active" aria-current="page">
						<?php if(!empty($stukram_options['src_page_title'])): ?>
						   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('src_page_title',''));?> 
						<?php else:?>
							<?php esc_html_e('Search Results For','stukram');?>
						<?php endif;?>
						</li>
					</ul>
					<?php } ;?>

					<div class="sectionHeading -lg">
						<h1 class="sectionHeading__title">
						<?php if(!empty($stukram_options['src_page_title'])): ?>
						   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('src_page_title',''));?> <em><?php printf( esc_html__( ' "%s"', 'stukram' ), '<strong>' . get_search_query() . '</strong>' ); ?></em>
						<?php else:?>
							<?php esc_html_e('Search Results For','stukram');?><?php esc_html_e(': ','stukram');?> <em><?php printf( esc_html__( ' "%s"', 'stukram' ), '<strong>' . get_search_query() . '</strong>' ); ?></em>
						<?php endif;?>			
						</h1>
					</div>
				</div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->
	<?php } ?>
	
    <!-- section start -->
    <section class="layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row no-gutters justify-content-between">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php global $stukram_sidebar_class; ?>
				<?php $stukram_sidebar_class = "col-lg-8";?>
				<?php else : ?>
				<?php $stukram_sidebar_class = "col-lg-10 offset-1";?>
				<?php endif;?>
                <!-- posts start -->
                <div class="<?php echo esc_attr($stukram_sidebar_class);?>">

					<?php global $post, $post_id, $stukram_post_title;?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
								    					
					<!-- blog-item start -->
					<div class="blogPost custom-post">
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

						    <div class="blogPost__text post-content text-base mt-12">
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
							<a href="<?php the_permalink();?>" data-barba class="button -underline fw-500">
								<?php if(!empty($stukram_options['blog_read_more'])): ?>
									<?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('blog_read_more',''));?> 
								<?php else:?>	
									<?php esc_html_e('Read More','stukram');?>
								<?php endif; ?>	
							</a>
						  </div>
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
                    
					<?php else : ?>
					<div class="blogPost custom-post">
						<div class="mt-50">
							<h3 class="blogPost__title text-2xl fw-600 mt-16"><?php if(!empty($stukram_options['translet_opt_9'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('translet_opt_9',''));?><?php else : ?><?php esc_html_e('No Results Found','stukram');?><?php endif;?></h3>
						</div>
					</div>
					<?php endif;?>
					
					
				</div>
				<!-- posts end -->


                <!-- sidebar start -->
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div class="col-lg-4">
                    <aside class="blogSidebar widget_area">					
					
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>	

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

<?php get_footer(); ?>	
