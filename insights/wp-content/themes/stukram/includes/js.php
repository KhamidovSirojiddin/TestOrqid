<?php

if( !function_exists ('stukram_enqueue_scripts') ) :
	function stukram_enqueue_scripts() {
	$stukram_options = get_option('stukram');
	wp_enqueue_script('stukram-vendors', (STUKRAM_THEME_URL . '/includes/js/vendors.js'), array('jquery'), '1.0',true);
	wp_register_script('stukram-loadmore-filter', (STUKRAM_THEME_URL . '/includes/js/stukram-loadmore-filter.js'), array('jquery'), '1.0',true);
	if (class_exists('WPBakeryVisualComposerAbstract')) {
		if ( vc_mode() === 'page_editable' ) {
			wp_enqueue_script('stukram-main', (STUKRAM_THEME_URL . '/includes/js/main-no-ajax-vc.js'), array('jquery'), '1.0',true);
		}
		else {
			if (Stukram_AfterSetupTheme::return_thme_option('enable_ajax_load')=='st2'){
			wp_enqueue_script('stukram-main-no-ajax', (STUKRAM_THEME_URL . '/includes/js/main-no-ajax.js'), array('jquery'), '1.0',true);
		}
			else {
				wp_enqueue_script('stukram-main', (STUKRAM_THEME_URL . '/includes/js/main.js'), array('jquery'), '1.0',true);
			}
		}
	}
	else { 
		if (Stukram_AfterSetupTheme::return_thme_option('enable_ajax_load')=='st2'){
			wp_enqueue_script('stukram-main-no-ajax', (STUKRAM_THEME_URL . '/includes/js/main-no-ajax.js'), array('jquery'), '1.0',true);
		}
		else {
			wp_enqueue_script('stukram-main', (STUKRAM_THEME_URL . '/includes/js/main.js'), array('jquery'), '1.0',true);
		}
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}
	add_action('wp_enqueue_scripts', 'stukram_enqueue_scripts');
endif;