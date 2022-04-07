<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $stukram_options = get_option('stukram'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php 
	wp_head(); 
	?>
</head>
<body <?php body_class(); ?>  data-barba="wrapper">
<?php wp_body_open(); ?>
  
    <!-- preloader start -->
	<div class="preloader js-preloader">
		<div class="preloader__bg"></div>
		<div class="preloader__progress">
		  <!-- <div class="preloader__progress__inner"></div> -->
		  <?php if (Stukram_AfterSetupTheme::return_thme_option('enable_preloader')=='yes'){ ?>
		  <img src="<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('pagelogopic','url'));?>" alt="<?php echo esc_url(Stukram_AfterSetupTheme::return_thme_option('pagelogopic','title'));?>" class="preloader__img">
		  <?php };?>
		  <div class="preloader__pulse"></div>
		</div>
	</div>
    <!-- preloader end -->

	<?php if (Stukram_AfterSetupTheme::return_thme_option('enable_cursor')=='yes'){?>
		<!-- cursor start -->
		<div class="cursor js-cursor">
			<div class="cursor__wrapper">
			  <div class="cursor__follower js-follower"></div>
			  <div class="cursor__label js-label"></div>
			  <div class="cursor__icon js-icon"></div>
			</div>
		</div> 
		<!-- cursor end -->
	<?php } ;?>
 
	<!-- barba container start -->
	<div class="barba-container" data-barba="container">

		<!-- to-top-button start -->
		<?php if (Stukram_AfterSetupTheme::return_thme_option('enable_top_button')=='yes'){ ;?> 
		<div data-cursor class="backButton js-backButton">
		  <span class="backButton__bg"></span>
		  <div class="backButton__icon__wrap">
			<i class="backButton__button js-top-button" data-feather="arrow-up"></i>
		  </div>
		</div>
		<!-- to-top-button end -->
		<?php } ;?> 
		
		<?php if (Stukram_AfterSetupTheme::return_thme_option('theme_color_style')=='no'){ ?> 
			<?php $stukram_theme_color_style_class = "black-version";?>
		<?php } else { ?>	
			<?php $stukram_theme_color_style_class = "light-version";?>	
		<?php } ;?>			        
		<main class="<?php echo esc_attr($stukram_theme_color_style_class);?>">
		
			<?php if (is_page()||is_single()) { ?>
			    <!-- 1st condition -->
				<?php if(get_post_meta($post->ID,'rnr_stukram_page_header_menu_selector_opt',true)=='yes'){ ?> 
					<!-- 2nd condition -->
					<?php if(get_post_meta($post->ID,'rnr_stukram_page_header_menu_style_opt',true)=='yes'){ ?> 
						<?php get_template_part('template-parts/header/menu-click'); ?> 
					<?php } else { ?>
						<?php get_template_part('template-parts/header/menu-classic'); ?> 
					<?php  } ;?>
				<?php } else { ?>					
					<?php if (Stukram_AfterSetupTheme::return_thme_option('nav_menu_style')=='yes'){ ?> 
						<?php get_template_part('template-parts/header/menu-click'); ?> 
					<?php } else { ?>	
						<?php get_template_part('template-parts/header/menu-classic'); ?> 	
					<?php } ;?>
				<?php } ;?>	 
			<?php } else { ?>	
			    <!-- 1st condition -->
				<?php if (Stukram_AfterSetupTheme::return_thme_option('nav_menu_style')=='yes'){ ?> 
					<?php get_template_part('template-parts/header/menu-click'); ?> 
				<?php } else { ?>	
					<?php get_template_part('template-parts/header/menu-classic'); ?> 	
				<?php } ;?>						
			<?php } ;?>	 
	
 

