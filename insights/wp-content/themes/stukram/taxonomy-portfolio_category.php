<?php $stukram_options = get_option('stukram'); ?>
<?php get_header(); ?>	
   
    <!-- section start -->
	<?php if (Stukram_AfterSetupTheme::return_thme_option('index_header_show')!='no'){ ?>	
    <section class="layout-pt-pageHeader layout-pb-xs">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-xl-7 col-lg-8">
			    <?php if (Stukram_AfterSetupTheme::return_thme_option('index_header_breadcumbs_show')!='no'){ ?>
				<ul class="breadcrumbs text-black mb-40">
					<li class="breadcrumbs-item">
						<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php if(!empty($stukram_options['header_home_title'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_home_title',''));?><?php else : ?><?php esc_html_e('Home','stukram');?><?php endif;?>
						</a>
					</li>
					
					<li class="breadcrumbs-item active" aria-current="page">
					  <?php single_cat_title( '', true ); ?>
					</li>
					
				</ul>
                <?php } ;?>
				
                <div class="sectionHeading -lg">
                    <h1 class="sectionHeading__title">
						<?php single_cat_title( '', true ); ?>	
                    </h1>
                </div>
				
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
    </section>
	<?php } ;?>
    <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-xs layout-pb-lg">
        <div class="container">

          <!-- row start -->
          <div class="fancy-grid -col-2 -reverse layout-pt-sm">

				<?php global $loop; 
				$args = array_merge( $wp_query->query, array( 'post_type' => 'portfolio', 'posts_per_page'=>-1, ) );
				query_posts( $args );?>	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $stukram_portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
				<?php 
				$stukram_class = ""; 
				$stukram_categories = ""; 
				foreach ($stukram_portfolio_category as $stukram_item) {
				$stukram_class.=esc_attr($stukram_item->slug . ' ');
				$stukram_categories.='<span class="cat-divider">';
				$stukram_categories.=esc_html($stukram_item->name . '  ');
				$stukram_categories.='</span>';
				}?>
				<?php if (has_post_thumbnail( $post->ID ) ):
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
				<div class="fancy-grid__item">
				  <a data-cursor-icon="arrow-right" data-anim="slide-up delay-2" class="portfolioCard -type-1 -hover" data-barba href="<?php the_permalink();?>">
					<div class="portfolioCard__img">
					  <div class="portfolioCard__img__inner">
						<div class="ratio ratio-3:4 bg-image js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
					  </div>
					</div>

					<div class="portfolioCard__content mt-20">
					  <p class="portfolioCard__category overflow-hidden text-dark mb-8">
						<?php echo $stukram_categories;?>
					  </p>

					  <h3 class="portfolioCard__title overflow-hidden text-2xl fw-600">
						<?php the_title();?>
					  </h3>
					</div>
				    </a>
				</div>
                <?php endif;?>
			    <?php  endwhile; endif; wp_reset_postdata(); ?> 


          </div>
          <!-- row end -->

        </div>
      </section>
      <!-- section end -->

<?php get_footer(); ?>