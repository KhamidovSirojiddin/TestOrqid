<?php get_header();?>
<?php $stukram_options = get_option('stukram'); ?>

<?php if(have_posts()) : while ( have_posts() ) : the_post();?>

    <?php if(get_post_meta($post->ID,'rnr_stukram_blog_header_selector_opt',true)=='st1'){ ?>
	    <?php get_template_part('template-parts/header/blog_masthead');?>
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


	<?php if (Stukram_AfterSetupTheme::return_thme_option('blogdetailstyle')=='st2'){ ?>
		<?php get_template_part('template-parts/index-details/left');?>
	<?php } else if (Stukram_AfterSetupTheme::return_thme_option('blogdetailstyle')=='st3'){ ?>
		<?php get_template_part('template-parts/index-details/full');?>
	<?php } else { ?>
		<?php get_template_part('template-parts/index-details/right');?>
	<?php } ;?>
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
              <a href="https://orqid.io/contact.html" class="button -md -white text-white mt-40 md:mt-32 button-sub-footer">
                get in touch
              </a>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
<?php endwhile;  endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>	