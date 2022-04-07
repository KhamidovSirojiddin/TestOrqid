<?php
define('STUKRAM_THEME_PATH',	get_template_directory());
define('STUKRAM_THEME_URL',		get_template_directory_uri());
require (STUKRAM_THEME_PATH . '/includes/style.php');
require (STUKRAM_THEME_PATH . '/includes/js.php');
require (STUKRAM_THEME_PATH . '/includes/color.php');
require (STUKRAM_THEME_PATH . '/includes/AfterSetupTheme.php');
require (STUKRAM_THEME_PATH . '/includes/functions.php');
require (STUKRAM_THEME_PATH . '/pagination.php');
require (STUKRAM_THEME_PATH . '/includes/ini/stukram-base.php');

if ( ! isset( $content_width ) ) $content_width = 900;	

$stukram_options = get_option('stukram');

// register nav menu
function stukram_register_menus() {
	register_nav_menus( array( 
	'top-menu' => esc_html__( 'Primary Menu','stukram' ),
	'footer-menu' => esc_html__( 'Footer Menu (Sub item not allowed.)','stukram' ),
	)
	);
}
add_action( 'after_setup_theme', 'stukram_setup' );

function stukram_setup() {
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );
	
	// Add custom editor font sizes.
	add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Small', 'stukram' ),
					'shortName' => 'S',
					'size'      => 11,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'stukram' ),
					'shortName' => 'M',
					'size'      => 12,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'stukram' ),
					'shortName' => 'L',
					'size'      => 36,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'stukram' ),
					'shortName' => 'XL',
					'size'      => 49,
					'slug'      => 'huge',
				),
			)
		);
	
	add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'Light Grey', 'stukram' ),
            'slug' => 'color-grey',
            'color' => '#fafafa',
        ),
        array(
            'name' => esc_html__( 'Black', 'stukram' ),
            'slug' => 'color-black',
            'color' => '#000',
        ),
        
    ) );
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
	add_action( 'after_setup_theme', 'stukram_lang_setup' );
	function stukram_lang_setup(){
    load_theme_textdomain('stukram', get_template_directory() . '/languages');
    }
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( "title-tag" );
	remove_theme_support( 'widgets-block-editor' );
	add_post_type_support( 'portgallery', 'post-formats' );
}
// Word Limit 
	function stukram_string_limit_words($string, $word_limit)
	{
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
	}
// Add post thumbnail functionality
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 559, 220, true ); // Normal post thumbnails
	add_image_size( 'stukram_blog_image', 800, 800, true ); // Blog Thumbnail
	add_image_size( 'stukram_blog_grid_image', 403, 504, true ); // Blog Thumbnail
	add_image_size( 'stukram_portfolio_image', 684, 506, true ); // Portfolio Thumbnail
	add_image_size( 'stukram_portfolio_image_gallery_car', 604, 400, true ); // Portfolio Thumbnail
	add_image_size( 'stukram_port_gallery_header', 762, 441, true ); //galeery header
	add_image_size( 'stukram_blog', 695, 375, true ); //blog
	
function stukram_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'stukram_move_comment_field_to_bottom' );

// How comments are displayed
function stukram_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
?>
    <<?php echo esc_attr($tag); ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>>
    <?php if ( 'div' != $args['style'] ) : ?>
	<?php endif; ?>
	<div class="comments__item-inner">
		<div class="comments__img">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, '80' ); ?>
		</div>
	    <div class="comments__body">
		    <div class="comments__header">
				<div>
					<h4><?php printf(__('%s','stukram'), get_comment_author_link()) ?></h4> 
				</div>
				<div>
					<p class="mt-4"> <?php comment_date(get_option( 'date_format')); ?></p>
				</div>	
			</div>	
			<div class="comments__text">
			    <?php comment_text() ?>
		    </div>
			<div class="comments__reply">
				<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>			
		</div>
	</div>
		
	<div class="clearfix"></div>
          <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.','stukram') ?></em>
    <br />
	<?php endif; ?>   
<?php if ( 'div' != $args['style'] ) : ?>
    
    <?php endif; ?>
<?php
        }
// create sidebar & widget area
if(function_exists('register_sidebar')) {
function stukram_theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'stukram' ),
        'id' => 'sidebar-1',
        'description' => esc_html__( 'This area is for blog widgets.', 'stukram' ),
        'before_widget' => '<div id="%1$s" class="widget widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h5 class="widget-title">', 
		'after_title'   => '</h5>'
    ) );
}
add_action( 'widgets_init', 'stukram_theme_slug_widgets_init' );

function stukram_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Page Sidebar', 'stukram' ),
        'id' => 'sidebar-2',
        'description' => esc_html__( 'This area is for page widgets.', 'stukram' ),
        'before_widget' => '<div id="%1$s" class="widget widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h5 class="widget-title">', 
		'after_title'   => '</h5>'
    ) );
}
add_action( 'widgets_init', 'stukram_widgets_init' );


}

if(function_exists('vc_set_as_theme')) vc_set_as_theme();
// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
  function requireVcExtend(){
    require_once (STUKRAM_THEME_PATH . '/extendvc/extend-vc.php');
  }

}

function stukram_my_search_form( $form ) {
$stukram_options = get_option('stukram');
if(!empty($stukram_options['translet_opt_3'])) {
$stukram_search_text = esc_html(Stukram_AfterSetupTheme::return_thme_option('translet_opt_3',''));
}
else {
$stukram_search_text ='Search..';
}
    $stukram_form = '<form role="search" method="get" id="blog-search-form" class="form-search" action="' . esc_url(home_url( '/' )) . '" >
    <label class="screen-reader-text" for="s">' . esc_html__( 'Search for:','stukram' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-input black js-pointer-small" placeholder="'. esc_attr($stukram_search_text).'" />
   <button class="search-btn black js-pointer-large" type="button"><i class="fas fa-search"></i></button>
   </form>';
 
    return $stukram_form;
}
add_filter( 'get_search_form', 'stukram_my_search_form' );

function stukram_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'stukram_excerpt_more');
function stukram_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'stukram_excerpt_length', 999 );

function stukram_submenu_classes() {
    return array('subnav-list', 'sub-menu');
}
add_action('nav_menu_submenu_css_class', 'stukram_submenu_classes');

/*removing default submit tag*/
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
/*adding action with function which handles our button markup*/
add_action('wpcf7_init', 'stukram_child_cf7_button');
/*adding out submit button tag*/
if (!function_exists('stukram_child_cf7_button')) {
function stukram_child_cf7_button() {
wpcf7_add_form_tag('submit', 'stukram_child_cf7_button_handler');
}
}

/*out button markup inside handler*/
if (!function_exists('stukram_child_cf7_button_handler')) {
function stukram_child_cf7_button_handler($tag) {
$tag = new WPCF7_FormTag($tag);
$class = wpcf7_form_controls_class($tag->type);
$atts = array();
$atts['class'] = $tag->get_class_option($class);
$atts['class'] .= ' stukram-child-custom-btn';
$atts['id'] = $tag->get_id_option();
$atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
$value = isset($tag->values[0]) ? $tag->values[0] : '';
if (empty($value)) {
$value = esc_html__('Send Message', 'stukram');
}
$atts['type'] = 'submit';
$atts = wpcf7_format_atts($atts);
$html = sprintf('<button class="button -md -black text-white">%2$s</button>', $atts, $value);
return $html;
}
}

function stukram_body_classes( $classes ) {
	if (Stukram_AfterSetupTheme::return_thme_option('enable_preloader')=='yes'){ 
    $classes[] = 'preloader-visible';
    $classes[] = '';
    } 	
    return $classes;
}
add_filter( 'body_class','stukram_body_classes' );

//Remove the unused options.    
add_action( 'after_setup_theme','stukram_remove_unused_options', 100 );
function stukram_remove_unused_options() {    
    remove_theme_support( 'custom-background' );
    remove_theme_support( 'custom-header' );
}

if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url("themes.php?page=stukram"));
}


  function document_title_separator( $sep ) {
    return "|";
  }
  add_filter( 'document_title_separator', 'document_title_separator', 10, 1 );
  
/*********************  DEBUG FUNCTION ****************************/
  if(!function_exists('pr')) {
 function pr($p, $func="print_r",$r=false)    {
  if(!$func) $func='print_r';
  $bt = debug_backtrace();
  $caller = array_shift($bt);
  $file_line = "<strong>" . $caller['file'] . "(line " . $caller['line'] . ")</strong>\n";
  if(!$r)    { //if print
   echo '<pre>';
   print_r($file_line);
   $func($p);
   echo '</pre>';
  } else { //if return
   ob_start();
   echo '<pre>';
   print_r($file_line);
   $func($p);
   echo '<pre>';
   $d = ob_get_contents();
   ob_end_clean();
   if(filter_var($r, FILTER_VALIDATE_EMAIL)) {
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($r, 'Debug Output', $d, $headers);
   }
   return $d;
  }
 }
}