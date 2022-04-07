<?php $stukram_options = get_option('stukram');?>
<?php
/*Template Name:Blog Page Template*/
 get_header();

//echo $post->ID;
 ?>

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


	<?php if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st1'){ ?> 
		<?php get_template_part('template-parts/blog/classic-right');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st2') { ?>
		<?php get_template_part('template-parts/blog/classic-left');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st3') { ?>
		<?php get_template_part('template-parts/blog/classic-no-sidebar');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st4') { ?>
		<?php get_template_part('template-parts/blog/classic-col-2');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st5') { ?>
		<?php get_template_part('template-parts/blog/classic-col-3');?>		
	<?php } else  { ?>
		<?php get_template_part('template-parts/blog/classic-right');?>
	<?php }?>
 
<?php 
get_footer(); 

?>