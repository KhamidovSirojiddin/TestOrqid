<?php $stukram_options = get_option('stukram'); ?>
            
			<?php if (is_page()||is_single()) { ?>
				<!-- 1st condition -->
				<?php if(get_post_meta($post->ID,'rnr_stukram_page_footer_selector_opt',true)=='yes'){ ?> 
					<!-- 2nd condition -->
					<?php if(get_post_meta($post->ID,'rnr_stukram_page_footer_color_selector_opt',true)=='yes'){ ?> 
						<?php get_template_part('template-parts/footer/footer-light'); ?> 
					<?php } else { ?>
						<?php get_template_part('template-parts/footer/footer-dark'); ?> 
					<?php  } ;?>
				<?php } else { ?>	
					<?php if ( ! is_404() ) { ?>
						<?php if (Stukram_AfterSetupTheme::return_thme_option('footer_style')=='st2'){ ?> 
							<?php get_template_part('template-parts/footer/footer-light'); ?> 
						<?php } else { ?>	
							<?php get_template_part('template-parts/footer/footer-dark'); ?>
						<?php } ;?>
					<?php } ;?>					
				<?php } ;?>	 
			<?php } else { ?>	
				<?php if ( ! is_404() ) { ?>
  				    <!-- 1st condition -->
					<?php if (Stukram_AfterSetupTheme::return_thme_option('footer_style')=='st2'){ ?> 
						<?php get_template_part('template-parts/footer/footer-light'); ?> 
					<?php } else { ?>	
						<?php get_template_part('template-parts/footer/footer-dark'); ?>
					<?php } ;?>
				<?php } ;?>				
			<?php } ;?>	
			

		</main>

	</div>
    <!-- barba container end -->
<script>
	jQuery('button.clickfun').click(function(){
  jQuery('a.is-active').next()[0].click();
});
	jQuery('button.clickfunprev').click(function(){
  jQuery('a.is-active').prev()[0].click();
});
	if( jQuery('a.is-active').is(':last-child') )
		{
			jQuery('button.clickfun').css("display", "none");
		}
	
	if( jQuery('a.is-active').is(':first-child') )
		{
			jQuery('button.clickfunprev').css("display", "none");
		}	
</script>
<?php wp_footer(); ?>
</body>
</html>