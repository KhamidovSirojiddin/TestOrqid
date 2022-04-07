<?php $stukram_options = get_option('stukram'); ?>
    <!-- header start -->
	<?php if (is_page()||is_single()) { ?>
	
		<?php if(get_post_meta($post->ID,'rnr_stukram_page_header_logo_color_style_opt',true)=='yes'){ ?> 
		    <?php $stukram_header_logo_color = '-dark';?>
		<?php } else { ?>  
		    <?php $stukram_header_logo_color = '-light';?>
		<?php } ;?>
		
		<?php if(get_post_meta($post->ID,'rnr_stukram_page_header_color_style_opt',true)=='yes'){ ?> 
		    <?php $stukram_header_color = '-dark';?>
		<?php } else { ?>  
		    <?php $stukram_header_color = '-light ';?>
		<?php } ;?>		
		
	<?php } else { ?> 	
	
        <?php if (Stukram_AfterSetupTheme::return_thme_option('header_logo_color_style')=='yes'){ ?>  
            <?php $stukram_header_logo_color = '-dark';?>
        <?php } else { ?> 
		    <?php $stukram_header_logo_color = '-light ';?>
		<?php } ;?>	
		
        <?php if (Stukram_AfterSetupTheme::return_thme_option('header_color_style')=='yes'){ ?>  
            <?php $stukram_header_color = '-dark';?>
        <?php } else { ?> 
		    <?php $stukram_header_color = '-light ';?>
		<?php } ;?>			
		
	<?php } ;?>
    <header class="header <?php echo esc_attr($stukram_header_logo_color);?> -sticky<?php echo esc_attr($stukram_header_color);?> js-header<?php echo esc_attr($stukram_header_color);?> -classic js-header">
        <!-- header__bar start -->
        <div class="header__bar">
          <div class="overflow-hidden">
            <div class="header__logo js-header-logo">
                <a data-barba href="https://orqid.io">
					<?php if (Stukram_AfterSetupTheme::return_thme_option('textlogo')=='st2'){ ?>
					<img class="header__logo__light" src="<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('logopiclight','url'));?>" alt="<?php  bloginfo('name'); ?>">
					<?php } else { ?>
					<div class="header__logo__light">
						<?php if(!empty($stukram_options['logotext'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('logotext',''));?><?php else : ?><?php  bloginfo('name'); ?><?php endif;?>
					</div>
					<?php } ;?>
                </a>
                <a data-barba href="https://orqid.io">
					<?php if (Stukram_AfterSetupTheme::return_thme_option('textlogo')=='st2'){ ?> 
					<img class="header__logo__dark" src="<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="<?php  bloginfo('name'); ?>">
					<?php } else { ?>
					<div class="header__logo__dark">
						<?php if(!empty($stukram_options['logotext'])):?><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('logotext',''));?><?php else : ?><?php  bloginfo('name'); ?><?php endif;?>
					</div>			  
					<?php } ;?>			  
                </a>				
            </div>
          </div>

          <div class="navClassic-wrap js-header-menu-classic">
            <ul class="navClassic-list js-navClassic-list">
				<?php
					$defaults = array(
					'theme_location'  => 'top-menu',
					'menu'            => 'nav',
					'container'       => '',
					'container_class' => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '%3$s',
					'depth'           => 0,
					'walker'          => new Stukram_Walker
					);
					if(has_nav_menu('top-menu')) {
					   wp_nav_menu( $defaults );
					}
					else {
					};
				?>
            </ul>
          </div>

          <div class="header__menu__wrap overflow-hidden">
            <div class="header__menu js-header-menu">
              <button type="button" class="nav-button-open js-nav-open">
                <i class="icon" data-feather="menu"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- header__bar end -->


        <!-- nav start -->
        <nav class="nav js-nav">
          <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
              <div class="nav__header">
                <button type="button" class="nav-button-back js-nav-back">
                  <i class="icon" data-feather="arrow-left-circle"></i>
                </button>

                <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
                  <i class="icon" data-feather="x"></i>
                </button>
              </div>

              <div class="nav__content">
                <div class="nav__content__left">
                  <div class="navList__wrap">
                    <ul class="navList js-navList">
						<?php
							$defaults = array(
							'theme_location'  => 'top-menu',
							'menu'            => 'nav',
							'container'       => '',
							'container_class' => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '%3$s',
							'depth'           => 0,
							'walker'          => new Stukram_Walker
							);
							if(has_nav_menu('top-menu')) {
							   wp_nav_menu( $defaults );
							}
							else {
							};
						?>
                    </ul>
                  </div>
                </div>
				
                <?php if(has_nav_menu('top-menu')) { ?>
				<?php if (Stukram_AfterSetupTheme::return_thme_option('menu_contact_info')!='no'){ ?>
                <div class="nav__content__right">
                  <div class="nav__info">
				    <?php if(!empty($stukram_options['header_address_title1'])):?>
                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_address_title1',''));?>
                      </h5>
                      <?php if(!empty($stukram_options['hd_address1'])):?>
                      <div class="nav__info__content text-lg text-white mt-16">
					    <p>						
						    <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_address1',''));?>
						</p>
						<?php if(!empty($stukram_options['hd_address2'])):?>
						    <p><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_address2',''));?></p>
						<?php endif;?>					  
                      </div>
					  <?php endif;?>
                    </div>
                    <?php endif;?>
					
					<?php if(!empty($stukram_options['header_social_title1'])):?>
                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_social_title1',''));?>
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
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
					<?php endif;?>
					
                    <?php if(!empty($stukram_options['header_contact_title1'])):?>
                    <div class="nav__info__item js-navInfo-item">
                      <h5 class="text-sm tracking-none fw-500">
                        <?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('header_contact_title1',''));?>
                      </h5>

                      <div class="nav__info__content text-lg text-white mt-16">
					    <?php if(!empty($stukram_options['hd_email_address1'])):?>
                        <a href="mailto:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('hd_email_address1',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_email_address1',''));?></a>
						<?php endif;?>
						<?php if(!empty($stukram_options['hd_email_address2'])):?>
						<a href="mailto:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('hd_email_address2',''));?>"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_email_address2',''));?></a>
						<?php endif;?>
						<?php if(!empty($stukram_options['hd_phn_number1'])):?>
                        <a href="#"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_phn_number1',''));?></a>
						<?php endif;?>
						<?php if(!empty($stukram_options['hd_phn_number2'])):?>
                        <a href="#"><?php echo esc_html(Stukram_AfterSetupTheme::return_thme_option('hd_phn_number2',''));?></a>
						<?php endif;?>
                      </div>
                    </div>
					<?php endif;?>
                  </div>
                </div>
				<?php } ?>
				<?php } ?>
              </div>
            </div>
          </div>
        </nav>
        <!-- nav end -->
      </header>
      <!-- header end -->