<?php $stukram_options = get_option('stukram'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if(get_post_meta($post->ID,'rnr_wr_pagetype_container',true)=='st2'){ ?>

	<?php the_content();
		wp_link_pages( array(
		'before'      => '<div class="page-links">',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '%',
		'separator'   => '',
		) );
	?>
<?php } else { ?>
		<!-- section start -->
		<section class="layout-pt-pageHeader layout-pb-lg">
			<!-- container start -->
			<div class="container">
				<!-- row start -->
				<div class="row justify-content-between">			
					<div class="col-md-12">
						<div class="page-content">
						<?php the_content();
							wp_link_pages( array(
							'before'      => '<div class="page-links">',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '%',
							'separator'   => '',
							) );
						?>
						</div>
						<?php if ( comments_open() || get_comments_number() ) { ?>	
						<div class="blogPost comments">												
							<?php comments_template();?>								
						</div>
						<?php }?>						
					</div>
				</div>
			</div>
		</section>
<?php };?>
<?php endwhile; ?>
<?php wp_reset_postdata();?> 