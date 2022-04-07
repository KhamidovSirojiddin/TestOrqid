<?php $stukram_options = get_option('stukram'); ?>
<?php get_header(); ?>

    <?php if (Stukram_AfterSetupTheme::return_thme_option('404_color_style')=='yes'){ ?> 
	
      <!-- 404 page intro start -->
      <section class="page-404 bg-dark-1">
        <div class="page-404-bg -light"><?php if(!empty($stukram_options['404_page_title_1'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_1',''));?><?php else : ?><?php esc_html_e('404','stukram');?><?php endif;?></div>

        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-xl-6 offset-xl-1 col-md-8">
              <div class="page-404-content">
                <h1 class="page-404-title text-white">
                  <?php if(!empty($stukram_options['404_page_title_2'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_2',''));?><?php else : ?><?php esc_html_e('Page not found','stukram');?><?php endif;?>
                </h1>
                <p class="page-404-text leading-4xl text-light mt-24 md:mt-16">
				    <?php if(!empty($stukram_options['404_page_title_4'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_4',''));?><?php else : ?><?php esc_html_e('The page you were looking for does not exist. You may have mistyped the address or the page may have been moved.','stukram');?><?php endif;?>
                </p>
                <a class="page-404-btn button -md -outline-white text-white mt-32 md:mt-20" data-barba href="<?php echo esc_url( home_url( '/'  ) ); ?>">
                  <?php if(!empty($stukram_options['404_page_title_3'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_3',''));?><?php else : ?><?php esc_html_e('Take me home','stukram');?><?php endif;?>
                </a>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- 404 page intro end -->	
	
	<?php } else { ?>

      <!-- 404 page intro start -->
      <section class="page-404">
        <div class="page-404-bg"><?php if(!empty($stukram_options['404_page_title_1'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_1',''));?><?php else : ?><?php esc_html_e('404','stukram');?><?php endif;?></div>

        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-xl-6 offset-xl-1 col-md-8">
              <div class="page-404-content">
                <h1 class="page-404-title">
                  <?php if(!empty($stukram_options['404_page_title_2'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_2',''));?><?php else : ?><?php esc_html_e('Page not found','stukram');?><?php endif;?>
                </h1>
                <p class="page-404-text leading-4xl mt-24 md:mt-16">
				    <?php if(!empty($stukram_options['404_page_title_4'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_4',''));?><?php else : ?><?php esc_html_e('The page you were looking for does not exist. You may have mistyped the address or the page may have been moved.','stukram');?><?php endif;?>
                </p>
                <a class="page-404-btn button -md -outline-black text-black mt-32 md:mt-20" data-barba href="<?php echo esc_url( home_url( '/'  ) ); ?>">
                  <?php if(!empty($stukram_options['404_page_title_3'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('404_page_title_3',''));?><?php else : ?><?php esc_html_e('Take me home','stukram');?><?php endif;?>
                </a>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- 404 page intro end -->
	  
	<?php  } ;?>  


<?php get_footer(); ?>	