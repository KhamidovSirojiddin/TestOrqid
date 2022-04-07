<?php $stukram_options = get_option('stukram'); ?>
<?php get_header();?>

    <?php if(get_post_meta($post->ID,'rnr_stukram_portfolio_header_selector_opt',true)!='st2'){ ?>
	    <?php get_template_part('template-parts/header/portfolio_masthead');?>
	<?php } else  { ?>
		<?php if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st2'){ ?> 
			<?php get_template_part('template-parts/header/slider');?>
		<?php } else if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st3'){ ?> 
			<?php get_template_part('template-parts/header/fullscreen_slider');?>
		<?php } else if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st5'){ ?> 
			<?php get_template_part('template-parts/header/fullscreen_image');?>		
		<?php } else if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st4'){ ?> 
			<?php get_template_part('template-parts/header/rev_slider');?>
		<?php } else if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st6'){ ?> 
			<?php get_template_part('template-parts/header/statick');?>
		<?php } else if(get_post_meta($post->ID,'rnr_stukram_page_header_selector_opt',true)=='st7'){ ?> 
			
		<?php } else  { ?>
			<?php get_template_part('template-parts/header/default');?>
		<?php }?>
	<?php }?>	

	<?php while ( have_posts() ) : the_post(); ?>
	<?php if(get_post_meta($post->ID,'rnr_wr_portfoliotype_container',true)=='st2'){ ?>

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

	<?php } else { ?>
		<!-- section start -->
		<section class="layout-pt-pageHeader layout-pb-lg">
			<!-- container start -->
			<div class="container">
				<!-- row start -->
				<div class="row justify-content-between">			
					<div class="col-md-12">
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
					</div>
				</div>
			</div>
		</section>
	<?php };?>
	
	<?php if(get_post_meta($post->ID,'rnr_stukram_portfolio_prev_naxt_selector_opt',true)!='no'){ ?>
	
    <!-- section start -->
    <section class="projects-nav bg-dark-1">
        <!-- row start -->
        <div class="row no-gutters">
		
			<?php $stukram_next_post = get_next_post();
			$stukram_next_url = is_object( $stukram_next_post ) ? get_permalink( $stukram_next_post->ID ) : '';
			$stukram_next_title = is_object( $stukram_next_post ) ? get_the_title( $stukram_next_post->ID ) : ''; 
			if ($stukram_next_post) {
			$stukram_next_image = wp_get_attachment_image_src( get_post_thumbnail_id( $stukram_next_post->ID ), 'stukram_portfolio_image' );
			} ?>				
            <?php  if ($stukram_next_post) { ?>
            <div class="col-lg-6">
				<a data-barba href="<?php echo esc_url( $stukram_next_url ); ?>" class="projects-nav__item -prev bg-dark-1">
				    <div class="projects-nav__img">
					    <div class="bg-image js-lazy" data-bg="<?php echo esc_url($stukram_next_image[0]);?>"></div>
				    </div>

				    <div class="projects-nav__content">
						<div class="projects-nav__icon">
						    <i class="size-xl str-width-xs text-white" data-feather="arrow-left-circle"></i>
						</div>
						<h3 class="text-4xl fw-400 tracking-none text-white">
						    <?php echo esc_html( $stukram_next_title ); ?>
						</h3>
						<p class="projects-nav__text -prev text-sm fw-500 text-white tracking-md uppercase">
						    <?php if(!empty($stukram_options['translet_opt_5'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('PREV','stukram');?><?php endif;?>
						</p>
				    </div>
				</a>
            </div>
			<?php } else { ?>
            <div class="col-lg-6">
			    <?php if(!empty($stukram_options['port_page_url'])): ?>
				<a data-barba href="<?php echo esc_url($stukram_options['port_page_url']);?>" class="projects-nav__item -prev bg-dark-1">
				    <div class="projects-nav__img">
					    <div class="bg-image js-lazy"></div>
				    </div>

				    <div class="projects-nav__content">
						<div class="projects-nav__icon">
						    <i class="size-xl str-width-xs text-white" data-feather="arrow-left-circle"></i>
						</div>
						
						<h3 class="text-4xl fw-400 tracking-none text-white">						
						    <?php if(!empty($stukram_options['back_port'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('back_port',''));?><?php else : ?><?php esc_html_e('Back To Portfolio','stukram');?><?php endif;?>
						</h3>
							
				    </div>
				</a>
				<?php else : ?>
				<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projects-nav__item -prev bg-dark-1">
				    <div class="projects-nav__img">
					    <div class="bg-image js-lazy"></div>
				    </div>

				    <div class="projects-nav__content">
						<div class="projects-nav__icon">
						    <i class="size-xl str-width-xs text-white" data-feather="arrow-left-circle"></i>
						</div>
						
						<h3 class="text-4xl fw-400 tracking-none text-white">						
						    <?php if(!empty($stukram_options['back_home'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('back_home',''));?> <?php else : ?><?php esc_html_e('Back To Home','stukram');?> <?php endif;?>	
						</h3>
						
				    </div>
				</a>				
				<?php endif;?>	
				
            </div>			
            <?php } ;?>
			
			<?php $stukram_previous_post = get_previous_post();
			$stukram_previous_url = is_object( $stukram_previous_post ) ? get_permalink( $stukram_previous_post->ID ) : '';
			$stukram_previous_title = is_object( $stukram_previous_post ) ? get_the_title( $stukram_previous_post->ID ) : '';
			if ($stukram_previous_post) { 
			$stukram_previous_image = wp_get_attachment_image_src( get_post_thumbnail_id( $stukram_previous_post->ID ), 'stukram_portfolio_image' );
			}?>		
            <?php if ($stukram_previous_post) { ?>			
            <div class="col-lg-6">
				<a data-barba href="<?php echo esc_url( $stukram_previous_url ); ?>" class="projects-nav__item -next bg-dark-1">
				  <div class="projects-nav__img">
					<div class="bg-image js-lazy" data-bg="<?php echo esc_url($stukram_previous_image[0]);?>"></div>
				  </div>

				  <div class="projects-nav__content">
					<h3 class="text-4xl fw-400 tracking-none text-white">
					  <?php echo esc_html( $stukram_previous_title ); ?>
					</h3>

					<div class="projects-nav__icon">
					  <i class="size-xl str-width-xs text-white" data-feather="arrow-right-circle"></i>
					</div>

					<p class="projects-nav__text -next text-sm fw-500 text-white tracking-md uppercase">
					     <?php if(!empty($stukram_options['translet_opt_6'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('translet_opt_6',''));?><?php else : ?><?php esc_html_e('NEXT','stukram');?><?php endif;?>
					</p>
				  </div>
				</a>
            </div>
			<?php } else { ?>
            <div class="col-lg-6">
			    <?php if(!empty($stukram_options['port_page_url'])): ?>
				<a data-barba href="<?php echo esc_url($stukram_options['port_page_url']);?>" class="projects-nav__item -next bg-dark-1">
				  <div class="projects-nav__img">
					<div class="bg-image js-lazy"></div>
				  </div>

				  <div class="projects-nav__content">
					<h3 class="text-4xl fw-400 tracking-none text-white">
					  <?php if(!empty($stukram_options['back_port'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('back_port',''));?><?php else : ?><?php esc_html_e('Back To Portfolio','stukram');?><?php endif;?>
					</h3>

					<div class="projects-nav__icon">
					  <i class="size-xl str-width-xs text-white" data-feather="arrow-right-circle"></i>
					</div>
					
				  </div>
				</a>
				<?php else : ?>
				<a data-barba href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projects-nav__item -next bg-dark-1">
				  <div class="projects-nav__img">
					<div class="bg-image js-lazy"></div>
				  </div>

				  <div class="projects-nav__content">
					<h3 class="text-4xl fw-400 tracking-none text-white">
					  <?php if(!empty($stukram_options['back_home'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('back_home',''));?><?php else : ?><?php esc_html_e('Back To Home','stukram');?><?php endif;?>
					</h3>

					<div class="projects-nav__icon">
					  <i class="size-xl str-width-xs text-white" data-feather="arrow-right-circle"></i>
					</div>
					
				  </div>
				</a>				
				<?php endif;?>
            </div>			
			<?php } ;?>

        </div>
        <!-- row end -->
    </section>	
	
	<?php };?>
	
	<?php endwhile; ?>
	<?php wp_reset_postdata();?>
<?php get_footer(); ?>