<?php $stukram_options = get_option('stukram'); ?>
<?php
if ( post_password_required() ) {
	return;
}
?>

<?php
if ( have_comments() ) : ?>


	<?php
	global $stukram_comment_meta_text, $stukram_comment_meta_text2, $stukram_comment_meta_text3;
	if(!empty($stukram_options['translet_opt_10'])):
	$stukram_comment_meta_text= esc_html(stukram_AfterSetupTheme::return_thme_option('translet_opt_10',''));;
	else: 
	$stukram_comment_meta_text='One comment on';
	endif;
	if(!empty($stukram_options['translet_opt_11'])):
	$stukram_comment_meta_text2= esc_html(stukram_AfterSetupTheme::return_thme_option('translet_opt_11',''));;
	else: 
	$stukram_comment_meta_text2='Comment on';
	endif;
	if(!empty($stukram_options['translet_opt_12'])):
	$stukram_comment_meta_text3= esc_html(stukram_AfterSetupTheme::return_thme_option('translet_opt_12',''));;
	else: 
	$stukram_comment_meta_text3='Comments on';
	endif;
	?>		
	<div class="blogPost__content">
		<h2 class="blogPost__title text-2xl fw-600">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					
					esc_html_e( ''.$stukram_comment_meta_text.' &ldquo; %1$s &rdquo;', 'stukram' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s '.$stukram_comment_meta_text2.' &ldquo; %2$s &rdquo;', '%1$s '.$stukram_comment_meta_text3.' &ldquo; %2$s &rdquo;', $comment_count, 'comments title', 'stukram' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2>
	
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		
		<ul class="comments__list">
			
			<?php
				wp_list_comments( array(
					'callback'   => 'stukram_comment',
					'short_ping' => true,
				) );
			?>
		</ul><!-- .comment-list -->
		<div class="clearfix"></div>
		
		<?php the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php if(!empty($stukram_options['translet_opt_13'])):?><?php echo esc_html(stukram_AfterSetupTheme::return_thme_option('translet_opt_13',''));?><?php else: ?><?php esc_html_e( 'Comments are closed.', 'stukram' ); ?><?php endif;?></p>
		
	<?php
		endif; ?>
		</div>
	<?php endif; // Check for have_comments().
	?>
	<div class="respondForm">
		<div class="row no-gutters justify-content-between">
		<?php
		$stukram_args = array(
			'fields' => apply_filters(
			'comment_form_default_fields', array(
			'author' =>'<div class="comment-input custom-pad-left col-md-6 mt-32"><input id="author" class="form-input form-input_border black js-pointer-small"  placeholder="'. esc_html__('Your Name','stukram') .'*" name="author" type="text" value="' .esc_attr( $commenter['comment_author'] ) . '" size="40"/></div>',
				'email'  => '<div class="comment-input custom-pad-right col-md-6 mt-32"><input id="email" class="form-input form-input_border black js-pointer-small" placeholder="'. esc_html__('Your Email','stukram') .'*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="40"/></div>',
			)
			),
			'comment_field' => '<div class="form-checkbox custom-pad-left custom-pad-right col-12 mt-24"><textarea id="comment" class="form-input form-input_border black js-pointer-small" name="comment" cols="10" rows="9" placeholder="'. esc_html__('Your Comment','stukram') .'*" aria-required="true"></textarea></div>',
			'comment_notes_after' => '<div class="col-12 custom-pad-left custom-pad-right mt-32"><button type="submit" name="submit" id="submit" class="button -md -black text-white">'. esc_html__('Post Comment','stukram') .'</button></div>',
			'title_reply' => '<div class="comment-title-area crunchify-text">' . esc_html__( 'Leave a Reply', 'stukram' ) . '</div>'
			
		);
		comment_form($stukram_args);
		?>
		</div>
	</div>
