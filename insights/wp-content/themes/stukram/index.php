<?php $stukram_options = get_option('stukram'); ?>
<?php get_header(); ?>
	
    <?php if (Stukram_AfterSetupTheme::return_thme_option('index_header_show')!='no'){ ?>	
	    <?php get_template_part('template-parts/header/post_masthead');?>
	<?php } ?>	

	<?php if (Stukram_AfterSetupTheme::return_thme_option('blogtyle')=='st2'){ ?>
		<?php get_template_part('template-parts/index/blog-left');?>
	<?php } else if (Stukram_AfterSetupTheme::return_thme_option('blogtyle')=='st3'){ ?>
		<?php get_template_part('template-parts/index/full');?>
	<?php } else { ?>
		<?php get_template_part('template-parts/index/blog-right');?>
	<?php } ;?>


<?php get_footer(); ?>	
