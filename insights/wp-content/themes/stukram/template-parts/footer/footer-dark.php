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
		
		
		<footer class="footer -type-1 <?php echo sanitize_html_class($stukram_footer_style_bg_scheme);?>" style="background-image:url(<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('backfooter','url'));?>)">
			<!-- container start -->
			<div class="container">
				<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_content_opt')=='st2'){ ?>
				<div class="footer__top">
					<!-- row start -->
					<div class="row y-gap-48 justify-content-between">
						<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_logo_opt')=='st2'){ ?>
						<div class="col-lg-auto col-sm-12">						    
							<a href="https://orqid.io/" class="footer__logo text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
							    <?php if (Stukram_AfterSetupTheme::return_thme_option('footer_textlogo_opt')=='st2'){ ?>
								<img class="footer-logo__img" src="<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('logopicfooter','url'));?>" alt="<?php  bloginfo('name'); ?>" />
								<?php } else { ?>
									<?php if(!empty($stukram_options['logotext_footer'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('logotext_footer',''));?><?php else : ?><?php  bloginfo('name'); ?><?php endif;?>	
								<?php } ;?>	
							</a>							
						</div>
						<?php } ;?>
						<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_contact_opt')=='st2'){ ?>
						<div class="col-lg-3 col-sm-6 col-xs-6">
							<?php if(!empty($stukram_options['footer_contact_title1'])):?>
							<h4 class="text-xl fw-700 text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
							   <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('footer_contact_title1',''));?>
							</h4>
							<?php endif;?>  
							<div class="footer__content text-base text<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?> mt-16 sm:mt-12">
								<?php if (Stukram_AfterSetupTheme::return_thme_option('ft_address_link_target')=='st2'){ ?>  
									<?php $stukram_footer_address_link_target = '_blank';?>		
								<?php } else { ?> 
									<?php $stukram_footer_address_link_target = '_self';?>
								<?php } ;?>								
							  <?php if(!empty($stukram_options['ft_address1'])):?>
							  <p>
							  <?php if(!empty($stukram_options['ft_address1_link_url'])):?>
							  <a href="<?php echo esc_url($stukram_options['ft_address1_link_url']);?>" target="<?php echo esc_attr($stukram_footer_address_link_target);?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_address1',''));?></a>
							  <?php else : ?> 
							  <?php echo Stukram_AfterSetupTheme::return_thme_option('ft_address1','');?>
							  <?php endif;?> 
							  </p>
							  <?php endif;?>
							  <?php if(!empty($stukram_options['ft_address2'])):?>
							  <p class="mt-8">
							  <?php if(!empty($stukram_options['ft_address2_link_url'])):?>
							  <a href="<?php echo esc_url($stukram_options['ft_address2_link_url']);?>" target="<?php echo esc_attr($stukram_footer_address_link_target);?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_address2',''));?></a>
							  <?php else : ?> 
							  <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_address2',''));?>
							  <?php endif;?> 
							  </p>	
							  <?php endif;?>  							   	
							  <?php if(!empty($stukram_options['ft_email_address1'])):?>
							  <p class="mt-8"><a href="mailto:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('ft_email_address1',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_email_address1',''));?></a></p>
							  <?php endif;?> 
							  <?php if(!empty($stukram_options['ft_email_address2'])):?>
							  <p class="mt-8"><a href="mailto:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('ft_email_address2',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_email_address2',''));?></a></p>
							  <?php endif;?> 
							  <?php if(!empty($stukram_options['ft_phn_number1'])):?>
							  <p class="mt-8"><a href="tel:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('ft_phn_number1',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_phn_number1',''));?></a></p>
							  <?php endif;?> 
							  <?php if(!empty($stukram_options['ft_phn_number2'])):?>
							  <p class="mt-8"><a href="tel:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('ft_phn_number2',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('ft_phn_number2',''));?></a></p>
							  <?php endif;?> 								  
							</div>
						</div>
						<?php } ;?>
						<?php if(has_nav_menu('footer-menu')) { ?>
						<div class="col-lg-auto col-sm-4 col-xs-4">
							<?php if(!empty($stukram_options['footer_nav_title1'])):?>
							<h4 class="text-xl fw-700 text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
							  <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('footer_nav_title1',''));?>
							</h4>
							<?php endif?>
							<div class="footer__content text-base text<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?> mt-16 sm:mt-12">
							    <ul>
									<?php
										$defaults = array(
										'theme_location'  => 'footer-menu',
										'menu'            => 'nav',
										'container'       => '',
										'container_class' => '',
										'menu_class'      => 'navbar-main-menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => new Stukram_Footer_Walker
										);
										if(has_nav_menu('footer-menu')) {
										wp_nav_menu( $defaults );
										}
										else {
										};
									?>								  
								</ul>
							</div>
						</div>
						<?php } ;?> 
						<?php if (Stukram_AfterSetupTheme::return_thme_option('en_footer_social_opt')=='st2'){ ?>
						<div class="col-lg-auto col-auto">
							<?php if(!empty($stukram_options['footer_social_title1'])):?>
							<h4 class="text-xl fw-700 text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?>">
							    <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('footer_social_title1',''));?>
							</h4>
							<?php endif;?> 							

							<div class="social -bordered mt-16 sm:mt-12">
								<?php if(!empty($stukram_options['facebook'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['facebook']);?>">
									<i class="fab fa-facebook-f"></i>
								</a>
								<?php endif;?> 
								<?php if(!empty($stukram_options['twitter'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['twitter']);?>">
									<i class="fab fa-twitter"></i>
								</a>
								<?php endif;?> 		
								<?php if(!empty($stukram_options['pinterest'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['pinterest']);?>">
									<i class="fab fa-pinterest"></i>
								</a>
								<?php endif;?> 		
								<?php if(!empty($stukram_options['instagram'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['instagram']);?>">
									<i class="fab fa-instagram"></i>
								</a>
								<?php endif;?> 
								<?php if(!empty($stukram_options['linkedin'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['linkedin']);?>">
									<i class="fab fa-linkedin"></i>
								</a>
								<?php endif;?> 	
								<?php if(!empty($stukram_options['dribbble'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['dribbble']);?>">
									<i class="fab fa-dribbble"></i>
								</a>
								<?php endif;?> 
								<?php if(!empty($stukram_options['behance'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['behance']);?>">
									<i class="fab fa-behance"></i>
								</a>
								<?php endif;?> 	
								<?php if(!empty($stukram_options['gplus'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['gplus']);?>">
									<i class="fab fa-google-plus"></i>
								</a>
								<?php endif;?> 										
								<?php if(!empty($stukram_options['youtube'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['youtube']);?>">
									<i class="fab fa-youtube"></i>
								</a>
								<?php endif;?> 										
								<?php if(!empty($stukram_options['vimeo'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['vimeo']);?>">
									<i class="fab fa-vimeo"></i>
								</a>
								<?php endif;?> 
								<?php if(!empty($stukram_options['slack'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['slack']);?>">
									<i class="fab fa-slack"></i>
								</a>
								<?php endif;?> 	
								<?php if(!empty($stukram_options['tumblr'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['tumblr']);?>">
									<i class="fab fa-tumblr"></i>
								</a>
								<?php endif;?> 
								<?php if(!empty($stukram_options['github'])):?>
								<a class="social__item text<?php echo sanitize_html_class($stukram_footer_style_txt_color);?> border<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>" href="<?php echo esc_url($stukram_options['github']);?>">
									<i class="fab fa-github"></i>
								</a>
								<?php endif;?> 	
								<?php
								$stukram_more_social = stukram_AfterSetupTheme::return_thme_option('opt_add_more_social','');
								if ( ! empty( $stukram_more_social ) ) {
								foreach ( $stukram_more_social as $stukram_more_socials ) { ;?>
								<?php echo balanceTags($stukram_more_socials);?>
								<?php } } ;?> 										
							</div>
						</div>
						<?php } ;?> 
					</div>
					<!-- row end -->
				</div>
				<?php } ;?>	

			  <div class="footer__bottom <?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>">
				<!-- row start -->
				<div class="row">
				  <div class="col">
					<div class="footer__copyright">
						<div class="text<?php echo sanitize_html_class($stukram_footer_style_txt_color2);?>">
							<?php $stukram_copy = Stukram_AfterSetupTheme::return_thme_option('copyright');
							echo apply_filters('the_content',$stukram_copy);
							?>
						</div>
					</div>
				  </div>
				</div>
				<!-- row end -->
			  </div>

			</div>
			<!-- container end -->
		</footer>
		<!-- footer end -->	