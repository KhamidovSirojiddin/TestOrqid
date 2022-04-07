<?php $stukram_options = get_option('stukram'); ?>

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
                            <?php if ( is_category() ) { ?>
								<?php if(!empty($stukram_options['cat_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('cat_page_title',''));?> 
								<?php else:?>
									<?php esc_html_e('Category ','stukram');?> 
								<?php endif;?>								 
							<?php } else if ( is_tag() ) { ?>
								<?php if(!empty($stukram_options['tag_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('tag_page_title',''));?>
								<?php else:?>
									<?php esc_html_e('Tag ','stukram');?> 
								<?php endif;?>								
							<?php } else if ( is_archive() ) { ?>
								<?php if(!empty($stukram_options['arch_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('arch_page_title',''));?> 
								<?php else:?>
									<?php esc_html_e('Archive ','stukram');?>
								<?php endif;?>															
							<?php } else { ?>
								<?php if(!empty($stukram_options['blog_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('blog_page_title',''));?>
								<?php else:?>
									<?php esc_html_e('Our Blog','stukram');?>
								<?php endif;?>								
							<?php } ?>
						</li>
					</ul>
					<?php } ;?>

					<div class="sectionHeading -lg">
						<h1 class="sectionHeading__title">
							<?php if ( is_category() ) { ?>
								<?php if(!empty($stukram_options['cat_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('cat_page_title',''));?> <em><?php single_cat_title( '', true ); ?></em>
								<?php else:?>
									<?php esc_html_e('Category','stukram');?><?php esc_html_e(': ','stukram');?> <em><?php single_cat_title( '', true ); ?></em>
								<?php endif;?>								 
							<?php } else if ( is_tag() ) { ?>
								<?php if(!empty($stukram_options['tag_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('tag_page_title',''));?> <em><?php single_tag_title(); ?></em>
								<?php else:?>
									<?php esc_html_e('Tag','stukram');?><?php esc_html_e(': ','stukram');?> <em><?php single_tag_title(); ?></em>
								<?php endif;?>								
							<?php } else if ( is_archive() ) { ?>
								<?php if(!empty($stukram_options['arch_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('arch_page_title',''));?> <em><?php single_month_title(' '); ?></em>
								<?php else:?>
									<?php esc_html_e('Archive','stukram');?><?php esc_html_e(': ','stukram');?> <em><?php single_month_title(' '); ?></em>
								<?php endif;?>															
							<?php } else { ?>
								<?php if(!empty($stukram_options['blog_page_title'])): ?>
								   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('blog_page_title',''));?>
								<?php else:?>
									<?php esc_html_e('Our Blog','stukram');?>
								<?php endif;?>								
							<?php } ?>
						</h1>
					</div>
				</div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->