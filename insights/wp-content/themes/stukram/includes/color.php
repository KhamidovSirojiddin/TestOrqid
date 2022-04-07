<?php
add_action('wp_head', 'stukram_custom_colors', 160);
function stukram_custom_colors() { 
$stukram_options = get_option('stukram');
?>

 
<style type="text/css" class="stukram-custom-dynamic-css">
<?php if(!empty($stukram_options['opt_theme_style'])):?>

.text-accent {
    color: <?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('opt_theme_style',''));?>;
}
:root {
    --accent-color: <?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('opt_theme_style',''));?>;
}
<?php endif;?>
<?php if(!empty($stukram_options['opt_preloader_style'])):?>
.preloader__bg{background-color:<?php echo esc_attr(Stukram_AfterSetupTheme::return_thme_option('opt_preloader_style',''));?>;}
<?php endif;?>

<?php if (Stukram_AfterSetupTheme::return_thme_option('enable_preloader')=='no'){ ?>
.preloader {display:none;}
<?php } ;?>

</style>
 
 
 <?php 
	}
?>
