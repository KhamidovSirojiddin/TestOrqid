<?php
global $stukram_options;
$stukram_options = get_option('stukram');
function stukram_style() {
wp_enqueue_style('stukram-style', (STUKRAM_THEME_URL . '/style.css'));
wp_enqueue_style('stukram-vendors', (STUKRAM_THEME_URL . '/includes/css/vendors.css'));
wp_enqueue_style('stukram-main', (STUKRAM_THEME_URL . '/includes/css/main.css'));
wp_enqueue_style('fontawesome-pro', (STUKRAM_THEME_URL . '/includes/css/fontawesome-pro.css'));
wp_enqueue_style('stukram-main-style', (STUKRAM_THEME_URL . '/includes/css/stukram-main-style.css'));
wp_enqueue_style('js_composer_front');
if (Stukram_AfterSetupTheme::return_thme_option('enable_cursor')!='yes'){
wp_enqueue_style('stukram-custom-cursors', (STUKRAM_THEME_URL . '/includes/css/custom-cursors.css'));
}
}
add_action('wp_enqueue_scripts', 'stukram_style');

function stukram_fonts_url() {
    $stukram_font_url = '';
    
    if ( 'off' !== _x( 'on', 'Oswald font: on or off', 'stukram' ) ) {
        $stukram_font_url = add_query_arg( 'family','Oswald:200,300,400,500,600,700|Inter:300,400,500,600,700,800,900&display=swap' , "//fonts.googleapis.com/css" );
    }
    return $stukram_font_url;
}

function stukram_scripts() {
    wp_enqueue_style( 'stukram_fonts', stukram_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'stukram_scripts' );

function stukram_enqueue_custom_admin_style() {
wp_enqueue_style( 'stukram_wp_admin_css', (STUKRAM_THEME_URL . '/includes/css/admin-style.css'), false, '1.0.0' );

}
add_action( 'admin_enqueue_scripts', 'stukram_enqueue_custom_admin_style' );