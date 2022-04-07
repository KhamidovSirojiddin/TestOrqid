<?php
/*
Plugin Name: Stukram Plugin
Plugin URI: http://webredox.net
Description: Declares a plugin that will create Page Settins, VC addons & Custom Post Type
Version: 2.1
Author: webRedox
Author URI: http://webredox.net
License: GPLv2
*/
define('STUKRAM_VERSION', '2.1');
define('STUKRAM_PLUGIN_PATH',		plugin_dir_path(__FILE__));
define('STUKRAM_URL', plugins_url('', __FILE__));
include (STUKRAM_PLUGIN_PATH .'metaboxes.php');
include (STUKRAM_PLUGIN_PATH .'meta-box-group.php');
include (STUKRAM_PLUGIN_PATH .'meta-box-show-hide.php');
include (STUKRAM_PLUGIN_PATH .'meta-box-tooltip.php');
include (STUKRAM_PLUGIN_PATH .'meta-box-conditional-logic.php');
include (STUKRAM_PLUGIN_PATH .'stukram-post-order.php');


function stukram_register_metabox_list() {
require (STUKRAM_PLUGIN_PATH .'/plugin-update-checker/plugin-update-checker.php');
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://webredox.net/demo/wp/stukram/pluginupdate/details.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'stukram-plugin'
);
}
add_action('init', 'stukram_register_metabox_list');

global $stukram_options;


if( ! function_exists( 'portfolio_post_types' ) ) {
    function portfolio_post_types() {

        register_post_type(
            'portfolio',
            array(
                'labels' => array(
                    'name'          => __( 'Portfolios', 'portfolio' ),
                    'singular_name' => __( 'Portfolio', 'portfolio' ),
                    'add_new'       => __( 'Add New', 'portfolio' ),
                    'add_new_item'  => __( 'Add New Portfolio', 'portfolio' ),
                    'edit'          => __( 'Edit', 'portfolio' ),
                    'edit_item'     => __( 'Edit Portfolio', 'portfolio' ),
                    'new_item'      => __( 'New Portfolio', 'portfolio' ),
                    'view'          => __( 'View Portfolio', 'portfolio' ),
                    'view_item'     => __( 'View Portfolio', 'portfolio' ),
                    'search_items'  => __( 'Search Portfolio', 'portfolio' ),
                    'not_found'     => __( 'No Portfolio item found', 'portfolio' ),
                    'not_found_in_trash' => __( 'No portfolio item found in Trash', 'portfolio' ),
                    'parent'        => __( 'Parent Portfolio', 'portfolio' ),
                ),
                
                'description'       => __( 'Create a Portfolio.', 'portfolio' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
				'show_in_nav_menus' => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'portfolio_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



add_filter('widget_title', 'do_shortcode');
add_shortcode('span', 'wpse_shortcode_span');
function wpse_shortcode_span( $attr, $content ){ return '<span class="text-color-red">'. $content . '</span>'; }
add_shortcode('br', 'wpse_shortcode_br');
function wpse_shortcode_br( $attr ){ return '<br>'; }
add_shortcode('i', 'wpse_shortcode_i');
function wpse_shortcode_i( $attr, $content){ return '<i class="'. $content . '"></i> '; }
function stukram_social_media_icons( $stukram_contactmethods ) {
    // Add social media
   
    $stukram_contactmethods['twitter'] = 'Twitter';
    $stukram_contactmethods['facebook'] = 'Facebook';
    $stukram_contactmethods['instagram'] = 'Instagram';
    $stukram_contactmethods['tumblr'] = 'Tumblr';
    $stukram_contactmethods['pinterest'] = 'Pinterest';
    $stukram_contactmethods['youtube'] = 'Youtube';

    return $stukram_contactmethods;
}
add_filter('user_contactmethods','stukram_social_media_icons',10,1);
/* ==========================================
   Add featured image column to admin panel post list page
========================================== */
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns) {
	$columns['img'] = 'Thumbnail';
	return $columns;
}

function manage_img_column($column_name, $post_id) {
	if( $column_name == 'img' ) {
		echo get_the_post_thumbnail( $post_id, array( 80, 60) ); return true; // 80, 60 is for image size.
	}
}

// Change columns order
add_filter('manage_posts_columns', 'column_order');
function column_order($columns) {
  $n_columns = array();
  $move = 'img'; // what to move
  $before = 'title'; // move before this
  foreach($columns as $key => $value) {
    if ($key==$before){
      $n_columns[$move] = $move;
    }
      $n_columns[$key] = $value;
  }
  return $n_columns;
}

/**
*
*
*
 * Allow shortcodes in widgets
 * @since v1.0
 */
add_filter('widget_text', 'do_shortcode');

if( !function_exists('symple_fix_shortcodes') ) {
	function symple_fix_shortcodes($content){   
		$array = array (
			'<p>['		=> '[', 
			']</p>'		=> ']', 
			']<br />'	=> ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'symple_fix_shortcodes');
}

// Blog Section 
if(! function_exists('wr_vc_blog_shortcode')){
	function wr_vc_blog_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'df_class'=>'x-gap-48 y-gap-40',
            'categoryname'=>'',
            'showpost'=>'',			
			'featyretype'=>'',
			'title'=>'Read More',
			'cover_scheme'=>'-cover-dark-1',
			'animate_delay_img'=>'delay-1',	
			'animate_delay_title'=>'delay-7',	
			'animate_delay_title2'=>'delay-6',					
			'animate_delay_title3'=>'delay-8',					
	    ), $atts) );			
	$html='';	


	$html .= '<div class="sec-blog row '.$df_class.' '.$class.'">';	
	
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $showpost) ); while ( $loop->have_posts() ) : $loop->the_post();			
			if (has_post_thumbnail( $post->ID ) ):		
			$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
			$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
				
			if($featyretype == "st2"){
				$html .='<div class="col-lg-4 col-md-6">';			
					$html .='<div data-anim="slide-up '.$animate_delay_img.'" class="blogCard -type-2 -hover shadow-light rounded-4">';	
						$html .= '<a class="blogCard__img" data-barba href="'.get_the_permalink().'">';				
							$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
						$html .='</a>';	

						$html .='<div class="blogCard__content px-40 py-40 lg:px-32 lg:py-32 md:px-40 md:py-40">';	
						    $html .='<div class="blogCard__info text-sm text-dark">'.get_the_category_list(', ').'</div>';
							$html .='<h4 class="blogCard__title text-2xl leading-md fw-500 text-black mt-48">';
								$html .='<a data-barba href="'.get_the_permalink().'">'.get_the_title().'</a>';
							$html .='</h4>';						
							$html .='<p class="blogCard__text mt-12">';	
								if ( has_excerpt( $post->ID ) ) {									
								    $html .=get_the_excerpt();
                                } else {
								    $html .= substr(strip_tags($post->post_content), 0, 65);	
								}							
							$html .='</p>';							
							$html .='<div class="blogCard__date mt-32">';	
							    $html .='<span class="button text-sm text-dark">'.get_the_date( get_option( 'date_format' ) ).'</span>';
						    $html .='</div>';						
						$html .='</div>';						
					$html .='</div>';						
				$html .='</div>';					
			} else {	
				$html .='<div class="col-lg-4 col-md-6">';			
					$html .='<div data-anim-wrap class="blogCard -type-1 -hover">';	
						$html .= '<a class="blogCard__img" data-barba href="'.get_the_permalink().'">';				
							$html .='<div data-anim-child="img-right '.$cover_scheme.' '.$animate_delay_img.'" class="portfolioCard__img__inner">';
								$html .='<div class="ratio ratio-4:3 bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';
						$html .='</a>';	

						$html .='<div class="blogCard__content mt-24">';						
							$html .='<div data-anim-child="slide-up '.$animate_delay_title2.'" class="blogCard__info text-dark leading-md text-sm">';						
								$html .='<span class="fw-400 mr-4">'.get_the_category_list(', ').'</span> -';
								$html .='<p class="d-inline-block ml-4">'.get_the_date( get_option( 'date_format' ) ).'</p>';
							$html .='</div>';						
							$html .='<div data-anim-child="slide-up '.$animate_delay_title.'">';						
								$html .='<h4 class="blogCard__title text-2xl leading-lg fw-500 mt-12">';
									$html .='<a data-barba href="'.get_the_permalink().'">'.get_the_title().'</a>';
								$html .='</h4>';						
							$html .='</div>';						
							$html .='<div data-anim-child="slide-up '.$animate_delay_title3.'" class="mt-12">';	
								$html .='<a data-barba href="'.get_the_permalink().'" class="button -icon text-black">';
									$html .=''.esc_html($title).'';  
								$html .='<i class="icon size-xs str-width-md" data-feather="arrow-right"></i></a>';
							$html .='</div>';						
						$html .='</div>';						
					$html .='</div>';						
				$html .='</div>';							
			}
			endif;			
		endwhile;
		wp_reset_postdata();

	$html .='</div>';

    return $html;		         				
	}
	add_shortcode('wr_vc_blog', 'wr_vc_blog_shortcode');
}


// Protfolio Section 
 if(! function_exists('wr_vc_portfolio_body_shortcode')){
	function wr_vc_portfolio_body_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',	
			'postcount'=>'',
			'categoryname'=>'',
			'postoffset'=>'',
			'featyretype'=>'',
			'cover_scheme'=>'-cover-dark-1',
			'animate_delay_img'=>'delay-1',	
			'animate_delay_title'=>'delay-8',	
			'animate_delay_title2'=>'delay-6',							
			'col_size'=>'-col-4',							
			'gap_size'=>'',							
			'df_pad'=>'',							
			'df_class'=>'',							
			'button_name'=>'',	
			'button_style'=>'-outline-black text-black',
			'link_url'=>'',
			'link_target'=>'',			
			'screen3'=>'-md',
			'filter_type'=>'',
			'title'=>'',
			'title2'=>'',
			'exclude_cat_id'=>'',
			'cat_count'=>'',
			'post_pagination'=>'',
			'pagination_previous'=>'Previous',
			'pagination_next'=>'Next',
			
			), $atts) );
		$html='';
		$sec_pad='';
		if($filter_type != "no"){
		$sec_pad='layout-pt-sm';
		}
		
	$html .= '<div class="sec-port-vc '.$class.'">';
	
	    if($featyretype == "st2"){
			
			$html .= '<div class="masonry '.$col_size.' js-masonry js-masonry-no-filter">';
			$html .= '<div class="masonry__sizer"></div>';
			global $post;			
			$paged=(get_query_var('paged'))?get_query_var('paged'):1;
			$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount, 'offset' => $postoffset, 'paged'=>$paged ) );			
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$stukram_portfolio_image_size = ""; 
			$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
			$stukram_class = ""; 
			$stukram_categories = ""; 
			foreach ($portfolio_category as $stukram_item) {
				$stukram_class.=esc_attr($stukram_item->slug . ' ');
				$stukram_categories.='<span class="cat-divider">';
				$stukram_categories.=esc_attr($stukram_item->name . '  ');
				$stukram_categories.='</span>';
			}	
				if (has_post_thumbnail( $post->ID ) ):		
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);	
				
				if(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='big'){
					$stukram_portfolio_image_size.='-big';	
				} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='long'){
					$stukram_portfolio_image_size.='-long';	
				} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='wide'){
					$stukram_portfolio_image_size.='-wide';	
				}	
				$html .= '<div class="masonry__item '.$stukram_portfolio_image_size.'">';
				
					$html .= '<div class="portfolioCard -type-2 -hover ratio">';                				
						$html .='<div class="portfolioCard__img">';
							$html .='<div data-anim="img-right '.$cover_scheme.' '.$animate_delay_img.'" class="portfolioCard__img__inner">';
								$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';
						$html .='</div>';
						$html .= '<div class="portfolioCard__content">';
								$html .= '<p class="portfolioCard__category text-light mb-8">'.$stukram_categories.'</p>';
								$html .= '<h3 class="portfolioCard__title text-2xl fw-600 text-white">'.get_the_title().'</h3>';	
						$html .= '</div>';	
						$html .= '<a class="portfolioCard__link" data-barba href="'.get_the_permalink().'"></a>';
					$html .= '</div>';											
				$html .= '</div>';											
				endif;	
			endwhile;
			wp_reset_postdata();				
			$html .= '</div>';
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}
			
        } else if($featyretype == "st3"){	
			
			$html .= '<div class="masonry '.$col_size.' '.$gap_size.' js-masonry js-masonry-no-filter">';
			$html .= '<div class="masonry__sizer"></div>';
			global $post;			
			$paged=(get_query_var('paged'))?get_query_var('paged'):1;
			$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount,  'offset' => $postoffset, 'paged'=>$paged ) );			
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$stukram_portfolio_image_size = ""; 
			$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
			$stukram_class = ""; 
			$stukram_categories = ""; 
			foreach ($portfolio_category as $stukram_item) {
				$stukram_class.=esc_attr($stukram_item->slug . ' ');
				$stukram_categories.='<span class="cat-divider">';
				$stukram_categories.=esc_attr($stukram_item->name . '  ');
				$stukram_categories.='</span>';
			}	
				if (has_post_thumbnail( $post->ID ) ):		
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);	
				
				if(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='big'){
					$stukram_portfolio_image_size.='-big';	
				} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='long'){
					$stukram_portfolio_image_size.='-long';	
				} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='wide'){
					$stukram_portfolio_image_size.='-wide';	
				}	
				$html .= '<div class="masonry__item '.$stukram_portfolio_image_size.'">';				
					$html .= '<div class="portfolioCard -type-2 -hover ratio">';                				
						$html .='<div class="portfolioCard__img">';
						    $html .='<div class="portfolioCard__img__inner" data-anim="img-right '.$cover_scheme.'">';
								$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';
						$html .='</div>';
						$html .= '<div class="portfolioCard__content">';
								$html .= '<p class="portfolioCard__category text-light mb-8">'.$stukram_categories.'</p>';
								$html .= '<h3 class="portfolioCard__title text-2xl fw-600 text-white">'.get_the_title().'</h3>';	
						$html .= '</div>';	
						$html .= '<a class="portfolioCard__link" data-barba href="'.get_the_permalink().'"></a>';
					$html .= '</div>';											
				$html .= '</div>';											
				endif;	
			endwhile;
			wp_reset_postdata();				
			$html .= '</div>';	
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}
			
		} else if($featyretype == "st4"){
			
			$html .= '<div class="fancy-grid '.$col_size.' '.$df_class.'">';
			global $post;			
			$paged=(get_query_var('paged'))?get_query_var('paged'):1;
			$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount, 'offset' => $postoffset, 'paged'=>$paged ) );			
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
			$stukram_class = ""; 
			$stukram_categories = ""; 
			foreach ($portfolio_category as $stukram_item) {
				$stukram_class.=esc_attr($stukram_item->slug . ' ');
				$stukram_categories.='<span class="cat-divider">';
				$stukram_categories.=esc_attr($stukram_item->name . '  ');
				$stukram_categories.='</span>';
			}	
				if (has_post_thumbnail( $post->ID ) ):		
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);		
				$html .= '<div class="fancy-grid__item">';
					$html .= '<a data-cursor-icon="arrow-right" data-anim="slide-up '.$animate_delay_img.'" class="portfolioCard -type-1 -hover" data-barba href="'.get_the_permalink().'">';				
						$html .='<div class="portfolioCard__img">';
							$html .='<div class="portfolioCard__img__inner">';
								$html .='<div class="ratio ratio-3:4 bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';
						$html .='</div>';
						$html .= '<div class="portfolioCard__content mt-20">';
							$html .= '<p class="portfolioCard__category overflow-hidden text-dark mb-8">'.$stukram_categories.'</p>';					
							$html .= '<h3 class="portfolioCard__title overflow-hidden text-2xl fw-600">'.get_the_title().'</h3>';
	                    $html .= '</div>';							
					$html .= '</a>';											
				$html .= '</div>';											
				endif;	
			endwhile;
			wp_reset_postdata();				
			$html .= '</div>';	
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}
			
		} else if($featyretype == "st5"){

			$html .= '<div class="section-filter">';
				if($filter_type != "no"){		
				if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
				$portfolio_category = get_terms('portfolio_category', array('exclude' => esc_attr($exclude_cat_id), 'number'=>esc_attr($cat_count)));
				if($portfolio_category):			
			    $html .= '<div class="container">';
			        $html .= '<div class="row y-gap-32 justify-content-between align-items-center">';
			            $html .= '<div class="col-auto">';						
							$html .= '<div class="filter-button-group text-dark fw-500">';
								$html .= '<button class="button mr-20 btn-active" data-filter="*">';
									if($title != '') {	
									$html .=''.esc_html($title).'';
									} else {
									$html .= 'Show All';	
									}									
								$html .= '</button>';
								foreach($portfolio_category as $portfolio_cat):
									$html .= '<button class="button mr-20" data-filter=".';
									$html .= $portfolio_cat->slug;
									$html .= '">';
									$html .= $portfolio_cat->name;
									$html .= '</button>';
								endforeach;								
							$html .= '</div>';
			            $html .= '</div>';
						if($button_name != '') {
						$html .='<div class="col-auto">';						
							$html .='<a href="'.esc_url($link_url).'" ';
								if($link_target != '') { $html .='target="'.$link_target.'"';}						
							$html .=' class="button '.$screen3.' '.$button_style.'">'.esc_html($button_name).'</a>';
						$html .='</div>';
						}							
			        $html .= '</div>';
			    $html .= '</div>';
				endif; 
				endif;			
				}				
				$html .= '<div class="container '.$sec_pad.'">';
					$html .= '<div class="masonry '.$col_size.' '.$gap_size.'">';
					$html .= '<div class="masonry__sizer"></div>';
					global $post;			
					$paged=(get_query_var('paged'))?get_query_var('paged'):1;
					$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount, 'offset' => $postoffset, 'paged'=>$paged ) );			
					while ( $loop->have_posts() ) : $loop->the_post();
					
					$stukram_portfolio_image_size = ""; 
					$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
					$stukram_class = ""; 
					$stukram_categories = ""; 
					foreach ($portfolio_category as $stukram_item) {
						$stukram_class.=esc_attr($stukram_item->slug . ' ');
						$stukram_categories.='<span class="cat-divider">';
						$stukram_categories.=esc_attr($stukram_item->name . '  ');
						$stukram_categories.='</span>';
					}	
						if (has_post_thumbnail( $post->ID ) ):		
						$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
						$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);	
						
						if(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='big'){
							$stukram_portfolio_image_size.='-big';	
						} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='long'){
							$stukram_portfolio_image_size.='-long';	
						} elseif(get_post_meta($post->ID,'rnr_portfolio_image_size',true)=='wide'){
							$stukram_portfolio_image_size.='-wide';	
						}							
						$html .= '<div class="masonry__item '.esc_attr($stukram_class).' '.esc_attr($stukram_portfolio_image_size).'">';				
							$html .= '<div data-anim="slide-up" class="portfolioCard -type-2 -hover">';                				
								$html .='<div class="ratio">';
									$html .='<div class="portfolioCard__img">';
										$html .='<div class="portfolioCard__img__inner">';
											$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
										$html .='</div>';
									$html .='</div>';
									$html .= '<div class="portfolioCard__content">';
											$html .= '<p class="portfolioCard__category text-light mb-8">'.$stukram_categories.'</p>';
											$html .= '<h3 class="portfolioCard__title text-3xl md:text-2xl fw-600 text-white">'.get_the_title().'</h3>';	
									$html .= '</div>';	
									$html .= '<a class="portfolioCard__link" data-barba href="'.get_the_permalink().'"></a>';
								$html .= '</div>';											
							$html .= '</div>';											
						$html .= '</div>';											
						endif;	
					endwhile;
					wp_reset_postdata();				
				    $html .= '</div>';
				$html .= '</div>';
		    $html .= '</div>';
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>');	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}
			
		} else if($featyretype == "st6"){

			$html .= '<div class="section-filter">';
				if($filter_type != "no"){		
				if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
				$portfolio_category = get_terms('portfolio_category', array('exclude' => esc_attr($exclude_cat_id), 'number'=>esc_attr($cat_count)));
				if($portfolio_category):			
			    $html .= '<div class="container">';
			        $html .= '<div class="row y-gap-32 justify-content-between align-items-center">';
			            $html .= '<div class="col-auto">';						
							$html .= '<div class="filter-button-group text-dark fw-500">';
								$html .= '<button class="button mr-20 btn-active" data-filter="*">';
									if($title != '') {	
									$html .=''.esc_html($title).'';
									} else {
									$html .= 'Show All';	
									}									
								$html .= '</button>';
								foreach($portfolio_category as $portfolio_cat):
									$html .= '<button class="button mr-20" data-filter=".';
									$html .= $portfolio_cat->slug;
									$html .= '">';
									$html .= $portfolio_cat->name;
									$html .= '</button>';
								endforeach;								
							$html .= '</div>';
			            $html .= '</div>';
						if($button_name != '') {
						$html .='<div class="col-auto">';						
							$html .='<a href="'.esc_url($link_url).'" ';
								if($link_target != '') { $html .='target="'.$link_target.'"';}						
							$html .=' class="button '.$screen3.' '.$button_style.'">'.esc_html($button_name).'</a>';
						$html .='</div>';
						}							
			        $html .= '</div>';
			    $html .= '</div>';
				endif; 
				endif;			
				}				
				$html .= '<div class="container '.$sec_pad.'">';
					$html .= '<div class="masonry '.$col_size.' '.$gap_size.'">';
					$html .= '<div class="masonry__sizer"></div>';
					global $post;			
					$paged=(get_query_var('paged'))?get_query_var('paged'):1;
					$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount, 'offset' => $postoffset, 'paged'=>$paged ) );			
					while ( $loop->have_posts() ) : $loop->the_post();
					
					$stukram_portfolio_image_size = ""; 
					$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
					$stukram_class = ""; 
					$stukram_categories = ""; 
					foreach ($portfolio_category as $stukram_item) {
						$stukram_class.=esc_attr($stukram_item->slug . ' ');
						$stukram_categories.='<span class="cat-divider">';
						$stukram_categories.=esc_attr($stukram_item->name . '  ');
						$stukram_categories.='</span>';
					}	
						if (has_post_thumbnail( $post->ID ) ):		
						$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
						$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);	
												
						$html .= '<div class="masonry__item '.esc_attr($stukram_class).'">';				
							$html .= '<div data-anim="slide-up" class="portfolioCard -type-2 -hover">';    
							    $html .='<div class="ratio">';
									$html .='<div class="portfolioCard__img">';
										$html .='<div class="portfolioCard__img__inner">';
											$html .='<div class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
										$html .='</div>';
									$html .='</div>';
									$html .= '<div class="portfolioCard__content">';
											$html .= '<p class="portfolioCard__category text-light mb-8">'.$stukram_categories.'</p>';
											$html .= '<h3 class="portfolioCard__title text-3xl md:text-2xl fw-600 text-white">'.get_the_title().'</h3>';	
									$html .= '</div>';	
									$html .= '<a class="portfolioCard__link" data-barba href="'.get_the_permalink().'"></a>';
								$html .= '</div>';											
							$html .= '</div>';											
						$html .= '</div>';											
						endif;	
					endwhile;
					wp_reset_postdata();				
				    $html .= '</div>';
				$html .= '</div>';
		    $html .= '</div>';
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}			

		} else if($featyretype == "st7"){
		
			$html .= '<div class="container vertical-port">';
				global $post;			
				$paged=(get_query_var('paged'))?get_query_var('paged'):1;
				$loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page'=> $postcount, 'portfolio_category'=> $categoryname,   'offset' => $postoffset, 'paged'=>$paged ) );			
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$stukram_portfolio_image_size = ""; 
				$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
				$stukram_class = ""; 
				$stukram_categories = ""; 
				foreach ($portfolio_category as $stukram_item) {
					$stukram_class.=esc_attr($stukram_item->slug . ' ');
					$stukram_categories.='<span class="cat-divider">';
					$stukram_categories.=esc_attr($stukram_item->name . '  ');
					$stukram_categories.='</span>';
				}	
					if (has_post_thumbnail( $post->ID ) ):		
					$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
					$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);	
											
					$html .= '<div class="row align-items-center layout-pt-lg">';				
						$html .= '<div class="col-lg-7 pr-48 md:pr-16">';    
							$html .='<div data-anim="img-right '.$cover_scheme.' '.$animate_delay_img.'" data-parallax="0.7" class="ratio ratio-3:2">';
								$html .='<div data-parallax-target class="bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';						
						$html .='</div>';						
						$html .= '<div class="col-lg-5 col-md-8 pl-48 md:pl-16 md:mt-48">';
							$html .= '<div data-anim="slide-up '.$animate_delay_img.'" class="sectionHeading -md">';
								$html .= '<p class="sectionHeading__subtitle">'.$stukram_categories.'</p>';					
								$html .= '<h2 class="text-5xl md:text-4xl sm:text-3xl fw-700 mt-32 md:mt-24 sm:mt-20">'.get_the_title().'</h2>';
								$html .= '<a class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20" data-barba href="'.get_the_permalink().'">';
									if($title2 != '') {	
									$html .=''.esc_html($title2).'';
									} else {
									$html .= 'View project';	
									}									
								$html .= '<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></a>';
							$html .= '</div>';								
						$html .= '</div>';
					$html .= '</div>';											
					endif;	
				endwhile;
				wp_reset_postdata();	
			if($post_pagination == "st2"){
			$html .='<div class="row y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			}
			
			$html .= '</div>';			
		
		} else {	

			$html .= '<div class="fancy-grid '.$col_size.' -container">';
			global $post;			
			$paged=(get_query_var('paged'))?get_query_var('paged'):1;
			$loop = new WP_Query( array( 'post_type' => 'portfolio', 'portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount,  'offset' => $postoffset, 'paged'=>$paged ) );			
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
			$stukram_class = ""; 
			$stukram_categories = ""; 
			foreach ($portfolio_category as $stukram_item) {
				$stukram_class.=esc_attr($stukram_item->slug . ' ');
				$stukram_categories.='<span class="cat-divider">';
				$stukram_categories.=esc_attr($stukram_item->name . '  ');
				$stukram_categories.='</span>';
			}	
				if (has_post_thumbnail( $post->ID ) ):		
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				$stukram_image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);		
				$html .= '<div class="fancy-grid__item">';
					$html .= '<a data-cursor-icon="arrow-right" data-anim-wrap class="portfolioCard -type-1 -hover" data-barba href="'.get_the_permalink().'">';				
						$html .='<div class="portfolioCard__img">';
							$html .='<div data-anim-child="img-right '.$cover_scheme.'" class="portfolioCard__img__inner">';
								$html .='<div class="ratio ratio-3:4 bg-image js-lazy" data-bg="'.esc_url($stukram_image[0]).'"></div>';
							$html .='</div>';
						$html .='</div>';
						$html .= '<div class="portfolioCard__content pt-24">';
							$html .= '<div data-split="lines" data-anim-child="split-lines '.$animate_delay_title2.'">';
								$html .= '<p class="portfolioCard__category leading-md text-dark">'.$stukram_categories.'</p>';
							$html .= '</div>';						
							$html .= '<div data-split="lines" data-anim-child="split-lines '.$animate_delay_title.'">';
								$html .= '<h3 class="portfolioCard__title leading-md fw-500 text-2xl mt-8">'.get_the_title().'</h3>';
							$html .= '</div>';	
						$html .= '</div>';							
					$html .= '</a>';											
				$html .= '</div>';											
				endif;	
			endwhile;
			wp_reset_postdata();	
			
			$html .= '</div>';	
			if($post_pagination == "st2"){
			$html .='<div class="clear container">';			
			$html .='<div class="row clear y-gap-32 justify-content-between align-items-center layout-pt-sm">';			
			$html .= get_previous_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20"><i class="icon size-lg str-width-sm mr-8" data-feather="arrow-left-circle"></i>'.esc_html($pagination_previous).'</span>', $loop->max_num_pages );	
			$html .= get_next_posts_link( '<span class="button -icon fw-500 text-black mt-24 md:mt-24 sm:mt-20">'.esc_html($pagination_next).'<i class="icon size-lg str-width-sm ml-8" data-feather="arrow-right-circle"></i></span>', $loop->max_num_pages );
			$html .= '</div>';	
			$html .= '</div>';	
			}
		}	

	$html .= '</div>';	
			return $html;
	}
	add_shortcode('wr_vc_portfolio', 'wr_vc_portfolio_body_shortcode');
}	


?>