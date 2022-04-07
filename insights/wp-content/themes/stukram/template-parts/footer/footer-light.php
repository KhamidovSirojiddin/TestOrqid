<?php $stukram_options = get_option('stukram'); ?>
      <!-- footer start -->
	<?php if (is_page()||is_single()) { ?>
	
		<?php if(get_post_meta($post->ID,'rnr_stukram_page_footer_style_bg_scheme_opt',true)=='yes'){ ?> 
		    <?php $stukram_footer_style_bg_scheme = 'bg-white';?>
		<?php } else { ?>  
		    <?php $stukram_footer_style_bg_scheme = 'bg-dark-1';?>
		<?php } ;?>
		
		<?php if(get_post_meta($post->ID,'rnr_stukram_page_footer_style_color_scheme_opt',true)=='yes'){ ?> 
			<?php $stukram_footer_style_txt_color = '-black';?>
			<?php $stukram_footer_style_txt_color2 = '-dark';?>	
		<?php } else { ?>  
			<?php $stukram_footer_style_txt_color = '-white';?>
			<?php $stukram_footer_style_txt_color2 = '-light';?>
		<?php } ;?>		
		
	<?php } else { ?> 	
	
        <?php if (Stukram_AfterSetupTheme::return_thme_option('footer_style_bg_scheme_opt')=='st2'){ ?>  
            <?php $stukram_footer_style_bg_scheme = 'bg-white';?>		
        <?php } else { ?> 
			<?php $stukram_footer_style_bg_scheme = 'bg-dark-1';?>
		<?php } ;?>			
        <?php if (Stukram_AfterSetupTheme::return_thme_option('footer_style_color_scheme_opt')=='st2'){ ?>  
			<?php $stukram_footer_style_txt_color = '-black';?>
			<?php $stukram_footer_style_txt_color2 = '-dark';?>			
        <?php } else { ?> 
			<?php $stukram_footer_style_txt_color = '-white';?>
			<?php $stukram_footer_style_txt_color2 = '-light';?>
		<?php } ;?>			
		
	<?php } ;?>	
     <footer class="footer -type-2 <?php echo sanitize_html_class($stukram_footer_style_bg_scheme);?>" style="background-image:url(<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('backfooter','url'));?>)">
        <!-- container start -->
        <div class="container">
		    <?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_content_opt')=='st2'){ ?>
				<!-- row start -->
				<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_social_opt')=='st2'){ ?>
				<div class="row">
					<div class="col-auto">
						<?php if(!empty($stukram_options['footer_social_title1'])):?>
						<h5 class="text-base fw-400 text<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('footer_social_title1',''));?></h5>
						<?php endif;?> 
						<div class="footer__social text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> fw-500 mt-24 sm:mt-12">
							<?php if(!empty($stukram_options['facebook'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['facebook']);?>"><?php esc_html_e('Facebook','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['twitter'])):?>
							 <a target="_blank" href="<?php echo esc_url($stukram_options['twitter']);?>"><?php esc_html_e('Twitter','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['pinterest'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['pinterest']);?>"><?php esc_html_e('Pinterest','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['instagram'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['instagram']);?>"><?php esc_html_e('Instagram','stukram');?></a>
							<?php endif;?>	

							<?php if(!empty($stukram_options['linkedin'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['linkedin']);?>"><?php esc_html_e('LinkedIn','stukram');?></a>
							<?php endif;?>						
							
							<?php if(!empty($stukram_options['dribbble'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['dribbble']);?>"><?php esc_html_e('Dribbble','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['behance'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['behance']);?>"><?php esc_html_e('Behance','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['gplus'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['gplus']);?>"><?php esc_html_e('Google+','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['youtube'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['youtube']);?>"><?php esc_html_e('YouTube','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['vimeo'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['vimeo']);?>"><?php esc_html_e('Vimeo','stukram');?></a>
							<?php endif;?>
							
							<?php if(!empty($stukram_options['slack'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['slack']);?>"><?php esc_html_e('Slack','stukram');?></a>
							<?php endif;?>						
							
							<?php if(!empty($stukram_options['tumblr'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['tumblr']);?>"><?php esc_html_e('Tumblr','stukram');?></a>
							<?php endif;?>	
							
							<?php if(!empty($stukram_options['github'])):?>
							<a target="_blank" href="<?php echo esc_url($stukram_options['github']);?>"><?php esc_html_e('GitHub','stukram');?></a>
							<?php endif;?>						
							
							<?php
							$stukram_more_text_social = stukram_AfterSetupTheme::return_thme_option('opt_add_more_text_social','');
							if ( ! empty( $stukram_more_text_social ) ) {
							foreach ( $stukram_more_text_social as $stukram_more_text_socials ) { ;?>
							<?php echo balanceTags($stukram_more_text_socials);?>
							<?php } } ;?> 				  
						</div>
					</div>
				</div>
				<!-- row end -->
				<?php } ;?> 
				<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_contact_opt')=='st2'){ ?>
				<!-- row start -->
				<div class="row">
					<div class="col-auto">
					    <?php if(!empty($stukram_options['footer_contact_title2'])):?>
						<p class="footer__text text-lg md:text-base text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
							<?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('footer_contact_title2',''));?>
						</p>
                        <?php endif;?> 
						<a href="mailto:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('ft_email_address1',''));?>" class="footer__link text-5xl md:text-4xl xs:text-3xl button -underline fw-700 text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> mt-20">
							<?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_email_address1',''));?>
						</a>
					</div>
				</div>
				<!-- row end -->
				<?php } ;?> 
            <?php } ;?>	
          <!-- row start -->
          <div class="row">
            <div class="col-auto">
                <div class="footer__copyright ">
                    <div class="text-sm text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
                        <?php $stukram_copy = Stukram_AfterSetupTheme::return_thme_option('copyright');
							echo apply_filters('the_content',$stukram_copy);
						?>
                    </div>
                </div>
            </div>
          </div>
            <!-- row end -->
		    <?php if (is_page()||is_single()) { ?>
			    <?php if(get_post_meta($post->ID,'rnr_stukram_page_footer_shapes_opt',true)!='no'){ ?> 
			    <!-- shapes start -->		  
			    <div class="footer__shapes">
					<div></div>
					<div></div>
			    </div>
			    <!-- shapes end -->	
				<?php } ;?>
		    <?php } else { ?> 					
			    <?php if (Stukram_AfterSetupTheme::return_thme_option('footer_shapes_opt')!='no'){ ?>
			    <!-- shapes start -->		  
			    <div class="footer__shapes">
					<div></div>
					<div></div>
			    </div>
			    <!-- shapes end -->
			    <?php } ;?>
		    <?php } ;?>
        </div>
        <!-- container end -->
      </footer>
      <!-- footer end -->