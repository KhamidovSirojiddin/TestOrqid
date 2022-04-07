<?php
function stukram_import_files() {
	return array(
		array(
			'import_file_name'             => 'Ligh Version Demo',
			'categories'                   => array( 'Stukram' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/light/demo-content.xml',
			//'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/light/widgets.wie',
			//'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/light/redux.json',
					'option_name' => 'stukram',
				),
			),
			'import_preview_image_url'     => 'http://webredox.net/demo/wp/stukram/1.jpg',
			'import_notice'                => __( 'Be patient, it can take a couple of minutes.', 'stukram' ),
			'preview_url'                  => 'http://webredox.net/demo/wp/stukram/light/',
		),
		
		array(
			'import_file_name'             => 'Dark Version Demo',
			'categories'                   => array( 'Stukram' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/dark/demo-content.xml',
			//'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/dark/widgets.wie',
			//'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'includes/stukram-demo/dark/redux.json',
					'option_name' => 'stukram',
				),
			),
			'import_preview_image_url'     => 'http://webredox.net/demo/wp/stukram/5.jpg',
			'import_notice'                => __( 'Be patient, it can take a couple of minutes.', 'stukram' ),
			'preview_url'                  => 'http://webredox.net/demo/wp/stukram/dark',
		),		
		
		
	);
}
add_filter( 'pt-ocdi/import_files', 'stukram_import_files' );

function stukram_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'top-menu' => $main_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'stukram_after_import_setup' );

function ocdi_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Stukram Demo Importer' , 'pt-ocdi' );
	$default_settings['menu_title']  = esc_html__( 'Stukram Demo Importer' , 'pt-ocdi' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'stukram-one-click-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );